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
            $data = DB::table('videos')
            ->leftJoin('video_playlists', 'videos.playlist_id', '=', 'video_playlists.playlist_id')
            ->select('videos.id','videos.title','videos.video_id','videos.playlist_id','videos.mq_thumbnail','videos.approved_by','videos.click','videos.tgl_upload','videos.created_at','video_playlists.title as playlist')->get();
            return Datatables::of($data)
            ->addIndexColumn()
            ->editColumn('title', function($data) {return '
                <div class="option_area">
                <strong><a href="https://www.youtube.com/watch?v='.$data->video_id.'&list='.$data->playlist_id.'" target="_blank" title="Lihat Video">'.$data->title.'</a></strong>
                <div class="options">
                <small>
                <a href="'.url('console/videos/'.$data->id).'" title="Detail">Detail</a> | <a href="'.route('console.videos.edit', $data->id).'" title="Edit">Edit</a> | <form method="POST" onsubmit="return confirm(\'Hapus '.$data->title.' ?\')" action="'.route("console.videos.destroy", $data->id).'" class="d-inline"><input type="hidden" name="_token" value="'.csrf_token().'" /><input type="hidden" value="DELETE" name="_method"><button type="submit" class="btn btn-danger btn-xs" title="Hapus">Hapus</button>
                </form>
                </small>
                </div>
                </div>';})
            ->editColumn('mq_thumbnail', function($data) {return '<a href="'.asset($data->mq_thumbnail).'" target="_blank"><img src="'.asset($data->mq_thumbnail).'" width="100"/></a>';})
            ->editColumn('playlist', function($data) {return '<strong>'.$data->playlist.'</strong>';})
            ->editColumn('created_at', function($data) {return date('d-m-Y H:i', strtotime($data->created_at));})
            ->editColumn('approved_by', function($data) {
                $checked = $data->approved_by !== null ? 'checked' : '';
                return '<input type="checkbox" '.$checked.' class="check_approve" data-video_id="'.$data->id.'" />';
            })
            ->escapeColumns([])
            ->make(true);
        }
    }

    public function create() {
        $playlists = VideoPlaylist::select('playlist_id','title')->whereNotNull('approved_by')->get();
        return view('console.videos.create', ['page_title' => 'Tambah Data', 'active_menu' => 'videos', 'playlists' => $playlists]);
    }

    public function store(Request $request) {
        $request->validate([
            'playlist_id' => 'required',
            'video_id' => 'required|unique:videos,video_id',
            'title' => 'required|unique:videos,title',
            'tgl_upload' => 'required',
            'description' => 'required',
            'meta_keywords' => 'required',
            'is_active' => 'required',
        ]);

        $video = new Video;
        $video->playlist_id = $request->playlist_id;
        $video->video_id = $request->video_id;
        $video->title = $request->title;
        $video->seo_title = Str::slug($request->title, '-');
        $video->mq_thumbnail = 'https://i.ytimg.com/vi/'.$request->video_id.'/mqdefault.jpg';
        $video->hq_thumbnail = 'https://i.ytimg.com/vi/'.$request->video_id.'/hqdefault.jpg';
        $video->tgl_upload = $request->tgl_upload;
        $video->description = $request->description;
        $video->meta_keywords = $request->meta_keywords;
        $video->approved_by = $request->is_active == 1 ? auth()->user()->id : null;
        $video->duration = 350;
        $video->created_by = auth()->user()->id;
        $video->save();

        return redirect('console/videos')->with('notification', $this->flash_data('success', 'Berhasil', 'Video Berhasil Ditambahkan'));
    }

    public function show($id)
    {
        //
    }

    public function edit($id) {
        $video = Video::findOrFail($id);
        $playlists = VideoPlaylist::select('playlist_id','title')->whereNotNull('approved_by')->get();
        return view('console.videos.edit', ['page_title' => 'Edit Data', 'active_menu' => 'videos', 'video' => $video, 'playlists' => $playlists]);
    }

    public function update(Request $request, $id) {
        $request->validate([
            'playlist_id' => 'required',
            'video_id' => 'required|unique:videos,video_id,'.$id,
            'title' => 'required|unique:videos,title,'.$id,
            'tgl_upload' => 'required',
            'description' => 'required',
            'meta_keywords' => 'required',
            'is_active' => 'required',
        ]);

        $video = Video::findOrFail($id);
        $video->playlist_id = $request->playlist_id;
        $video->video_id = $request->video_id;
        $video->title = $request->title;
        $video->seo_title = Str::slug($request->title, '-');
        $video->mq_thumbnail = 'https://i.ytimg.com/vi/'.$request->video_id.'/mqdefault.jpg';
        $video->hq_thumbnail = 'https://i.ytimg.com/vi/'.$request->video_id.'/hqdefault.jpg';
        $video->tgl_upload = $request->tgl_upload;
        $video->description = $request->description;
        $video->meta_keywords = $request->meta_keywords;
        $video->approved_by = $request->is_active == 1 ? auth()->user()->id : null;
        $video->duration = 350;
        $video->updated_by = auth()->user()->id;
        $video->updated_at = date('Y-m-d H:i:s');
        $video->save();
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