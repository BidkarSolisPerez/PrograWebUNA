<?php

  // file: models/BookModel.php
  class BookModel extends Model {
    protected static $table = 'book';
    protected static $columns = 
      ['title','edition','copyright','language',
       'pages','author_id','publisher_id'];
  }
?>