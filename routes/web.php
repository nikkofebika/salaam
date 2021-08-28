<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideoController;

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

Route::get('/', [App\Http\Controllers\IndexController::class, 'index']);
Route::get('pendakwah', [App\Http\Controllers\PendakwahController::class, 'index']);
Route::get('pendakwah/{id}/{name}', [App\Http\Controllers\PendakwahController::class, 'detail']);
Route::get('about', [App\Http\Controllers\IndexController::class, 'about']);
Route::get('contact-us', [App\Http\Controllers\IndexController::class, 'contact_us']);
Route::get('video', [VideoController::class, 'index']);
Route::get('video/get_playlist_item/{playlist_id}/{playlist_seo_title}', [VideoController::class, 'get_playlist_item']);
Route::get('video/click_video/{videoId}', [VideoController::class, 'click_video']);
Route::get('video/{playlist_seo_title}/{video_seo_title?}', [VideoController::class, 'video_playlist']);
Route::get('video/ajax_load_more_video/{offset}/{playlist_seo_title}/{video_seo_title}', [VideoController::class, 'ajax_load_more_video']);
// Route::get('video/{playlistId}/playlist/{videoId}/play', [VideoController::class, 'click_video']);

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

	Route::get('users/list', [App\Http\Controllers\Console\UserController::class, 'get_users'])->name('users.list');
	Route::post('users/ajax_approve_user', [App\Http\Controllers\Console\UserController::class, 'ajax_approve_user']);

	Route::get('video_playlists/list', [App\Http\Controllers\Console\VideoPlaylistController::class, 'get_video_playlists'])->name('video_playlists.list');
	Route::post('video_playlists/ajax_approve_video_playlist', [App\Http\Controllers\Console\VideoPlaylistController::class, 'ajax_approve_video_playlist']);

	Route::get('videos/list', [App\Http\Controllers\Console\VideoController::class, 'get_videos'])->name('videos.list');
	Route::post('videos/ajax_approve_video', [App\Http\Controllers\Console\VideoController::class, 'ajax_approve_video']);

	Route::get('pendakwah/list', [App\Http\Controllers\Console\PendakwahController::class, 'get_pendakwah'])->name('pendakwah.list');
	Route::post('pendakwah/ajax_approve_pendakwah', [App\Http\Controllers\Console\PendakwahController::class, 'ajax_approve_pendakwah']);

	Route::resources([
		'users' => App\Http\Controllers\Console\UserController::class,
		'video_playlists' => App\Http\Controllers\Console\VideoPlaylistController::class,
		'videos' => App\Http\Controllers\Console\VideoController::class,
		'pendakwah' => App\Http\Controllers\Console\PendakwahController::class,
	]);
});