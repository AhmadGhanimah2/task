<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();

Route::get('/', 'CarsController@index')->name('cars.index');
Route::get('/cars/create', 'CarsController@create')->name('cars.create');
Route::post('/cars/store', 'CarsController@store')->name('cars.store');
Route::get('/cars/store/{id}', 'CarsController@edit')->name('cars.edit');


Route::get('subcars','SubCarController@index')->name('subcar.index');
Route::get('subcars/create','SubCarController@create')->name('subcar.create');
Route::post('subcars/store','SubCarController@store')->name('subcar.store');

Route::resource('advcar','AdvCarsController');

Route::get('success', function () {
    return view('success');
})->name('success');

//update , store same 
// create , edit same ->just view form
// index list all data







// first make layout Master
// database : structtior
// crud
// 3 route :1 -

//نوع السياره :1
//انواع السيارات_الفرعي2
//
//-----------
//لون السياره1
//المحرك2
//عادي او اوتوماتي
//ibraheeeeeeeeeem??//فتحه بسقف
//----------
//كل الاعلانات :
//-----
//اضافه سياره

