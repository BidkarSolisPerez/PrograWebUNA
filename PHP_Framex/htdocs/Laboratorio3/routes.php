<?php
  // file: routes.php

  Route::resource('student', 'StudentController');

  Route::post('student/(:string)/update',
                       'StudentController@update');

  Route::get('student/(:string)/delete',
                       'StudentController@destroy');

  Route::dispatch();
?>
