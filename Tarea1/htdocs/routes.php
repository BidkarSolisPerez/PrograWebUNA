<?php  
  // file: routes.php

  //Router para pacientes
  Route::get('/', function () { return view('home'); });

  Route::resource('paciente', 'PacienteController');

  Route::post('paciente/(:string)/update',
                       'PacienteController@update');

  Route::get('paciente/(:string)/delete',
                       'PacienteController@destroy');

  Route::get('/registro/(:string)','PacienteController@registro');

  Route::post('/registro','PacienteController@storeRegistro');

  Route::dispatch();
?>
