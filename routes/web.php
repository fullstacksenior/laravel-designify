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

Route::get('/ajax_upload', 'App\Http\Controllers\AjaxUploadController@index');

Route::post('/ajax_upload/action', 'App\Http\Controllers\AjaxUploadController@action')->name('ajaxupload.action');
