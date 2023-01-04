
<?php

if(isset($_POST['submit_btn'])):

    $First_name = $_POST['first_name'];
    $Last_name=$_POST['last_name'];
    $Email=$_POST['email'];
    $Password=$_POST['password'];
    $Gender=$_POST['male'];
    
    $conn = mysqli_connect('localhost','root','mara_123321','Webprograming');
    if(mysqli_connect_errno()){
    echo 'fail to connect',mysqli_connect_errno();
    }
    
    $query ="INSERT INTO customer (First_name, Last_name, Email)
              VALUES ('$_POST[first_name]', '$_POST[last_name]', '$_POST[email]')";
    
    
    $result = mysqli_query($conn,$query);
    
    
    
    
    mysqli_free_result($result);
    
    mysqli_close($conn);
endif;
?>



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
$firstname = $_POST['first_name1'];
$lastname = $_POST['last_name1'];
$email = $_POST['email1'];


$stmt = $conn->prepare("INSERT INTO customer (First_name, Last_name, Email) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $firstname, $lastname, $email);




$stmt->execute();

if (mysqli_query($conn, $sql)) {
	echo "New record created successfully";
  } else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  

$conn->close();
endif;
?>
