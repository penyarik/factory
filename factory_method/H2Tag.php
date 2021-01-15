<?php


class H2Tag  implements TagsInterface
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