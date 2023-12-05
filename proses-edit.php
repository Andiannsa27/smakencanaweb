<?php

include("config.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $id = $_POST['id'];
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

    // buat query update
    $sql = "UPDATE calon_siswa SET nama='$nama', nik='$nik', alamat='$alamat', jenis_kelamin='$jenis_kelamin', agama='$agama', jurusan='$jurusan', mtk='$mtk', bing='$bing', bind='$bind', sekolah_asal='$sekolah' WHERE id=$id";
    $query = mysqli_query($koneksi, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: list-siswa.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Failed to Save Changes...");
    }


} else {
    die("Access Prohibited...");
}

?>