<?php
class createDB{

public $servername;
public $username;
public $password;
public $DBname;
public $tablename;
public $connection;

public function __construct(
    $servername,
    $username,
    $password,
    $DBname,
    $tablename,
){
$this->DBname=$DBname;
$this->username=$username;
$this->password=$password;
$this->servername=$servername;
$this->tablename=$tablename; 
}
//create connection
$this->connection=mysqli_connect($servername,$username,$password);
if(!$this->connection){

    die("connection failed".mysqli_connect_error());
}


}




?>