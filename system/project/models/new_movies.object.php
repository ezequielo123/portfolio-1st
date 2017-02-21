<?php
class new_Movies_Model_Object
{
    public function getUrls()
    {
        return url::to('movies', array(
            'id' => $this->id
        ));
    }
}