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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// first make layout master
// database : structtior
// crud
// 3 route :1 -

//نوع السياره :
//انواع السيارات_الفرعي
//
//-----------
//لون السياره
//المحرك
//عادي او اوتوماتيك
//فتحه بسقف
//----------
//كل الاعلانات :
//-----
//اضافه سياره
