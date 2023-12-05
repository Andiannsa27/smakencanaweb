<?php

include "config.php";
session_start();
if (!isset($_SESSION['username'])){
header ("location:form-login.php");
}

?>
<!DOCTYPE html>

<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Index</title>
      <link rel="stylesheet" href="styleindexx.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>
   <body>
      <div class="wrapper">
         <input type="checkbox" id="btn" hidden>
         <label for="btn" class="menu-btn">
         <i class="fas fa-bars"></i>
         <i class="fas fa-times"></i>
         </label>
         <nav id="sidebar">
            <div class="title">
               DASHBOARD
            <?php echo"" .$_SESSION['username'];?>
            </div>
            <ul class="list-items">
               <li><a href="index.php"><i class="fas fa-users"></i>Home</a></li>
               <li><a href="menu.php"><i class="fas fa-home"></i>Requirements</a></li>
               <li><a href="form-daftar.php"><i class="fas fa-sliders-h"></i>Registration Form</a></li>
               <li><a href="list-siswa.php"><i class="fas fa-stream"></i>Student List</a></li>
               <li><a href="form-feedback.php"><i class="fas fa-envelope"></i>Feedback</a></li>
               <li><a href="logout.php"><i class="fas fa-stop"></i>LogOut</a></li>
            </ul>
         </nav>
      </div>
      <div class="content">
      <img src="image/logo.jpg" alt="logo" width="150px" height="150px">
         <div class="header">
            SMA Kencana
         </div>
         <p>
            Smart and Noble
         </p>
      </div>
   </body>
</html>