
<?php


require_once('function.php');
require_once('database.php');
$query='SELECT * FROM products';
$result=$conn->query($query);
$cost=0;

if(isset($_GET['remove'])){
   $id= $_GET['remove'] ;

$sql="DELETE FROM `products` where id=$id";
$conn->query($sql);

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
   
<div class="content">
    <div class="row">
        
    <div class="col-md-7">
                <div class="shopping-cart">
                    <h3>Shopping Bag</h3>
                    <hr>
                    
                    <form action="shoppingcart.php" method="get" class="cart-items">
<!--<div class="border rounded">
    <div class="row bg-white">
        <div class="col-md-3">
        <img class ="img-fluid"src="../IMAGES/PL images/Crystal Palace/Home/Kit (1).jpg"  alt="">
        </div>
        <div class="col-md-6">
          <h5 class="pt-2">Arsnel</h5>
          <small class="text-secondary">Seller:nike</small>
          <h5 class="pt-2">500$</h5>
          <button type="submit" class="btn btn-danger" name="remove"> Remove</button>
        </div>
        <div class="col-md-3">
            <div>
                <button type="button" name="plus" class="btn bg-light border rounded-circle"><i class="fas fa-minus"></i></button>
                <input type="text" value="1" class="form-control w-25 d-inline">
                <button type="button"  name="minus" class="btn bg-light border rounded-circle"><i class="fas fa-plus"></i></button>
            </div>
        </div>
    </div>
</div>
</form>-->
                  



<?php while($row=$result->fetch_Assoc()){
   $cost+=$row['product_price'];
    shoppingcart($row['product_name'],$row['product_price'],$row['product_image'],$row['id']); } ?>
            </div>
       
        </div>







        <div class="col-md-5">
            <div class="row order_summary">
            <h3>Order Summary</h3>
            </div>
        <div class="row">


            <div class="col-7" style="margin-bottom:30px">
                <strong>subtotal</strong>

            </div>
            
            <div class="col-5">
            <strong><?php echo $cost.' '.'EGP' ?></strong>
            </div>
        </div>
        <div class="row">


 
<div class="col-7" style="margin-bottom:30px">
        <strong>shipping</strong>

    </div>


    <div class="col-5">
        <strong>30 EGP</strong>
    </div>
    <div class="col-7">
        <strong>Total</strong>

    </div>


    <div class="col-5">
        <strong><?php echo ($cost+30).' '.'EGP' ?></strong>
    </div>



    </div>


    <div class="row w-100">
        <a style="text-decoration:none;margin-top:45px;width:80%;" href="#">
        <button type="button" class="checkout btn btn-outline-success btn-lg btn-block">Checkout</button>
        </a>
 



    </div>


        </div>
        







</div>














    </div>

</div>
     
 
     




    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>


<script>










</script>