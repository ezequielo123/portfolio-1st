<?php 

class Actors_Model extends model
{
   protected static $object_class = 'Actors_Object';

   public static function getActors()
   {
        //write query
        $query = "
            SELECT imdb_person.* 
            FROM imdb_person 
            order by RAND()
            LIMIT 8
        ";

        //run query and get result set
        $resultset = db::query($query);

        //retreive all the rows as objects
        $objects = static::fetchObjects($resultset);
        
        return $objects;
   }
}