<?php

if(isset($_POST['submit'])):
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
echo "Connected successfully";

$stmt = $conn->prepare("INSERT INTO customer (First_name, Last_name, Email) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $firstname, $lastname, $email);


$firstname = $_POST['first_name1'];
$lastname = $_POST['last_name1'];
$email = $_POST['email1'];

$stmt->execute();
echo $_POST['first_name1'];
/*
if (mysqli_query($conn, $sql)) {
	echo "New record created successfully";
  } else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  */

$conn->close();
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
         <div class="col-lg-7"> <img src="./221110154426-wc-squad-mbappe-2018-world-cup.jpg" class="img-fluid" alt=""></div>
             <div class="col-lg-5 px-4 pt-4">


<h2 style="text-align: center;" >SIGN UP</h2>
<form id ="new form" method="post" action="/phpsandbox/login.php" class="needs-validation" >
    <div class="form-row">
        <div class="input-group">
           <input type ="text" placeholder="First name"class="form-control my-3 p-2 input-sm"size="15" name='first_name1'>
           <span class="input-group-btn" style="width:0px;"></span>
           <input type ="text" placeholder="Last name"class="form-control  my-3 p-2 input-sm"size="15"name='last_name1'>
        </div>
    </div>
  

    <div class="form-row">
    <div class="col=lg-4">
       <input type ="email" placeholder="Email"class="form-control my-3 p-2"size="50" name='email1' >
    </div>
</div>

<div class="form-row">
    <div class="col=lg-4">
       <input type ="password" placeholder="password"class="form-control my-3 p-2"size="50" name='password'>
    </div>
</div>

<div>
 
<fieldset id="setD">
   <h6>Gender:</h6>
    <input id="setD_male" type="radio" name="setD_gender" name='male'>
		<label for="setD_male">Male</label>
	<input id="setD_female" type="radio" name="setD_gender" name='female'>
		<label for="setD_female">Female</label>
</fieldset>
</div>
<div class="form-row">
    <div class="col=lg-3 ">
    <input type="submit" value="Submit" name='submit'>
    </div>
</div>


    </form>
</div>
</div> 
</div>
</section>
<script src="js/popper.min.js"></script>
<script src="js/jquery-3.6.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script>

</script>
</body>

</html>