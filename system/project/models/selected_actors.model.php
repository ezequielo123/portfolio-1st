<?php 

class Selected_Actors_Model extends model
{
   protected static $object_class = 'Selected_Actors_Object';

   public static function getSelected_Actors($unique_actor_id)
   {
        //write query
        $query = "
            SELECT imdb_person.* 
            FROM imdb_person 
            WHERE imdb_id = ?
        ";

        //run query and get result set
        $resultset = db::query($query, array($unique_actor_id));

        //retreive all the rows as objects
        $objects = static::fetchObject($resultset);
        
        return $objects;
   }

   public static function getMoviesFromSelected_Actors($unique_actor_id)
   {
        //write query
        $query = "
            SELECT * 
            FROM imdb_movie_has_person 
            INNER JOIN imdb_person
            ON imdb_movie_has_person.imdb_person_id = imdb_person.imdb_id
            INNER JOIN imdb_movie
            ON imdb_movie.imdb_id = imdb_movie_has_person.imdb_movie_id
            WHERE imdb_movie_has_person.imdb_person_id = ?
        ";

        //run query and get result set
        $resultset = db::query($query, array($unique_actor_id));

        //retreive all the rows as objects
        $objects = static::fetchObjects($resultset);
        
        return $objects;
   }
}