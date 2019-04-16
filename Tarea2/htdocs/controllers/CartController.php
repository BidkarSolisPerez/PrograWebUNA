<?php  
  // file: controllers/CartController.php
  require_once('models/BookModel.php');

  class CartController extends Controller {  

    public function index() {
      $books = [];
      $total = 0;
      $items = Session::get("items");
      if (isset($items))
        foreach ($items as $item) {
           $book = BookModel::find($item);
           $total = $total + $book[0]['price'];
           $books = array_merge($books,$book);
        }
      return view('cart/index',  
       ['books'=>$books,'total'=>$total,
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