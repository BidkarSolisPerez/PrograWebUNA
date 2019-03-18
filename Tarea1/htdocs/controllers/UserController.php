<?php
  //file controllers/UserController.php
  
  require_once('User.php');
  
  Class UserController extends Controller {
	  
	//Inicio método Index
	public function index() {  
      return view('user/index',
      ['users'=>User::all(),
      'title'=>'Users List']);
    }
	//Final Método Index
	
	//Inicio método show
	public function show($id) {
      $use = User::find($id);
      return view('user/show',
        ['user'=>$use,
         'title'=>'User Detail']);
    }
	//Find método show
	
  }
?>
