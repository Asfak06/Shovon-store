<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<?php
include("database.php");
session_start();
if (!isset($_SESSION['pass'])){
  header('Location:index.php');
}
$query= "SELECT * FROM cateory";
$data= mysqli_query($conn, $query);
$total= mysqli_num_rows($data);


if ($total!=0) 

?>
<body>
  

<div class="container">
  <h1 class="text-center my-5">Category list</h1>


<table class="table table-boardered">
  <tr>
    <td>ID</th>
    <th>CATEGORY</th>
  </tr>
  


<?php
{
  while ( $result= mysqli_fetch_assoc($data)) 
  {
    echo "<tr> 
        <td>".$result['id']."</td>
        <td>".$result['category']."</td>
      
      </tr>";
  }
}

?>
</table>
<a class="btn btn-info my-5" href="insert_cat.php">Insert category</a>
<a class="btn btn-info" href="index.php">Back</a>

</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
