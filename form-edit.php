<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: list-siswa.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM calon_siswa WHERE id=$id";
$query = mysqli_query($koneksi, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data not found...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Edit Form | SMA Kencana</title>
    <link rel="stylesheet" type="text/css" href="styleedit.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<body>
    <header>
    <div class="jumbotron">
<table width="100%" height="120px">
    <tr>
        <td><center><img src="image/logo.jpg" alt="Logo" width="150px" height="150px" style="float:left"></center></td>
        <td style="float:left">
                <h1>SMA Kencana</h1>
                <p lang="id" translate="no"> "Smart And Noble" </plang="id">
        </td>
        </tr>
        </table>
        </div>
  <nav>  
  <ul>
       <li><a href="#back">Back to Dashboard</a></li>
 </ul>
</nav> 
    </header>
<main>
    <article class="card">
    <form action="proses-edit.php" method="POST" class="form">

        <h3>Edit Form</h3>
        <br>
            <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />

            <label for="nama">Name : </label>
            <input type="text" name="nama" value="<?php echo $siswa['nama'] ?>" />

            <label for="nik">NIK : </label>
            <input type="text" name="nik" maxlength="16" value="<?php echo $siswa['nik'] ?>" />
        
            <label for="alamat">Address : </label>
            <input type="text" name="alamat" placeholder="Street, RT/RW, Village, Districts, City, Province, Post Code" value="<?php echo $siswa['alamat'] ?>"/>
        
            <label for="jenis_kelamin">Gender : </label>
            <?php $jenis_kelamin = $siswa['jenis_kelamin']; ?>
            <select name="jenis_kelamin">
                <option <?php echo ($jenis_kelamin == 'Male') ? "selected": "" ?>>Male</option>
                <option <?php echo ($jenis_kelamin == 'Female') ? "selected": "" ?>>Female</option>
            </select>
        
            <label for="agama">Religion: </label>
            <?php $agama = $siswa['agama']; ?>
            <select name="agama">
                <option <?php echo ($agama == 'Islam') ? "selected": "" ?>>Islam</option>
                <option <?php echo ($agama == 'Catholic') ? "selected": "" ?>>Catholic</option>
                <option <?php echo ($agama == 'Protestant') ? "selected": "" ?>>Protestant</option>
                <option <?php echo ($agama == 'Hindu') ? "selected": "" ?>>Hindu</option>
                <option <?php echo ($agama == 'Buddha') ? "selected": "" ?>>Budha</option>
                <option <?php echo ($agama == 'Kong Hu Chu') ? "selected": "" ?>>Kong Hu Chu</option>
            </select>

            <label for="jurusan">Major : </label>
            <?php $jurusan = $siswa['jurusan']; ?>
            <select name="jurusan">
                <option <?php echo ($jurusan == 'IPS') ? "selected": "" ?>>IPS</option>
                <option <?php echo ($jurusan == 'MIPA') ? "selected": "" ?>>MIPA</option>
            </select>
     
            <label for="mtk">Mathematics : </label>
            <input type="text" name="mtk" maxlength="5" placeholder="ex: 90" value="<?php echo $siswa['mtk'] ?>" />

            <label for="bing">English : </label>
            <input type="text" name="bing" maxlength="5" placeholder="ex: 90" value="<?php echo $siswa['bing'] ?>" />

            <label for="bind">Indonesian Language : </label>
            <input type="text" name="bind" maxlength="5" placeholder="ex: 90" value="<?php echo $siswa['bind'] ?>" />

            <label for="sekolah_asal">The Origin Of The School : </label>
            <input type="text" name="sekolah_asal" placeholder="ex: SMP Gaya Baru" value="<?php echo $siswa['sekolah_asal'] ?>" />
       
            <?php
              $url = isset($_SERVER['HTTP_REFERER']) ? htmlspecialchars($_SERVER['HTTP_REFERER']) : 'index.php';
            ?>
            <button><a href="<?=$url?>" id="back">Back</a></button>
            <button type="submit" value="simpan" name="simpan">Save</button>

    </form>
</article>
</main>
<footer>
        <p>SMA Kencana &#169;PPTI@kencana.sch.id</p>
    </footer>
    </body>
</html>