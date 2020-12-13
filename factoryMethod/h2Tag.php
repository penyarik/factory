<?php


class h2Tag  implements tagsInterface
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