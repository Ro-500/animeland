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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/anime/{name}', function ($name) {
    return view('anime')->with('name', $name);
})->name('anime');
Route::get('/search', function () {
    return view('search');
})->name('search');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
