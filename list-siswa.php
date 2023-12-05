<?php include("config.php"); 
?>

<!DOCTYPE html>
<html>
<head>
    <title>List Student | SMA Kencana</title>
    <link rel="stylesheet" type="text/css" href="styleListsiswa.css">
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
  <nav class="b">  
  <ul>
       <li><a href="#back">Back to Dashboard</a></li>
 </ul>
</nav> 
    </header>
<main>
    <article class="card">
    <h3>Students Who Have Re-Registered</h3>

    <form method="GET" action="list-siswa.php">
        <label>Search :</label>
        <input class="search" type="text" name="kata_cari" value="<?php if(isset($_POST['kata_cari'])) {echo $_POST['kata_cari'];}?>"/>
        <!-- <input class="button1" type="submit" name="cari" value="Search" > -->
        <!-- <button class="button1" type="submit" value="cari" name="cari">Search</button> -->
        <button class="button1" type="submit">Search</button>
    </form>

    <br>
    <nav >
        <a href="form-daftar.php"><button class="f">[+] Add New</button></a>
    </nav>
    <br>

    <table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>NIK</th>
            <th>Address</th>
            <th>Gender</th>
            <th>Religion</th>
            <th>Major</th>
            <th>Mathematics</th>
            <th>English</th>
            <th>Indonesian Language</th>
            <th>The Origin Of The School</th>
            <th>Re-Registered Date</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>

        <?php
        // $sql = "SELECT * FROM calon_siswa";

        if(isset($_GET['kata_cari'])){
            $kata_cari = $_GET['kata_cari'];
            $query = "SELECT * FROM calon_siswa WHERE nama like '%$kata_cari%' OR nik like '%$kata_cari%' OR alamat like '%$kata_cari%' OR jenis_kelamin like '%$kata_cari%' OR agama like '%$kata_cari%' OR jurusan like '%$kata_cari%' OR mtk like '%$kata_cari%' OR bing like '%$kata_cari%' OR bind like '%$kata_cari%' OR sekolah_asal like '%$kata_cari%' OR tanggal like '%$kata_cari%' ORDER BY id ASC";
        }else{
            $query = "SELECT * FROM calon_siswa ORDER BY id ASC";}

        $query = mysqli_query($koneksi, $query);
        
        while($siswa = mysqli_fetch_array($query)){
    
            echo "<tr>";

            echo "<td>".$siswa['id']."</td>";
            echo "<td>".$siswa['nama']."</td>";
            echo "<td>".$siswa['nik']."</td>";
            echo "<td>".$siswa['alamat']."</td>";
            echo "<td>".$siswa['jenis_kelamin']."</td>";
            echo "<td>".$siswa['agama']."</td>";
            echo "<td>".$siswa['jurusan']."</td>";
            echo "<td>".$siswa['mtk']."</td>";
            echo "<td>".$siswa['bing']."</td>";
            echo "<td>".$siswa['bind']."</td>";
            echo "<td>".$siswa['sekolah_asal']."</td>";
            echo "<td>".$siswa['tanggal']."</td>";

            echo "<td>";
            echo "<a href='form-edit.php?id=".$siswa['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$siswa['id']."'>Delete</a>";
            echo "</td>";

            echo "</tr>";
        }

        ?>
    </tbody>
    </table>
    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    <nav>
        <a href="index.php"><button class="f" id="back">Back</button></a>
    </nav>
    </article>
    </main>
    <footer>
        <p>SMA Kencana &#169;PPTI@kencana.sch.id</p>
    </footer>
    </body>
</html>