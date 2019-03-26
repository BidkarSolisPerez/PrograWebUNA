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

    //Inicio método show
    public function show($id) {  
      $paciente = Paciente::find($id);
      return view('paciente/show',  
        ['paciente'=>$paciente,'rdnly'=>true,
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

  }
  //Final clase controlador
?>