<?php


require 'Controller/Controller.php';


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php-price-calculator</title>
</head>
<body>
   <h1>Price Calculator</h1>
   <form method="post">
       <select name="Customer">
           <?php foreach($customer as $key => $value) { ?>
               <option value="<?php echo $value->idCustomer ?>"><?php echo $value->nameCustomer ?></option>
           <?php }?>
       </select>

       <select name="Product">
           <?php foreach($product as $key => $value) { ?>
               <option value="<?php echo $value->id ?>"><?php echo $value->name  ?></option>
           <?php }?>
       </select>
       <button type="submit"> Run </button>

   </form>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  price_and_name($product[$_POST['Product']]->name , $product[$_POST['Product']]->price, $customer[$_POST['Customer']]->nameCustomer, $customer[$_POST['Customer']]->group_id , $group);

}

?>
</body>
</html>
