<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<?php
include("database.php");

session_start();
if (!isset($_SESSION['pass'])){
  header('Location:index.php');
}

$query= "SELECT* FROM cateory";
$data= mysqli_query($conn, $query);
?>


  <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>vendor system</title>

    
    <link href="css/bootstrap.min.css" rel="stylesheet">

    
  </head>
  <body>
    <div class="container">
      
      <h1 class="text-center my-5">Add Product</h1>

      <form action="" method="_GET">
        <table class="table table-boardered">

          <tr>
            <td><label for="category">Select Category</label></td>
            <td>
              <select class="form-control" id="category" name="category" value="">
<?php
  while ( $result= mysqli_fetch_assoc($data)) 
  {
    echo "<option value=".$result['category'].">".$result['category']."</option>";
  }
?>

              </select>
            </td>
          </tr>

          <tr>
            <td><label for="item">Item name</label></td>
            <td><input class="form-control" type="text" name="name" value=""></td>
          </tr>

          <tr>
            <td><label for="price">price</label></td>
            <td><input class="form-control" type="text" name="price" value="">
          </tr>

          <tr>
            <td class="text-center" colspan="2"><input type="submit" name="submit"></td>            
          </tr>

        </table>
        
      </form>

      <?php 

if(isset($_GET['submit']))

{
  
  $cat=$_GET['category'];
  $nm=$_GET['name'];
  $pr=$_GET['price'];

  if ($nm!=="" && $cat!=="" && $pr!=="") 
  {
      $query="INSERT INTO ITEM VALUES('','$nm','$cat','$pr')";
      $data=mysqli_query($conn, $query);

      if ($data) 
          {
           echo "Data Inserted successfully";
          }
  }
  else
    echo "Please Enter the Data first";
}

 ?>

      <br>
      <a class="btn btn-primary pull-left" href="view.php">Item List</a>

    </div>
    
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>
