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
//read from database
$query ="select * from users where Email = '$Email' limit 1";
$result=mysqli_query($con, $query);
if($result)
{
  if($result && mysqli_num_rows($result)>0)
    {
        $user_data=mysqli_fetch_assoc($result);
        if($user_data['Password']=== $Password)
        {
          $_SESSION['UserID']=$user_data['UserID'];
          header("Location:index3.php");
          die;

        }
    }
}
echo "Wrong Email or Password";
   }
   else
   {
    echo "Wrong Email or Password";
   }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login & Sign Up</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <input type="checkbox" id="check">
    <div class="login form">
      <header>Login</header>
      <form action="#" method="post">
        <input type="text" placeholder="Enter your email" name="Email">
        <input type="password" placeholder="Enter your password" name="Password">
        <input type="submit" class="button" value="Login">
      </form>
      <div class="signup">
        <span class="signup">Don't have an account?
         <a href="signup.php">Signup</a>
        </span>
      </div>
    </div>
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
    </div>
  </div>
</body>
</html>
