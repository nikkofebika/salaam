<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VideoController extends Controller {
	public function index() {
		$latest_videos = DB::table('videos')->select('id','video_id','title','seo_title','mq_thumbnail')->whereNotNull('approved_by')->orderByDesc('videos.tgl_upload')->limit(7)->get();
		

		$playlist = DB::table('video_playlists')->select('title','seo_title','playlist_id')->whereNotNull('approved_by')->orderBy('priority','asc')->get();
		// if (cache('FEATURED_VIDEO')) {
		// 	$data['headline'] = cache('FEATURED_VIDEO');
		// 	foreach ($all_yt_videos as $key => $vid) {
		// 		if ($data['headline']['video_id'] == $vid['video_id']) {
		// 			unset($data['all_videos'][$key]);
		// 		}
		// 	}
		// } else {
		// 	$data['headline'] = $all_yt_videos[0];
		// 	unset($data['all_videos'][0]);
		// }
		return view("video.index", ['active_menu' => 'video', 'latest_videos' => $latest_videos, 'playlist' => $playlist]);
	}

	public function get_playlist_item($playlist_id, $playlist_seo_title){
		$videos = DB::table('videos')->select('playlist_id','video_id','title','seo_title','mq_thumbnail')->where('playlist_id',$playlist_id)->whereNotNull('approved_by')->orderByDesc('videos.tgl_upload')->limit(3)->get();
		
		$html = '';
		foreach ($videos as $v) {
			$html .= '<div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">';
			$html .= '<div class="member">';
			$html .= '<div class="yt_wrapper">';
			$html .= '<img src="'.$v->mq_thumbnail.'" class="w-100 play-video-'.$playlist_id.'" alt="'.$v->title.'" data-video-id="'.$v->video_id.'">';
			$html .= '<img class="play-btn play-video-'.$playlist_id.'" src="'.asset('assets/img/icons/yt-button.svg').'" alt="Play button" width="70" data-video-id="'.$v->video_id.'">';
			$html .= '</div>';
			$html .= '<div class="member-info">';
			$html .= '<a href="'.url('/video/'.$playlist_seo_title.'/'.$v->seo_title).'"><p style="font-weight: 700; color: #424143;">'.$v->title.'</p></a>';
			$html .= '</div>';
			$html .= '</div>';
			$html .= '</div>';
		}
		$html .= '<script>$(".play-video-'.$playlist_id.'").modalVideo();</script>';
		die($html);
	}

	public function click_video($video_id) {
		DB::table('videos')->where('video_id', $video_id)->increment('click');
	}

	public function video_playlist($playlist_seo_title, $seo_title = null) {
		$limit = 7;
		$playlist = null;
		$selected_video = null;
		if ($playlist_seo_title != 'terbaru') {
			$playlist = DB::table('video_playlists')->select('title','seo_title','playlist_id')->where('seo_title', $playlist_seo_title)->whereNotNull('approved_by')->orderBy('priority','asc')->first();
		}

		if ($seo_title != null) {
			$limit = 6;
			$selected_video = DB::table('videos')->select('id','video_id','title','seo_title','mq_thumbnail','description','tgl_upload')->where('seo_title', $seo_title)->first();
		}

		if ($playlist == null) {
			$latest_videos = DB::table('videos')->select('id','video_id','title','seo_title','mq_thumbnail','description','tgl_upload')->where('seo_title', '!=', $seo_title)->whereNotNull('approved_by')->orderByDesc('videos.tgl_upload')->limit($limit)->get();
		} else {
			$latest_videos = DB::table('videos')->select('videos.id','videos.video_id','videos.title','videos.seo_title','videos.mq_thumbnail','videos.description','videos.tgl_upload')->where('videos.seo_title', '!=', $seo_title)->join('video_playlists', 'videos.playlist_id', '=', 'video_playlists.playlist_id')->where('video_playlists.seo_title', $playlist_seo_title)->whereNotNull('videos.approved_by')->orderByDesc('videos.tgl_upload')->limit($limit)->get();
		}
		// $this->debug($selected_video);
		// $this->debug($latest_videos);die;
		return view("video.terbaru", ['active_menu' => 'video', 'latest_videos' => $latest_videos, 'playlist' => $playlist, 'selected_video' => $selected_video]);
	}

	public function ajax_load_more_video($offset, $playlist_name, $video_id='') {
		if ($playlist_name == 'terbaru') {
			$videos = DB::table('videos')->select('id','video_id','title','seo_title','mq_thumbnail','description','tgl_upload')->where('video_id', '!=', $video_id)->orderByDesc('videos.tgl_upload')->offset($offset)->limit(6)->get();
		} else {
			$videos = DB::table('videos')->join('video_playlists', 'videos.playlist_id', '=', 'video_playlists.playlist_id')->select('videos.id','videos.video_id','videos.title','videos.seo_title','videos.mq_thumbnail','videos.description','videos.tgl_upload')->where('video_playlists.seo_title', $playlist_name)->where('videos.video_id', '!=', $video_id)->orderByDesc('videos.tgl_upload')->offset($offset)->limit(6)->get();
		}
		// $this->debug($videos);die;
		$html = '';
		if (count($videos) > 0) {
			foreach ($videos as $v) {
				$html .='<div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">';
				$html .='<div class="member">';
				$html .='<a href="'.url('/video/terbaru/'.$v->seo_title).'" class="yt_wrapper">';
				$html .='<img src="'.asset($v->mq_thumbnail).'" class="w-100" alt="'.$v->title.'">';
				$html .='<img class="play-btn" src="'.asset('assets/img/icons/yt-button.svg').'" alt="Play button" width="70">';
				$html .='</a>';
				$html .='<div class="member-info">';
				$html .='<a href="'.url('/video/terbaru/'.$v->seo_title).'"><p style="font-weight: 700; color: #424143;">'.$v->title.'</p></a>';
				$html .='</div>';
				$html .='</div>';
				$html .='</div>';
			}
			return response()->json(['success'=>true,'html'=>$html]);
		}
		return response()->json(['success'=>false,'html'=>$html]);
	}
}