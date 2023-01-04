
<?php
require_once('database.php');


$size;
$variable=1;

if(isset($_GET['addtocart'])){
   $size=$_GET['size'];
 }

 

$sql='SELECT * from tshirt_size where Size_ID='.$size.' AND Tshirts_ID='.$variable.'';
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$TshirtSizeId=$row['Tshirt_Size_ID'];
echo $TshirtSizeId;

/*if ($result->num_rows > 0) {
   
    while($row = $result->fetch_assoc()) {
  
      }

  }
  */

?>























<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>PURCHASE PAGE</title>
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
      function changestar1(){
        document.getElementById("st1").src = "star.png";
        document.getElementById("st2").src = "icons8-star-16.png";
        document.getElementById("st3").src = "icons8-star-16.png";
        document.getElementById("st4").src = "icons8-star-16.png";
        document.getElementById("st5").src = "icons8-star-16.png";


      }
      function changestar2(){
        document.getElementById("st1").src = "star.png";
        document.getElementById("st2").src = "star.png";
        document.getElementById("st3").src = "icons8-star-16.png";
        document.getElementById("st4").src = "icons8-star-16.png";
        document.getElementById("st5").src = "icons8-star-16.png";

      }
      function changestar3(){
        document.getElementById("st1").src = "star.png";
        document.getElementById("st2").src = "star.png";
        document.getElementById("st3").src = "star.png";
        document.getElementById("st4").src = "icons8-star-16.png";
        document.getElementById("st5").src = "icons8-star-16.png";

      }
      function changestar4(){
        document.getElementById("st1").src = "star.png";
        document.getElementById("st2").src = "star.png";
        document.getElementById("st3").src = "star.png";
        document.getElementById("st4").src = "star.png";
        document.getElementById("st5").src = "icons8-star-16.png";

      }
      function changestar5(){
        document.getElementById("st1").src = "star.png";
        document.getElementById("st2").src = "star.png";
        document.getElementById("st3").src = "star.png";
        document.getElementById("st4").src = "star.png";
        document.getElementById("st5").src = "star.png";

      }
    </script>
  </head>
  <style>
    .stretch-card>.card{width: 100%;min-width: 100%}body{background-color: #232323}.flex{-webkit-box-flex: 1;-ms-flex: 1 1 auto;flex: 1 1 auto}@media (max-width:991.98px){.padding{padding: 1.5rem}}@media (max-width:767.98px){.padding{padding: 1rem}}.padding{padding: 3rem}.card .card-title{color: #000000;margin-bottom: 0.625rem;text-transform: capitalize;font-size: 0.875rem;font-weight: 500}.card .card-description{margin-bottom: .875rem;font-weight: 400;color: #76838f}.mainimage{width: 100% !important}
    

    body{background-color: #232323;}
  </style>
  <body><center><br>
  <form action="" method="get">

    <div class="card w-75 rounded border-0" style="background-color: whitesmoke;">
    <br>
      <div class="row">
      <div class="col-fluid  " style="width: 45rem;">
        <div id="slide" class="carousel slide container w-100 float-left" >
          <ol class="carousel-indicators">
              <li data-target="#slide" data-slide-to="0" class="active"></li>
              <li data-target="#slide" data-slide-to="1" ></li>
              <li data-target="#slide" data-slide-to="2" ></li>
              
          </ol>
          <div class="carousel-inner  w-100">
              <div class="carousel-item active">
                  <img src="mancity1.jpeg" alt="" class="w-100">
              </div>
              <div class="carousel-item">
                  <img src="mancity2.jpeg" alt="" class="w-100">
              </div>
              <div class="carousel-item">
                  <img src="mancity3.jpeg" alt="" class="w-100">
              </div>
              
          </div>
          <a href="#slide" class="carousel-control-next" data-slide="next">
            <spam class="carousel-control-next-icon"></spam>
          </a>
          <a href="#slide" class="carousel-control-prev" data-slide="prev">
            <spam class="carousel-control-prev-icon"></spam>
          </a>
        </div>
      <div>
      </div>
      </div>
      
      <div class="col-fluid ">
        <center>
      <div class="btn-group" >
        <div class="btn btn-outline-light" onclick="changestar1()"><img src="icons8-star-16.png" id="st1" width="20"> </div>
        <div class="btn btn-outline-light" onclick="changestar2()"><img src="icons8-star-16.png" id="st2" width="20"> </div>
        <div class="btn btn-outline-light" onclick="changestar3()"><img src="icons8-star-16.png" id="st3" width="20"> </div>
        <div class="btn btn-outline-light" onclick="changestar4()"><img src="icons8-star-16.png" id="st4" width="20"> </div>
        <div class="btn btn-outline-light" onclick="changestar5()"><img src="icons8-star-16.png" id="st5" width="20"> </div>
       </div>
       <div>
        <center>
          <img src="mancitylogoo3.png" alt=""  style="width: 100px; height: 100px">
        </center>
       </div>
       <h1><b>Manchester City FC</b></h1>
       </center>
       <div class="card border-0" style="background-color: whitesmoke;">
      
<div>
  <br>


       </div>
    </div>
    <br>
    <div class="card border-0" style="background-color: whitesmoke;">
      <div class ="container">
        <div class="row">
    <p class="col-6">Choose your size</p>
    <a class="col-6 float-right"  href="https://www.w3schools.com/">Find your size</a>
    </div>
    </div>
    </div>
   

    <input type="radio" id="S" name="size" value="1">
    <label for="S">S</label>
    <input type="radio" id="M" name="size" value="2">
    <label for="M">M</label>
    <input type="radio" id="L" name="size" value="3">
    <label for="L">L</label>
    <input type="radio" id="Xlarge" name="size" value="4">
    <label for="Xlarge">XL</label>
    
<br>

      <div><p><b>Quantity:</b></p></div>

  <div class ="card border-0"></div>
  <div class="row">
    <div class="col">
      <button class="btn btn-outline-primary border-0"onclick="addQuantity();"  >
        <img   src="plus6.png" alt="">
      </button>
    </div>
    <div class="col" ><p class="lead my-auto" style="position: relative;
      top: 50%;
      transform: translateY(-50%); /* or try 50% */" id="Quantity">
      1</p>
    </div>
    <div class="col">
      <button class="btn btn-outline-primary border-0" onclick="subQuantity();">
        <img  src="minus5.png" alt="">
      </button>
    </div>
  </div>

    <br>
 
  <button type="submit" class="btn btn-outline-primary w-100" name="addtocart"><div class="container"><div class ="row">
    <div class = "col-6"><img src="icons8-add-to-cart-64.png" alt=""></div>
    <div class="col-6 align-self-center" ><b>Add To Cart</b></div>
    <div class ="col-6"> <b></b></div>
  </div></button>
  <div class = "dropdown" style="background-color: whitesmoke;">

  </div>
</div>
</div>

    </div>

    </div>
    </div></center>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  </body>
</html>