<?php  
  // file: controllers/PacienteController.php  
  require_once('models/Paciente.php');
  require_once('models/Registro.php');

  class PacienteController extends Controller {  
    public function index() { 
      $pacientes = DB::table("paciente")->get();
      return view('paciente/index',  
       ['pacientes'=>$pacientes,
        'title'=>'Pacientes List']);
    }

    //Inicio método show
    public function show($id) {  
      $paciente = Paciente::find($id);
      $registro = DB::Table("valor_presion")->where("id_usuario",$id)->get();
      return view('paciente/show',  
        ['paciente'=>$paciente,'registro'=>$registro,'rdnly'=>true,
         'title'=>'Detalles del paciente']);
    }
    //Fin método show

    //Inicio método create
    public function create() {
      $paciente = ['name'=>'','apellidos'=>'',  
               'telefono'=>'','email'=>'',
               'edad'=>''];
      return view('paciente/create',
        ['paciente'=>$paciente,'rdnly'=>false,
         'title'=>'Crear paciente']); 
    }
    //Fin del método create

    //Inicio método store
    public function store() {
      $name = Input::get('name');  
      $apellidos = Input::get('apellidos');  
      $telefono = Input::get('telefono');  
      $email = Input::get('email');
      $edad = Input::get('edad');
      $item = [
        'name'=>$name,'apellidos'=>$apellidos,  
        'telefono'=>$telefono,'email'=>$email,
        'edad'=>$edad];  
      Paciente::create($item);
      return redirect('/paciente');
    }
    //Fin método store

    //Inicio método edit
    public function edit($id) {   
      $paciente = Paciente::find($id);
      return view('paciente/edit',
        ['paciente'=>$paciente,'rdnly'=>false,
         'title'=>'Edición cliente']);
    }
    //Fin 

    //Inicio método update
    public function update($id) {  
      $name = Input::get('name');  
      $apellidos = Input::get('apellidos');  
      $email = Input::get('email');  
      $telefono = Input::get('telefono');
      $edad = Input::get('edad');
      $item = [
        'name'=>$name,'apellidos'=>$apellidos,  
        'email'=>$email,'telefono'=>$telefono,
        'edad'=>$edad];
      Paciente::update($id,$item);
      return redirect('/paciente');
    }
    //Fin método update

    //Inicio método destroy
    public function destroy($id) {
      Paciente::destroy($id);
      return redirect('/paciente');
    }
    //Fin método destroy

    //Inicio registro
    public function registro($id){
      $registro = ['sistole'=>'','diastole'=>'',  
               'pulso'=>'','id_usuario'=>$id];
      return view('paciente/registroCreate',
        ['registro'=>$registro,'rdnly'=>false,
         'title'=>'Crear registro']); 
    }
    //Fin registro

    //Inicio storeRegistro
    public function storeRegistro() {
      $date = new DateTime();


      $fecha = date_format($date, 'Y-m-d');;  
      $hora = date_format($date, 'H:i:s');;  
      $sistole = Input::get('sistole');  
      $diastole = Input::get('diastole');
      $pulso = Input::get('pulso');
      $id_usuario = Input::get('id_usuario');

      $item = [
        'fecha'=>$fecha,'hora'=>$hora,  
        'sistole'=>$sistole,'diastole'=>$diastole,
        'pulso'=>$pulso,'id_usuario'=>$id_usuario];  
      Registro::create($item);
      return redirect('/paciente');
    }
    //Fin storeRegistro

  }
  //Final clase controlador
?>