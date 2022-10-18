<?php
session_start();

include("connection.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD']== "POST")
{
//something was posted through form
$username = $_POST['loginUser'];
$password = $_POST['loginPassword'];


if(!empty($username) && !empty($password) && !is_numeric($username))
{
        //read from database

        $query = "select * from student where username='$username' limit 1";
        $result = mysqli_query($con, $query);

    if($result){

        if($result && mysqli_num_rows($result)>0)
        {
            $user_data = mysqli_fetch_assoc($result);
            
            if(password_verify($password, $user_data['password'])){
                    //redirect

                    $_SESSION['id'] = $user_data['id'];
                    $_SESSION['username'] = $user_data['username'];
                header("Location: index.php");
                die;
            }
        }
    }
    echo "Wrong Username or Password!";      
}
else{
    echo "Enter Valid Info!";
}
}


?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="This is all-in-one Class Management Solution Class-ify">
  <meta property="og:image" content="logo">
  <meta property="og:title" content="Class-ify, the all in one Class Management System">
  <meta http-equiv="X-UA-Compatible">
  <link rel="stylesheet" href="style.css">
  <link rel = "stylesheet" href = "file:///E:/fontawesome/css/all.css">
  <title>Login Form</title>
</head>
<body>
    <nav>
        <div class="logo">Class-ify</div>
        <!--<button class="button button1">Login</button>-->
        <button class="button button2"><a href="signup.php">Register</a></button>
    </nav>
  <div class="login-wrapper">
    <form method="post" class="form">
      <img src="login.png" alt="">
      <h2>Login</h2>
      <div class="input-group">
        <input type="text" name="loginUser" id="loginUser" required>
        <label for="loginUser">Username</label>
      </div>
      <div class="input-group">
        <input type="password" name="loginPassword" id="loginPassword" required>
        <label for="loginPassword">Password</label>
      </div>
      <a href="#forgot-pw" class="forgot-pw">Forgot Password?</a>
      <input type="submit" value="Login" class="submit-btn">
    </form>

    <div id="forgot-pw">
      <form method="post" class="form">
        <a href="#" class="close">&times;</a>
        <h2>Reset Password</h2>
        <div class="input-group">
          <input type="email" name="email" id="email" required>
          <label for="email">Email</label>
        </div>
        <input type="submit" value="Submit" class="submit-btn">
      </form>
    </div>
  </div>
</body>
</html>