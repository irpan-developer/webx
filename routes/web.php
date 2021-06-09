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

// Route::get('send-mail', function () {
//     $details = [
//         'title' => 'Mail from ItSolutionStuff.com',
//         'body' => 'This is for testing email using smtp'
//     ];
//     Mail::to('irpanmy@maildrop.cc')->send(new \App\Mail\MyTestMail($details));
//     dd("Email is Sent.");
// });



Route::get('/kirim-email/{nama}', 'EmailController@index')->name('kirim.email');


Auth::routes(['verify' => true]);
Route::get('/','HomeController@index')->name('landing.index');

Auth::routes(['verify' => true]);
Route::get('/dashboard','dashboardController@index')->name('dashboard.index');


Auth::routes(['verify' => true]);
Route::get('/item','itemController@index')->name('item.index');
Route::get('/item/create','itemController@create')->name('item.create');
Route::post('/item/store','itemController@store')->name('item.store');
Route::post('/item/delete/{id}','itemController@destroy')->name('item.destroy');
Route::get('/item/show/{id}','itemController@show')->name('item.show');
Route::get('/item/edit/{id}','itemController@edit')->name('item.edit');
Route::post('/item/update/{id}','itemController@update')->name('item.update');


Auth::routes(['verify' => true]);
Route::get('/kartu','kartuController@index')->name('kartu.index');
Route::get('/kartu/createkartu','kartuController@create')->name('kartu.create');
Route::post('/kartu/storekartu','kartuController@store')->name('kartu.store');
Route::post('/kartu/deletekartu/{id}','kartuController@destroy')->name('kartu.destroy');
Route::get('/kartu/showkartu/{id}','kartuController@show')->name('kartu.show');
Route::GET('/kartu/editkartu/{id}','kartuController@edit')->name('kartu.edit');
Route::PATCH('/kartu/updatekartu/{id}','kartuController@update')->name('kartu.update');


Auth::routes(['verify' => true]);
Route::get('/tagline','taglineController@index')->name('tagline.index');
Route::get('/createtagline','taglineController@create')->name('tagline.create');
Route::post('/storetagline','taglineController@store')->name('tagline.store');
Route::post('/deletetagline/{id}','taglineController@destroy')->name('tagline.destroy');
Route::get('/showtagline/{id}','taglineController@show')->name('tagline.show');
Route::get('/edittagline/{id}','taglineController@edit')->name('tagline.edit');
Route::post('/updatetagline/{id}','taglineController@update')->name('tagline.update');



Route::get('image-upload', 'ImageController@imageUpload')->name('image.upload');

Route::post('image-upload', 'ImageController@imageUploadPost')->name('image.upload.post');



Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->name('home');
