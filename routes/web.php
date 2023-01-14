<?php

use App\Http\Controllers\Authentications\Admin\AdminAuth;
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

$controller_path = 'App\Http\Controllers';

// Main/Landing Page Route
Route::get('/', $controller_path . '\pages\LandingPage@index')->name('landing-page');


// user home
Route::get('/dashboard', $controller_path . '\pages\user\UserHome@index')->name('user-home');

Route::get('/progress-note', $controller_path . '\Progress@index')->name('progress');


// pages
Route::get('/pages/misc-error', $controller_path . '\pages\MiscError@index')->name('pages-misc-error');





// authentication
// admin
Route::group(['prefix' => 'owner290639'], function () {

  // login
  Route::get('/login', [AdminAuth::class, 'get_login'])->name('admin-login');
  Route::post('/login', [AdminAuth::class, 'post_login'])->name('admin-post-login');
  Route::get('/', function () {
    return redirect()->route('admin-home');
  });

  Route::group(['middleware' => 'adminauth'], function () {
    // logged
    // admin home
    Route::get('/dashboard', [AdminHome::class, 'index'])->name('admin-home');
  });
});



// authentication
Route::get('/login', $controller_path . '\authentications\LoginBasic@index')->name('user-login');
Route::get('/register', $controller_path . '\authentications\RegisterBasic@index')->name('user-register');
