<?php
session_start();

include("connection.php");
include("functions.php");

// if($_SERVER['REQUEST_METHOD']== "POST")
// {
// //something was posted through form
// $username = $_POST['username'];
// $password = $_POST['password'];


// if(!empty($username) && !empty($password) && !is_numeric($username))
// {
//         //read from database

//         $query = "select * from student where username='$username' limit 1";
//         $result = mysqli_query($con, $query);

//     if($result){

//         if($result && mysqli_num_rows($result)>0)
//         {
//             $user_data = mysqli_fetch_assoc($result);
            
//             if(password_verify($password, $user_data['password'])){
//                     //redirect

//                     $_SESSION['id'] = $user_data['id'];
//                     $_SESSION['username'] = $user_data['username'];
//                 header("Location: home.php");
//                 die;
//             }
//         }
//     }
//     echo "<script>alert('Wrong Username or Password!')</script>";      
// }
// else{
//     echo "<script>alert('Enter Valid Info!')</script>";
// }
// }


?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classify Login Form</title>
    <link rel="stylesheet" href="css/login2.css">
    <link rel="stylesheet" href="frgt.css">
</head>
<body>

    <div class="container">
    
        <h1>Welcome to Classify</h1>
        <p>Login to explore.</p>
        </div>

    <header>
    <Form method="post">
        <div class="box">
            
            <!-- <h3 class="heading">Login</h3> -->
            <input type="text" name="username" id="username" placeholder="Username"><br>
            <input type="password" name="password" id="password" placeholder="Password">
        </div>
<?php
        if($_SERVER['REQUEST_METHOD']== "POST")
{
//something was posted through form
$username = $_POST['username'];
$password = $_POST['password'];


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
                header("Location: home.php");
                die;
            }
        }
    }
    echo "<br>"."<t>";
    echo '<span style="color: red">'.'<b>'.'Wrong Username or Password!'.'</b>'.'</span>'."\n";      
}
else{
    echo "<br>";
    echo "Enter Valid Info!\n";
}
}
?>
        <div class="link">
        <input type="submit" value="Login" class="submit" />
        </div>

        <div class="link1">
            <a href="#forgot-pw">Forgotten Password?</a>
        </div>
        
<!-- Forgot Password starts from here -->
<div id="forgot-pw">
        <a href="#" class="close">&times;</a>
        <h2>Reset Password</h2>
        <div class="input-group">
          <input type="email" name="email" id="email" required>
          <label for="email">Email</label>
        </div>
        <input type="submit" value="Submit" class="submit-btn">
    </div>
<!-- Forgot Password ends here -->
        <div class = "Create-acc">
            <p>Don't have an account? <a href="register.php">Create an account</a></p>
        </div>
</Form>
    </header>
</body>
</html>