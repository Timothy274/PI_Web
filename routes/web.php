<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
Route::get('/', function() {
    return view('home.utama');
});
Route::get('/menu', function() {
    return view('home.menu');
});
Route::get('/promo', function() {
    return view('home.promo');
});
Route::get('/contact', function() {
    return view('home.contact');
});

//user
Route::get('/profile', function () {
    return view('user.dashboard');
});

Route::get('/cart', function () {
    return view('home.cart');
});

Route::get('/profile/riwayat', function () {
    return view('user.riwayat');
});

Route::get('/profile/cart', function () {
    return view('user.cart');
});

Route::get('/profile/setting', function () {
    return view('user.setting');
});

//admin
Route::get('/admin', function () {
    return view('admin.dashboard');
});

Route::get('/admin/news', function () {
    return view('admin.news');
});

Route::get('/admin/list', function () {
    return view('admin.listuser');
});

Route::get('/admin/totalpenjualan', function () {
    return view('admin.totalpen');
});

Route::get('/admin/pemesanan', function () {
    return view('admin.pesanan');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
