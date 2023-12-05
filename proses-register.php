<?php
include("config.php");

if(isset($_POST['register'])){

    $no_id = $_POST['no_id'];
    $nama_admin = $_POST['nama_admin'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password_admin = $_POST['password_admin'];

    $sql = "INSERT INTO admin_login (no_id, nama_admin, email, username, password_admin) VALUE ('$no_id','$nama_admin', '$email', '$username', '$password_admin')";
    $query = mysqli_query($koneksi, $sql);
        if ($query){
            echo "<script>alert('Successfully Registered')</script>";
            echo "<meta http-equiv='refresh' content='1 url=form-login.php'>";
        }else{
            echo "<script>alert('Failed to Register')</script>";
            echo "<meta http-equiv='refresh' content='1 url=form-register.php'>";
        }
    }
?>