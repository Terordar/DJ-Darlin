<?php

Route::group(['middleware' => ['web']], function () {

    Route::get('/', 'WebsiteController@index');
    Route::get('/materiel', 'WebsiteController@materiel');

    Route::get('/equipe', function(){
        return view('Frontend.equipe');
    });

    Route::get('/presentation', function(){
        return view('Frontend.presentation');
    });

    Route::get('/references', function(){
        return view('Frontend.references');
    });

    Route::get('/mentions-legales', function(){
        return view('Frontend.mentions-legales');
    });

    Route::get('/partenaires', 'WebsiteController@partenaires');

    /*
    Route::get('/prix', 'WebsiteController@prix');
    Route::get('/', 'WebsiteController@index');
    Route::get('/', 'WebsiteController@index');*/

});
