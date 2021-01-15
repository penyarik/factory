<?php

class H1Tag extends TagsFactory implements TagInterface{

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
        return "<h1>$this->content</h1>";
    }

}