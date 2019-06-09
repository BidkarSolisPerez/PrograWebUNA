<?php
    
    Route::get('/',function() { echo 'Hello, World!'; });
    Route::resource('book', 'BookController');

	Route::dispatch();
?>
