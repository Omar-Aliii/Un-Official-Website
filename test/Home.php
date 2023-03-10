<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UN-OFFICIAL</title>
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/HomePage.css" />
    <link href="https://fonts.cdnfonts.com/css/lemonmilk" rel="stylesheet">
    <link rel="icon" href="Images/Tab Logo.png">
</head>

<body>
    <div class="hero">
        <video autoplay loop muted plays-inline class="back-video">
            <source src="Images/PL Intro.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <nav>
            <img src="Images/Glitch_Text_Effect.png" class="Logo">
            <ul>
                <li><a href="Home.php">Home</a></li>
                <li><a href="ProductPage.php">Products</a></li>
                <li><a href="ContactUs.php">Contact us</a></li>
                <li><a href="Profile.php">Profile</a></li>
            </ul>
        </nav>
        <div class="content">
            <h1>UN-OFFICIAL</h1>
            <a href="ProductPage.php">Explore</a>
        </div>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="js/scripts.js"></script>

</html>