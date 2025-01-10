<?php
// database info
$host = "localhost";
$Db_user = "root";
$Db_pass = "";
$Db_name = "users";


// connection
$connection = mysqli_connect($host, $Db_user, $Db_pass, $Db_name);
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
// query
$userId =   ($_REQUEST['id']); 
$sql = "SELECT * FROM submitted WHERE id = '$userId' ";

// run the code
$result = mysqli_query($connection, $sql);

 // result
//  while ($item = mysqli_fetch_assoc($result)){
//    echo $item ['name'] . "<br>";
//  }

?>