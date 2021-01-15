<?php


abstract class TagsFactory{
    abstract function getTag();

    public function buildTag()
    {
        $tag = $this->getTag();
        echo  $tag->create();

    }
}