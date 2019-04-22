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

  // Routes Admin Controller
  Route::resource('admin','AdminController');

  Route::get('admin/movie/(:string)','AdminController@show');

  Route::get('admin/movie/create','AdminController@create');

  Route::post('admin/movie/create','AdminController@store');

  Route::get('admin/movie/(:string)/edit','AdminController@edit');

  Route::post('admin/movie/(:string)/update',
    'AdminController@update');

  Route::get('admin/(:string)/delete',
    'AdminController@destroy');

    // Authentication Routes  
    Route::get('login', 
    'LoginController@showLoginForm');
    Route::get('loginFails', 
    'LoginController@LoginFails');           
    Route::post('login', 
             'LoginController@login');  
    Route::get('logout', 'LoginController@logout'); 

  Route::dispatch();

?>
