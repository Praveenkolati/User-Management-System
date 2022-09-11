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

    <img src="img_avatar.png" alt="avatar" class="center">
    <form action="login2.html">
        <div class="bc">
            <div>USERID<br><br>
                <i class="fa fa-user-circle"></i>
                <input type="text" placeholder="User Name">
            </div><br>
            <div> PASSWORD <br><br>
                <i class="fa fa-key"></i>
                <input type="password" placeholder="Password"><br>
            </div>
        </div><br><br>
        <a href="home.html"><button type="submit" width="auto">Login</button></a>
        <br><br>

        <a class="df" href="test.html" target="_blank">Create accout</a>
        <a href="fnp.html" target="_blank">Forgot password</a>
    </form>
    


</body>

</html>

<?php

include('dbconnection.php');
if(isset($_POST['login'])){
   $username = $_POST['username'] ;
   $password = $_POST['password'];
   $sql= "SELECT username,password FROM `student` WHERE `username`='$username' AND `password`='$password'";
    $run= mysqli_query($conn,$sql);
    $row= mysqli_num_rows($run);
    if($row<1){
        ?>
        <script>alert("Opps! Username and Pswd not matched..");
            window.open('login.php','_self');
    </script><?php
    }
    else{
        $data= mysqli_fetch_assoc($run);
        $id=$data['id'];
        
      
        header('location:home.html');

    }
}
?>