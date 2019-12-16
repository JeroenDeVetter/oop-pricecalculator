<?php


class groups
{

    public $Group;
    public $nameGroup;
    public $discountGroup;
    public $groupId;

    function __construct($id , $name , $discount , $groupid)
    {
        $this->Group = $id;
        $this->nameGroup = $name;
        $this->discountGroup = $discount;
        $this->groupId = $groupid;
    }

}