<?php

  // file: models/Paciente.php
  class Paciente extends Model {
    protected static $table = 'paciente';
    protected static $columns = 
      ['id_paciente','nombre_paciente','apellidos','email',
       'telefono','edad'];
  }
?>