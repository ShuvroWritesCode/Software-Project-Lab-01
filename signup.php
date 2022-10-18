<?php

session_start();

    include("connection.php");
    include("functions.php");

   if($_SERVER['REQUEST_METHOD']== "POST")
   {
    //something was posted through form

    $mail = $_POST['signupMail'];
    $username = $_POST['signupUsername'];
    $password = $_POST['signupPassword'];
    $hashPass = password_hash($password, PASSWORD_DEFAULT);

    //checking whether user exists
    $existSql = "SELECT * FROM student WHERE username = '$username'";
    $result = mysqli_query($con,$existSql);
    $numExistRows = mysqli_num_rows($result);

    if($numExistRows>0){
        $exists=true;
        echo "Username Already Exists";
    }
    else{
        if(!empty($mail) && !empty($username) && !empty($password) && !is_numeric($username))
        {
            //save to database

            $query = "insert into student (e_mail, username,password) values ('$mail', '$username','$hashPass')";

            mysqli_query($con, $query);


            //redirect
            header("Location: login.php");
            die;
        }
      }
  }

  else{
    echo "Please Enter Some Valid Information!";
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
  <title>Signup Form</title>
</head>
<body>
    <nav>
        <div class="logo">Class-ify</div>
        <button class="button button1"><a href="login.php">Login</a></button>
        <!--<button class="button button2"><a href="signup.php">Register</a></button>-->
    </nav>
  <div class="login-wrapper">
    <form method="post" class="form">
      <img src="login.png" alt="">
      <h2>SignUp</h2>
      <div class="input-group">
        <input type="text" maxlength="20" name="signupMail" id="signupMail" required>
        <label for="signupUser">E-mail</label>
      </div>
      <div class="input-group">
        <input type="text" maxlength="50" name="signupUsername" id="signupUsername" required>
        <label for="signupUser">Username</label>
      </div>
      <div class="input-group">
        <input type="password" name="signupPassword" id="signupPassword" required>
        <label for="signupPassword">Password</label>
      </div>
      <input type="submit" value="Signup" class="submit-btn">
    </form>
      <!--<a href="#forgot-pw" class="forgot-pw">Forgot Password?</a>
      

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
    </div>-->
  </div>
</body>
</html>