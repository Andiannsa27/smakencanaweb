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
      <title>Menu</title>
      <link rel="stylesheet" href="stylemenu.css">
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
               REQUIREMENTS
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
      <div class="judul">
			<h1>Registration Conditions</h1>
		</div>
		<div class="nama">
			<h1>SMA Kencana</h1>
		</div>
      <div class="daftar">
			<h1>Registration :</h1>
            <li>Register on the Web http://www.psb.kencana.sch.id.</li>
			<li>Graduated from SMP/MTs level and equivalent.</li>
			<li>Have good academic achievement.</li>
			<li>Submit the required documents for re-registration.</li>
            <br>
            <br>
            <br>
		</div>
		<div class="ulang">
			<h1>Re-registration :</h1>
            <li>Come to SMA Kencana to re-registers.</li>
			<li>Diploma or certificate of graduation.</li>
			<li>Identity (Birth Certificate and KK).</li>
			<li>Certificate of achievement (if any).</li>
			<li>Parent's income certificate.</li>
			<li>Certificate of health.</li>
			<li>Statement of ability to pay school fees.</li>
		</div>

   </body>
</html>