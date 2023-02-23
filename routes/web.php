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

Route::get('/caca1', function () {
    return "Exacto esto es una caca de vaca1";
});

Route::redirect('/here', '/caca');

Route::get('/caca', function () {
    return "I'm here :D";
});

Route::get('/name/{name}', function ($name) {
    return "This is $name's main page. :)";
});