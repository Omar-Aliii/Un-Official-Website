<?php
 if(isset($_POST['submit'])):
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "unofficial3";
      
      // Create connection
      $conn = mysqli_connect($servername, $username, $password, $dbname);
      
     
    
     
         $stmt = $conn->prepare("INSERT INTO contact (NameX,EmailX,PhoneX,SubjectX,MessageX) VALUES (?, ?, ?, ?, ?)");
         $stmt->bind_param("sssss", $name, $Emaily,$Phone,$Subject, $MSG);
         $name = $_POST['Name'];
         $Emaily = $_POST['Emaily'];
         $Phone = $_POST['Phone'];
         $Subject = $_POST['Subject'];
         $MSG = $_POST['MSG'];


$stmt->execute();


$conn->close();
//endif;
echo '<script>window.location.replace("Home.php");</script>';

 endif;
      ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="wrapper" >
  <div class="title">
    <h1>contact us form</h1>
  </div>
  <div class="form" method="POST" >
    <form method= "post" action="ContactUs.php">
    <div class="input-fields">
      <input type="text" class="input" placeholder="Name" name="Name" id="Name">
      <input type="text" class="input" placeholder="Email Address" name="Emaily" id="Emaily">
      <input type="text" class="input" placeholder="Phone" name="Phone" id="Phone">
      <input type="text" class="input" placeholder="Subject" name="Subject" id="Subject">
    </div>
    <div class="msg">
      <textarea placeholder="Type your Message..." name="MSG" id="MSG"></textarea>
      <input  type="submit" name="submit" id="submit" ></input>

    </div>
    </form>
  </div>
</div> 
</body>
</html>


<style>
    @import url('https://fonts.googleapis.com/css?family=Roboto');

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  outline: none;
  font-family: 'Roboto', sans-serif;
}

body{
  background: url('https://i.imgur.com/kk76J5I.jpg') no-repeat top center;
  background-size: cover;
  height: 100vh;
}

.wrapper{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 100%;
  max-width: 550px;
  background: rgba(0,0,0,0.8);
  padding: 30px;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0,0,0,0.3);
}

.wrapper .title h1{
  color: #c5ecfd;
  text-align: center;
  margin-bottom: 25px;
}

.contact-form{
  display: flex;
}

.input-fields{
  display: flex;
  flex-direction: column;
  margin-right: 4%;
}

.input-fields,
.msg{
  width: 48%;
}

.input-fields .input,
.msg textarea{
  margin: 10px 0;
  background: transparent;
  border: 0px;
  border-bottom: 2px solid #c5ecfd;
  padding: 10px;
  color: #c5ecfd;
  width: 100%;
}

.msg textarea{
  height: 212px;
}

::-webkit-input-placeholder {
  /* Chrome/Opera/Safari */
  color: #c5ecfd;
}
::-moz-placeholder {
  /* Firefox 19+ */
  color: #c5ecfd;
}
:-ms-input-placeholder {
  /* IE 10+ */
  color: #c5ecfd;
}

.btn {
    background: #39b7dd;
    text-align: center;
    padding: 15px;
    border-radius: 5px;
    color: #fff;
    cursor: pointer;
    text-transform: uppercase;
}

@media screen and (max-width: 600px){
  .contact-form{
    flex-direction: column;
  }
  .msg textarea{
    height: 80px;
  }
  .input-fields,
  .msg{
    width: 100%;
  }
}
    </style>