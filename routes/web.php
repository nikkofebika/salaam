<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	return view('index');
});

Route::get('privacy-policy', function () {
	return "PRIVACY POLICY PAGE";
});

Route::get('terms-of-service', function () {
	return "TERMS OF SERVICE";
});

// Route::get('/console/login', [App\Http\Controllers\Console\AuthController::class, 'showLoginForm'])->name('console.login');
// Route::post('/console/login_admin', [App\Http\Controllers\Console\AuthController::class, 'login']);

Route::get('/console/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('console.login');
Route::post('/console/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('console.login');
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function () {
	Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
});

Route::group(['prefix' => 'console', 'as' => 'console.', 'middleware' => 'auth'], function () {
	Route::post('logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
	Route::get('dashboard', [App\Http\Controllers\Console\DashboardController::class, 'index']);

	Route::get('users/list', [App\Http\Controllers\Console\UserController::class, 'getUsers'])->name('users.list');
	Route::post('users/ajax_active_user', [App\Http\Controllers\Console\UserController::class, 'ajax_active_user']);

	Route::get('video_playlists/list', [App\Http\Controllers\Console\VideoPlaylistController::class, 'get_video_playlists'])->name('video_playlists.list');
	Route::post('video_playlists/ajax_approve_video_playlist', [App\Http\Controllers\Console\VideoPlaylistController::class, 'ajax_approve_video_playlist']);

	Route::get('locations', [App\Http\Controllers\Console\LocationController::class, 'index']);
	Route::get('locations/list', [App\Http\Controllers\Console\LocationController::class, 'get_locations'])->name('locations.list');
	Route::post('locations/store', [App\Http\Controllers\Console\LocationController::class, 'store'])->name('locations.store');
	Route::post('locations/destroy', [App\Http\Controllers\Console\LocationController::class, 'destroy']);

	Route::get('item_types', [App\Http\Controllers\Console\ItemTypeController::class, 'index']);
	Route::get('item_types/list', [App\Http\Controllers\Console\ItemTypeController::class, 'get_item_types'])->name('item_types.list');
	Route::post('item_types/store', [App\Http\Controllers\Console\ItemTypeController::class, 'store'])->name('item_types.store');
	Route::post('item_types/destroy', [App\Http\Controllers\Console\ItemTypeController::class, 'destroy']);

	Route::resources([
		'users' => App\Http\Controllers\Console\UserController::class,
		'video_playlists' => App\Http\Controllers\Console\VideoPlaylistController::class,
	]);
});