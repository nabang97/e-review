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

// Route::get('/pka', function () {
//     return view('index');
// });

Route::get('/auth','AuthController@index')->name('auth.index');
Route::post('/auth/postlogin','AuthController@postLogin')->name('auth.postlogin');

Route::get('/','LandingController@index')->name('landing.index');
Route::post('/pka','Kuisioner_pageController@index')->name('kuisioner_page.index');
Route::post('/pka/store','Kuisioner_pageController@store');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard','DashboardController@index')->name('dashboard.index');

    Route::get('/nama-diklat','NamaDiklatController@index')->name('nama_diklat.index');
    Route::post('/nama-diklat/store','NamaDiklatController@store')->name('nama_diklat.store');
    Route::patch('/nama-diklat/update','NamaDiklatController@update')->name('nama_diklat.update');
    Route::delete('/nama-diklat/delete/{id}','NamaDiklatController@delete')->name('nama_diklat.delete');

    Route::get('/jadwal-diklat','DetailDiklatController@index')->name('jadwal_diklat.index');
    Route::post('/jadwal-diklat/store','DetailDiklatController@store')->name('jadwal_diklat.store');
    Route::patch('/jadwal-diklat/update','DetailDiklatController@update')->name('jadwal_diklat.update');
    Route::delete('/jadwal-diklat/delete/{nama_diklat_id}/{tahun}','DetailDiklatController@delete')->name('jadwal_diklat.delete');

    Route::get('/responses/pka','PkaController@index')->name('pka.index');
    Route::get('/responses/pka/export','PkaController@export')->name('pka.export');

    Route::view('/responses/prajabatan','admin.responses.prajabatan');
});

Route::get('/api/nama-diklat', 'NamaDiklatController@optionByIndex');
Route::get('/api/jenis-diklat', 'JenisDiklatController@all');


