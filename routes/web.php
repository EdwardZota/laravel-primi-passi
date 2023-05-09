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

    $data = [
        'img' =>'https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1200px-Laravel.svg.png'
    ];
    return view('faq', $data);
})->name('faq');

Route::get('setting', function () {

    $data = [
        'img' =>'https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1200px-Laravel.svg.png'
    ];
    return view('setting', $data);
})->name('setting');

Route::get('support', function () {

    $data = [
        'img' =>'https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1200px-Laravel.svg.png'
    ];
    return view('support', $data);
})->name('support');
