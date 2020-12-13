<?php


class Factory
{
    public static function createUser($name){
        return new User($name);
    }

    public static function createCar($model){
        return new Car($model);
    }

    public static function createHouse($country, $city, $street, $number){
        return new House($country, $city, $street, $number);
    }
}

$factory = new Factory();
$factory::createCar('Niva')->getData();
$factory::createHouse('Ukraine', 'Lviv', 'MainStreet', 12)->getData();
$factory::createUser('Vadim')->getData();