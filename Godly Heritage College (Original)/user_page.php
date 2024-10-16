<?php

@include 'config.php';

session_start();

if(!isset( $_SESSION['user_name'])){
    header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USER PAGE</title>
    
    
    
    <link rel="stylesheet" href="style.css">



</head>
<body>
<div class="container">

    <div class="content">
    <h3>Hi <span>User</span></h3>
        <h1>Welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
        <p>This is a user page</p>
        <a href="profile.html" class="btn">Create Profile<a>
        <a href="form.html" class="btn">Get Our Form<a>
        <a href="logout.php" class="btn">Logout<a>
    </div>

</div>

</body>    
</html>