<?php
  class WelcomeController {

    // Inicio ejercicio 2.3
    public function index() {
      return view('home');
    }

    public function about() {
      return view('about');
    }

    public function services() {
      return view('services');
    }

    public function products() {
      return view('products');
    }
    //Final ejercicio 2.3
  }
?>
