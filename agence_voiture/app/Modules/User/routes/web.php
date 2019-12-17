<?php

Route::group(['module' => 'User', 'middleware' => ['web'], 'namespace' => 'App\Modules\User\Controllers'], function() {

    Route::resource('User', 'UserController');
    Route::get('/inscription','UserController@showInscription')->name('showInscription');
    Route::post('/inscription','UserController@handleInscription')->name('handleInscription');

    Route::get('/connexion','UserController@showConnexion')->name('showConnexion');
    Route::post('/connexion','UserController@handleConnexion')->name('handleConnexion');



});
