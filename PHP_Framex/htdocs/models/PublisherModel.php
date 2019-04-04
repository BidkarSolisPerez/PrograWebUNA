<?php

  // file: models/AuthorModel.php
  class PublisherModel extends Model {
    protected static $table = 'publisher';
    protected static $columns = 
      ['publisher_id','name','origin_country','founded_date'];
  }
?>