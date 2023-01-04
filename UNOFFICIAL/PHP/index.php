
<?php
session_start();

require_once('function.php');
require_once('database.php');
$query='SELECT * FROM products';
$result=$conn->query($query);
if(isset($_POST['x'])){
    if(isset($_SESSION['cart'])){
     $itemarray=array_column($_SESSION['cart'],"product_id");
     print_r($itemarray);

    }
    else{
$item_array=array('product_id'=>$_POST['product_id']);

    };
    $_SESSION['cart'][0]=$item_array;
    print_r( $_SESSION['cart']);

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <!-- CSS STYLING-->
    <link rel="stylesheet" href="../CSS/style.css">
    <!--fontawsome-->
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.css" >
     <!--bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    
<div class="container">
    <div class="row text-center py-5">
        <?php

while($row=$result->fetch_Assoc()){
        component($row['product_name'],$row['product_price'],$row['product_image'],$row['id']);


    }
    

         ?>
       
        </div>
    </div>




</div>








    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>