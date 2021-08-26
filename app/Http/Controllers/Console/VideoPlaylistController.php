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
            ->leftJoin('videos', 'video_playlists.playlist_id', '=', 'videos.playlist_id')
            ->select('video_playlists.id','video_playlists.title','video_playlists.playlist_id','video_playlists.priority','video_playlists.approved_by','video_playlists.created_at', DB::raw('count(videos.id) as total_videos'))->orderBy('video_playlists.priority','desc')->groupBy('video_playlists.id')->get();
            return Datatables::of($data)
            ->addIndexColumn()
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
        return view('console.video_playlists.create', ['page_title' => 'Tambah Data', 'active_menu' => 'video_playlists']);
    }

    public function store(Request $request) {
        $request->validate([
            'playlist_id' => 'required|unique:video_playlists,playlist_id',
            'title' => 'required|unique:video_playlists,title',
            'meta_keywords' => 'required',
            'description' => 'required',
            'priority' => 'required|numeric',
            'is_active' => 'required',
        ]);

        $video_playlist = new VideoPlaylist;
        $video_playlist->playlist_id = $request->playlist_id;
        $video_playlist->title = $request->title;
        $video_playlist->seo_title = Str::slug($request->title, '-');
        $video_playlist->description = $request->description;
        $video_playlist->meta_keywords = $request->meta_keywords;
        $video_playlist->priority = intval($request->priority);
        $video_playlist->approved_by = $request->is_active == 1 ? auth()->user()->id : null;
        $video_playlist->created_by = auth()->user()->id;
        $video_playlist->save();

        return redirect('console/video_playlists')->with('notification', $this->flash_data('success', 'Berhasil', 'Video Playlist Berhasil Ditambahkan'));
    }

    public function show($id)
    {
        //
    }

    public function edit($id) {
        $playlist = VideoPlaylist::findOrFail($id);
        return view('console.video_playlists.edit', ['page_title' => 'Edit Data', 'active_menu' => 'video_playlists', 'playlist' => $playlist]);
    }

    public function update(Request $request, $id) {
        $request->validate([
            'playlist_id' => 'required|unique:video_playlists,playlist_id,'.$id,
            'title' => 'required|unique:video_playlists,title,'.$id,
            'meta_keywords' => 'required',
            'description' => 'required',
            'priority' => 'required|numeric',
            'is_active' => 'required',
        ]);

        $video_playlist = VideoPlaylist::findOrFail($id);
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
        return redirect('console/video_playlists')->with('notification', $this->flash_data('success', 'Berhasil', 'Video Playlist Berhasil Diupdate'));
    }

    public function destroy($id) {
        VideoPlaylist::findOrFail($id)->delete();
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