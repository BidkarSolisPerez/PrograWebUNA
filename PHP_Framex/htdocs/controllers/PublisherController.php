<?php  
  // file: controllers/PublisherController.php  
  require_once('models/PublisherModel.php');  

  class PublisherController extends Controller {  
    public function index() { 
      $publishers = DB::table("publisher")->get();
      $isSuper = false;

      if(Session::get('super') == 1){
        $isSuper = true;
      }
      return view('publisher/index',  
       ['publishers'=>$publishers,
        'title'=>'Publisher List','isSuper'=>$isSuper,'login'=>Auth::check()]);
    }

    public function show($id) {  
      $publisher = DB::table("publisher")->find($id);  
      return view('publisher/show',  
        ['publisher'=>$publisher,'rdnly'=>true,
         'title'=>'Publisher Detail','login'=>Auth::check()]);
    }  

    public function create() {
      $publisher = ['name'=>'','origin_country'=>'',  
               'founded_date'=>''];
      return view('publisher/create',
        ['publisher'=>$publisher,'rdnly'=>false,
         'title'=>'Publisher Create','login'=>Auth::check()]); 
    }

    public function store() {
      $name = Input::get('name');  
      $origin_country = Input::get('origin_country');  
      $founded_date = Input::get('founded_date');
      $item = [
        'name'=>$name,'origin_country'=>$origin_country,  
        'founded_date'=>$founded_date];  
      PublisherModel::create($item);
      return redirect('/publisher');
    }

    public function edit($id) { 
      $publisher = DB::table('publisher')->find($id);
      return view('publisher/edit',
        ['publisher'=>$publisher,'rdnly'=>false,
         'title'=>'Publisher Edit','login'=>Auth::check()]);
    }

    public function update($id) {  
      $name = Input::get('name');  
      $origin_country = Input::get('origin_country');  
      $founded_date = Input::get('founded_date');  
      $item = ['name'=>$name,'origin_country'=>$origin_country,  
        'founded_date'=>$founded_date];
      PublisherModel::update($id,$item);
      return redirect('/publisher');
    }

    public function destroy($id) {
      PublisherModel::destroy($id);
      return redirect('/publisher');
    }     
  }
?>