<?php

  // file: models/Registro.php
  class Registro extends Model {
    protected static $table = 'registro';
    protected static $columns = 
      ['fecha','hora','sistole',
       'diastole','pulso'];
  }
?>