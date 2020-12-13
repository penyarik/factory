<?php


class userBuilder
{
    public static function builder($type){
        if($type == 'employee'){
            return new employeeBuilder();
        }
        elseif ($type == 'manager'){
            return new namagerBuilder();
        }
        else{
            throw new Exception('Unknown user type');
        }

    }

}

$userEmployee = userBuilder::builder('employee');
$userEmployee->getRights();
$userEmployee->addRights('edit');
$userEmployee->deleteRights(['edit']);
$userEmployee->getRights();

