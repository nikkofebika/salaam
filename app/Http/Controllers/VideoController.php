<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VideoController extends Controller {
	public function index() {
		$videos = DB::table('videos')->select('id','name','image','description')->get();
		return view("video", ['videos' => $videos]);
	}
}