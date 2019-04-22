<?php  
  // file: controllers/CartController.php
  require_once('models/MovieModel.php');

  class CartController extends Controller {  

    public function index() {
      $movies = [];
      $total = 0;
      $showcart = false;
      $items = Session::get("items");
      

      if (isset($items)){
        foreach ($items as $item) {
          $movie = MovieModel::find($item);
          if(isset($movie[0])){
            $total = $total + $movie[0]['price'];
          }
          $movies = array_merge($movies,$movie);
       }
      }
      return view('cart/index',  
       ['movies'=>$movies,'total'=>$total,'showcart'=>isset($movies[0]),
        'title'=>'Shopping cart']);
    }

    public function buy($id) {
      $items = Session::get("items");
      if (isset($items))
        $items[] = $id;
      else
        $items = [$id];
      Session::put("items",$items);
      return redirect('/cart/');
    }

    public function destroy($id) {
      $items = Session::get("items");
      $index = array_search($id,$items);
      unset($items[$index]);
      Session::put("items",$items);
      return redirect('/cart/');
    }
  }
?>