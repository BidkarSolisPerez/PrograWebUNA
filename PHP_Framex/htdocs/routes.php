<?php  
  // file: routes.php

  Route::get('/', function () { return view('home'); });

  Route::resource('book', 'BookController');

  Route::post('book/(:string)/update',
                       'BookController@update');

  Route::get('book/(:string)/delete',
                       'BookController@destroy');

  Route::dispatch();
?>