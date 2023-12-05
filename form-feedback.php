<!DOCTYPE html>
<html>
<head>
    <title>Feedback Form | SMA Kencana</title>
    <link rel="stylesheet" type="text/css" href="styleFeedback.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<body>
    <div class="contain">

    <div class="wrapper">
        <div class="contacts">
        <h1>SMA Kencana</h1>

        <ul>
            <h3>Contact PPTI</h3>
            <li>PPTI</li>
            <li>021-12121214</li>
            <li>pusatinformasi@kencana.sch.id</li>
        </ul>
        </div>

        <div class="form">
        <h3>Send us a Your Problem Message</h3>
        <form action="proses-feedback.php" method="POST">
            <p>
            <label for="nama_admin">Admin Name</label>
            <input type="text" id="nama_admin" name="nama_admin" required/>
            </p>
            <p>
            <label for="no_id">No ID</label>
            <input type="text" id="no_id" name="no_id" required maxlength="8"/>
            </p>
            <p>
            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" required/>
            </p>
            <p>
            <label for="topic">Topic</label>
            <input type="text" id="topic" name="topic" required>
            </p>
            <p class="full-width">
            <label for="pesan">Write your Message</label>
            <textarea name="pesan" id="pesan" cols="30" rows="7"></textarea>
            </p>
            <p class="full-width">
            <?php
              $url = isset($_SERVER['HTTP_REFERER']) ? htmlspecialchars($_SERVER['HTTP_REFERER']) : 'index.php';
            ?>
            <button><a href="<?=$url?>">Back</a></button>
            </p>
            <p class="full-width">
            <button type="submit" value="feedback" name="feedback">Send</button>
            </p>
        </form>
        </div>
    </div>
    </div>


    </body>
</html>