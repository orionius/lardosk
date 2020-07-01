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

// Homepages routes
Route::get('/', function () {
    if (Auth::check() && Auth::user()->isadmin()) {
        return view('adminpanel');
    }
    return view('home');
});
Route::get('/home', function () {
    return view('home');
});

Route::get('/admin_adv_list', function () {
    return view('admin_adv_list');
});


// Аdmin routes
Route::get('admin_newpost', 'AdminController@newPost')->name('postadmin.new');
Route::post('admin_newpost_subm', 'AdminController@submitNewPost')->name('postadmin.newsubm');
Route::get('admin', 'AdminController@admin')->name('admin');
Route::get('admin_adv_list/{id}', 'AdminController@adventList')->name('read.adv_all');







//files
Route::get('/uploadfile','UploadFileController@index');
Route::post('/uploadfile','UploadFileController@showUploadFile');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
