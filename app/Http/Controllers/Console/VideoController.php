<?php

namespace App\Http\Controllers\Console;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\VideoPlaylist;
use App\Models\Video;
use Illuminate\Support\Facades\DB;
use DataTables;

class VideoController extends Controller {
    public function index() {
        return view("console.videos.index", ["page_title" => "Video"]);
    }

    public function get_videos(Request $request) {
        if ($request->ajax()) {
            // $data = Video::select(['id','title','playlist_id','priority','approved_by','created_at'])->get();
            $data = DB::table('videos')
            ->leftJoin('videos', 'videos.playlist_id', '=', 'videos.playlist_id')
            ->select('videos.id','videos.title','videos.playlist_id','videos.priority','videos.approved_by','videos.created_at', DB::raw('count(videos.id) as total_videos'))->orderBy('videos.priority','desc')->groupBy('videos.id')->get();
            return Datatables::of($data)
            ->addIndexColumn()
            ->editColumn('created_at', function($data) {return date('d-m-Y H:i', strtotime($data->created_at));})
            ->editColumn('approved_by', function($data) {
                $checked = $data->approved_by !== null ? 'checked' : '';
                return '<input type="checkbox" '.$checked.' class="check_approve" data-video_id="'.$data->id.'" />';
            })
            ->addColumn('action', function($data){
                return '<a href="'.url('console/videos/'.$data->id).'" class="btn btn-info btn-xs" title="Detail"><i class="fa fa-eye"></i></a> <a href="'.route('console.videos.edit', $data->id).'" class="btn btn-warning btn-xs" title="Edit"><i class="fa fa-edit"></i></a> <form method="POST" onsubmit="return confirm(\'Hapus '.$data->title.' ?\')" action="'.route("console.videos.destroy", $data->id).'" class="d-inline"><input type="hidden" name="_token" value="'.csrf_token().'" /><input type="hidden" value="DELETE" name="_method"><button type="submit" class="btn btn-danger btn-xs" title="Hapus"><i class="fa fa-trash"></i></button></form>';
            })
            ->escapeColumns([])
            ->make(true);
        }
    }

    public function create() {
        return view('console.videos.create', ['page_title' => 'Tambah Data', 'active_menu' => 'videos']);
    }

    public function store(Request $request) {
        $request->validate([
            'playlist_id' => 'required|unique:videos,playlist_id',
            'title' => 'required|unique:videos,title',
            'meta_keywords' => 'required',
            'description' => 'required',
            'priority' => 'required|numeric',
            'is_active' => 'required',
        ]);

        $video_playlist = new Video;
        $video_playlist->playlist_id = $request->playlist_id;
        $video_playlist->title = $request->title;
        $video_playlist->seo_title = Str::slug($request->title, '-');
        $video_playlist->description = $request->description;
        $video_playlist->meta_keywords = $request->meta_keywords;
        $video_playlist->priority = intval($request->priority);
        $video_playlist->approved_by = $request->is_active == 1 ? auth()->user()->id : null;
        $video_playlist->created_by = auth()->user()->id;
        $video_playlist->save();

        return redirect('console/videos')->with('notification', $this->flash_data('success', 'Berhasil', 'Video Berhasil Ditambahkan'));
    }

    public function show($id)
    {
        //
    }

    public function edit($id) {
        $video = Video::findOrFail($id);
        return view('console.videos.edit', ['page_title' => 'Edit Data', 'active_menu' => 'videos', 'video' => $video]);
    }

    public function update(Request $request, $id) {
        $request->validate([
            'playlist_id' => 'required',
            'title' => 'required|unique:videos,title,'.$id,
            'meta_keywords' => 'required',
            'description' => 'required',
            'priority' => 'required|numeric',
            'is_active' => 'required',
        ]);

        $video_playlist = Video::findOrFail($id);
        $video_playlist->playlist_id = $request->playlist_id;
        $video_playlist->title = $request->title;
        $video_playlist->seo_title = Str::slug($request->title, '-');
        $video_playlist->description = $request->description;
        $video_playlist->meta_keywords = $request->meta_keywords;
        $video_playlist->priority = intval($request->priority);
        $video_playlist->approved_by = $request->is_active == 1 ? auth()->user()->id : null;
        $video_playlist->updated_by = auth()->user()->id;
        $video_playlist->updated_at = date('Y-m-d H:i:s');
        $video_playlist->save();
        return redirect('console/videos')->with('notification', $this->flash_data('success', 'Berhasil', 'Video Berhasil Diupdate'));
    }

    public function destroy($id) {
        Video::findOrFail($id)->delete();
        return redirect('console/videos')->with('notification', $this->flash_data('success', 'Berhasil', 'Video Berhasil Dihapus'));
    }

    public function ajax_approve_video(Request $request) {
        if ($request->ajax()) {
            $approved_by = $_POST['val'] == 1 ? auth()->user()->id : null;
            if (DB::table('videos')->where('id', $_POST['video_id'])->update(["approved_by" => $approved_by])) {
                if ($_POST['val'] == 1) {
                    return ['success'=>true, 'message'=> 'Video Approved'];
                }
                return ['success'=>false, 'message'=> 'Video Unapproved'];
            }
            return ['success'=>false, 'message'=> 'Video Unapproved'];
        }
    }
}