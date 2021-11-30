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
    return view('home');
});

Route::get('/acara', function () {
    return view('acara');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/detail-acara', function () {
    return view('detail-acara');
});

// STAFF
Route::prefix('admin')->group(function(){
	Route::get('/daftar-acara', function () {
        return view('/admin/daftar-acara');
    });
    
    Route::get('/create-acara', function () {
        return view('/admin/create-acara');
    });

    Route::get('/edit-acara', function () {
        return view('/admin/edit-acara');
    });

    Route::get('/edit-banner', function () {
        return view('/admin/edit-banner');
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
