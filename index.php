<?php
session_start();

    //to check whether user is registered
    $_SESSION;

    
    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);

?>


<!DOCTYPE html>
<html>
    <head>
        <title>My Website</title>
</head>

<body>
    <a href="logout.php">Logout </a><br>
    <a href="updateprofile.php">Update Profile</a>
    <h1> This is the index page</h1>


    <br>
    Hello, <?php echo $user_data['username']; ?>
</body>
</html>