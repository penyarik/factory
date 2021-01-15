<?php


class DivTag implements TagsInterface
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