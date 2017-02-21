<?php
class Movie_Object
{
    public function getUrls()
    {
        return url::to('movie', array(
            'id' => $this->id
        ));
    }
}