<?php
session_start();

    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);
  
   if($_SERVER['REQUEST_METHOD']== "POST")
   {
    //something was posted through form

    $stud_id = $_POST['updateStudID'];
    $f_name = $_POST['updateFname'];
    $l_name = $_POST['updateLname'];
    $phone = $_POST['updatePhone'];
    $dob = $_POST['updateDOB'];
    $blood_group = $_POST['updateBloodGroup'];
    $dept = $_POST['updateDept'];
    $program = $_POST['updateProgram'];

    //checking whether user exists
    $currentUser = $_SESSION['username'];
    $updateSql = "UPDATE student SET stud_id='$stud_id',f_name='$f_name',l_name = '$l_name',
    phone='$phone',dob='$dob',blood_group='$blood_group',dept_name = '$dept'
     WHERE username = '$currentUser'";
    $result = mysqli_query($con,$updateSql);

    if($result){   
        echo "Profile Updated Successfully!";
    }
    else{
        echo "Profile cannot be updated!";
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
  <title>Update Profile</title>
</head>
<body>
    <nav>
        <div class="logo">Class-ify</div>
        <!--<button class="button button1">Login</button>-->
        <button class="button button2"><a href="index.php">Go Back</a></button>
    </nav>
  <div class="login-wrapper">
        <form method="post" class="form">
      <img src="login.png" alt="">
      <h2>Update Profile</h2>

      <div class="input-group">
        <input type="text" maxlength="15" name="updateStudID" id="updateStudID" required>
        <label for="updateStudID">Student ID</label>
      </div>
      <div class="input-group">
      <input type="text" maxlength="15" name="updateFname" id="updateFname" required>
        <label for="updateFname">First Name</label>
      </div>
      <div class="input-group">
      <input type="text" maxlength="15" name="updateLname" id="updateLname" required>
        <label for="updateLname">Last Name</label>
      </div>
      <div class="input-group">
      <input type="text" maxlength="15" name="updatePhone" id="updatePhone" required>
        <label for="updatePhone">Phone Number</label>
      </div>
      <div class="input-group">
      <input type="date" name="updateDOB" id="updateDOB" required style="color:black;">
        <label for="updateDOB">Date of Birth</label>
      </div>
      
      <div class="input-group">
      <input type="text" maxlength="5" name="updateBloodGroup" id="updateBloodGroup" required>
        <label for="updateBloodGroup">Blood Group</label>
      </div>

      <div class="select-group">
      <label for="updateDept">Department:</label>
      <select name="updateDept" id="updateDept">
        <option value="CSE">CSE</option>
        <option value="EEE">EEE</option>
        <option value="BTM">BTM</option>
      </select><br><br>
      </div>

      <div class="select-group">
      <label for="updateProgram">Program:</label>
      <select name="updateProgram" id="updateProgram">
      <option value="CSE">CSE</option>
        <option value="EEE">EEE</option>
        <option value="BTM">BTM</option>
      </select><br><br>
      </div>

      <div class="select-group">
      <label for="year">Year:</label>
      <select name="year" id="year">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
      </select><br><br>
      </div>

      <div class="select-group">
      <label for="semester">Semester:</label>
      <select name="semester" id="semester">
        <option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option>
        <option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option>
        <option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option>
        <option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option>
      </select><br><br>
      </div>
     
      <input type="submit" value="Update" class="submit-btn">
        </form>

  </div>
</body>
</html>