<?php
session_start();

    //to check whether user is registered
    $_SESSION;

    
    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);

//     if($_SERVER['REQUEST_METHOD']== "POST" && isset($_POST['room_finder'])){
//       //something was posted through form

//     $day = $_POST['day'];
//     $time = $_POST['time'];
    
//     $query = "SELECT room_no FROM routine WHERE routine.time = '$time' and routine.day = '$day' and routine.vacant='1' ";
//     $result = mysqli_query($con,$query);

//     if($result && mysqli_num_rows($result)>0){
//     while($row = mysqli_fetch_assoc($result)){
//         echo $row['room_no'];
//     }
// }else{
//     echo "No rooms are vacant!";
//     }
//   }
?>






<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>essentials</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <header class="header">

        <a href="#" class="logo"><i class="fas fa-lightbulb"></i> Classify </a>
     
        <nav class="navbar">
           <div id="close-navbar" class="fas fa-times"></div>
           <a href="home.php">home</a>
           <a href="course.php">Essentials</a>
        </nav>
     
        <!-- <div class="icons">
           <div id="account-btn" class="fas fa-user"></div>
           <div id="menu-btn" class="fas fa-bars"></div>
        </div> -->
     
     </header>

      <div>
   <section class="courses" id="tools" style="background-color: #7d7d7d;">

      <h1 class="heading" style="color: white;">Find what's essential</h1>

      <div class="box-container">

         <div class="box">
            <div class="content" >
               <h3 style="color: white;">Administration Links</h3>
               <p style="color: white;">Find administrative links that you need here. </p>
               <a href="#h1" class="btn">read more</a>
            </div>
         </div>

         <div class="box">
            <div class="content">
               <h3 style="color: white;">Academic resources</h3>
               <p style="color: white;">Find academic resources for your semester</p>
               <a href="#h2" class="btn">read more</a>
            </div>
         </div>

         <div class="box">
            <div class="content">
               <h3 style="color: white;">Find a Vacant Place</h3>
               <p style="color: white;">Find room take quiz, even to study in peace!</p>
               <a href="#h3" class="btn">read more</a>
            </div>
         </div>
      </div>

      <div class="load-more"> <div class="btn">load more</div> </div>
      </section>

      <section class="Links">
         <h1 class="heading" id="h1">Essential Links</h1>
         <div class="table-responsive">
            <table class="overflow-x: auto;" id="Links">
              <thead>
                <tr>
                  <th scope="col">Tags</th>
                  <th scope="col">File Name</th>
                  <th scope="col">Link</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <p>Administrative</p>
                  </td>
                  <td>
                    <p>Registrar Office</p>
                  </td>
                  <td>
                    <a href="https://www.iutoic-dhaka.edu/administration/registrar_office" target="_blank" rel="noreferrer">Visit</a>
                  </td>
                </tr>
      
                <tr>
                  <td>
                    <p>Hall of Residence</p>
                  </td>
                  <td>
                    <p>Provost Office (Male)</p>
                  </td>
                  <td>
                    <a href="https://www.iutoic-dhaka.edu/administration/provost_office" target="_blank" rel="noreferrer">Visit</a>
                  </td>
                </tr>
      
                <tr>
                  <td>
                    <p>Hall of Residence</p>
                  </td>
                  <td>
                    <p>Provost Office (Female)</p>
                  </td>
                  <td>
                    <a href="https://www.iutoic-dhaka.edu/administration/provost-office-female" target="_blank" rel="noreferrer">Visit</a>
                  </td>
                </tr>
      
                <tr>
                  <td>
                    <p>Administrative</p>
                  </td>
                  <td>
                    <p>Academic Calender 2021-22</p>
                  </td>
                  <td>
                    <a href="https://cse.iutoic-dhaka.edu/academics-1/calendar" target="_blank" rel="noreferrer">Visit</a>
                  </td>
                </tr>
      
                <tr>
                  <td>
                    <p>Administrative</p>
                  </td>
                  <td>
                    <p>IUT CSE Faculty-Members' Contact</p>
                  </td>
                  <td>
                    <a href="https://cse.iutoic-dhaka.edu/people/faculty" target="_blank" rel="noreferrer">Visit</a>
                  </td>
                </tr>
      
                <tr>
                  <td>
                    <p>Accounts</p>
                  </td>
                  <td>
                    <p>Account Office' Contact</p>
                  </td>
                  <td>
                    <a href="https://www.iutoic-dhaka.edu/administration/finance_and_accounts_office" target="_blank" rel="noreferrer">Visit</a>
                  </td>
                </tr>
      
                <tr>
                  <td>
                    <p>All</p>
                  </td>
                  <td>
                    <p>CSE 20 Info</p>
                  </td>
                  <td>
                    <a href="https://www.google.com/search?q=cyan+blue&rlz=1C5CHFA_enBD958BD958&oq=cyan+blue&aqs=chrome..69i57j0i512j0i20i263i512j0i512l7.2119j0j4&sourceid=chrome&ie=UTF-8" target="_blank" rel="noreferrer">Visit</a>
                  </td>
                </tr>
      
                <tr>
                  <td>
                    <p>Senior Drive</p>
                  </td>
                  <td>
                    <p>SWE-19 Study Materials</p>
                  </td>
                  <td>
                    <a href="https://www.google.com/search?q=cyan+blue&rlz=1C5CHFA_enBD958BD958&oq=cyan+blue&aqs=chrome..69i57j0i512j0i20i263i512j0i512l7.2119j0j4&sourceid=chrome&ie=UTF-8" target="_blank" rel="noreferrer">Visit</a>
                  </td>
                </tr>
      
                <tr>
                  <td>
                    <p>Our Drive</p>
                  </td>
                  <td>
                    <p>SWE-20 Study Materials</p>
                  </td>
                  <td>
                    <a href="books-page.html" target="_blank" rel="noreferrer">Visit</a>
                  </td>
                </tr>
              </tbody>
            </table>
      </section>
</div>

<div class="subjects">
   <section class="courses" style="background-color: #7d7d7d;">
      <h1 class="heading" id="h2" style="color: white;">Resources</h1>

         <div class="box-container" style="border-style: none;">
            <div class="box" style="background-color: #7d7d7d;">
                  <div class="content" >
                     <h3 style="color: white;">Senior's Drive</h3>
                     <p style="color: white;">Find drive of Batch-19</p>
                     <a href="#h1" class="btn">Guide Me</a>
                  </div>
            </div>
            <div class="box" style="background-color: #7d7d7d;">
                  <div class="content">
                     <h3 style="color: white;">Our Drive</h3>
                     <p style="color: white;">Find drive of ours</p>
                     <a href="#h2" class="btn">Guide Me</a>
                  </div>
            </div>

            <div class="box" style="background-color: #7d7d7d;">
                  <div class="content">
                     <h3 style="color: white;">Recommended Resources</h3>
                     <p style="color: white;">Resources by the Faculty-members</p>
                     <a href="#h3" class="btn" role="button">Show</a>
                  </div>
            </div>
      </div>
   </section>
      <section class="table-show">
         <table id="Books">
            <caption>Table showing recommended books and other resources for various courses</caption>
            <thead>
              <tr>
                <th scope="col">Course</th>
                <th scope="col">Course Name</th>
                <th scope="col">Book Name</th>
                <th scope="col">Author Name</th>
                <th scope="col">Remarks</th>
                <th scope="col">Book</th>
                <th scope="col">Solution</th>
              </tr>
            </thead>
            <tbody>
             <tr>
               <td>
                 <p>CSE 4305</p>
               </td>
               <td>
                 <p>Computer Organization and Architecture</p>
               </td>
               <td>
                 <p>Computer Organization and Design (5th Edition)</p>
               </td>
               <td>
                 <p>David A. Patterson</p>
               </td>
               <td>
                 <p>Main Book</p>
               </td>
               <td>
                 <a href="https://drive.google.com/file/d/1_Nl-IsocyGa6R5Zu4ocI4U-IgIJFSHIj/view?usp=sharing" target="_blank" rel="noreferrer">Visit</a>
               </td>
               <td>
                 <p>N/A</p>
               </td>
             </tr>
             <tr>
                <td>
                  <p>CSE 4305</p>
                </td>
                <td>
                  <p>Computer Organization and Architecture</p>
                </td>
                <td>
                  <p>Computer Architecture-A quantitative approach</p>
                </td>
                <td>
                  <p>John L. Hennessy</p>
                  <p>David A. Patterson</p>
                </td>
                <td>
                  <p>Companion Book</p>
                </td>
                <td>
                  <a href="https://drive.google.com/file/d/137zB2a3kmN7lEE7UsQmea8FcJfGOlCjj/view?usp=sharing" target="_blank" rel="noreferrer">Visit</a>
                </td>
                <td>
                  <p>N/A</p>
                </td>
              </tr>
              <tr>
                <td>
                  <p>CSE 4305</p>
                </td>
                <td>
                  <p>Computer Organization and Architecture</p>
                </td>
                <td>
                  <p>Slides</p>
                </td>
                <td>
                  <p>Instructor</p>
                </td>
                <td>
                  <p>Slides</p>
                </td>
                <td>
                  <a href="https://drive.google.com/drive/folders/18jn1qFrnOrXLBfCArzN7zD-hX74DZyKP?usp=sharing" target="_blank" rel="noreferrer">Visit</a>
                </td>
                <td>
                  <p>N/A</p>
                </td>
              </tr>
      
              <tr>
                <td>
                  <p>CSE 4309</p>
                </td>
                <td>
                  <p>Theory of Computing</p>
                </td>
                <td>
                  <p>Introduction to Automata theory, Languages & Computation</p>
                </td>
                <td>
                  <p>John E. Hopcroft</p>
                  <p>Rajeev Motwani</p>
                  <p>Jeffrey D. Ullman</p>
                </td>
                <td>
                  <p>Main Book</p>
                </td>
                <td>
                  <a href="https://drive.google.com/file/d/13WtKgY82upJnVLkY-6Hx9HQayIhPkJ4w/view?usp=sharing" target="_blank" rel="noreferrer">Visit</a>
                </td>
                <td>
                  <p>N/A</p>
                </td>
              </tr>
      
              <tr>
                <td>
                  <p>CSE 4309</p>
                </td>
                <td>
                  <p>Theory of Computing</p>
                </td>
                <td>
                  <p>Introduction To The Theory Of Computation</p>
                </td>
                <td>
                  <p>Michael Sipser</p>
                </td>
                <td>
                  <p>Companion Book</p>
                </td>
                <td>
                  <a href="https://drive.google.com/file/d/11Ns5E7hr1aA2vNKUDYeAf6M016D1SLTF/view?usp=sharing" target="_blank" rel="noreferrer">Visit</a>
                </td>
                <td>
                  <p>N/A</p>
                </td>
              </tr>
      
              <tr>
                <td>
                  <p>CSE 4309</p>
                </td>
                <td>
                  <p>Theory of Computing</p>
                </td>
                <td>
                  <p>Slides</p>
                </td>
                <td>
                  <p>Instructor</p>
                </td>
                <td>
                  <p>Slides</p>
                </td>
                <td>
                  <a href="https://drive.google.com/drive/folders/1Vg5bDzpnQApWoI6LSWUblQJzNRlUkeO_?usp=sharing" target="_blank" rel="noreferrer">Visit</a>
                </td>
                <td>
                  <p>N/A</p>
                </td>
              </tr>
      
              <tr>
                <td>
                  <p>CSE 4303</p>
                </td>
                <td>
                  <p>Data Structure</p>
                </td>
                <td>
                  <p>Introduction to Algorithms</p>
                </td>
                <td>
                  <p>Thomas H. Cormen</p>
                  <p>Charles E. Leiserson</p>
                  <p>Ronald L. Rivest</p>
                  <p>Clifford Stein</p>
                </td>
                <td>
                  <p>Main Book</p>
                </td>
                <td>
                  <a href="https://drive.google.com/file/d/1KOFifxxtBIn85P99DxtC3PxOEvFtxkMs/view?usp=sharing" target="_blank" rel="noreferrer">Visit</a>
                </td>
                <td>
                  <p>N/A</p>
                </td>
              </tr>
      
              <tr>
                <td>
                  <p>CSE 4303</p>
                </td>
                <td>
                  <p>Data Structure</p>
                </td>
                <td>
                  <p>Slides</p>
                </td>
                <td>
                  <p>Instructor</p>
                </td>
                <td>
                  <p>Materials</p>
                </td>
                <td>
                  <a href="https://drive.google.com/drive/folders/1ByWQrU1vMuju7Fw6lzfxCvxO0dNx5O3k?usp=sharing" target="_blank" rel="noreferrer">Visit</a>
                </td>
                <td>
                  <p>N/A</p>
                </td>
              </tr>
      
              <tr>
                <td>
                  <p>CSE 4301</p>
                </td>
                <td>
                  <p>Object Oriented Concepts - II</p>
                </td>
                <td>
                  <p>Slides</p>
                </td>
                <td>
                  <p>Instructor</p>
                </td>
                <td>
                  <p>Materials</p>
                </td>
                <td>
                  <a href="https://drive.google.com/drive/folders/1gwF8Woy87PpLISLk2MwDp1EtM1VzTPe9?usp=sharing" target="_blank" rel="noreferrer">Visit</a>
                </td>
                <td>
                  <p>N/A</p>
                </td>
              </tr>
            </tbody>
       </table>
      </section>

      <!-- Room Finder -->
      <form method="post">
      <section class="subjects">
        <h1 class="heading" id="h3">Room Finder</h1>
        <link
          rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.css"
          integrity="sha512-0nkKORjFgcyxv3HbE4rzFUlENUMNqic/EzDIeYCgsKa/nwqr2B91Vu/tNAu4Q0cBuG4Xe/D1f/freEci/7GDRA=="
          crossorigin="anonymous"
          referrerpolicy="no-referrer"
        />
        <h1>Find a vacant classroom</h1>
        <select data-placeholder="Choose a preferable day..." class="ch" id="day" name="day">
          <option></option>
          <option>Monday</option>
          <option>Tuesday</option>
          <option>Wednesday</option>
          <option>Thursday</option>
          <option>Friday</option>
        </select>
      
        <select data-placeholder="Choose a period..." class="ch" id="time" name="time">
          <option></option>
          <option>8:00AM - 9:15AM</option>
          <option>9:15AM - 10:30AM</option>
          <option>10:30AM - 11:45AM</option>
          <option>11:45AM - 01:00PM</option>
          <option>02:30PM - 03:45PM</option>
          <option>03:45PM - 05:00PM</option>
        </select>
      
        <input type="submit" value="search" name="room_finder" class="chosen-button" id="search-button"></input>
      
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.js" integrity="sha512-eSeh0V+8U3qoxFnK3KgBsM69hrMOGMBy3CNxq/T4BArsSQJfKVsKb5joMqIPrNMjRQSTl4xG8oJRpgU2o9I7HQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
          $(document).ready(function () {
            $(".ch").chosen({
              width: "45%",
              no_results_text: "nothing!",
              allow_single_deselect: true,
            });
          });
        </script>
        
        <?php 
         if($_SERVER['REQUEST_METHOD']== "POST" && isset($_POST['room_finder'])){
          //something was posted through form
       
        $day = $_POST['day'];
        $time = $_POST['time'];
        
        $query = "SELECT room_no FROM routine WHERE routine.time = '$time' and routine.day = '$day' and routine.vacant='1' ";
        $result = mysqli_query($con,$query);
        
        if($result && mysqli_num_rows($result)>0){
          echo "<br>";
          echo '<table border="3">'.'<tr>'.'<th>'.'<div style="font-size:3em;">Vacant Rooms are: </div>'.'</th>';
        while($row = mysqli_fetch_assoc($result)){
            echo '<th>'.'<span style="font-size: 1.5em">' . "Room Number: " .$row['room_no']. '</span>'.'</th>';
        }
        echo '</tr>'.'</table>';
    }else{
        echo "\n No rooms are vacant!\n";
        }
      }
      ?>
      </section>
      
      <!-- <script>
        const searchButton = document.getElementById('search-button');
      
        searchButton.addEventListener('click', function() {
          const day = document.getElementById('day').value;
          const time = document.getElementById('time').value;
      
          searchClassrooms(day, time);
        });
      
        function searchClassrooms(day, time) {
          // Write your code here to search for classrooms that match the criteria
        }
      </script> -->
      </div>
      </form>






<!-- home courses slider section ends -->


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