<?php

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
    return view('accueilunsigned');
});
Route::get('/signed', function () {
    return view('accueilsigned');
});
Route::get('/cours/reseaux/token_ring', function () {
    return view('courssigned');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/cours', function () {
    return view('unsignedcours');
});
Route::get('/cours_signed', function () {
    return view('vcours');
});

Route::get('/eva', function () {
    return view('eva');
});

Route::get('/uneva', function () {
    return view('uneva');
});

Route::get('/add_cours', function () {
    return view('addcours');
});
Route::get('/contact_us', function () {
    return view('contact_us');
});

Route::get('/lstcours', function () {
    return view('lstcours');
});

Route::get('/nores', function () {
    return view('nores');
});
Route::get('/mesinfo', function () {
    return view('mesinfo');
});
Route::get('/pwd', function () {
    return view('pwdmodiff');
});