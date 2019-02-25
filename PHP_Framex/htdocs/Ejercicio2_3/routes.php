<?php
    //Ejercicio 2.3
    //Manejo de la ruta


    Route::get('/', 'WelcomeController@index');
    Route::get('/about', 'WelcomeController@about');
    Route::get('/services', 'WelcomeController@services');
    Route::get('/products', 'WelcomeController@products');

    //Find ejercicio 2.3

    Route::dispatch();

?>
