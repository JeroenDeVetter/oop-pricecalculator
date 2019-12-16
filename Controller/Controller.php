<?php
// Requiring the classes to make objects
require 'Model/product.php';
require 'Model/customer.php';
require 'Model/groups.php';

// Getting data form json and decoding it to array
$jsonProducts = file_get_contents('Model/products.json');
$productDecode = json_decode($jsonProducts);
$product = array();
// Getting data form json and decoding it to array
$jsonCustomer = file_get_contents('Model/customers.json');
$customerDecode = json_decode($jsonCustomer);
$customer = array();
// Getting data from json and decoding it to array
$jsonGroups = file_get_contents('Model/groups.json');
$groupsDecode = json_decode($jsonGroups);
$group = array();
// Making the product objects from data of the json
for ($i = 0 ; $i <count($productDecode); $i++)
{

    array_push($product , new product($productDecode[$i]->id , $productDecode[$i]->name , $productDecode[$i]->description , $productDecode[$i]->price ));

}
var_dump($product);
// Making the Customer objects from data of the json
for ($i = 0 ; $i < count($customerDecode); $i++)
{

   array_push($customer, new customer($customerDecode[$i]->id,$customerDecode[$i]->name,$customerDecode[$i]->group_id));

}
highlight_string("<?php\n\$data =\n" . var_export($customer, true) . ";\n?>");

// Making the Group objects from data of the json
for ($i = 0 ; $i < count($groupsDecode) ; $i++)
{
    if($groupsDecode[$i]->variable_discount) {

        array_push($group , new groups($groupsDecode[$i]->id,$groupsDecode[$i]->name,$groupsDecode[$i]->variable_discount,$groupsDecode[$i]->group_id));

    }
    elseif (is_null($groupsDecode[$i]->groupId) && $groupsDecode[$i]->fixed_discount) {

        array_push($group , new groups($groupsDecode[$i]->id,$groupsDecode[$i]->name,$groupsDecode[$i]->fixed_discount, 'No Groups id !!!!'));

    }
    else {

        array_push($group , new  groups($groupsDecode[$i]->id,$groupsDecode[$i]->name,$groupsDecode[$i]->fixed_discount,$groupsDecode[$i]->group_id));

    }
}
highlight_string("<?php\n\$data =\n" . var_export($group, true) . ";\n?>");
