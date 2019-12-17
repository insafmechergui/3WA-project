<?php

Route::group(['module' => 'Voiture', 'middleware' => ['api'], 'namespace' => 'App\Modules\Voiture\Controllers'], function() {

    Route::resource('Voiture', 'VoitureController');

});
