<?php

Route::group(['module' => 'Voiture', 'middleware' => ['web'], 'namespace' => 'App\Modules\Voiture\Controllers'], function() {

    Route::resource('Voiture', 'VoitureController');

	Route::get('/contact','VoitureController@contact')->name('contact');
	Route::get('/content','VoitureController@showcontent')->name('showcontent');
	Route::post('/content','VoitureController@handlecontent')->name('handlecontent');

	Route::get('/liste','VoitureController@showliste')->name('showliste');

	Route::get('/type/{id}','VoitureController@showType')->name('showType');

	Route::get('/reservation/{id}','VoitureController@showReservation')->name('showReservation');
	Route::post('/reservation','VoitureController@handleReservation')->name('handleReservation');

});
