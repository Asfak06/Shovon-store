<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<style>
	.container{
		height: 60vh;
		display: flex;
		flex-direction: column;
		align-items: center;
		justify-content: center;
	}
.outline{
	text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;
}
</style>
</head>
<body>


<h1 class="text-center text-light outline mt-5">Welcome to Shovon Enterprise</h1>
<hr>
<div class="container">

<?php

session_start();

	if(isset($_SESSION['pass'])){
      echo '<p class="bordered border-bottom border-primary" href="#">logged in as Admin - <a href="logout.php">Log out</a></p>
	      <br>
      <a class="btn btn-lg btn-dark my-1 w-50" href="view.php">Browse items</a>
	<a class="btn btn-lg btn-dark my-1 w-50" href="view_cat.php">Show categories</a>
	<a class="btn btn-lg btn-dark my-1 w-50" href="orders.php">Orders</a>';
    }else{

    echo '<a class="bordered border-bottom border-primary" href="login.php">Admin login</a>
	      <br>
		  <a class="btn btn-lg btn-dark my-1 w-50" href="view.php">Browse items</a>';
}
?>

</div>	


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>