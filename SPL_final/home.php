 <?php
session_start();
header("refresh: 300;");

    //to check whether user is registered
    $_SESSION;

    
    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);

    if($_SERVER['REQUEST_METHOD']== "POST" && isset($_POST['update']))
   {
    //something was posted through form

    $stud_id = $_POST['updateStudID'];
    $f_name = $_POST['updateFname'];
   //  $l_name = $_POST['updateLname'];
    $phone = $_POST['updatePhone'];
    $dob = $_POST['updateDOB'];
   //  $blood_group = $_POST['updateBloodGroup'];
    $dept = $_POST['updateDept'];
    $program = $_POST['updateProgram'];

    //checking whether user exists
    $currentUser = $_SESSION['username'];
    $updateSql = "UPDATE student SET stud_id='$stud_id',f_name='$f_name',
    phone='$phone',dob='$dob',dept_name = '$dept'
     WHERE username = '$currentUser'";
    $result = mysqli_query($con,$updateSql);

    if($result){
        echo "Profile Updated Successfully!";
    }
    else{
        echo "Profile cannot be updated!";
    }

  }

  if($_SERVER['REQUEST_METHOD']== "POST" && isset($_POST['logout'])){
   if(isset($_SESSION['id']))
{
   session_unset();
   session_destroy();
}

header("Location: home.php");
die;
  }
?> 







<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>classify</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
<!-- header section starts  -->

<header class="header">

   <a href="#" class="logo"><i class="fas fa-lightbulb"></i> Classify </a>

   <nav class="navbar">
    <div id="close-navbar" class="fas fa-times"></div>
    <a href="home.php">Home</a>
    <a href="#ClassWork">Tasks</a>
    <a href="course.php">Essentials</a>
    <div class="dropdown">
       <button class="dropbtn">Platforms</button>
       <div class="dropdown-content">
          <a href="https://classroom.google.com/" target="_blank">Google Classroom</a>
          <a href="https://lms.iutoic-dhaka.edu/login/index.php" target="_blank">IUT LMS</a>
          <a href="https://moodle.com/" target="_blank">Moodle</a>
       </div>
    </div>
 </nav>
 

   <div class="icons">
      <div id="account-btn" class="fas fa-user"></div>
      <div id="menu-btn" class="fas fa-bars"></div>
   </div>
   <?php 
   echo '<div style="font-size:2em;">'."Welcome ". $_SESSION['username']. '</div>'
    ?>

</header>

<!-- account form section starts  -->

<div class="account-form">

   <div id="close-form" class="fas fa-times"></div>

   <div class="buttons">
      <span class="btn active login-btn">Update</span>
      <span class="btn register-btn">Logout</span>

      <form class="login-form active" action="" method="post">
        <h3>Update Profile</h3>
        <input type="First Name" placeholder="enter your first name" class="box" name="updateFname">
        <!-- <input type="Last Name" placeholder="enter your last name" class="box" name="updateLname"> -->
        <input type="ID" placeholder="enter your ID" class="box" name="updateStudID">
        <input type="Department" placeholder="enter your department" class="box" name="updateDept">
        <input type="program" placeholder="enter your program" class="box" name="updateProgram">
        <input type="Contact" placeholder="enter your contact number" class="box" name="updatePhone">
        <input type="date" placeholder="enter your D.O.B" class="box" name="updateDOB">
        <!-- <input type="Blood group" placeholder="enter your Blood Group" class="box" name="updateBloodGroup"> -->
        <input type="submit" value="Update" class="btn" name="update">
     </form>

     <form class="register-form active" action="" method="post">
      <h3>Confirm to end the session</h3>
      <input type="submit" value="logout" class="btn" name="logout">
     </form>

   </div>


</div>

<!-- account form section ends -->

<!-- header section ends -->

<!-- home section starts  -->

<section class="home">

   <div class="swiper home-slider">
      
      <div class="swiper-wrapper">
         <section class="swiper-slide slide" style="background: url(images/Class.jpeg) no-repeat;">
            <div class="content">
               <h3>Welcome to Classify</h3>
               <p>The automated classroom management website where you can easily organize and manage your class works from one convenient platform.</p>
               <a href="#" class="btn">get started</a>
            </div>
         </section>

         <section class="swiper-slide slide" style="background: url(images/Classroom.jpeg) no-repeat;">
            <div class="content">
               <h3>Why use Classify?</h3>
               <p>With Classify, you can easily stay organized and on top of your workload, which can help you be a more effective and successful student.</p>
               <a href="#" class="btn">get started</a>
            </div>
         </section>

         <section class="swiper-slide slide" style="background: url(images/Room.jpeg) no-repeat;">
            <div class="content">
               <h3> how does Classify work?</h3>
               <p> It's simple! Just create an account and start. You can then track assignments, announcements, and find vacant rooms. It's that easy!</p>
               <a href="#" class="btn">get started</a>
            </div>
         </section>
      </div>

      <div class="swiper-pagination"></div>

   </div>
</section>

<!-- home section ends -->
<section class="home-courses">
  <h1 class="heading">Class Work</h1>
  <div class="swiper home-courses-slider">
     <div class="box-container">
        <div class="ClassWork">
           <iframe class="ClassWork" src="https://script.google.com/macros/s/AKfycbykLCTlBy4B8DbzBG6TasHdUdFC4UFG-aRQCNtOzJsFMY7lxe19Tp5KKws_2A-lwEpXfg/exec" style="border: 1px;" height="400" width="1210"></iframe>
         </div>
     </div>
  </div>
</section>

<!-- get Routine -->
<section class="subjects" style="background-color: #7d7d7d;">
   <h1 class="heading" style="color: white;">Find Your Routine</h1>

  <div class="box-container">
  <div class="section-button">
    <div class="button-container">
      <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.min.js"></script>
      <script type="text/javascript">
        $(function() {
          $('#button1').click(function() {
            $('#iframeHolder').html('<center><iframe id="iframe" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQ1g4lHYlqFqlJVBXhtjTNXf6Qq7m4VhW6cEU6WRGdiNB8nUn2RWWFqdI4qc1OIsmxu-uxeO_JHMbSP/pubhtml?gid=0&single=true" style="border:none;" width="830" height="560"></iframe></center>');
          });
        });
      </script>
      <button id="button1" class="action_btn">Section-A</button>
      <div class="centered" id="iframeHolder"></div>
    </div>

      <div class="button-container">
         <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.min.js"></script>
         <script type="text/javascript">
         $(function() {
            $('#button2').click(function() {
               $('#iframeHolder').html('<center><iframe id="iframe" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQ9Gm4xUxPtCmEbdd6UaeT8Bmu-QoYGuBs-uaQI6VvYxs6b3Mh4O6_mAWvVCQizdSyfYt3fxdYyWK3W/pubhtml?gid=0&single=true" style="border:none;" width="830" height="560"></iframe></center>');
            });
         });
         </script>
         <button id="button2" class="action_btn">Section-B</button>
         <div class="centered" id="iframeHolder"></div>
      </div>
   </div>
   </div>
</section>
<!-- routine ends here-->

<!-- subjects section starts  -->
<section class="subjects">
  <h1 class="heading" style="color: black;">CR Announcements</h1>
  <div class="box-container">
     <div class="announcement">
        <iframe class="announcement1" src="https://script.google.com/macros/s/AKfycbxHmOqMirVdkcJc6M3DMea3k9OdpVwuLat57iXEPzB2Xgg872bPMbOU2BbZtmbJ2nUl8g/exec" style="border:none;" height="400" width="1210"></iframe>
      </div>
  </div>
</section>
<!-- subjects section ends -->


<!-- home courses slider section ends -->

<div class="subjects">
  <h1 class="heading" style="color: black;">Want to explore more? Find essentials tools  <a href="course.html" target="_blank">here.</a></h1>
</div>
<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3> <i class="fas fa-lightbulb"></i> Classify </h3>
         <p>Follow our Socials</p>
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
      </div>

      <div class="box">
         <h3>quick links</h3>
         <a href="home.html" class="link">home</a>
         <a href="course.html" class="link">essentials</a>
         <a href="contact.html" class="link">contact</a>
      </div>

      <div class="box">
         <h3>useful links</h3>
         <a href="#" class="link">help center</a>
         <a href="#" class="link">ask questions</a>
         <a href="#" class="link">send feedback</a>
         <a href="#" class="link">private policy</a>
         <a href="#" class="link">terms of use</a>
      </div>

      <div class="box">
         <h3>newsletter</h3>
         <p>subscribe!</p>
         <form action="">
            <input type="email" name="" placeholder="enter your email" id="" class="email">
            <input type="submit" value="subscribe" class="btn">
         </form>
      </div>

   </div>

   <div class="credit"> created by <span>Team-12</span> for SPL | all rights reserved! </div>

</section>

<!-- footer section ends -->



<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>