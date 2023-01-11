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

$controller_path = 'App\Http\Controllers';

// Main Page Route
// Route::get('/', $controller_path . '\pages\HomePage@index')->name('pages-home');
Route::get('/owner29', $controller_path . '\pages\HomePage@index')->name('admin-home');


Route::get('/', $controller_path . '\pages\UserHome@index')->name('user-home');

// Route::get('/page-2', $controller_path . '\pages\Page2@index')->name('pages-page-2');

// pages
Route::get('/pages/misc-error', $controller_path . '\pages\MiscError@index')->name('pages-misc-error');

// authentication
// admin
Route::get('/owner29/login', $controller_path . '\authentications\LoginBasic@index')->name('admin-login');
Route::get('/owner29/register', $controller_path . '\authentications\RegisterBasic@index')->name('admin-register');


// authentication
Route::get('/login', $controller_path . '\authentications\LoginBasic@index')->name('user-login');
Route::get('/register', $controller_path . '\authentications\RegisterBasic@index')->name('user-register');
