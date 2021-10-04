<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackendController;

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
    return view('frontend.index');
});
Route::get('/backend/dashboard/', 'App\Http\Controllers\BackendController@home')->name('dashboard');
Route::get('/backend/dashboard/add-pornstar','App\Http\Controllers\BackendController@add_pornstar_interface')->name('add.pornstar.ui');
Route::post('/backend/dashboard/post-pornstar','App\Http\Controllers\BackendController@add_pornstar')->name('add.pornstar');