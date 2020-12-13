<?php


class employeeBuilder extends userAbstract
{
    public function getRights()
    {
        $stringRights = 'Employee Rights:';
        foreach ($this->rights as $right){
            $stringRights .= $right;
        }
        echo $stringRights;
    }
}