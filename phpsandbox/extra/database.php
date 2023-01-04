<?php
//connection
$conn = mysqli_connect('localhost','root','mara_123321','Webprograming');
if(mysqli_connect_errno()){
echo 'fail to connect',mysqli_connect_errno();
}

$query ="INSERT INTO customer (First_name, Last_name, Email)
          VALUES ('lol', 'gg' , 'rl')";


$result = mysqli_query($conn,$query);




mysqli_free_result($result);

mysqli_close($conn);













?>