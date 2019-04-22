<?php    
  // file: routes.php  

  //Route::get('/','BookController@index');
  Route::get('/', 'MovieController@index');

  //Route::get('book/cat/(:string)','BookController@category');

  Route::get('movie/cat/(:string)','MovieController@category');

  //Route::get('book/(:string)','BookController@show');

  Route::get('movie/(:string)','MovieController@show');

  Route::post('book/search','BookController@search');

  Route::get('/cart/','CartController@index');

  Route::get('/cart/buy/(:string)','CartController@buy');

  Route::get('/cart/(:string)/delete','CartController@destroy');

  Route::dispatch();

?>
