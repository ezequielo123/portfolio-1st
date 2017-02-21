<?php 

class Complete_Actors_Model extends model
{
   protected static $object_class = 'Complete_Actors_Object';

   public static function getComplete_List()
   {
        //write query
        $query = "
            SELECT imdb_person.* 
            FROM imdb_person 
            WHERE imdb_person.imdb_id > 85000
            order by imdb_id DESC
            LIMIT 50
        ";

        //run query and get result set
        $resultset = db::query($query);

        //retreive all the rows as objects
        $objects = static::fetchObjects($resultset);
        
        return $objects;
   }
}