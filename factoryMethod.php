<?php

//Abstrat Factory


interface Tag
{
    public function create();
}

class divTag implements Tag
{

    private $content;

    public function __construct($content)
    {
        $this->content = $content;
    }

    public function create()
    {
        return "<div> $this->content </div>";
    }
}

class h2Tag  implements Tag
{

    private $content;

    public function __construct($content)
    {
        $this->content = $content;
    }

    public function create()
    {
        return "<h2>$this->content</h2>";
    }

}

class tagsFactory {

    public static function buildTag($className){
        $tag = new $className('content');
        echo $tag->create();
    }

}

$tagsFactory = tagsFactory::buildTag('h2Tag');
var_dump($tagsFactory);
