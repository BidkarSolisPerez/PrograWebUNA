<?php

  // file: models/Registro.php
  class Registro extends Model {
    protected static $table = 'valor_presion';
    protected static $columns = 
      ['fecha','hora','sistole',
       'diastole','pulso','id_paciente'];
  }
?>