<?php

  // file: models/Registro.php
  class Registro extends Model {
    protected static $table = 'log_presion';
    protected static $columns = 
      ['fecha','hora','sistole','id_paciente',
       'diastole','pulso'];
  }
?>