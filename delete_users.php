<?php
include("connect.php");
include('sessions1.php');
if(isset($_GET['user_id'])){
   $id = $_GET['user_id'];
   $DELETE = mysqli_query($conn,"DELETE FROM users WHERE user_id='$id'")or die(mysqli_error($conn));
   if($DELETE){
   header("location:users.php");
   }else{
      echo" <script>alert('user not deleted...')</script> ";
   }
}
?>