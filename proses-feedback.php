<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['feedback'])){

    // ambil data dari formulir
    $nama_admin = $_POST['nama_admin'];
    $no_id = $_POST['no_id'];
    $email = $_POST['email'];
    $topic = $_POST['topic'];
    $pesan = $_POST['pesan'];

    date_default_timezone_set("Asia/Jakarta");

	$tanggal = date("Y:m:d");

    // buat query
    $sql = "INSERT INTO feedback (nama_admin, no_id, email, topic, pesan, tanggal) VALUE ('$nama_admin','$no_id', '$email', '$topic', '$pesan', '$tanggal')";
    $query = mysqli_query($koneksi, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=success');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=failed');
    }


} else {
    die("Access Prohibited...");
}

?>