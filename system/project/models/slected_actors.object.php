<?php
class Selected_Actors_Object
{
    public function getUrl()
    {
        return url::to('actor', array(
            'id' => $this->id
        ));
    }
}