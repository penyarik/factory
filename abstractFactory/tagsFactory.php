<?php


abstract class tagsFactory{
    abstract function getTag();

    public function buildTag()
    {
        $tag = $this->getTag();
        echo  $tag->create();

    }
}