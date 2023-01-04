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
        <div class="row">
            <div class="col-6">
              <img src="" class="w-25" alt="">
            </div>
            <div class="col-6">
              <nav class="navbar navbar-expand-lg navbar-light ">
                <a class="navbar-brand text-white" href="Home.php">HOME</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link text-white" href="ProductPage.php">PRODUCTS<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-white" href="ContactUs.php">CONTACT US</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        PROFILE
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="">EDIT PROFILE</a>
                        <a class="dropdown-item" href="">LOG OUT</a>
                        
                    </li>
 <li class="nav-item">
                      <a class="nav-link text-white" href="test.php">SIGN IN</a>
                    </li>
                  </ul>
                  
                </div>
              </nav>
            </div>
        </div>

   


<div class="container">
    <div class="row text-center py-5" style="transform:translate(5%,5%);">
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
    component($row['Tshirts_Name'],$row['Tshirts_Manufacture'],$row['Tshirts_Color'],$row['IMG1'],$row['Link']);

}   
$db->close();
         ?>      
        </div>
    </div>
</div>

















</body>

</html>

<style>
.navbar {
  overflow: hidden;
  background-color: #333;
  position: fixed;
  top: 0;
  width: 100%;
  float: right;
}</style>


