<?php
class Movies_Object
{
    public function getUrl()
    {
        return url::to('movies', array(
            'id' => $this->id
        ));
    }
}