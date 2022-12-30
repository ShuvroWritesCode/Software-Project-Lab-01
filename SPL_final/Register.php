<?php

session_start();

    include("connection.php");
    include("functions.php");

  //  if($_SERVER['REQUEST_METHOD']== "POST")
  //  {
  //   //something was posted through form

  //   $mail = $_POST['email'];
  //   $username = $_POST['username'];
  //   $password = $_POST['password'];
  //   $hashPass = password_hash($password, PASSWORD_DEFAULT);

  //   //checking whether user exists
  //   $existSql = "SELECT * FROM student WHERE username = '$username'";
  //   $result = mysqli_query($con,$existSql);
  //   $numExistRows = mysqli_num_rows($result);

  //   if($numExistRows>0){
  //       $exists=true;
  //       echo "<script>alert('Username Already Exists')</script>";
  //   }
  //   else{
  //       if(!empty($mail) && !empty($username) && !empty($password) && !is_numeric($username))
  //       {
  //           //save to database
  //           if(!filter_var($mail, FILTER_VALIDATE_EMAIL)){
  //             echo "<script>alert('Enter a valid e-mail!')</script>";
  //           }
  //           else if(!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[\~?!@#\$%\^&\*])(?=.{8,})/', $password)){
  //             echo "<script>alert('Password should have at least 1 uppercase, lowercase character and digit!')</script>";
  //           }
  //           else if(strlen($password)<8){
  //             echo "<script>alert('Minimum length of password should be 8!')</script>";
  //           }
  //           else{
  //           $query = "insert into student (e_mail, username,password) values ('$mail', '$username','$hashPass')";

  //           mysqli_query($con, $query);


  //           //redirect
  //           header("Location: login.php");
  //           die;
  //           }

  //       }
  //     }
  // }


?>







<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Classify Sign Up Page</title>
    <link rel="stylesheet" href="register.css" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
  </head>
  <body>
    <!--Classify Signup from start-->
    <div class="main">
      <form method="post">
        <h2 class="first_title">Create an account</h2>
        <p class="first_sub_title" id="sub_title">It's quick and easy.</p>
        <hr />
        <!--Input section start-->
        <div class="input">
          <input type="text" placeholder="Username" class="username" id="all" name="username" required />
          <br />
          <input type="email" placeholder="Email address" name="email" id="all1" required />
          <br />
          <input type="password" placeholder="New password" name="password" id="all1" required />
          <br />
          <input type="password" placeholder="Confirm password" name="cpassword" id="all1" required />
          <br />
        </div>
        <!--Input section end-->
        <!--Date of Birth section start-->
        <p class="sub_title_2" id="sub_title">Date of Birth</p>
        <select>
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
          <option>6</option>
          <option>7</option>
          <option>8</option>
          <option>9</option>
          <option>11</option>
          <option>12</option>
          <option>13</option>
          <option>14</option>
          <option>15</option>
          <option>16</option>
          <option>17</option>
          <option>18</option>
          <option>19</option>
          <option>20</option>
          <option>21</option>
          <option>22</option>
          <option>23</option>
          <option>24</option>
          <option>25</option>
          <option>26</option>
          <option>27</option>
          <option>28</option>
          <option>29</option>
          <option>30</option>
          <option>31</option>
        </select>
        <select>
          <option>January</option>
          <option>February</option>
          <option>March</option>
          <option>April</option>
          <option>May</option>
          <option>June</option>
          <option>July</option>
          <option>August</option>
          <option>September</option>
          <option>October</option>
          <option>November</option>
          <option>December</option>
        </select>
        <select>
          <option>1994</option>
          <option>1995</option>
          <option>1996</option>
          <option>1997</option>
          <option>1998</option>
          <option>1999</option>
          <option>2000</option>
          <option>2001</option>
          <option>2002</option>
          <option>2003</option>
          <option>2004</option>
          <option>2005</option>
        </select>
        <!--Date of Birth section end-->
        <br />

<?php
if($_SERVER['REQUEST_METHOD']== "POST")
{
 //something was posted through form

 $mail = $_POST['email'];
 $username = $_POST['username'];
 $password = $_POST['password'];
 $cpassword = $_POST['cpassword'];
 $hashPass = password_hash($password, PASSWORD_DEFAULT);

 //checking whether user exists
 $existSql = "SELECT * FROM student WHERE username = '$username'";
 $result = mysqli_query($con,$existSql);
 $numExistRows = mysqli_num_rows($result);

 if($numExistRows>0){
     $exists=true;
     echo "<br>";
     echo '<span style="color: red">'.'<b>'.'Username Already Exists!'.'</b>'.'</span>'."\n";
 }
 else{
     if(!empty($mail) && !empty($username) && !empty($cpassword) && !empty($password) && !is_numeric($username))
     {
         //save to database
         if(!filter_var($mail, FILTER_VALIDATE_EMAIL)){
          echo "<br>";
           echo '<span style="color: red">'.'<b>'.'Enter a valid e-mail!'.'</b>'.'</span>'."\n";
         }
         else if(!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[\~?!@#\$%\^&\*])(?=.{8,})/', $password)){
          echo "<br>";
           echo '<span style="color: red">'.'<b>'.'Password should have at least 1 uppercase, lowercase character and digit!'.'</b>'.'</span>'."\n";
         }
         else if(strlen($password)<8){
          echo "<br>";
           echo '<span style="color: red">'.'<b>'.'Minimum length of password should be 8!'.'</b>'.'</span>'."\n";
         }
         else if($password != $cpassword){
          echo "<br>";
           echo '<span style="color: red">'.'<b>'.'Passwords does not match!'.'</b>'.'</span>'."\n";
         }
         else{
         $query = "insert into student (e_mail, username,password) values ('$mail', '$username','$hashPass')";

         mysqli_query($con, $query);


         //redirect
         header("Location: login.php");
         die;
         }

     }
   }
}
?>



        <!--Gender section start-->
        <!-- <p class="sub_title_3" id="sub_title">Gender</p>
        <div class="female" id="all_gender">
          <label for="female"><b>Female</b> </label>
          <input type="radio" name="gender" value="female" />
        </div>
        <div class="male" id="all_gender">
          <label for="male"><b>Male</b></label>
          <input type="radio" name="gender" value="male" />
        </div> -->
        <!-- <div class="other" id="all_gender">
          <label for="other"><b>Custom</b></label>
          <input type="radio" name="gender" value="other" />
        </div> -->
        <!--Gender section end-->
        <!-- <br /> -->
        <!-- <p class="sub_title_4">
          By clicking Sign Up, you agree to our <a href="#"> Terms, Data Policy</a> and
          <a href="">Cookie</a>
          Policy. You may receive SMS notifications from us and can opt out at any time.
        </p> -->
        <input type="submit" value="Signup" class="submit" />
      </form>
    </div>
    <!--Facebook Signup from end-->
  </body>
</html>