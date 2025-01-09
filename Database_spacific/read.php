<?php
$server = "localhost";
$Username = "root";
$password = ""; 
$dbName = "users";
$conn = mysqli_connect($server, $Username, $password, $dbName);
if(!$conn){
    echo "Connection ";
}

$sql = "SELECT * FROM submitted";
$result = mysqli_query($conn, $sql);
while($user = mysqli_fetch_assoc($result)){
    echo $user['name'] . "<br>";
    echo $user['email'] . "<br>";
    echo $user['password'] . "<br>";
    echo "<br>";
};
 
?>