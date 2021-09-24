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

Route::get('/osa/apps', function () {
    return view('osa.applications');
});

Route::get('/master', function () {
    return view('layout.master');
});

Route::get('/osa/home', function () {
    return view('osa.home');
});

Route::get('/org/home', function () {
    return view('org.home');
});

Route::get('/org/apps', function () {
    return view('org.applications');
});

Route::get('/org/manage', function () {
    return view('org.manage');
});

Route::get('/student/home', function () {
    return view('student.home');
});

Route::get('/student/profile', function () {
    return view('student.profile');
});

Route::get('/student/register', function () {
    return view('student.registration');
});

Route::get('/student/evals', function () {
    return view('student.evals');
});

Route::get('/cardinalconnect/login', function () {
    return view('layouts.login');
});

Route::get('/login', function () {
    return view('login');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
