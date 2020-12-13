<?php


class divTag implements tagsInterface
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