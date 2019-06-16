<?php
/*
 * MyCloudProject by swann excoffon: page INDEX.PHP
 */
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
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
</div >
<div class="context">
    <div class="login-form">
        <h3 class="login-title">Sign in</h3>
        <form action="includes/login.inc.php" method="post">
            <input type="text" name="mailuid" class="login-input" placeholder="Login">
            <br>
            <input type="password" name="pwd" class="login-input" placeholder="Password">
            <br>
            <button class="login-button" name="login-submit" type="submit">Sign in</button>
        </form>
    </div>
</div>
</body>
</html>