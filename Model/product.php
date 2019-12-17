<?php


class product
{
    public $id;
    public $name;
    public $description;
    public $price;
    public $totalPrice;

    function __construct($id , $name , $discription , $price) {

        $this->id = $id;
        $this->name = $name;
        $this->description = $discription;
        $this->price = $price;

    }

    function priceDid($price , $reduction) {

       $this->totalPrice = $price / 100 * $reduction;
    }

}