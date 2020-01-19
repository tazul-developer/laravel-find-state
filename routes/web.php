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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/divisions', 'DivisionController@index')->name('divisions');

Route::get('/find-district-name', 'DivisionController@findDistrictName')->name('district.name');

Route::get('/find-thana-name', 'DivisionController@findThanaName')->name('thana.name');

Route::get('/find-post-code-name', 'DivisionController@findPostCodeName')->name('postCode.name');
