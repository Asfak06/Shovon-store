<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>
<body>

<div class="container">
<?php
include("database.php");

session_start();
if (!isset($_SESSION['pass'])){
  header('Location:index.php');
}

if(isset($_GET['sl'])){
	$sl=$_GET['sl'];
$query= "DELETE FROM ITEM where sl='$sl' ";
$data=mysqli_query($conn, $query);	
header('Location:view.php');
}

if(isset($_GET['id'])){
	$id=$_GET['id'];
$query= "DELETE FROM orders where id='$id' ";
$data=mysqli_query($conn, $query);	
header('Location:orders.php');
}

?>
<h2 class="text-center mt-5">Under Construction</h2>
</div>	


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>