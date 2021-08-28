<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PendakwahController extends Controller {
	public function index() {
		$pendakwah = DB::table('speakers')->select('id','name','image','description')->paginate(4);
		return view("pendakwah.index", ['active_menu' => 'pendakwah', 'pendakwah' => $pendakwah]);
	}

	public function detail($id, $name) {
		$pendakwah = \App\Models\Speaker::findOrFail($id);
		return view("pendakwah.detail", ['active_menu' => 'pendakwah', 'pendakwah' => $pendakwah]);
	}
}