<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\datacontroller;
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
    return view('welcome');
});
Route::get('/buku0064',[datacontroller::Class,'buku0064']);
Route::get('/buku/cari',[datacontroller::Class,'cari']);
Route::get('/inerjoin0064',[datacontroller::Class,'innerjoin']);
Route::get('/inerjoin/cari',[datacontroller::Class,'carijoin']);