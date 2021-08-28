<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller {
    public function index(){
    	$pendakwah = DB::table('speakers')->select('id','name','image','description')->limit(4)->get();
    	return view("index", ['active_menu' => 'index', 'pendakwah' => $pendakwah]);
    }

    public function about(){
    	return view("about", ['active_menu' => 'about']);
    }

    public function contact_us(){
    	return view("contact_us", ['active_menu' => 'contact-us']);
    }
}
