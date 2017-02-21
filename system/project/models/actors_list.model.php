<?php 

class ActorsList_Model extends model
{
   protected static $object_class = 'ActorsList_Object';

   public static function getActorsList()
   {
        //write query
        $query = "
            SELECT imdb_person.* 
            FROM imdb_person 
            order by imdb_id DESC
            LIMIT 10
        ";

        //run query and get result set
        $resultset = db::query($query);

        //retreive all the rows as objects
        $objects = static::fetchObjects($resultset);
        
        return $objects;
   }
}