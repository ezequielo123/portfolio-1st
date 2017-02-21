<?php
class Complete_Genre_Object
{
    public function getUrls()
    {
        return url::to('actors', array(
            'id' => $this->id
        ));
    }
}