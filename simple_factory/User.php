<?php


class User implements FactoryInterface
{
    private $name;
    public function __construct($name){
        $this->name = $name;
    }
    public function getData()
    {
        echo $this->name;
    }
}