<?php
  // file: models/BookModel.php
  class BookModel extends Model {
    protected static $table = 'book';
    protected static $columns = 
      ['id','title','author','publisher',
       'edition'];
  }
?>