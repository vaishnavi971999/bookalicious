<?php
include ("connect.php");
session_start();
if(isset($_SESSION['loggedin'])&&$_SESSION['loggedin']==true){
header('location:admin_main.php');
exit;

}
$error="";


if($_SERVER["REQUEST_METHOD"] == "POST"){
  
        $username = $_POST["username"];
        $password = $_POST["password"];
        // if(isset($_POST["username"] && isset($_POST["password"]))){
        $sql = "select username,password from admin where username='$username' and password='$password' ";
        $result = mysqli_query($link,$sql);

        if(mysqli_num_rows($result)>0){
            session_start();
            $_SESSION['loggedin']=true;
            header("location:admin_main.php");
        }
        else
        {
            echo '<script type="text/javascript"> alert("Invalid credentials")</script>';
        }
    
  }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="css/style.css" rel="stylesheet">

</head>
<body>
<div id="main_wrapper">
    <h1><b>Login Form</b></h1>
    <img src="images/login1.jpg" class="login_emo"><br>
    <form action="" method="POST" class="form">
        <label><b>Username</b></label><br>
        <input name="username" type="text" class="inputvalues" placeholder="Type your username"><br><br>
        <label><b>Password</b></label><br>
        <input name="password" type="password" class="inputvalues" placeholder="Type your password"><br><br>
        <input name="login" type="submit" id="login_btn" value="login">
</form>
</div>
</body>
</html>