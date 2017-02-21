<?php 

class Selected_Movie_Model extends model
{
   protected static $object_class = 'Selected_Movie';

   public static function getSelectedMovie($unique_id)
   {
        //write query
        $query = "
            SELECT imdb_movie.* 
            FROM imdb_movie 
            WHERE imdb_movie.imdb_id = ?
        ";

        //run query and get result set
        $resultset = db::query($query, array($unique_id));

        //retreive all the rows as objects
        $objects = static::fetchObject($resultset);
        
        return $objects;
   }
   public static function getSelectedMovieType($unique_id)
   {
        //write query
        $query = "
            SELECT * 
            FROM imdb_movie 
            INNER JOIN imdb_movie_type
            ON imdb_movie_type.id = imdb_movie.imdb_movie_type_id
            WHERE imdb_movie.imdb_id = ?
        ";

        //run query and get result set
        $resultset = db::query($query, array($unique_id));

        //retreive all the rows as objects
        $objects = static::fetchObject($resultset);
        
        return $objects;
   }
   public static function getActorsFromMovie($unique_id)
   {
        //write query
        $query = "
            SELECT * 
            FROM imdb_movie_has_person 
            INNER JOIN imdb_person
            ON imdb_movie_has_person.imdb_person_id = imdb_person.imdb_id
            WHERE imdb_movie_has_person.imdb_movie_id = ?
        ";

        //run query and get result set
        $resultset = db::query($query, array($unique_id));

        //retreive all the rows as objects
        $objects = static::fetchObjects($resultset);
        
        return $objects;
   }

   public static function getGenreFromMovie($unique_id)
   {
        //write query
        $query = "
            SELECT * 
            FROM imdb_movie_has_genre
            INNER JOIN imdb_genre
            ON imdb_movie_has_genre.imdb_genre_id= imdb_genre.id
            WHERE imdb_movie_has_genre.imdb_movie_id= ?
        ";

        //run query and get result set
        $resultset = db::query($query, array(isset($unique_id)));

        //retreive all the rows as objects
        $objects = static::fetchObject($resultset);
        
        return $objects;
   }
   
   public static function getCountryFromMovie($unique_id)
   {
        //write query
        $query = "
            SELECT * 
            FROM imdb_movie_has_origin_country
            INNER JOIN imdb_movie_origin_country
            ON imdb_movie_has_origin_country.imdb_movie_origin_country_id = imdb_movie_origin_country.id
            WHERE imdb_movie_has_origin_country.imdb_movie_id = ?
            LIMIT 1
        ";

        //run query and get result set
        $resultset = db::query($query, array($unique_id));

        //retreive all the rows as objects
        $objects = static::fetchObject($resultset);
        
        return $objects;
   }
}