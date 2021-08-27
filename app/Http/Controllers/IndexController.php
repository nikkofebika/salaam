<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller {
    public function index(){
    	$pendakwah = DB::table('speakers')->select('id','name','image','description')->limit(4)->get();
    	return view("index", ['active_menu' => 'index', 'pendakwah' => $pendakwah]);
    }
}
