<?php  
  // file: routes.php

  Route::get('/', function () { return view('home'); });

  Route::resource('book', 'BookController');

  Route::post('book/(:string)/update',
                       'BookController@update');

  Route::get('book/(:string)/delete',
                       'BookController@destroy');
					   
  Route::resource('author','AuthorController');
  
  Route::post('author/(:string)/update',
                       'AuthorController@update');

  Route::get('author/(:string)/delete',
                       'AuthorController@destroy');
					   
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

  Route::dispatch();
?>