<?php


$conn=new mysqli('localhost','deady','12345','unofficial_shopping_cart');

$query='SELECT * FROM products';
$result=$conn->query($query);
function calculatecost(){
$totalcost=0;
    while($row=$result->fetch_Assoc()){


        $totalcost+=$row['product_price'];








}

return  $totalcost;

}
echo calculatecost();



?>