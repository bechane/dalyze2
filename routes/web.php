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
    return 'Hello World';
});
Route::get('/login', function () {
    $title = "Login Or register";
    return view('pages.login', compact('title')); //this how to set a title
});
Route::get('/accueil', function () {
    $title = "Home";
    return view('pages.Home', compact('title'));
});
