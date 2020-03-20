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

Route::group(['middleware' => ['islogout']], function () {
    Route::get('/', function () {
        return view('landing');
    });
    Route::get('/login', function () {
        return view('login');
    });
    Route::post('/login', 'AuthController@login');
    Route::get('/register', function () {
        return view('register');
    });
    Route::post('/register', 'AuthController@register');
});

Route::group(['middleware' => ['islogin']], function () {
    Route::get('/home', 'HomeController@home');
    Route::get('/pertemuan/{id_pertemuan}', 'HomeController@pertemuan');
    Route::get('/kuis/{id_pertemuan}', 'HomeController@kuis');

    Route::group(['middleware' => ['isAdmin']], function () {
        Route::get('/admin', 'AdminController@administrator');
        Route::post('/admin/siswa', 'AdminDataController@addSiswa');
        Route::get('/admin/siswa/{siswa}', 'AdminDataController@getSiswaById');
        Route::put('/admin/siswa/{siswa}', 'AdminDataController@editSiswa');
        Route::delete('/admin/siswa/{siswa}', 'AdminDataController@deleteSiswa');
        Route::post('/admin/pertemuan', 'AdminDataController@addPertemuan');
        Route::get('/admin/pertemuan/{id_pertemuan}', 'AdminController@pertemuanDetail');
        Route::get('/admin/pertemuan/{pertemuan}/edit', 'AdminDataController@getPertemuanById');
        Route::put('/admin/pertemuan/{pertemuan}/edit', 'AdminDataController@editPertemuan');
        Route::delete('/admin/pertemuan/{pertemuan}', 'AdminDataController@deletePertemuan');
        Route::post('/admin/hadir', 'AdminController@hadir');
    });

    Route::get('/logout', 'AuthController@logout');
});

// Route::fallback(function () {
//     return view('landing');
// });
