<?php  
  // file: controllers/BookController.php  
  require_once('models/BookModel.php');  

  class BookController extends Controller {  
    public function index() { 
      $books = DB::table("book_view")->get();

      return view('book/index',  
       ['books'=>$books,
        'title'=>'Books List','isSuper'=>Session::has('super'),'login'=>Auth::check()]);
    }

    public function show($id) {  
      $book = DB::table("book_view")->find($id);  
      return view('book/show',
        ['book'=>$book,'rdnly'=>true,
         'title'=>'Book Detail','isSuper'=>Session::has('super'),'login'=>Auth::check()]);
    }  

    public function create() {
      $book = ['title'=>'','edition'=>'',  
               'copyright'=>'','language'=>'',
               'pages'=>''];
      $authors = DB::table('author_view')->get();
      $publishers = DB::table('publisher_view')->get();
      return view('book/create',
        ['book'=>$book,'authors'=>$authors, 
         'publishers'=>$publishers,'rdnly'=>false,
         'title'=>'Book Create','login'=>Auth::check()]); 
    }

    public function store() {
      $title = Input::get('title');  
      $edition = Input::get('edition');  
      $copyright = Input::get('copyright');  
      $language = Input::get('language');
      $pages = Input::get('pages');
      $author_id = Input::get('author_id');
      $publisher_id = Input::get('publisher_id');
      $item = [
        'title'=>$title,'edition'=>$edition,  
        'copyright'=>$copyright,'language'=>$language,
        'pages'=>$pages,'author_id'=>$author_id,
        'publisher_id'=>$publisher_id];  
      BookModel::create($item);
      return redirect('/book');
    }

    public function edit($id) { 
      $authors = DB::table('author_view')->get();
      $publishers = DB::table('publisher_view')->get();   
      $book = BookModel::find($id);
      return view('book/edit',
        ['book'=>$book,'authors'=>$authors, 
         'publishers'=>$publishers,'rdnly'=>false,
         'title'=>'Book Edit','login'=>Auth::check()]);
    }

    public function update($id) {  
      $title = Input::get('title');  
      $edition = Input::get('edition');  
      $copyright = Input::get('copyright');  
      $language = Input::get('language');
      $pages = Input::get('pages');
      $author_id = Input::get('author_id');
      $publisher_id = Input::get('publisher_id');
      $item = [
        'title'=>$title,'edition'=>$edition,  
        'copyright'=>$copyright,'language'=>$language,
        'pages'=>$pages,'author_id'=>$author_id,
        'publisher_id'=>$publisher_id];
      BookModel::update($id,$item);
      return redirect('/book');
    }

    public function destroy($id) {
      BookModel::destroy($id);
      return redirect('/book');
    }     
  }
?>