<?php

namespace App\Http\Controllers\Console;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AuthController extends Controller {
	// use AuthenticatesUsers;
	// protected $redirectTo = '/console/login';
	// protected function redirectTo()
	// {
	// 	if (auth()->user()->role == 'admin') {
	// 		return '/console/dashboard';
	// 	}
	// 	return $redirectTo;
	// }

	public function __construct() {
		// $this->middleware('guest')->except('logout');
		// $this->middleware('guest:admin')->except('logout');
	}

	public function showLoginForm() {
		if (Auth::guard('admin')->check()) {
			return redirect('/console/dashboard');
		}
		return view('console.auth.login');
	}

	public function login(Request $request) {
		$this->validate($request, [
			'email' => 'required|email',
			'password' => 'required',
		]);
		if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password, 'is_admin' => 1], $request->filled('remember'))) {
			$request->session()->regenerate();
			return redirect()->intended('/console/dashboard');
		}
		return back()->withInput()->with('error','Kombinasi Email dan Password tidak cocok!');
	}

	public function logout(Request $request){
		Auth::guard('admin')->logout();

		$request->session()->invalidate();

		$request->session()->regenerateToken();

		return redirect('/console/login');
	}
}
