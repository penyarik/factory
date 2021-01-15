<?php


class House implements FactoryInterface
{
    private $houseData = array();
    public function __construct($country, $city, $street, $number){
        $this->houseData['country'] = $country;
        $this->houseData['city'] = $city;
        $this->houseData['street'] = $street;
        $this->houseData['number'] = $number;
    }
    public function getData()
    {
        var_dump($this->houseData);
    }
}