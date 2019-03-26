<?php  
  // file: routes.php

  //Router para pacientes
  Route::get('/', function () { return view('home'); });

  Route::resource('paciente', 'PacienteController');

  Route::post('paciente/(:string)/update',
                       'PacienteController@update');

  Route::get('paciente/(:string)/delete',
                       'PacienteController@destroy');

  //Router para registros
  Route::resource('paciente/(:string)/registro','RegistroController');

  Route::post('paciente/(:string)/registro/update',
                      "RegistroController@update");

  Route::post('paciente/(:string)/registro/delete',
                      "RegistroController@destroy");

  Route::dispatch();
?>
