<?php 

class Movies_Model extends model
{
   protected static $object_class = 'Movies_Object';

   public static function getMovies()
   {
        //write query
        $query = "
            SELECT imdb_movie.* 
            FROM imdb_movie 
            WHERE imdb_movie.rating > 8.7
            AND votes_nr > 150000
            order by rating DESC
            LIMIT 6
        ";

        //run query and get result set
        $resultset = db::query($query);

        //retreive all the rows as objects
        $objects = static::fetchObjects($resultset);
        
        return $objects;
   }
}