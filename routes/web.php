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
    return view('welcome');
});

Route::get('/osa/manage', function () {
    return view('osa.applications');
});

Route::get('/osa/home', function () {
    return view('osa.home');
});

Route::get('/login', function () {
    return view('login');
});