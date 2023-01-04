<?php
        include 'Profile.php';
        // Connect to the database
        $db = new mysqli('localhost', 'root', '', 'unofficial3');
        
        // Check for errors
        if ($db->connect_error) {
            die('Connection failed: ' . $db->connect_error);
        }
        
        // Make a query to get the data you want to display
        $query = 'SELECT * FROM tshirts';
        $result = $db->query($query);


        
while($row=$result->fetch_Assoc()){
    if($row['Tshirts_ID']==1){
  component($row['Tshirts_ID'],$row['Tshirts_Name'],$row['Tshirts_Color'],$row['IMG1'],$row['IMG2'],$row['IMG3'],$row['Tshirts_Description']);
}
}   
$db->close();
         ?>