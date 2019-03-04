<?php
class Student extends Model {

  static $students = [
    ['id'=>4056,'name'=>'Juan Perez ','address'=>'San Jose',
     'phone'=>'8944556','edad'=>'22','email'=>'juan.perez@univ.ac','major'=>'Ing. Sistemas'], 
    ['id'=>4052,'name'=>'Carlos Mora ','address'=>'San Jose',
     'phone'=>'8942356','edad'=>'21','email'=>'carlos.mora@univ.ac','major'=>'Ing. Sistemas'],
    ['id'=>4256,'name'=>'Jose Martínez ','address'=>'Heredia',
     'phone'=>'8944456','edad'=>'23','email'=>'jose.martinez@univ.ac','major'=>'Ing. Sistemas'],
    ['id'=>4356,'name'=>'Pablo Castro ','address'=>'Cartago',
     'phone'=>'8941256','edad'=>'23','email'=>'pablo.castro@univ.ac','major'=>'Ing. Sistemas'],
    ['id'=>4156,'name'=>'Esteban Montes ','address'=>'Alajuela',
     'phone'=>'8944556','edad'=>'21','email'=>'esteban.montes@univ.ac','major'=>'Ing. Sistemas'],
	 ['id'=>4556,'name'=>'Andres Arrollo ','address'=>'Heredia',
     'phone'=>'8946756','edad'=>'21','email'=>'andres.arrollo@univ.ac','major'=>'Ing. Sistemas']
  ];

  public static function all() { 
    return self::$students; 
  }

  public static function find($id) {
    foreach (self::$students as $key => $stud)
      if ($stud['id'] == $id) return $stud;
    return [];
  }
}

?>