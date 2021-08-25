<?php

namespace App\Controllers;

class Index extends BaseController {
	public function index() {
		return view('index');
	}

	public function contact_us() {
		return view('contact_us');
	}

	public function about() {
		return view('about');
	}
}
