<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>

<?php
include("database.php");

if(isset($_POST['sub'])){

$quantity=$_POST['quantity'];
$phone=$_POST['phone'];
$sl=$_POST['sl'];
$query= "SELECT * FROM ITEM WHERE sl='$sl' ";
$data= mysqli_query($conn, $query);

  if($data){
        $result= mysqli_fetch_assoc($data);
        $item_name=$result['name'];
        $item_price=$result['price'];
        $total=$quantity * $result['price'];

 $query1="INSERT INTO orders (item_name,item_price,quantity,total,user_contact) VALUES('$item_name','$item_price','$quantity','$total','$phone')";
 $data1= mysqli_query($conn, $query1);


        echo '<h1 class="text-center mt-4">Order placed. We will cantact you shortly</h1>
             <h3 class="text-center mt-4">Order details :</h3>
			 <table class="table table-bordered table-dark text-center w-50 m-auto">
			  <tbody>
			    <tr>
			      <th scope="row">Item name :</th>
			      <td>'.$item_name.'</td>>
			    </tr>
			     <tr>
			      <th scope="row">Item price :</th>
			      <td>'.$item_price.'</td>>
			    </tr>
			    <tr>
			      <th scope="row">Quantity :</th>
			      <td>'.$quantity.'</td>
			    </tr>
			    <tr>
			      <th scope="row">Total price :</th>
			      <td>'.$total.'</td>
			    </tr>
                 <tr>
			      <th scope="row">Phone :</th>
			      <td>'.$phone.'</td>
			    </tr>
			  </tbody>
			</table>
        ';

  }

}
?>

<div class="container">
	<a class="btn btn-info " href="index.php">Home</a>
</div>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>	
</body>
