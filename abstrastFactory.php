<?php
//Abstrat Factory
abstract class TagsFactory{
    abstract function getTag();

    public function buildTag()
    {
        $tag = $this->getTag();
        echo  $tag->create();

    }
}

interface Tag{
    public function create();

}

class pTag extends TagsFactory implements Tag{

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

class h1Tag extends TagsFactory implements Tag{

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







