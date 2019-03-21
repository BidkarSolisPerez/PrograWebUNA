<?php  
  // file: controllers/PacienteController.php  
  require_once('models/Paciente.php');  

  class PacienteController extends Controller {  
    public function index() { 
      $pacientes = DB::table("paciente")->get();
      return view('paciente/index',  
       ['pacientes'=>$pacientes,
        'title'=>'Pacientes List']);
    }

    public function show($id) {  
      $paciente = DB::table("paciente")->find($id);  
      return view('paciente/show',  
        ['paciente'=>$paciente,'rdnly'=>true,
         'title'=>'paciente Detail']);
    } 
  }
?>