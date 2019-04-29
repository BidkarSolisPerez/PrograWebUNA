<?php
  // file: models/MovieModel.php
  class OrderModel extends Model {
    protected static $table = 'orders';
    protected static $columns = ['customer_name','customer_email','customer_address','card_number',
       'card_type','order_state','total_order'];
  }
?>