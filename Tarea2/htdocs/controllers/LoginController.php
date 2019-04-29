<?php

  // file: controllers/LoginController.php
  require_once('models/UserModel.php');

  class LoginController extends Controller {

    public function showLoginForm() {
      $isSuper = false;
      $isSuper2 = false;

      if(Session::get('super')==1){
        $isSuper = true;
      }

      return view('Auth/login',
        ['error'=>false,'isSuper'=> $isSuper,'isSuper2' => $isSuper2,'login'=>Auth::check()]);
    }

    public function login() {
      $email = Input::get('email');   
      $password = Input::get('password');

      if (Auth::attempt(['email' => $email,
        'password' => $password])) {
        Session::put('super','Admin');
        Session::put('super2','Admin');
        return redirect('/admin');
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
      Session::forget("super2");
      return redirect('/admin');
    }
  }
?>