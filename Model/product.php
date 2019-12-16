<?php


class product
{
    public $id;
    public $name;
    public $description;
    public $price;

    function __construct($id , $name , $discription , $price) {

        $this->id = $id;
        $this->name = $name;
        $this->description = $discription;
        $this->price = $price;

    }


}