<?php 

	$server = "localhost";//nama server
	$user = "root"; //username server
	$pass = "";  //password
	$dbase = "pendaftaran_sma_kencana"; // database yang dipakai

	//Membuat koneksi
	$koneksi = mysqli_connect($server, $user, $pass, $dbase);

	//Mengecek koneksi 
	if(!$koneksi) {
	 die("Connection Failed : ".mysqli_connect_error());
	}

?>