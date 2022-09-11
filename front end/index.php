<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user management</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="ex.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alatsi">
</head>

<body>
    <h1><strong>LOGIN PORTAL</strong></h1>
    <br>
    <div class="icon-bar">
        <a class="active" href="file.html"><i class="fa fa-home"></i></a>
        <a href="file.html" target="_blank"><i class="fa fa-refresh"></i></a>
        <a href="contact.html"><i class="fa fa-phone"></i></a>
        <a href="https://jumpcloud.com/blog/what-is-user-management#:~:text=User%20management%20describes%20the%20ability,in%20particular%20directory%20services%20tools"
            target="_blank"><i class="fa fa-info"></i></a>
    </div>

    <img src="img_avatar.png" alt="avatar" class="center">
    <form action="" method="post">
        <div class="bc">
            <div>USERID OR EMAIL <br><br>
                <i class="fa fa-user-circle"></i>
                <input type="text" name="username" placeholder="User Name">
            </div><br>
            <div> PASSWORD <br><br>
                <i class="fa fa-key"></i>
                <input type="password" name="password" placeholder="Password"><br>
            </div>
        </div><br>
         <a href="home.php">
        <button type="submit" name="login" width="auto">Login</button></a>
        <br><br>

        <a class="df" href="test.php" target="_blank">Create accout</a>
        <a href="fnp.html" target="_blank">Forgot password</a>
    </form>


</body>

</html>
<?php

$con=mysqli_connect("localhost","root","","user");
if(isset($_POST['login'])){
   $username = $_POST['username'] ;
   $password = $_POST['password'];
   $sql= "SELECT username,password FROM `student` WHERE `username`='$username' AND `password`='$password'";
    $run= mysqli_query($con,$sql);
    $row= mysqli_num_rows($run);
    if($row<1){
        ?>
        <script>alert("Opps! Username and Pswd not matched..");
            window.open('login.php','_self');
    </script><?php
    }
    else{
        $data= mysqli_fetch_assoc($run);
       
        
     
      
        header('location:login1.html');

    }
}



if(isset($_POST['login'])){
    $username = $_POST['username'] ;
    $password = $_POST['password'];
    $sql= "SELECT username,password FROM `faculty` WHERE `username`='$username' AND `password`='$password'";
     $run= mysqli_query($con,$sql);
     $row= mysqli_num_rows($run);
     if($row<1){
         ?>
         <script>alert("Opps! Username and Pswd not matched..");
             window.open('login.php','_self');
     </script><?php
     }
     else{
         $data= mysqli_fetch_assoc($run);
        
         
      
       
         header('location:login1.html');
 
     }
 }
?>