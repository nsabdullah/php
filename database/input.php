<?php

// connect with database
$server = "localhost";
$userName = "root";
$password = "";
$db_name = "users";

// connected
$connection = mysqli_connect($server, $userName, $password, $db_name);
 if($connection){
  echo " connected";
 }
 $sql = "INSERT INTO users (name, email, password, age, address, city, phone, website) VALUES ('Abdullah', abdullah@gmail.com, 123456789, 20, 'Dhaka', 'Dhaka', 1234566, 'www.abdullah.com )"

 


?>