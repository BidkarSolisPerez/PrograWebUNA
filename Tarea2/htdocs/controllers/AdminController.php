<?php
require_once('models/MovieModel.php');

class AdminController extends Controller {

    public function index(){
        $movies = MovieModel::all();
        return view('admin/index',['movies'=>$movies,'isSuper'=>Session::has('super'),'isSuper2'=>Session::has('super2'),
        'title'=>'Admin Portal','login'=>Auth::check()]);}

    public function show($id) {  
        $movie = MovieModel::find($id);  
        return view('admin/show',
          ['movie'=>$movie,'rdnly'=>true,
           'title'=>'Movie Detail','isSuper'=>Session::has('super'),'isSuper2'=>Session::has('super2'),'login'=>Auth::check()]);
      }  
   
    public function create() {
        $movie = ['movie_title'=>'','movie_description'=>'',  
                 'movie_duration'=>'','movie_director'=>'',
                 'movie_year'=>'','movie_category'=>'','price'=>''];
        return view('admin/create',
          ['movie'=>$movie,'rdnly'=>false,
           'title'=>'Movie Create','login'=>Auth::check()]); 
      }

    public function store($param1=null) {
        $movie_title = Input::get('movie_title');  
        $movie_description = Input::get('movie_description');  
        $movie_duration = Input::get('movie_duration');  
        $movie_director = Input::get('movie_director');
        $movie_year = Input::get('movie_year');
        $movie_category = Input::get('movie_category');
        $price = Input::get('price');
        $item = [
          'movie_title'=>$movie_title,'movie_description'=>$movie_description,  
          'movie_duration'=>$movie_duration,'movie_director'=>$movie_director,
          'movie_year'=>$movie_year,'movie_category'=>$movie_category,
          'price'=>$price];  
        MovieModel::create($item);
        return redirect('/admin');
      }

    public function edit($id) {   
        $movie = MovieModel::find($id);
        return view('admin/edit',
          ['movie'=>$movie,'rdnly'=>false,
           'title'=>'Movie Edit','login'=>Auth::check()]);
      }

    public function update($id,$param2=null) {
        $id = Input::get('id');  
        $movie_title = Input::get('movie_title');  
        $movie_description = Input::get('movie_description');  
        $movie_duration = Input::get('movie_duration');  
        $movie_director = Input::get('movie_director');
        $movie_year = Input::get('movie_year');
        $movie_category = Input::get('movie_category');
        $price = Input::get('price');
        $item = [
          'movie_title'=>$movie_title,'movie_description'=>$movie_description,  
          'movie_duration'=>$movie_duration,'movie_director'=>$movie_director,
          'movie_year'=>$movie_year,'movie_category'=>$movie_category,
          'price'=>$price];
        MovieModel::update($id,$item);
        return redirect('/admin');
      }

    public function destroy($id) {
        MovieModel::destroy($id);
        return redirect('/admin');
      }
    } 
?>