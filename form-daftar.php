<!DOCTYPE html>
<html>
<head>
    <title>New Student Registration Form | SMA Kencana</title>
    <link rel="stylesheet" type="text/css" href="styledaftar.css">
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
    <form action="proses-pendaftaran.php" method="POST" class="form">

            <h3>Registration Form</h3>
            <br>
            <label for="nama">Name : </label>
            <input id="nama" type="text" name="nama" required/>

            <label for="nik">NIK : </label>
            <input id="nik" type="text" name="nik" required maxlength="16"/>
        
            <label for="alamat">Address : </label>
            <input id="alamat" name="alamat" required placeholder="Street, RT/RW, Village, Districts, City, Province, Post Code"/>
        
            <label for="jenis_kelamin">Gender : </label>
            <select name="jenis_kelamin">
                <option>Male</option>
                <option>Female</option>
            </select>
        
            <label for="agama">Religion : </label>
            <select name="agama">
                <option>Islam</option>
                <option>Catholic</option>
                <option>Protestant</option>
                <option>Hindu</option>
                <option>Budha</option>
                <option>Kong Hu Chu</option>
            </select>

            <label for="jurusan">Major : </label>
            <select name="jurusan">
                <option>IPS</option>
                <option>MIPA</option>
            </select>

            <label>UAN Score</label>
            <label for="mtk">Mathematics : </label>
            <input type="text" name="mtk"  id="mtk" required maxlength="5" placeholder="ex: 89"/>

            <label for="bing">English : </label>
            <input type="text" name="bing"  id="bing" required maxlength="5" placeholder="ex: 90"/>

            <label for="bind">Indonesian Language : </label>
            <input type="text" name="bind"  id="bind" required maxlength="5" placeholder="ex: 90"/>       

            <label for="sekolah_asal">The Origin Of The School: </label>
            <input type="text" name="sekolah_asal" required placeholder="ex: SMP Gaya Baru"/>
    

            <button type="submit" value="daftar" name="daftar">Register</button>
            <?php
              $url = isset($_SERVER['HTTP_REFERER']) ? htmlspecialchars($_SERVER['HTTP_REFERER']) : 'index.php';
            ?>
            <button><a href="<?=$url?>" id="back">Back</a></button>
    </form>
    </article>
</main>
<footer>
        <p>SMA Kencana &#169;PPTI@kencana.sch.id</p>
    </footer>
    </body>
</html>