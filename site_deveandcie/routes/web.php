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

Route::get('/', 'HomePageController@index')->name('home');
Route::post('/', 'UploadController@send')->name('home');
Route::get('/confirmup', 'ConfirmController@upload')->name('confirmup');
Route::get('/download/{by_token}', 'DownloadController@send')->name('download');
Route::get('/confirmdl/{id_transfer}', 'ConfirmController@download')->name('confirmdl')->where('id_transfer', '[0-9]+');


