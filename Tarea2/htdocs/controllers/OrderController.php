<?php
    require_once('models/OrderModel.php');

    Class OrderController extends Controller{

        public function index(){
            $orders = OrderModel::all();

            return view('order/index',  
            ['orders'=>$orders,
             'title'=>'Orders List','isSuper'=>Session::has('super'),'isSuper2'=>Session::has('super2'),'login'=>Auth::check()]);
        }

        public function show($id){
            $order = OrderModel::find($id);

            return view('order/show',
            ['order'=>$order,'rdnly'=>true,
            'title'=>'Order Detail','isSuper'=>Session::has('super'),'isSuper2'=>Session::has('super2'),'login'=>Auth::check()]);
        }

        public function create() {
            $order = ['id'=> 0,'customer_name'=>'','customer_email'=>'',  
                     'customer_address'=>'','card_number'=>'',
                     'card_type'=>'','order_state'=>'entrante','total_order' =>0];
            return view('order/create',
              ['order'=>$order,'rdnly'=>false,
               'title'=>'Order Create','login'=>Auth::check()]); 
          }
      
          public function store($param1 = NULL) {
            $id = Input::get('id');  
            $customer_name = Input::get('customer_name');  
            $customer_email = Input::get('customer_email');  
            $customer_address = Input::get('customer_address');
            $card_number = Input::get('card_number');
            $card_type = Input::get('card_type');
            $order_state = Input::get('order_state');
            $total_order = Input::get('total_order');
            $item = [
              'id'=>$id,'customer_name'=>$customer_name,  
              'customer_email'=>$customer_email,'customer_address'=>$customer_address,
              'card_number'=>$card_number,'card_type'=>$card_type,
              'order_state'=>$order_state,'total_order'=> $total_order];  
            OrderModel::create($item);
            return redirect('/orders');
          }
      
          public function edit($id) { 
            $order = OrderModel::find($id);
            return view('order/edit',
              ['order'=>$order,'rdnly'=>false,
               'title'=>'Book Edit','login'=>Auth::check()]);
          }
      
          public function update($id, $param2 = NULL) {  
            $id = Input::get('id');  
            $customer_name = Input::get('customer_name');  
            $customer_email = Input::get('customer_email');  
            $customer_address = Input::get('customer_address');
            $card_number = Input::get('card_number');
            $card_type = Input::get('card_type');
            $order_state = Input::get('order_state');
            $total_order = Input::get('total_order');
            $item = [
              'id'=>$id,'customer_name'=>$customer_name,  
              'customer_email'=>$customer_email,'customer_address'=>$customer_address,
              'card_number'=>$card_number,'card_type'=>$card_type,
              'order_state'=>$order_state,'total_order'=> $total_order]; 
            OrderModel::update($id,$item);
            return redirect('/orders');
          }
      
          public function destroy($id) {
            OrderModel::destroy($id);
            return redirect('/orders');
          }     
    }
?>