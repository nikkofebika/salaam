<?php

namespace App\Http\Controllers\Console;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller {
	public function index(){
		$items = DB::table('items')->count();
		return view('console.dashboard.index', ['page_title' => 'Dashboard', 'active_menu' => 'dashboard', 'items' => $items]);
	}
}
