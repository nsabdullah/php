<?php



























// connect to the database
$host = 'localhost';  
$user = 'root';
$pass = '';
$db = 'users';
$conn = mysqli_connect($host, $user, $pass, $db); 

$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password']; 

$sql = "INSERT INTO submitform (name, email, password) VALUES ('$name ', '$email', '$password')";  
$data = mysqli_query($conn, $sql);

if($data){
    echo "Data inserted into database";
}
?>