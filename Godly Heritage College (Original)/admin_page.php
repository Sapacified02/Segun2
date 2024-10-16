<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
    header('location:login_form.php');
}

?>


<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN PAGE</title>
    
    
    
    <link rel="stylesheet" href="style.css">



</head>
<body>
<div class="container">

    <div class="content">
    <h3>Hi <span>Admin</span></h3>
        <h1>Welcome <span><?php echo $_SESSION['admin_name'] ?></span></h1>
        <p>This is an admin page</p>
        <a href="http://localhost/phpmyadmin/index.php?route=/sql&pos=0&db=user_db&table=user_form" class="btn">Check Users<a>
        <a href="logout.php" class="btn">Logout<a>
    </div>

</div>

</body>    
</html>
    