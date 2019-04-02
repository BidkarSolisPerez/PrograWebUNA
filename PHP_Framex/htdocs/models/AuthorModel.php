<?php

  // file: models/AuthorModel.php
  class AuthorModel extends Model {
    protected static $table = 'author';
    protected static $columns = 
      ['author_id','author_name','birth_place','birth_date'];
  }
?>