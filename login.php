<?php
include("database.php");
  ?>


  <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>vendor system</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
  </head>
  <body>
    <div class="container">
      
      <h1 class="text-center mt-5">Enter password</h1>

      <form class="w-50 m-auto" action="" method="POST">
            <input class="form-control" type="text" name="pass" placeholder="password" required>
            <input class="form-control mt-2 alert-dark" type="submit" name="submit"></td>    
        </table>
      </form>

<?php 
session_start();
if(isset($_POST['submit']))

{
$pass=$_POST['pass'];
if ($pass==1234) 
    {
      $_SESSION['pass']=1234;
      echo "<h3 class='text-center'>Logged in successfully</h3>";
      header('Location:index.php');
    }else{
      echo "<h3 class='text-center'>Wrong password</h3>";
    }

}
?>

      <br>
      <a class="btn btn-primary" href="index.php">home</a>

    </div>
    
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>
