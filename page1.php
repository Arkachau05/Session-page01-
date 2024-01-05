<?php
session_start();
if(isset($_REQUEST['mode']))
{
    $username=$_REQUEST['username'];
    $phnumber=$_REQUEST['phnumber'];
    $password=$_REQUEST['password'];
    $email=$_REQUEST['email'];
    $gender=$_REQUEST['gender'];
    $_SESSION['login1']=$username;
    $_SESSION['login2']=$gender;
    $_SESSION['login3']=$phnumber;
    $_SESSION['login4']=$email;
    header("location:page2.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page1</title>
    <link rel="stylesheet" href="page1.css">
</head>
<body>
<div class="login1">
    <div class="login2">
        <form>
            <h1>login Page</h1><br>
            <input type="hidden" name="mode" value="1">
            <input type="text" name="username" placeholder="Username" class="box"><br><br>

          <p>Select Gender:</p>
          <input type="radio"name="gender" value="male">
          <label for="male">Male</label>
          <input type="radio"name="gender" value="female">
          <label for="female">Female</label><br><br>
          
            <input type="number" name="phnumber" placeholder="Phone Number" class="box"><br><br>
            <input type="email" name="email" placeholder="Email" class="box"><br><br>
            <input type="password" name="password" placeholder="Password" class="box"><br><br>
            <input type="submit" class="box1">
        </form>
    </div>
</div>
</body>
</html>