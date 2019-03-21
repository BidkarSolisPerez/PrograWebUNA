<?php  
  // file: routes.php

  Route::get('/', function () { return view('home'); });

  Route::resource('paciente', 'PacienteController');

  Route::post('paciente/(:string)/update',
                       'PacienteController@update');

  Route::get('paciente/(:string)/delete',
                       'PacienteController@destroy');

  Route::dispatch();
?>
