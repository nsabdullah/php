<?php
$server = "localhost";
$Username = "root";
$password = ""; 
$dbName = "users";
$conn = mysqli_connect($server, $Username, $password, $dbName);
if(!$conn){
    echo "Connection ";
}
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
$sql =  "INSERT INTO submitted (name, email, password) VALUES ( '$name', '$email', '$password')";
$insert = mysqli_query($conn, $sql); 
if($insert){
    echo "Data inserted";
  }





  
?>