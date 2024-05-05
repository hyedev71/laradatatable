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

Route::get('/', function () {
    //return view('welcome');
	return view('datatable.index');
});

Route::controller(App\Http\Controllers\ClientSide::class)->group(function() {
	Route::get('/datatable/clientside', 'index');
});

Route::controller(App\Http\Controllers\ServerSide::class)->group(function() {
	Route::get('/datatable/serverside', 'index');
	Route::get('/datatable/serverside/get/data', 'getData');
});
