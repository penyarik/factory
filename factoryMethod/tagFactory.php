<?php


class tagFactory {

    public function buildTag($className){
        $tag = new $className('content');
        echo $tag->create();
    }

}


$tagsFactory = new tagFactory;
$tagsFactory -> buildTag('h2Tag');
var_dump($tagsFactory);
