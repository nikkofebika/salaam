<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PendakwahController extends Controller {
	public function index() {
		$pendakwah = DB::table('speakers')->select('id','name','image','description')->get();
		return view("pendakwah", ['pendakwah' => $pendakwah]);
	}
}
