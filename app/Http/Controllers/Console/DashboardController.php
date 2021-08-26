<?php

namespace App\Http\Controllers\Console;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller {
	public function index(){
		$admins = DB::table('users')->count();
		$videos = DB::table('videos')->count();
		$video_playlists = DB::table('video_playlists')->count();
		return view('console.dashboard.index', ['page_title' => 'Dashboard', 'active_menu' => 'dashboard', 'admins' => $admins, 'videos' => $videos, 'video_playlists' => $video_playlists]);
	}
}
