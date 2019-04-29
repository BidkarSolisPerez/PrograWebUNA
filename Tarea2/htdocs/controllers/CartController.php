<?php  
  // file: controllers/CartController.php
  require_once('models/MovieModel.php');
  require_once('models/OrderModel.php');

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
       Session::put('total',$total);
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
      return redirect('/cart');
    }

    public function destroy($id) {
      $items = Session::get("items");
      $index = array_search($id,$items);
      unset($items[$index]);
      Session::put("items",$items);
      return redirect('/cart');
    }

    public function store($param1 = NULL) {
      $customer_name = Input::get('customer_name');  
      $customer_email = Input::get('customer_email');  
      $customer_address = Input::get('customer_address');  
      $card_number = Input::get('card_number');
      $card_type = Input::get('card_type');
      $order_state = 'entrante';
      $total_order = Input::get('total_order');
      $item = [
        'customer_name'=>$customer_name,'customer_email'=>$customer_email,  
        'customer_address'=>$customer_address,'card_number'=>$card_number,
        'card_type'=>$card_type,'order_state'=>$order_state,'total_order'=>$total_order];

      OrderModel::create($item);
      Session::forget("items");
      return redirect('/');
    }
    

    public function orderGen(){
      $totalAmount = Session::get('total');
      return view('cart/checkout',['title'=>"Order generation",'total'=>$totalAmount]);
    }
  }
?>