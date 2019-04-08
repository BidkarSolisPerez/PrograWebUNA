<?php

  // file: controllers/LoginController.php
  require_once('models/UserModel.php');

  class LoginController extends Controller {

    public function showLoginForm() {
      return view('Auth/login',
        ['error'=>false,'login'=>Auth::check()]);
    }

    public function login() {
      $email = Input::get('email');   
      $password = Input::get('password');

      $user = DB::table("users")->where("email",$email)->get();
      Session::put('super',$user[0]['super_user']);

      $isSuper = false;
      if(Session::get('super') == 1){
        $isSuper = true;
      }

      if (Auth::attempt(['email' => $email,
        'password' => $password])) {
        return redirect('/',['isSuper'=>false]);
      }
      return redirect('/loginFails');
    }

    public function loginFails() {
      return view('Auth/login',
        ['error'=>true,'login'=>Auth::check()]);
    }

    public function logout() {
      Auth::logout();
      Session::forget("super");
      return redirect('/');
    }
  }
?>