<?php
include('connect.php');

if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $pass = $_POST['password'];
    $level = $_POST['level'];
    $created_at = $_POST['created_at'];
    // $updated_at = $_POST['updated_at'];
    $insert = mysqli_query($conn,"INSERT INTO users(first_name,last_name,email,username,password,level,created_at)values('$fname','$lname','$email','$username','$pass','$level','$created_at')")or die(mysqli_error($conn));

    if($insert){
      header("location:index.php");
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>apade stock management system</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <h1>welcome to apade stock management system</h1>
    <div class="banner">
        <div class="banner-img">
        
          <img src="r1 (1).jpeg" alt=""width="770px"height="540px">
        </div>
   
    <div class="register">
       
        <form action="" method="post">
        <h2>Register</h3>
        <p>Enter the required information</p>

            <label for="">firstname:</label>
            <input type="text" name="fname"value="">
          <br>
            <label for="">lastname:</label>
            <input type="text" name="lname"value="">
          <br>
            <label for="">email:</label>
            <input type="email" name="email" value="">
          <br>
            <label for="">username:</label>
            <input type="text"name="username" name="username" value="">
          <br>
            <label for="">password:</label>
            <input type="password"name="password" value="">
         
          <br>
            <label for="">created_at:</label>
            <input type="datetime-local" name="created_at" id="">
            <p></p>
            <label for="">permission level:</label>
            <select name="level" id="">
              <option value="1">1</option>
              <option value="2">2</option>
            </select>
           <!-- <br>
            <label for="">updated_at:</label>
          <input type="datetime-local" name="updated_at" id=""> -->
          <p></p>
           <div class="button">
           <button type="submit" name= "submit">Register</button>   
           </div>
            <a href="index.php">login</a>
        </form>

    </div>
          </div>
    </div>
   
</body>
</html>