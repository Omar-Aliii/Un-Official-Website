    <!-- CSS STYLING-->
    <link rel="stylesheet" href="../CSS/style.css">
    <!--fontawsome-->
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.css" >
     <!--bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<?php





function shoppingcart($prodcutname,$productprice,$productimg,$productid){

$elements='<form action="shoppingcart.php" method="get" class="cart-items">
<div class="border rounded">
    <div class="row bg-white">
        <div class="col-md-3">
        <img class ="img-fluid"src="'.$productimg.'"  alt="">
        </div>
        <div class="col-md-6">
          <h5 class="pt-2">'.$prodcutname.'</h5>
          <small class="text-secondary">Seller:nike</small>
          <h5 class="pt-2">$'.$productprice.'</h5>
          <button type="submit" class="btn btn-danger" name="remove" value="'.$productid.'"> Remove</button>
        </div>
        <div class="col-md-3">
      
        </div>
    </div>
</div>
</form>';
echo $elements;




}

function component($prodcutname,$productprice,$productimg,$productid){
$elememnt='


<div class="col-md-3 col-sm-6 my-3 my-md-0">
<form method="post"action="index.php">
        <div class="card shadow">
            <div>
                <img class ="img-fluid card-img-top" src="'.$productimg.'" alt="image here">

            </div>
            <div class="card-body">
                <h5 class="card-title">'.$prodcutname.'</h5>
                <h6>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </h6>
                <p class="card-text">
                    One of our best Products
                </p>
                <h5>
                    <span class="price">$'.$productprice.'</span>
                </h5>
                <button type="submit" class="btn btn-warning my-3" name="x"> Add to cart <i class="fas fa-shopping-cart"></i></button>
                <input type="hidden" name="product_id" value="'.$productid.'" >
            </div>

        </div>

    </form>
</div>



';
echo $elememnt;







}



?>