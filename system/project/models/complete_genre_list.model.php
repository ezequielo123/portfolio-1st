<?php 

class Complete_Genre_Model extends model
{
   protected static $object_class = 'Complete_Genre_Object';

   public static function getComplete_Genre_List()
   {
        //write query
        $query = "
            SELECT * 
            FROM imdb_genre
            INNER JOIN imdb_movie_has_genre
            ON imdb_genre.id = imdb_movie_has_genre.imdb_genre_id
            INNER JOIN imdb_movie
            ON imdb_movie.imdb_id = imdb_movie_has_genre.imdb_movie_id
            LIMIT 40
        ";

        //run query and get result set
        $resultset = db::query($query);

        //retreive all the rows as objects
        $objects = static::fetchObjects($resultset);
        
        return $objects;
   }
}