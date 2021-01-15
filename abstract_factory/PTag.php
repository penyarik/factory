<?php

class PTag extends TagsFactory implements TagInterface{

    private $content;

    public function __construct($content){
        $this->content = $content;
    }

    public function getTag()
    {
        return new pTag($this->content);
    }
    public function create()
    {
        return "<p> $this->content </p>";
    }

}