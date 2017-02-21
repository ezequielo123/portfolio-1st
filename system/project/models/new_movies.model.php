<?php 

class new_Movies_Model extends model
{
   protected static $object_class = 'new_Movies_Model_Object';

   public static function getNewMovie()
   {
        //write query
        $query = "
            SELECT * 
            FROM imdb_movie 
            WHERE year = 2016
            order by rating DESC
            LIMIT 10
        ";

        //run query and get result set
        $resultset = db::query($query);

        //retreive all the rows as objects
        $objects = static::fetchObjects($resultset);
        
        return $objects;
   }
}