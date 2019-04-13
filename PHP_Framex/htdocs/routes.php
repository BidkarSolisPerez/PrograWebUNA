<?php  
  // file: routes.php

  Route::get('/', function () { return view('home',
      ['login'=>Auth::check(),'isSuper'=>Session::has('super')]); });
	  
  //Book routes
  Route::resource('book', 'BookController');

  Route::post('book/(:string)/update',
                       'BookController@update');

  Route::get('book/(:string)/delete',
                       'BookController@destroy');

  // Author routes
  Route::resource('author','AuthorController');
  
  Route::post('author/(:string)/update',
                       'AuthorController@update');

  Route::get('author/(:string)/delete',
                       'AuthorController@destroy');
					   
  // Publisher routes
  Route::resource('publisher','PublisherController');
  
  Route::post('publisher/(:string)/update',
                       'PublisherController@update');

  Route::get('publisher/(:string)/delete',
                       'PublisherController@destroy');  
					   
  // Authentication Routes  
  Route::get('login', 
             'LoginController@showLoginForm');
  Route::get('loginFails', 
             'LoginController@LoginFails');           
  Route::post('login', 
                      'LoginController@login');  
  Route::get('logout', 'LoginController@logout');  

  // Registration Routes  
  Route::get('register', 
        'RegisterController@showRegistrationForm');  
  Route::post('register', 
                    'RegisterController@register');

  // User routes
  Route::resource('user', 'UserController');

  Route::post('user/(:string)/update',
                       'UserController@update');

  Route::get('user/(:string)/delete',
                       'UserController@destroy');

  Route::dispatch();
?>