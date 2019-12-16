<?php


class customer
{

    public $idCustomer;
    public $nameCustomer;
    public $group_id;

    function __construct($id , $name , $group_id)
    {
        $this->idCustomer = $id;
        $this->nameCustomer = $name;
        $this->group_id = $group_id;
    }

}