<?php
  require_once('Professor.php');

  class ProfessorController extends Controller {

    public function index() {  
      return view('professor/index_sinPHP',
       ['professors'=>Professor::all(),
        'title'=>'Professors List']);
    }

    public function show($id) {
      $prof = Professor::find($id);
      return view('professor/show_sinPHP',
        ['professor'=>$prof,
         'title'=>'Professor Detail']);
    }
  }
?>