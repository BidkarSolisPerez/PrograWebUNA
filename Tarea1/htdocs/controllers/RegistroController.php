<?php  
  // file: controllers/RegistroController.php  
  require_once('models/Registro.php');  

  class RegistroController extends Controller {  

    //Inicio método index
    public function index() { 
      $registros = DB::table("log_presion")->get();
      return view('registro/index',  
       ['registros'=>$registros,
        'title'=>'Registro presión']);
    }//Fin método index

    //Inicio método create
    public function create() {
        $registro = ['fecha'=>'','hora'=>'',  
                 'sistole'=>'','diastole'=>'',
                 'pulso'=>''];
        return view('registro/create',
          ['registro'=>$registro,'rdnly'=>false,
           'title'=>'Crear registro']); 
      }
      //Fin del método create

    //Inicio método store
    public function store() {
      $id_paciente = $id;

      $storeTime = date("Y-m-d H:i:s");  
      $fecha = $storeTime("Y-m-d");    
      $hora = $storeTime("H:i:s");
      $sistole = Input::get('sistole');  
      $diastole = Input::get('diastole');
      $pulso = Input::get('pulso');
      
      $itemPresion = [
        'sistole'=>$sistole,'diastole'=>$diastole,  
        'pulso'=>$pulso];  
      DB::table("log_presion")->create($item);

      

      return redirect('/registro');
    }
    //Fin método store

}//Fin clase RegistroController
?>