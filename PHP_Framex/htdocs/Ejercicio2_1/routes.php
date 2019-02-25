<?php
    //Ejercicio 2.1
    //Routing ejercicio 2.1


    Route::get('/', function () { return view('home'); });

    Route::get('about', function () { return view('about'); });

    Route::get('products', function () { return view('products'); });

    Route::get('services', function () { return view('services'); });

    //Plantillas para los views creados en ../views

    //Final ejercicio 2.1

    Route::dispatch();

?>
