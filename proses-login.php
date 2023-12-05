<?php
include("config.php");

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password_admin = $_POST['password_admin'];

    session_start();
    $sql = "SELECT * FROM admin_login where username='$username' and password_admin='$password_admin'";
    $query = mysqli_query($koneksi, $sql);
        
    if (mysqli_num_rows($query) > 0){
        $_SESSION['username'] = $username;
        header("location:index.php");
    }else{
        echo "<script>alert('Username or Password Wrong')</script>";
        echo "<meta http-equiv='refresh' content='1 url=index.php'>";
    }

} else {
    die("Access Prohibited...");
}


?>


