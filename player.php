<?php
/*
 * MyCloudProject by swann excoffon: page HOME.PHP
 */
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home</title>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/afterglowplayer@1.x"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css">
    <script src="main.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body>
<div class="area" >
    <ul class="circles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
</div>
<div class="content-home">
    <div class="content">
        <div class="dashboard">
            <div class="dashboard-menu">
                <a href="home.php" class="nav-links"><i class="fas fa-home"></i>Home</a>
                <a href="profile.php" class="nav-links"><i class="fas fa-users"></i>Profile</a>
            </div>
            <div class="dashboard-menu">
                <a href="explorateur.php" class="nav-links"><i class="fas fa-folder"></i>Files</a>
                <a href="player.php" class="nav-links"><i class="fas fa-film"></i>Player</a>
                <a href="upload.php" class="nav-links"><i class="fas fa-upload"></i>Upload</a>
                <a href="disks.php" class="nav-links"><i class="fas fa-hdd"></i>Disks</a>
                <a href="infos.php" class="nav-links"><i class="fas fa-info-circle"></i>Infos</a>
                <a href="manage.php" class="nav-links"><i class="fas fa-tasks"></i>Manage</a>
                <a href="#" class="nav-links"><i class="fas fa-sign-out-alt"></i>Logout</a>
            </div>
        </div>
    </div>
    <div class="player">
        <div class="">
            <video class="video-player afterglow" id="my-video" width="1920" height="1080" src="videos/got2.mp4"></video>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col disk-space"><i class="fas fa-film"></i>Myfuck.mp4</div>
                <div class="col disk-space"><i class="fas fa-film"></i>Fuckyou.avi</div>
                <div class="col disk-space"><i class="fas fa-film"></i>Getfucked.mov</div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col disk-space"><i class="fas fa-film"></i>Suckyou.fuck</div>
                <div class="col disk-space"><i class="fas fa-film"></i>Tartiflette.bif</div>
                <div class="col disk-space"><i class="fas fa-film"></i>Juif.argent</div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col disk-space"><i class="fas fa-film"></i>xptdrrr.xd.lol</div>
                <div class="col disk-space"><i class="fas fa-film"></i>lantrotro.exe</div>
                <div class="col disk-space"><i class="fas fa-film"></i>trump.jetaime</div>
            </div>
        </div>
        <p class="noms-disques">Fichiers Audios</p>
        <div class="container-fluid">
            <div class="row">
                <div class="col disk-space"><i class="fas fa-file-pdf"></i></div>
                <div class="col disk-space"><i class="fas fa-file-word"></i></div>
                <div class="col disk-space"><i class="fas fa-file-powerpoint"></i></div>
                <div class="col disk-space"><i class="fas fa-music"></i></div>
                <div class="col disk-space"><i class="fas fa-calculator"></i></div>
                <div class="col disk-space"><i class="fas fa-music"></i></div>
                <div class="col disk-space"><i class="fab fa-android"></i></div>
            </div>
        </div>
    </div>
</div>
</body>
</html>