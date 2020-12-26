<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<?php
include("database.php");
session_start();

$cat=$_POST['category'];
$query= "SELECT * FROM ITEM where category='$cat' ";
$data=mysqli_query($conn, $query);
$total= mysqli_num_rows($data);

$query1= "SELECT* FROM cateory";
$data1= mysqli_query($conn, $query1);
?>
<body>


<div class="container">
<form class="form form-inline justify-content-center mt-3" action="" method="POST">
             
          <select class="form-control mr-2" id="category" name="category" value="">
<?php
  while ( $result1= mysqli_fetch_assoc($data1)) 
  {
    echo "<option value=".$result1['category'].">".$result1['category']."</option>";
  }
?>
          </select>
          <input type="submit" class="btn btn-success form-control" value="Search">
</form>

<table class="table table-boardered">
	<tr>
		<td>Sl</th>
		<th>Name</th>
		<th>Catagory</th>
		<th>price</th>
	</tr>
	
<?php
if($total>0)
{
	while ( $result= mysqli_fetch_assoc($data)) 
	{    
	{
		echo "<tr> 
				<td>".$result['sl']."</td>
				<td>".$result['name']."</td>
				<td>".$result['category']."</td>
				<td>".$result['price']."</td>
				<td><a class='btn btn-info btn-sm' href='purchase.php?sl=".$result['sl']." '>purchase</a></td>";
				
if (isset($_SESSION['pass'])){
        echo "<td><a class='btn btn-danger btn-sm' href='delete.php?sl=".$result['sl']." '>delete</a></td>";
}
			echo "</tr>";
	}
	}
}
else{
	echo"<h2 class='text-center'>noting found</h2>";
}

?>
</table>

<a class="btn btn-info" href="view.php">Back</a>

</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>