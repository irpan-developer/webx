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

Route::get('/item','itemController@index')->name('item.index');
Route::get('/create','itemController@create')->name('item.create');
Route::post('/store','itemController@store')->name('item.store');
Route::post('/delete/{id}','itemController@destroy')->name('item.destroy');
Route::get('/show/{id}','itemController@show')->name('item.show');
Route::get('/edit/{id}','itemController@edit')->name('item.edit');
Route::post('/update/{id}','itemController@update')->name('item.update');



Route::get('/kartu','kartuController@index')->name('kartu.index');
Route::get('/createkartu','kartuController@create')->name('kartu.create');
Route::post('/storekartu','kartuController@store')->name('kartu.store');
Route::post('/deletekartu/{id}','kartuController@destroy')->name('kartu.destroy');
Route::get('/showkartu/{id}','kartuController@show')->name('kartu.show');
Route::get('/editkartu/{id}','kartuController@edit')->name('kartu.edit');
Route::post('/updatekartu/{id}','kartuController@update')->name('kartu.update');


Route::get('/tagline','taglineController@index')->name('tagline.index');
Route::get('/createtagline','taglineController@create')->name('tagline.create');
Route::post('/storetagline','taglineController@store')->name('tagline.store');
Route::post('/deletetagline/{id}','taglineController@destroy')->name('tagline.destroy');
Route::get('/showtagline/{id}','taglineController@show')->name('tagline.show');
Route::get('/edittagline/{id}','taglineController@edit')->name('tagline.edit');
Route::post('/updatetagline/{id}','taglineController@update')->name('tagline.update');


Route::get('/landing','homeController@index')->name('landing.index');

Route::get('/','dashboardController@index')->name('dashboard.index');


Route::get('image-upload', 'ImageController@imageUpload')->name('image.upload');

Route::post('image-upload', 'ImageController@imageUploadPost')->name('image.upload.post');