<?php
session_start();
include("connection.php");
include("functions.php");

if(($_SERVER['REQUEST_METHOD'])=="POST")
{
    //something was posted
   $Email= $_POST['Email'];
   $Password=$_POST['Password'];
   if(!empty($Email) && !empty($Password) && !is_numeric($Email))
   {
//save to database
$UserID=random_num(20);
$query ="insert into users(UserID, Email, Password) values('$UserID', '$Email', '$Password')";
mysqli_query($con, $query);
header("Location:login.php");
   }else
   {
    echo "Please enter some valid information!";
   }
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login & Sign Up Form</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="registration form">
      <header>Signup</header>
      <form action="#" method="post">
        <input type="text" name="Email" placeholder="Enter your email">
        <input type="password" name="Password" placeholder="Create a password">
        <input type="password" name="confirm" placeholder="Confirm your password">
        <input type="submit" class="button" value="Signup">
      </form>
      <div class="signup">
        <span class="signup">Already have an account?
         <label for="check">Login</label>
        </span>
      </div>
</body>
</html>