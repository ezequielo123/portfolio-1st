<?php 

class Movie_Model extends model
{
   protected static $object_class = 'Movie_Object';

   public static function getMovie()
   {
        //write query
        $query = "
            SELECT imdb_movie.* 
            FROM imdb_movie 
            WHERE imdb_movie.rating > 8.3
            AND votes_nr > 150000
            order by rating DESC
        ";

        //run query and get result set
        $resultset = db::query($query);

        //retreive all the rows as objects
        $objects = static::fetchObjects($resultset);
        
        return $objects;
   }
}