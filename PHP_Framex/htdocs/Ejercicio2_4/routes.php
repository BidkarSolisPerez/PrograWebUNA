<?php
    //Ejercicio 2.4

    Route::get('users/((0|[1-3])([0-9])-[0-1][1-9]-[0-9]{4})', function($id) {
      echo $id;
    });

    Route::get('users/([1-9]-[0-9]{4}-[0-9]{4})', function($name) {
      echo $name;
    });

	//Final ejercicio 2.4
    Route::dispatch();

?>
