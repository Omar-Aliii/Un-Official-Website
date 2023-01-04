<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UN-OFFICIAL</title>
    <link href="https://fonts.cdnfonts.com/css/lemonmilk" rel="stylesheet">
    <link rel="icon" href="Images/Tab Logo.png">
</head>
<body>


<div class="container">
    <div class="row text-center py-5">
        <?php
        include 'ProductPageFunction.php';
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
    component($row['Tshirts_Name'],$row['Tshirts_Manufacture'],$row['Tshirts_Color'],$row['IMG1']);

}   
$db->close();
         ?>      
        </div>
    </div>
</div>








</body>

</html>


