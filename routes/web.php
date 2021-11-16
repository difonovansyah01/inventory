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

Route::get('/hello', function () {
    echo "Hello world";
});

Route::get('/name/{name}', function ($name) {
    return "Hello". $name;
});

Route::get('/data/{data?}', function ($data = "kosong") {
    return "Isi Parameter = " . $data;
});

Route::get('/name/{name}', function ($name) {
    return "Hello" . $name;
})->where('name', '[A-Za-z]+');
