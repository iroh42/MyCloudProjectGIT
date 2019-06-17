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
                <a href="index.php" class="nav-links"><i class="fas fa-sign-out-alt"></i>Logout</a>
            </div>
        </div>
    </div>
    <div class="profile">
        <h2 class="titres-pages">Profile</h2>
        <p class="noms-disques">Welcome to your Administrator dashboard</p>
        <div class="container-profile">
            <div class="box-profile-1 profile-1 profile-message">
                <p><i class="fas fa-shield-alt fa-3x"></i></p>
                <p>Security check : <i class="fas fa-check"></i></p>
                <p><a href="#" id="reload-button"><i class="fas fa-sync-alt fa-2x"></i></a></p>
            </div>
            <div class="box-profile-2 profile-2">
                <a href="#" id="logout-button"><i class="fas fa-power-off fa-3x"></i></a>
            </div>
        </div>
    </div>
</div>
</body>
</html>
