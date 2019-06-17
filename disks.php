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
    <title>Disk</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css">
    <script src="main.js"></script>
    <script src="js/jquery-3.4.1.min.map"></script>
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
    <div class="disks">
        <h2 class="titres-pages">Disks</h2>
        <div class="container-disk">
            <div class="disk-space space-1">
                <img src="https://img.icons8.com/color/48/000000/hdd.png">
                <div id="progressbar">
                    <div></div>
                </div>
                <div class="btn-group">
                    <button type="button" class="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="far fa-caret-square-down"></i></button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <button class="dropdown-item" type="button">Action</button>
                        <button class="dropdown-item" type="button">Another action</button>
                        <button class="dropdown-item" type="button">Something else here</button>
                    </div>
                </div>
            </div>
            <div class="disk-space space-2">
                <div class="red"><i class="fas fa-square"></i> 15,65 Go</div>
                <div class="blue"><i class="fas fa-square"></i> 14,35 Go</div>
            </div>
        </div>
        <p class="noms-disques">Disque n°0: C:Samsung EVO960 1 To</p>
        <div class="container-disk">
            <div class="disk-space space-1">
                <img src="https://img.icons8.com/color/48/000000/hdd.png">
                <div id="progressbar">
                    <div></div>
                </div>
                <i class="far fa-caret-square-down"></i>
            </div>
            <div class="disk-space space-2">
                <div class="red"><i class="fas fa-square"></i> 15,65 Go</div>
                <div class="blue"><i class="fas fa-square"></i> 14,35 Go</div>
            </div>
        </div>
        <p class="noms-disques">Disque n°0: C:Samsung EVO960 1 To</p>
        <div class="container-disk">
            <div class="disk-space space-1">
                <img src="https://img.icons8.com/color/48/000000/hdd.png">
                <div id="progressbar">
                    <div></div>
                </div>
                <i class="far fa-caret-square-down"></i>
            </div>
            <div class="disk-space space-2">
                <div class="red"><i class="fas fa-square"></i> 15,65 Go</div>
                <div class="blue"><i class="fas fa-square"></i> 14,35 Go</div>
            </div>
        </div>
        <p class="noms-disques">Disque n°0: C:Samsung EVO960 1 To</p>
    </div>
</div>
</body>
</html>
