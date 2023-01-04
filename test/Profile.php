
<?php

$db = new mysqli('localhost', 'root', '', 'unofficial3');
        
// Check for errors
if ($db->connect_error) {
    die('Connection failed: ' . $db->connect_error);
}
$variable=1;
if(isset($_GET['buy'])):
   $size=$_GET['radio'];  
   $sql='SELECT * from tshirt_size where Size_ID='.$size.' AND Tshirts_ID='.$variable.'';
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $choosenQ = $_GET['Quant'];
   $TshirtSizeId=$row['Tshirt_Size_ID'];
   $TshirtQuantity=$row['Tshirt_Size_Quantity'];
   $delete=$TshirtQuantity-$choosenQ;
   $sql2="UPDATE tshirt_size
   SET Tshirt_Size_Quantity = '.$delete.'
   where Size_ID='.$size.' AND Tshirts_ID='.$variable.'";
   $stmt = $conn->prepare($sql2);

// execute the query
$stmt->execute();
endif;

function component($Tshirts_ID,$Tshirts_Name,$Tshirts_Color,$IMG1,$IMG2,$IMG3,$Tshirts_Description){
  $html='
<body style="background:'.$Tshirts_Color.'">
<div class="container mt-5 mb-5">
  <div class="card">
    <div class="row g-0">
      <div class="col-md-6 border-end">
        <div class="d-flex flex-column justify-content-center">
          <div class="main_image">
            <img src="'.$IMG1.'" id="main_product_image" width="350">
          </div>
          <div class="thumbnail_images">
            <ul id="thumbnail">
              <li><img onclick="changeImage(this)" src="'.$IMG1.'" width="70"></li>
              <li><img onclick="changeImage(this)" src="'.$IMG2.'" width="70"></li>
              <li><img onclick="changeImage(this)" src="'.$IMG3.'" width="70"></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="p-3 right-side">
          <div class="d-flex justify-content-between align-items-center">
            <h3>'.$Tshirts_Name.'</h3>
          </div>
          <div class="mt-2 pr-3 content">
            <p>'.$Tshirts_Description.'</p>
          </div>
  <label for="html">S</label>
        <input type="radio" name="radio" value="1" >

  <label for="css">M</label>
       <input type="radio" name="radio" value="2" >
    
  <label for="javascript">L</label>
       <input type="radio" name="radio" value="3" >
       
  <label for="javascript">XL</label>
        <input type="radio" name="radio" value="4" >
       




        <div class="row">
        <div class="col">
          <button class="btn btn-outline-primary border-0"onclick="subQuantity();"  >
            <img   src="minus5.png" alt="">
          </button>
        </div>
        <div class="col" ><p class="lead my-auto" style="position: relative;
          top: 50%;
          transform: translateY(-50%); /* or try 50% */" id="Quantity" name="Quant">
          1</p>
        </div>
        <div class="col">
          <button class="btn btn-outline-primary border-0" onclick="addQuantity();">
            <img  src="plus6.png" alt="">
          </button>
        </div>
      </div>
          <h3></h3>
          <div class="buttons d-flex flex-row mt-5 gap-3">
          <form method= "post" action="Visa.php">
          <input  type="submit" name="buy" id="submit" ></input>
</form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>




<script>

function addQuantity(){
  var st = document.getElementById("Quantity").innerHTML;
  var temp = parseInt(st);
  if(temp == 10 ){
    temp -= 1;
  }

  document.getElementById("Quantity").innerHTML=temp+1;
}
function subQuantity(){
  var st = document.getElementById("Quantity").innerHTML;
  var temp = parseInt(st);
  if(temp == 1){
    temp += 1;
  }
  document.getElementById("Quantity").innerHTML=temp-1;
      }



</script>




';


 


echo $html;

}






?>






<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

  <title>PURCHASE PAGE</title>
  <script>
   
    
  </script>
  <script>
    function changeImage(element) {
      var main_prodcut_image = document.getElementById('main_product_image');
      main_prodcut_image.src = element.src;
    }
  </script>
</head>
<style>
  body {
    background-color: #ecedee
  }

  .card {
    border: none;
    overflow: hidden
  }

  .thumbnail_images ul {
    list-style: none;
    justify-content: center;
    display: flex;
    align-items: center;
    margin-top: 10px
  }

  .thumbnail_images ul li {
    margin: 5px;
    padding: 10px;
    border: 2px solid #eee;
    cursor: pointer;
    transition: all 0.5s
  }

  .thumbnail_images ul li:hover {
    border: 2px solid #000
  }

  .main_image {
    display: flex;
    justify-content: center;
    align-items: center;
    border-bottom: 1px solid #eee;
    height: 400px;
    width: 100%;
    overflow: hidden
  }

  .heart {
    height: 29px;
    width: 29px;
    background-color: #eaeaea;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center
  }

  .content p {
    font-size: 12px
  }

  .ratings span {
    font-size: 14px;
    margin-left: 12px
  }

  .right-side {
    position: relative
  }

  .search-option {
    position: absolute;
    background-color: #000;
    overflow: hidden;
    align-items: center;
    color: #fff;
    width: 200px;
    height: 200px;
    border-radius: 49% 51% 50% 50% / 68% 69% 31% 32%;
    left: 30%;
    bottom: -250px;
    transition: all 0.5s;
    cursor: pointer
  }

  .search-option .first-search {
    position: absolute;
    top: 20px;
    left: 90px;
    font-size: 20px;
    opacity: 1000
  }

  .search-option .inputs {
    opacity: 0;
    transition: all 0.5s ease;
    transition-delay: 0.5s;
    position: relative
  }

  .search-option .inputs input {
    position: absolute;
    top: 200px;
    left: 30px;
    padding-left: 20px;
    background-color: transparent;
    width: 300px;
    border: none;
    color: #fff;
    border-bottom: 1px solid #eee;
    transition: all 0.5s;
    z-index: 10
  }

  .search-option .inputs input:focus {
    box-shadow: none;
    outline: none;
    z-index: 10
  }

  .search-option:hover {
    border-radius: 0px;
    width: 100%;
    left: 0px
  }

  .search-option:hover .inputs {
    opacity: 1
  }

  .search-option:hover .first-search {
    left: 27px;
    top: 25px;
    font-size: 15px
  }

  .search-option:hover .inputs input {
    top: 20px
  }

  .search-option .share {
    position: absolute;
    right: 20px;
    top: 22px
  }

  .buttons .btn {
    height: 50px;
    width: 150px;
    border-radius: 0px ;
    margin-left: 150px;
  }
</style>


  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
    crossorigin="anonymous"></script>
</body>

</html>








