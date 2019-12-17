<?php

Route::group(['module' => 'Annonce', 'middleware' => ['web'], 'namespace' => 'App\Modules\Annonce\Controllers'], function() {

Route::get('/annonce', 'AnnonceController@showHomeAnnonce')->name('showHomeAnnonce');

Route::get('/listing', 'AnnonceController@showListing')->name('showListing');
Route::post('/addannonce', 'AnnonceController@handleAnnonce')->name('handleAnnonce');

Route::get('/detail/{id}', 'AnnonceController@showSingle')->name('showSingle');
    
Route::get('/recherche', 'AnnonceController@showRecherche')->name('showRecherche');
Route::post('/recherche', array('as'=>'recherche','uses'=>'AnnonceController@recherche'));



	



});
