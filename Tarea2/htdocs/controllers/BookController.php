<?php  
  // file: controllers/BookController.php  
  require_once('models/BookModel.php');  

  class BookController extends Controller {  
    public function index() { 
      $books = BookModel::all();
      return view('book/index',  
       ['books'=>$books,
        'title'=>'Books List']);
    }

    public function show($id) {  
      $book = BookModel::find($id);    
      return view('book/show',  
        ['book'=>$book,'rdnly'=>true,
         'title'=>'Book Detail']);
    }  

    public function create() {
      $book = ['title'=>'','edition'=>'',  
               'copyright'=>'','language'=>'',
               'pages'=>'','author'=>'',
               'publisher'=>'','price'=>'',
               'category'=>''];
      return view('book/create',
        ['book'=>$book,'rdnly'=>false,
         'title'=>'Book Create']); 
    }

    public function store() {
      $title = Input::get('title');  
      $edition = Input::get('edition');  
      $copyright = Input::get('copyright');  
      $language = Input::get('language');
      $pages = Input::get('pages');
      $author = Input::get('author');
      $publisher = Input::get('publisher');
      $category = Input::get('category');
      $price = Input::get('price');
      $item = [
        'title'=>$title,'edition'=>$edition,  
        'copyright'=>$copyright,'language'=>$language,
        'pages'=>$pages,'author'=>$author,
        'publisher'=>$publisher,'price'=>$price,
        'category'=>$category];  
      BookModel::create($item);
      return redirect('/book');
    }

    public function edit($id) {    
      $book = BookModel::find($id);
      return view('book/edit',
        ['book'=>$book,'rdnly'=>false,
         'title'=>'Book Edit']);
    }

    public function update($id) {  
      $title = Input::get('title');  
      $edition = Input::get('edition');  
      $copyright = Input::get('copyright');  
      $language = Input::get('language');
      $pages = Input::get('pages');
      $author = Input::get('author');
      $publisher = Input::get('publisher');
      $category = Input::get('category');
      $price = Input::get('price');
      $item = [
        'title'=>$title,'edition'=>$edition,  
        'copyright'=>$copyright,'language'=>$language,
        'pages'=>$pages,'author'=>$author,
        'publisher'=>$publisher,'price'=>$price,
        'category'=>$category];
      BookModel::update($id,$item);
      return redirect('/book');
    }

    public function category($keyword) {
      $keyword = str_replace("_", " ", $keyword);
      $books = BookModel::where("category",$keyword);
      return view('book/index',  
       ['books'=>$books,
        'title'=>'Books','login'=>Auth::check()]);
    }

    public function search() {
      $keyword = Input::get('keyword');
      $books = BookModel::where("title",$keyword);

      return view('book/index',  
       ['books'=>$books,
        'title'=>'Books','login'=>Auth::check()]);
    }

    public function destroy($id) {
      BookModel::destroy($id);
      return redirect('/book');
    }     
  }
?>