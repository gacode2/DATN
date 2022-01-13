<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('admin', function(){
    return view('admin');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
