
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

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>User List</title>
	<script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
	
<div class="relative overflow-x-auto max-w-[500px] m-auto mt-5">
	<h1 class="text-center text-xl font-bold mb-3">User List</h1>
	<table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
		<thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
			<tr>
				<th scope="col" class="px-6 py-3">ID</th>
				<th scope="col" class="px-6 py-3">Name</th>
				<th scope="col" class="px-6 py-3">Email</th>
				<th scope="col" class="px-6 py-3">Password</th>
			</tr>
		</thead>
		<tbody>
   
        <?php
          while($user = mysqli_fetch_assoc($result)){ ?>
 		    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
					<td class="px-6 py-4">  <?php echo  $user['id'] ?></td>
					<td  class="px-6 py-4">  <?php echo  $user['name'] ?></td>
					<td class="px-6 py-4">  <?php echo  $user['email'] ?></td>
					<td class="px-6 py-4">  <?php echo  $user['password'] ?></td>
				</tr>
        <?php
        }
        ?>


		
		</tbody>
	</table>
</div>

</body>
</html>