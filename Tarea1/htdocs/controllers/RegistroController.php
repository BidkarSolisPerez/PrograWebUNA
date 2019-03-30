<?php  
  // file: controllers/RegistroController.php  
  require_once('models/Registro.php');  

  class RegistroController extends Controller {  

    //Inicio método index
    public function index() { 
      $registros = DB::Table("log_presion")->get();
      return view('registro/index',  
       ['registros'=>$registros,
        'title'=>'Registro presión']);
    }//Fin método index

    //Inicio método create
    public function create() {
        $registro = ['sistole'=>'','diastole'=>'',
                 'pulso'=>''];
        return view('registro/create',
          ['registro'=>$registro,'rdnly'=>false,
           'title'=>'Crear registro']); 
      }
      //Fin del método create

    //Inicio método store
    public function store() {
     
      $storeTime = date("Y-m-d H:i:s");
      
      $id_paciente = $id;
      $fecha = $storeTime("Y-m-d");    
      $hora = $storeTime("H:i:s");
      $sistole = Input::get('sistole');  
      $diastole = Input::get('diastole');
      $pulso = Input::get('pulso');
      
      $itemPresion = [
        'fecha'=>$fecha,'hora'=>$hora,  
        'profile_id'=>$id_paciente,'sistole'=>$sistole,'diastole'=>$diastole,
        'pulso'=>$pulso];  
      Registro::create($item);

      return redirect('/paciente\/'.$id_pacienteid.'/registro');
    }
    //Fin método store

}//Fin clase RegistroController
?>