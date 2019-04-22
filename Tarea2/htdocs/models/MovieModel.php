<?php
  // file: models/MovieModel.php
  class MovieModel extends Model {
    protected static $table = 'pelicula';
    protected static $columns = 
      ['movie_title','movie_description','movie_duration','movie_director',
       'movie_year','movie_category','price'];
  }
?>