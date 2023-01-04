<?php

//if(isset($_POST['submit'])):
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


$stmt = $conn->prepare("INSERT INTO customer (Email, Password) VALUES (?, ?)");
$stmt->bind_param("ss", $firstname, $lastname);


$firstname = $_POST['email1'];
$lastname = $_POST['last_name1'];


$stmt->execute();

/*
if (mysqli_query($conn, $sql)) {
	echo "New record created successfully";
  } else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  */

$conn->close();
//endif;
echo '<script>window.location.replace("/phpsandbox/test.php");</script>';
?>
