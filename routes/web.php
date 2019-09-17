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
    Route::resource('index', 'Admin\UserController')->parameters(['index' => 'id']);
});
