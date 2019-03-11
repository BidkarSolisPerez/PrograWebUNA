<?php
  // file: controllers/StudentController.php

  require_once('Student.php');

  class StudentController extends Controller {

    public function index() {  
      return view('student/index',
       ['students'=>Student::all(),
        'title'=>'Students List']);
    }

    public function show($id) {
      $stud = Student::find($id);
      return view('student/show',
        ['student'=>$stud,
         'title'=>'Student Detail']);
    }

    public function create() {
      return view('student/create',
        ['title'=>'Student Create']);
    }  

    public function store() {
      $name = Input::get('name');
	  $address = Input::get('address');
	  $edad = Input::get('edad');
      $major = Input::get('major');
      $email = Input::get('email');
      $phone = Input::get('phone');
      $item = ['name'=>$name,'address'=>$address,'edad'=>$edad,'major'=>$major,
               'email'=>$email,'phone'=>$phone];
      Student::create($item);
      return redirect('/student');
    }  

    public function edit($id) {  
      $stud = Student::find($id);
      return view('student/edit',
        ['student'=>$stud,
         'title'=>'Student Edit']);
    }  

    public function update($id) {
      $name = Input::get('name');
	  $address = Input::get('address');
	  $edad = Input::get('edad');
      $major = Input::get('major');
      $email = Input::get('email');
      $phone = Input::get('phone');
      $item = ['name'=>$name,'address'=>$address,'edad'=>$edad,'major'=>$major,
               'email'=>$email,'phone'=>$phone];
      Student::update($id,$item);
      return redirect('/student');
    }  

    public function destroy($id) {  
      Student::destroy($id);
      return redirect('/student');
    }

  }
?>