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

    $data = [
        'saluto' => 'Hello World!',
        'img' =>'https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1200px-Laravel.svg.png'
    ];

    return view('home', $data);

})->name('home');

Route::get('faq', function () {
    return view('faq');
})->name('faq');

Route::get('setting', function () {
    return view('setting');
})->name('setting');

Route::get('support', function () {
    return view('support');
})->name('support');
