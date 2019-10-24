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
Route::get('/adminpanel',function(){
    return view('adminpanel');
});
Route::get('/dodavanjetekstova',function(){
    return view('dodavanjetekstova');

});

Route::get('/music',function(){
    return view('music');

});

Route::get('/musiclist',function(){
    return view('musiclist');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/music', 'MusicController@index')->name('music');

Route::get('/dodavanjetekstova', 'SummernoteController@index')->name('dodavanjetekstova');


Route::post('/insert','Controller@insert');



