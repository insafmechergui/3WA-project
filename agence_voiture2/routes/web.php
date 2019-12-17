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

Route::get('/accueil', 'TestController@showAccueil')->name('showAccueil');

Route::get('/add_voiture', 'TestController@showContent')->name('showContent');
Route::post('/add_voiture', 'TestController@handleContent')->name('handleContent');

Route::get('/liste_voiture', 'TestController@showVoiture')->name('showVoiture');
Route::post('/liste_voiture', 'TestController@handleContent')->name('handleContent');