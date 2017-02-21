<?php
class Selected_Movie
{
    public function getUrls()
    {
        return url::to('movie', array(
            'id' => $this->id
        ));
    }
}