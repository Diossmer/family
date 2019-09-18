<?php

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

Route::name('todowebsie.')->group(function () {
    Route::view('/', 'welcome')->name('home');
    Route::resource('padre', 'UserController')->parameters(['padre' => 'id']);
    Route::resource('hijo', 'HijoController')->parameters(['hijo' => 'id']);
});
