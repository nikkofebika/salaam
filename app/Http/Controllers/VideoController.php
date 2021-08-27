<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VideoController extends Controller {
	public function index() {
		$videos = DB::table('videos')->select('id','video_id','title','mq_thumbnail')->get();
		return view("video", ['active_menu' => 'video', 'videos' => $videos]);
	}
}