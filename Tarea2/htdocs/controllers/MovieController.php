<?php  
  // file: controllers/MovieController.php  
  require_once('models/MovieModel.php'); 

  class MovieController extends Controller{
      public function index(){
          $movies = MovieModel::all();
          return view('movie/index',  
          ['movies'=>$movies,
           'title'=>'Movies List']);
      }

      public function show($id) {  
        $movie = MovieModel::find($id);    
        return view('movie/show',  
          ['movie'=>$movie,'rdnly'=>true,
           'title'=>'Movie Detail']);
      } 

      public function category($keyword) {
        $keyword = str_replace("_", " ", $keyword);
        $movies = MovieModel::where("movie_category",$keyword);
        return view('movie/index',  
         ['movies'=>$movies,
          'title'=>'Movies']);
      }

  }

?>