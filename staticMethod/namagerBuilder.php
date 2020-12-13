<?php


class namagerBuilder extends userAbstract
{
    public function getRights()
    {
        $stringRights = 'Manager Rights:';
        foreach ($this->rights as $right){
            $stringRights .= $right;
        }
        echo $stringRights;
    }
}