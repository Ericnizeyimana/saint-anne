<?php
include("connect.php");
include('sessions1.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>users</title>
    <link rel="stylesheet" href="fontawesome-free-6.2.1-web/css/all.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <div class="dashboard" id="dashboard">

    <?php   
        include("sidebar.php");
    ?>

    <div class="right-panel">
        <div class="right-header">
            <div class="menu-icon">

               <a href="" id="toggleBtn"> <i class="fa fa-bars"></i></a>
         
            
                <a href="log_out.php" id="power-off"><i class="fa fa-power-off"></i>log-out</a>
            
            
           </div>
           <div class="right-content">
         <div class="product-details-banner">
                    <h3> USER UPDATE</h3>
             </div>
             
        <div class="content">
        <?php  
                    $user_id = $_GET['user_id'];
                    $sql = $conn->query("SELECT* FROM users WHERE user_id = '$user_id'")or die(mysqli_error($conn));

                    foreach ($sql as $row ) {
                        $fname = $row["first_name"];  
                        $lname = $row["last_name"];  
                        $email = $row["email"];  
                        $username = $row["username"];  
                        $pass = $row["pass"];  
                        $create = $row["created_at"];  
                         
                
                    }
                    if(isset($_POST['save'])){
                    $fname = $_POST['fname'];
                    $lname = $_POST['lname'];
                    $email = $_POST['email'];
                    $username = $_POST['username'];
                    $pass = $_POST['pass'];
                   
                    $created_at = $_POST['created_at'];
                   

                    $sql = $conn->query("UPDATE `users` SET `first_name`='$fname',`last_name`='$lname',`email`='$email',username='$username',`pass`='$pass',`created_at`='$created_at' WHERE user_id ='$user_id'");
                    
                    if($sql){
                       header("location:users.php");

                    }
                    // else{
                    //     echo"supplier failed to updated..";
                    // }
                   } 
                  ?>
   
            <div class="add-prod-center">
            <div class="add-product">
                <form method="post">
                  <h3>  <U>EDIT USER</U></h3>
                    <hr>
                    <label for="">USER NAME:</label>
                    <input type="text"name="fname"value="<?php echo   $fname;?>">
                    <p></p>
                    <label for="">LAST NAME:</label>
                    <input type="text"name="lname"value="<?php echo   $lname;?>">
                    <p></p>
                    <label for="">email:</label>
                    <input type="text"name="email"value="<?php echo   $email;?>">
                    <p></p>
                    <label for="">Username:</label>
                    <input type="text"name="username"value="<?php echo   $username;?>">
                    <p></p>
                    <label for="">Password:</label>
                    <input type="password"name="pass"value="<?php echo   $pass;?>">
                    <p></p>
                    <label for="">Created_at:</label>
                    <input type="text"name="created_at"value="<?php echo   $create;?>">
                    <p></p>
                    <!-- <label for="">Updated_by:</label>
                    <input type="date"name="updated_at"value="<?php echo   $updated_at;?>">
                     <p></p> -->

                    <div class="button">
                 
                    <button type="button" onclick="BackToProd()" name="add-prod">BACK</button>
                  
                    <button type="submit"name="save">SAVE</button>
                    </div>
                    
                </form>
            </div>
               
            </div>
            </div>
    </div>
   </div> 

   <script>
   
   var leftPanelIsOpen = true;
    
       toggleBtn.addEventListener( 'click', (event) =>{
        event.preventDefault();

        if(leftPanelIsOpen){

     leftPanel.style.width = '10%';    
         menu.style.fontSize= '10%';
         leftPanel.style.transition='.5s all';   
         banner.style.fontSize='20px';  
         menu.style.fontSize='15px';  
        // menu2.style.fontSize='15px'; 
         
         menuIcons = document.getElementsByClassName('menuText');
         for(var i = 0; i < menuIcons.length;i++)
         {
            menuIcons[i].style.display = 'none';
         }
        document.getElementsByClassName('menu')[0].style.textAlign = 'center';
        leftPanelIsOpen = false;
   }else{
     leftPanel.style.width = '20%';    
         menu.style.fontSize= '10%'; 
         leftPanel.style.transition =  '.5sec all'; 
         banner.style.fontSize='30px';  
        //  menu1.style.fontSize='10px';  
        // menu2.style.fontSize='10px'; 
         
         menuIcons = document.getElementsByClassName('menuText');
         for(var i = 0; i < menuIcons.length;i++)
         {
            menuIcons[i].style.display = 'inline-block';
         }
        document.getElementsByClassName('menu')[0].style.textAlign = 'left';
           leftPanelIsOpen = true; 
   }
      
        
       });
   </script>
</body>
</html>  