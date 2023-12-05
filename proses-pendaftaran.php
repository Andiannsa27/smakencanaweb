<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

    // ambil data dari formulir
    $nama = $_POST['nama'];
    $nik = $_POST['nik'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $jurusan = $_POST['jurusan'];
    $mtk = $_POST['mtk'];
    $bing = $_POST['bing'];
    $bind = $_POST['bind'];
    $sekolah = $_POST['sekolah_asal'];

    date_default_timezone_set("Asia/Jakarta");

	$tanggal = date("Y:m:d");

    // buat query
    $sql = "INSERT INTO calon_siswa (nama, nik, alamat, jenis_kelamin, agama, jurusan, mtk, bing, bind, sekolah_asal, tanggal) VALUE ('$nama','$nik', '$alamat', '$jenis_kelamin', '$agama', '$jurusan', '$mtk', '$bing', '$bind', '$sekolah', '$tanggal')";
    $query = mysqli_query($koneksi, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=success');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: form-daftar.php?status=failed');
    }


} else {
    die("Access Prohibited...");
}

?>