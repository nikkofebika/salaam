<?php

namespace App\Http\Controllers\Console;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\VideoPlaylist;
use Illuminate\Support\Facades\DB;
use DataTables;

class VideoPlaylistController extends Controller {
    public function index() {
        return view("console.video_playlists.index", ["page_title" => "Video Playlist"]);
    }

    public function get_video_playlists(Request $request) {
        if ($request->ajax()) {
            // $data = VideoPlaylist::select(['id','title','playlist_id','priority','approved_by','created_at'])->get();
            $data = DB::table('video_playlists')
            ->join('videos', 'video_playlists.playlist_id', '=', 'videos.playlist_id')
            ->select('video_playlists.id','video_playlists.title','video_playlists.playlist_id','video_playlists.priority','video_playlists.approved_by','video_playlists.created_at', DB::raw('count(videos.id) as total_videos'))->groupBy('video_playlists.id')
            ->get();
            return Datatables::of($data)
            ->addIndexColumn()
            // ->addColumn('total', $this->debug($data->videos))
            ->editColumn('created_at', function($data) {return date('d-m-Y H:i', strtotime($data->created_at));})
            ->editColumn('approved_by', function($data) {
                $checked = $data->approved_by !== null ? 'checked' : '';
                return '<input type="checkbox" '.$checked.' class="check_approve" data-playlist_id="'.$data->id.'" />';
            })
            ->addColumn('action', function($data){
                return '<a href="'.url('console/video_playlists/'.$data->id).'" class="btn btn-info btn-xs" title="Detail"><i class="fa fa-eye"></i></a> <a href="'.route('console.video_playlists.edit', $data->id).'" class="btn btn-warning btn-xs" title="Edit"><i class="fa fa-edit"></i></a> <form method="POST" onsubmit="return confirm(\'Hapus '.$data->title.' ?\')" action="'.route("console.video_playlists.destroy", $data->id).'" class="d-inline"><input type="hidden" name="_token" value="'.csrf_token().'" /><input type="hidden" value="DELETE" name="_method"><button type="submit" class="btn btn-danger btn-xs" title="Hapus"><i class="fa fa-trash"></i></button></form>';
            })
            ->escapeColumns([])
            ->make(true);
        }
    }

    public function create() {
        $video_playlist_types = DB::table('video_playlist_types')->get();
        return view('console.video_playlists.create', ['page_title' => 'Tambah Data', 'active_menu' => 'video_playlists', 'video_playlist_types' => $video_playlist_types]);
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'color' => 'required',
            // 'model' => 'required',
            // 'tag' => 'required',
            'location_id' => 'required|numeric',
            'specific_location' => 'required',
            'province_id' => 'required|numeric',
            'regency_id' => 'required|numeric',
            'district_id' => 'required|numeric',
            'village_id' => 'required|numeric',
            'video_playlist_type_id' => 'required|numeric',
            'find_date' => 'required|date',
            'description' => 'required',
            'images' => 'required',
            // 'images' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1048',
        ]);

        $saved_images = [];
        $images_number = 1;
        foreach ($request->images as $image) {
            if ($image->isValid()) {
                $imageName = Str::slug($request->name, '-').'-'.time().'-'.$images_number++.'.'.$image->extension();
                $dir = '/images/video_playlists/';
                if (!file_exists(public_path($dir))) {
                    mkdir(public_path($dir), 0777, true);
                    chmod(public_path($dir), 0777);
                }
                $image->move(public_path($dir), $imageName);
                $saved_images[] = $dir.$imageName;
            }
        }

        $video_playlist = new VideoPlaylist;
        $video_playlist->user_id = auth()->guard('admin')->user()->id;
        $video_playlist->name = $request->name;
        $video_playlist->color = $request->color;
        $video_playlist->model = $request->model;
        $video_playlist->tag = $request->tag;
        $video_playlist->location_id = $request->location_id;
        $video_playlist->specific_location = $request->specific_location;
        $video_playlist->province_id = $request->province_id;
        $video_playlist->regency_id = $request->regency_id;
        $video_playlist->district_id = $request->district_id;
        $video_playlist->village_id = $request->village_id;
        $video_playlist->video_playlist_type_id = $request->video_playlist_type_id;
        $video_playlist->find_date = $request->find_date;
        $video_playlist->description = $request->description;
        $video_playlist->images = json_encode($saved_images);
        $video_playlist->save();

        return redirect('console/video_playlists')->with('notification', $this->flash_data('success', 'Berhasil', 'Video Playlist Berhasil Ditambahkan'));
    }

    public function show($id)
    {
        //
    }

    public function edit($id) {
        $video_playlist = VideoPlaylist::findOrFail($id);
        $provinces = DB::table('provinces')->get();
        $regencies = DB::table('regencies')->where("province_id",$video_playlist->province_id)->get();
        $districts = DB::table('districts')->where("regency_id",$video_playlist->regency_id)->get();
        $villages = DB::table('villages')->where("district_id",$video_playlist->district_id)->get();
        $locations = DB::table('locations')->get();
        $video_playlist_types = DB::table('video_playlist_types')->get();
        return view('console.video_playlists.edit', ['page_title' => 'Edit Data', 'active_menu' => 'video_playlists', 'video_playlist' => $video_playlist, 'provinces' => $provinces, 'regencies' => $regencies, 'districts' => $districts, 'villages' => $villages, 'locations' => $locations, 'video_playlist_types' => $video_playlist_types]);
    }

    public function update(Request $request, $id) {
        $request->validate([
            'name' => 'required|unique:video_playlists,name,'.$id,
            'color' => 'required',
            'location_id' => 'required|numeric',
            'specific_location' => 'required',
            'province_id' => 'required|numeric',
            'regency_id' => 'required|numeric',
            'district_id' => 'required|numeric',
            'village_id' => 'required|numeric',
            'video_playlist_type_id' => 'required|numeric',
            'find_date' => 'required|date',
            'description' => 'required',
        ]);

        $video_playlist = VideoPlaylist::findOrFail($id);
        if ($request->has('images') && count($request->images) > 0) {
            $saved_images = [];
            $images_number = 1;
            foreach ($request->images as $image) {
                if ($image->isValid()) {
                    $imageName = Str::slug($request->name, '-').'-'.time().'-'.$images_number++.'.'.$image->extension();
                    $dir = '/images/video_playlists/';
                    if (!file_exists(public_path($dir))) {
                        mkdir(public_path($dir), 0777, true);
                        chmod(public_path($dir), 0777);
                    }
                    // unlink(public_path($video_playlist->image));
                    $image->move(public_path($dir), $imageName);
                    $saved_images[] = $dir.$imageName;
                }
            }

            foreach (json_decode($video_playlist->images, true) as $image) {
                unlink(public_path($image));
            }
        }

        $video_playlist->user_id = auth()->guard('admin')->user()->id;
        $video_playlist->name = $request->name;
        $video_playlist->color = $request->color;
        $video_playlist->model = $request->model;
        $video_playlist->tag = $request->tag;
        $video_playlist->location_id = $request->location_id;
        $video_playlist->specific_location = $request->specific_location;
        $video_playlist->province_id = $request->province_id;
        $video_playlist->regency_id = $request->regency_id;
        $video_playlist->district_id = $request->district_id;
        $video_playlist->village_id = $request->village_id;
        $video_playlist->video_playlist_type_id = $request->video_playlist_type_id;
        $video_playlist->find_date = $request->find_date;
        $video_playlist->description = $request->description;
        if ($request->has('images') && count($request->images) > 0) {
            $video_playlist->images = json_encode($saved_images);
        }
        $video_playlist->updated_at = date('Y-m-d H:i:s');
        $video_playlist->save();
        return redirect('console/video_playlists')->with('notification', $this->flash_data('success', 'Berhasil', 'Video Playlist Berhasil Diupdate'));
    }

    public function destroy($id) {
        $video_playlist = VideoPlaylist::findOrFail($id);
        // if (pathinfo($video_playlist->image, PATHINFO_FILENAME) !== 'sample_video_playlist') {
        //     unlink(public_path($video_playlist->image));
        // }
        foreach (json_decode($video_playlist->images, true) as $img) {
            if (file_exists(public_path($img))) {
                unlink(public_path($img));
            }
        }
        $video_playlist->delete();
        return redirect('console/video_playlists')->with('notification', $this->flash_data('success', 'Berhasil', 'Video Playlist Berhasil Dihapus'));
    }

    public function ajax_approve_video_playlist(Request $request) {
        if ($request->ajax()) {
            $approved_by = $_POST['val'] == 1 ? auth()->user()->id : null;
            if (DB::table('video_playlists')->where('id', $_POST['playlist_id'])->update(["approved_by" => $approved_by])) {
                if ($_POST['val'] == 1) {
                    return ['success'=>true, 'message'=> 'Playlist Approved'];
                }
                return ['success'=>false, 'message'=> 'Playlist Unapproved'];
            }
            return ['success'=>false, 'message'=> 'Playlist Unapproved'];
        }
    }
}