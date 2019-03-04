<?php

	Route::resource('professor', 'ProfessorController');
	Route::resource('student', 'StudentController');
	
    Route::dispatch();
?>
