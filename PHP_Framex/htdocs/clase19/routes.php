<?php

    /*
        En order para hacer funcionar los ejercicios elimine las lineas de comentarios de cada ejercicio
    */

    //Ejemplo general de routing para funcion anonima
    //Route::get('/',function() { echo 'Hello, World!'; });


    //Ejercicio 2.1
    //Routing ejercicio 2.1

    /*
    Route::get('/', function () { return view('home'); });

    Route::get('about', function () { return view('about'); });

    Route::get('products', function () { return view('products'); });

    Route::get('services', function () { return view('services'); });
    */


    //Plantillas para los vies creados en ../views

    //Final ejercicio 2.1

    //Verbos HTTP

    /*
    Route::get('/', function () { echo 'GET request</p>'; });

    Route::post('/', function () { echo 'POST request</p>'; });

    Route::put('/', function () { echo 'PUT request</p>'; });

    Route::delete('/', function () { echo 'DELETE request</p>'; });

    Route::any('/', function () { echo 'ANY request</p>'; });

    Route::error( function () { echo '404 :: Not Found';});
    */

    //Ejercicio 2.2

    //Solo probar los llamados con software de verificación de solicitudes RESTful por ejemplo Postman http://getpostman.com.

    //Final ejercicio 2.2

    //Ejercicio 2.3
    //Manejo de la ruta
    /*
    Route::get('/', 'WelcomeController@index');
    Route::get('/about', 'WelcomeController@about');
    Route::get('/services', 'WelcomeController@services');
    Route::get('/products', 'WelcomeController@products');
    */
    //Find ejercicio 2.3

    //Ejercicio 2.4

    /*
    Route::get('users/((0|[1-3])([0-9])-[0-1][1-9]-[0-9]{4})', function($id) {
      echo $id;
    });

    Route::get('users/([1-9]-[0-9]{4}-[0-9]{4})', function($name) {
      echo $name;
    });
    */

    //Final ejercicio 2.4

    //Feb 26

    require_once('Professor.php');
    
    Route::get('/professor', function() {
     return view('professor',
       ['professors'=>Professor::all(),
        'title'=>'Professors list']);
    });


    Route::dispatch();

?>
