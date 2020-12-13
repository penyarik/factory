<?php


abstract class userAbstract
{
    public $rights = ['view'];

    abstract  public function getRights();

    public function addRights($right)
    {
        $this->rights[] = $right;
    }

    public function deleteRights($deleteRights){
        foreach($deleteRights as $deleteRight){
            foreach($this->rights as $key => $right){
                if($deleteRight == $right){
                    unset($this->rights[$key]);
                }
            }
        }
    }
}