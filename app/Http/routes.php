<?php

Route::group(['middleware' => ['web']], function () {

    Route::get('/', 'WebsiteController@index');
    Route::get('materiel', 'WebsiteController@materiel');

    Route::get('equipe', function(){
        return view('Frontend.equipe');
    });

    Route::get('presentation', function(){
        return view('Frontend.presentation');
    });

    Route::get('references', function(){
        return view('Frontend.references');
    });

    Route::get('mentions-legales', function(){
        return view('Frontend.mentions-legales');
    });

    Route::get('prix', function(){
        return view('Frontend.prix');
    });

    Route::get('prix-standard', function(){
        return view('Frontend.prix-standard');
    });

    Route::get('prix-premium', function(){
        return view('Frontend.prix-premium');
    });

    Route::get('prix-prestige', function(){
        return view('Frontend.prix-prestige');
    });

    Route::get('prix-spectacle', function(){
        return view('Frontend.prix-spectacle');
    });

    Route::get('contrat', function(){
        return view('Frontend.contrat');
    });

    Route::get('devis', function(){
       return view('Frontend.devis');
    });

    Route::get('contactez-nous', function(){
        return view('Frontend.contact');
    });

    Route::get('pub', function(){
        return view('Frontend.pub');
    });

    Route::get('locations', 'WebsiteController@location');

    Route::post('contactez-nous', 'WebsiteController@sendMessage');
    Route::post('devis', 'WebsiteController@sendDevis');

    Route::get('partenaires', 'WebsiteController@partenaires');

});
