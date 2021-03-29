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

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');
Route::get('structure/{id}', 'App\Http\Controllers\HomeController@structure');
Route::get('/view', function () {
    return view('details');
});
Route::get('/view/details', function () {
    return view('Viewdetails');
});
Route::get('/feedback', function () {
    return view('feedback');
});
