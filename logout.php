<?php
session_start();
session_destroy();
echo "<script>alert('Thank You, Your Logout Successfully')</script>";
echo "<meta http-equiv='refresh' content='1 url=form-login.php'>";
?>