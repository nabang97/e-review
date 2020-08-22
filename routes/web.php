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

Route::get('/','LandingController@index')->name('landing.index');
Route::post('/pka','Kuisioner_pageController@index')->name('kuisioner_page.index');
Route::post('/pka/store','Kuisioner_pageController@store');
Route::get('/api/nama-diklat', 'NamaDiklatController@optionByIndex');
Route::get('/dashboard','DashboardController@index')->name('dashboard.index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

