<?php
  // file: models/BookModel.php
  class BookModel extends Model {
    protected static $table = 'book';
    protected static $columns = 
      ['title','author','publisher',
       'edition'];
  }
?>