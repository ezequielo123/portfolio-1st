<?php
class Complete_Actors_Object
{
    public function getUrls()
    {
        return url::to('actors', array(
            'id' => $this->id
        ));
    }
}