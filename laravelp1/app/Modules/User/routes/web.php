<?php

Route::group(['module' => 'User', 'middleware' => ['web'], 'namespace' => 'App\Modules\User\Controllers'], function() {

Route::get('/home', 'UserController@showHome')->name('showHome');

Route::get('/profil', 'UserController@showProfil')->name('showProfil');

Route::get('/afficheagent/{id}', 'UserController@afficherProfil')->name('afficherProfil');

Route::get('/agent', 'UserController@showAgent')->name('showAgent');

Route::post('/update/{id}', 'UserController@handleUpdateProfil')->name('handleUpdateProfil');

Route::get('/inscription', 'UserController@showInscription')->name('showInscription');
Route::post('/inscription', 'UserController@handleInscription')->name('handleInscription');

Route::get('/connexion', 'UserController@showConnexion')->name('showConnexion');
Route::post('/connexion', 'UserController@handleConnexion')->name('handleConnexion');

Route::get('/logout', 'UserController@handleLogOut')->name('handleLogOut');

Route::get('/contact', 'UserController@showContact')->name('showContact');
Route::post('/contact', 'UserController@handleContact')->name('handleContact');

Route::get('/category/{id}', 'UserController@showCategory')->name('showCategory');



});
