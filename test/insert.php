<?php

//if(isset($_POST['submit'])):
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "unofficial3";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$stmt = $conn->prepare("INSERT INTO customers (Email, Password) VALUES (?, ?)");
$stmt->bind_param("ss", $e, $p);


$e = $_POST['email1'];
$p = $_POST['last_name1'];


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
echo '<script>window.location.replace("test.php");</script>';
?>
