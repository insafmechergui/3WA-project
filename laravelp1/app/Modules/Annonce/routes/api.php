<?php

Route::group(['module' => 'Annonce', 'middleware' => ['api'], 'namespace' => 'App\Modules\Annonce\Controllers'], function() {

    Route::resource('Annonce', 'AnnonceController');

});
