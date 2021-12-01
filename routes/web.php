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
    return view('home',);
});

// ACARA
Route::prefix('acara')->group(function(){
    Route::get('/', function () {
        return view('acara');
    });
    Route::get('/detail', function () {
        return view('detail-acara');
    });
});

Route::get('/about', function () {
    return view('about');
});

// STAFF
Route::prefix('admin')->group(function(){
    Route::get('/', function () {
        return view('/admin/home-admin');
    });
    Route::prefix('acara')->group(function(){
        Route::get('/', function () {
            $acara = DB::table('proposal')->get();
            return view('/admin/daftar-acara', ['proposalController@view_acara']);
        });
        Route::get('/create', function () {
            return view('/admin/create-acara');
        });
        Route::get('/edit', function () {
            return view('/admin/edit-acara');
        });
    });
    Route::prefix('banner')->group(function(){
        Route::get('/edit', function () {
            return view('/admin/edit-banner');
        });
    });
});

Route::get('/create-acara', function () {
    return view('/admin/create-acara');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function (){
    return view('register');
});

Route::post('/adminRegist', "AdminsControllers@store");
Route::post('/adminLogin', "AdminsControllers@login");
Route::post('/createProposal', "AdminsControllers@createProposal");

