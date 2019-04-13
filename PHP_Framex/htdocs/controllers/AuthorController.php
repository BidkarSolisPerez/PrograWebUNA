<?php  
  // file: controllers/AuthorController.php  
  require_once('models/AuthorModel.php');  

  class AuthorController extends Controller {  
    public function index() { 
      $authors = DB::table("author")->get();
      $isSuper = false;

      if(Session::get('super')==1){
        $isSuper = true;
      }
      return view('author/index',  
       ['authors'=>$authors,
        'title'=>'Author List','isSuper'=>Session::has('super'),'login'=>Auth::check()]);
    }

    public function show($id) {  
      $author = DB::table("author")->find($id);
      $isSuper = false;

      if(Session::get('super')==1){
        $isSuper = true;
      }  
      return view('author/show',  
        ['author'=>$author,'rdnly'=>true,
         'title'=>'Author Detail','isSuper'=>$isSuper,'login'=>Auth::check()]);
    }  

    public function create() {
      $author = ['name'=>'','birth_place'=>'',  
               'birth_date'=>''];
      return view('author/create',
        ['author'=>$author,'rdnly'=>false,
         'title'=>'Author Create','login'=>Auth::check()]); 
    }

    public function store() {
      $name = Input::get('name');  
      $birth_place = Input::get('birth_place');  
      $birth_date = Input::get('birth_date');
      $item = [
        'name'=>$name,'birth_place'=>$birth_place,  
        'birth_date'=>$birth_date];  
      AuthorModel::create($item);
      return redirect('/author');
    }

    public function edit($id) { 
      $author = DB::table('author')->find($id);
      return view('author/edit',
        ['author'=>$author,'rdnly'=>false,
         'title'=>'Author Edit','login'=>Auth::check()]);
    }

    public function update($id) {  
      $name = Input::get('name');  
      $birth_place = Input::get('birth_place');  
      $birth_date = Input::get('birth_date');  
      $item = ['name'=>$name,'birth_place'=>$birth_place,  
        'birth_date'=>$birth_date];
      AuthorModel::update($id,$item);
      return redirect('/author');
    }

    public function destroy($id) {
      AuthorModel::destroy($id);
      return redirect('/author');
    }     
  }
?>