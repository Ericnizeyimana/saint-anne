<?php
include('connect.php');
session_start();

if(isset($_POST['submitBtn'])){

  $userName = $_POST['username'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM `users` WHERE `username` = '$userName' AND `pass` = '$password'";
  $query = mysqli_query($conn,$sql);
  if($query){
    if(mysqli_num_rows($query) == 1){
      $row = mysqli_fetch_assoc($query);
      $_SESSION['email'] = $row['email'];
      $_SESSION['username'] = $row['username'];

      if($row['level'] == 1){
         $_SESSION['admin']=$userName;
        header("location:adminAcc.php");
      }
      else{
        $_SESSION['user']=$userName;
        header("location: ./users/"); 
      }
    }
    else{
      echo '<script>alert("user not found")</script>';
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecole Primaire Sainte Anne stock management system</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <h1 style="text-align:center;">welcome to Ecole Primaire Sainte Anne<br> stock management system</h1>
    <div class="banner">
        <div class="banner-img">
        
          <img src="r1 (1).jpeg" alt=""width="770px"height="540px">
        </div>
   
    <div class="login">
       
        <form method="post">
        <h2>login</h3>
        <p>Enter your credentials</p>
            <label for="">username:</label>
            <input type="text" name="username" value="">
            <p></p>
            <label for="">password:</label>
            <input type="password" name= "password" value="">
            <p></p>
            <button type="submit"  name="submitBtn">login</button>
            <p></p>
            <a href="register.php">Create new account.</a>
        </form>

    </div>
          </div>
    </div>
   
</body>
</html>