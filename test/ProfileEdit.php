<?php

//if(isset($_POST['submit'])):
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "unofficial";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$comp = $_POST['Email'];
$stmt = $conn->prepare("INSERT INTO customer where Email=$comp (First_name, Last_name,Phone,Address) VALUES (?, ?,?,?)");
$stmt->bind_param("ssss", $firstname, $lastname);


$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$phone = $_POST['phone'];
$address = $_POST['address'];

$stmt->execute();
$conn->close();


?>


<!DOCTYPE html>
<html lang="en">
  <head>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
  <style> 
  body {
  margin: 20px 0;
  font-family: 'Lato';
  font-weight: 300;
  font-size: 1.25rem;
  width: 300px;
}

form, p {
  margin: 20px;
}

p.note {
  font-size: 1rem;
  color: red;
}

input, textarea {
  border-radius: 5px;
  border: 1px solid #ccc;
  padding: 4px;
  font-family: 'Lato';
  width: 300px;
  margin-top: 10px;
}
label {
  width: 300px;
  font-weight: bold;
  display: inline-block;
  margin-top: 20px;
}

label span {
  font-size: 1rem;
}

label.error {
    color: red;
    font-size: 1rem;
    display: block;
    margin-top: 5px;
}

input.error, textarea.error {
    border: 1px dashed red;
    font-weight: 300;
    color: red;
}

[type="submit"], [type="reset"], button, html [type="button"] {
    margin-left: 0;
    border-radius: 0;
    background: black;
    color: white;
    border: none;
    font-weight: 300;
    padding: 10px 0;
    line-height: 1;
}
</style>
<body>
  <h1>Edit Profile</h1>
<form id="basic-form" action="" method="post">
    
    <p>
      <label for="name">First Name <span></span>(required)</label>
      <input id="fname" name="fname">
    </p>
    <p>
      <label for="name">Last Name <span></span>(required)</label>
      <input id="lname" name="lname">
    </p>


    <p>
      <label for="email">E-Mail <span></span></label>
      <input id="email" name="email">
    </p>

  


  <p>
    <label for="phonenumber">Phone Number <span>(required)</span></label>
    <input id="phone" name="phone">
    </p>


    <p>
      <label for="address"> Address <span>(required)</span></label>
      <input id="address" name="address">
      </p>

    <p>
      <input class="edit" type="edit" value="Edit" name="edit">
</p>
</form>
<script>

$(document).ready(function() {
  $("#basic-form").validate({
    rules: {
      fname : {
        required: true,
        minlength: 3
      },

      lname : {
        required: true,
        minlength: 3
      },



    

      
    
      phone: {
        required: true,
       
      },
      address: {
        required: true,
       
      }
      
    },
    messages : {
fname: {
        minlength: "First name should be at least 3 characters",
        required: "Please enter your first name"
      },
      lname: {
        minlength: "last name should be at least 3 characters",
        required: "Please enter your last name"
      },
      
      phone: {
      
      required: "Please enter your phone"
    },
    address: {
      
      required: "Please enter your address"
    }
    
    
    }
  });
});
</script>


</body>

</html>