<?php
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
  }
?>