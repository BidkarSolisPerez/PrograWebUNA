<?php  
  // file: controllers/UserController.php  
  require_once('models/UserModel.php');  

  class UserController extends Controller {  
    public function index() { 
      $users = DB::table("users")->get();
      $isSuper = false;

      if(Session::get('super') == 1){
        $isSuper = true;
      }
      return view('user/index',  
       ['users'=>$users,
        'title'=>'Users List','isSuper'=>$isSuper,'login'=>Auth::check()]);
    }

    public function show($id) {  
      $user = DB::table("users")->find($id);
      $isSuper = false;

      if(Session::get('super') == 1){
        $isSuper = true;
      }  
      return view('user/show',  
        ['user'=>$user,'rdnly'=>true,
         'title'=>'User Detail','isSuper'=>$isSuper,'login'=>Auth::check()]);
    }  

    public function destroy($id) {
      UserModel::destroy($id);
      return redirect('/user');
    }     
  }
?>