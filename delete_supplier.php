<?php
include("connect.php");
include('sessions1.php');
if(isset($_GET['id'])){
   $id = $_GET['id'];
   $DELETE = mysqli_query($conn,"DELETE FROM suppliers WHERE id='$id'")or die(mysqli_error($conn));
   if($DELETE){
   header("location:suppliers.php");
   }
}
?>