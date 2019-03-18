<?php
  // file: routes.php

  //Routes for user
  Route::resource('user', 'UserController');

  Route::post('user/(:string)/update',
                       'UserController@update');

  Route::get('user/(:string)/delete',
                       'UserController@destroy');

  //Routes for log
  Route::resource('log', 'LogController');
					   
  Route::dispatch();
?>
