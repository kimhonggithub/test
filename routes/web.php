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

Route::get('/welcome', function () {
    return view('welcome');
});
// Testing
Route::get('/test', function () {
    return view('Testing');
});


// ---------------Pages----------------------------
Route::get('/home', function () {
    return view('Pages.Home');
});
Route::get('/service', function () {
    return view('Pages.service');
});
Route::get('/company', function () {
    return view('Pages.company');
});
Route::get('/contact-us', function () {
    return view('Pages.contactus');
});

// acount setting
Route::get('/acc-set', function () {
    return view('Pages.AccountSetting');
});


