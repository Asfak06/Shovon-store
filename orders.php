
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>
<body>

<div class="container">
<h1 class="text-center my-2">Orders</h1>
<hr>

<table class='table table-boardered'>
				<tr>
					<th>Order ID</th>
					<th>Item Name</th>
					<th>Item Price</th>
					<th>Quantity</th>
					<th>Total</th>
					<th>Contact info</th>
				</tr>	
<?php
include("database.php");
session_start();
if (!isset($_SESSION['pass'])){
  header('Location:index.php');
}

$query= "SELECT * FROM orders";
$data= mysqli_query($conn, $query);

if(mysqli_num_rows($data)>0){

	while ( $result= mysqli_fetch_assoc($data)) 
	{
		echo "

				<tr>
		        <tr> 
				<td>".$result['id']."</td>
				<td>".$result['item_name']."</td>
				<td>".$result['item_price']."</td>
				<td>".$result['quantity']."</td>
				<td>".$result['total']."</td>
				<td>".$result['user_contact']."</td>
				<td><a class='btn btn-danger btn-sm' href='delete.php?id=".$result['id']." '>delete</a></td>

			</tr>

			";
	}
}else{
	echo "<h2 class='text-center'>No orders yet</h2>";
}
?>

</table>
<a class="btn btn-info" href="index.php">Back</a>
</div>	


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>