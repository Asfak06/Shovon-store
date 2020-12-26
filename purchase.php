<?php
include("database.php");

$sl=$_GET['sl'];
?>
<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>

<div class="container">
	<br>
	<h2 class="text-center">Enter Purchase infomation</h2>
	<br>
	<br>
<form class="form w-50 m-auto" id="purchase" action="order_massage.php" method="POST">
	<input class="form-control" type="number" name="quantity" placeholder="Input quantity" required>
	<input class="form-control" type="text" name="phone" placeholder="Enter contact No:" required>
	<input type="hidden" name="sl" value="<?php echo $sl; ?>" >
	<input type="submit" name="sub" id="sub" class="btn btn-success form-control mt-3" value="order">
</form>

<a class="btn btn-info mt-5" href="view.php">Back</a>

</div>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


</body>


