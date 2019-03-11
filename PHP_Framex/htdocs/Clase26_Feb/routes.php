<?php
	/*
    require_once('Professor.php');
	require_once('Student.php');
	
	
    Route::get('/',function() { return view('home'); });
	Route::get('/professor', function() {
     return view('professor',
       ['professors'=>Professor::all(),
        'title'=>'Professors list']);
	});
	
	Route::get('/student', function() {
     return view('student',
       ['students'=>Student::all(),
        'title'=>'Students list']);
	});
	*/
	
	Route::resource('professor', 'ProfessorController');
	Route::resource('student', 'StudentController');
	
    Route::dispatch();
?>
