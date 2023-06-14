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
    return view('auth.login');
})->name('login');

Route::get('/reset-password', function () {
    return view('auth.reset-password');
})->name('password.request');

Route::get('/reset-password-alert', function () {
    return view('auth.reset-password-alert');
})->name('password.alert');

Route::get('/change-password', function () {
    $token = false;
    if ($token) {
        return view('auth.change-password');
    }else{
        return view('auth.reset-password-error');
    }
})->name('password.change');