<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/admin', function () {
    return view('admin/index');
});

Route::get('/petugas', function () {
    return view('petugas/index');
});

Route::get('/login', function () {
    return view('login/index');
});

Route::get('/', function () {
    return view('welcome');
});
