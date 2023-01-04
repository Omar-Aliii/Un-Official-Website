

<?php

$servername = "localhost";
$username = "root";
$password = "mara_123321";
$dbname = "webprograming";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

 
 // Check connection
 if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
 }

 if(isset($_POST['login'])):

 
    $username = trim($_POST["Email"]);
    $username1 = trim($_POST["Password"]);

    $stmt = $conn->prepare("SELECT * FROM customer");
    $stmt->execute();
    $resultSet = $stmt->get_result();
    $users = $resultSet->fetch_all(MYSQLI_ASSOC);
     $zero=0;
     $one =0;
    foreach($users as $user) {
         
        if(($user['Email'] == $username && $user['Password'] == $username1  )) {
      
          $zero=1;
        }
    }
   /* foreach($users as $user) {
         
        if(($user['Password'] == $username1  )) {
      
          $one=1;
        }
    }
*/
    if($zero==1 ){
    echo '<script>window.location.replace("/phpsandbox/login.php");</script>';

    }
 
else{
 
  echo '<script>alert("wrong email or password")
  window.location.replace("/phpsandbox/test.php");
  </script>';
    
 
}

endif;

?>



<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<style>


    *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    body{
        background-color: darkgrey;
    }
    .row{
       background: #FFFFFF;
       border-radius: 30px;
       box-shadow: 12px 12px 22px gray;
    }

    img{
        border-top-left-radius: 30px;
        border-bottom-left-radius: 30px;
    }
    .btn1{
        border:none;
        outline: none;
        height: 50px;
        width: 600%;
        background-color: black;
        color: #FFFFFF;
        border-radius: 4px;
        font-weight: bold;
    }
    .btn1:hover{
        background-color: #FFFFFF;
        border: 1px solid;
        color: black;
    }




</style>
<body>

   


<section class="Form my-4 mx-5"> 
    <div class="container">
        <div class ="row no-gutters">
         <div class="col-lg-7"> <img src="./fd1ad16374355fbf06bb3c6d5cb35f60.jfif" class="img-fluid" alt=""></div>
         
             <div class="col-lg-5 px-5 pt-5">


<h1 class="font-weight-bold py-3">WELCOME</h1>
<h4>Sign in to your account</h4>


<form id ="new form" method="POST" action="/register" class="needs-validation">
<div class="form-row">
    <div class="col=lg-4">
       <input type ="email" placeholder="Email"class="form-control my-3 p-2"size="33">
    </div>
</div>

<div class="form-row">
    <div class="col=lg-4">
       <input type ="password" placeholder="password"class="form-control my-3 p-2"size="33">
    </div>
</div>


<div class="form-row">
    <div class="col=lg-4">
      <button type="button" class="btn1 mt-1 mb-3" size="30"> <a href="home.html" >LOGIN </a>  </button>
    </div>
</div>

 <a href="TEST.html">Forgot password?</a>
 <p>Don't have an account? 
 <a href="signup.html"> Register here</a></p>

    </form>
</div>
</div> 
</div>
</section>













<script src="js/popper.min.js"></script>
<script src="js/jquery-3.6.1.min.js"></script>
<script src="js/bootstrap.js"></script>
</body>

</html>