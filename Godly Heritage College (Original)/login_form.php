<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = md5($_POST['password']);

    $select = " SELECT * FROM user_form WHERE email='$email' && password = '$pass' ";

    $result =  mysqli_query($conn, $select);

    if(mysqli_num_rows($result)  >  0){

        $row = mysqli_fetch_array($result);

        if($row['user_type'] == 'admin'){

           $_SESSION['admin_name'] = $row['name'];
           header('location:admin_page.php');

        }elseif($row['user_type'] == 'user'){

            $_SESSION['user_name'] = $row['name'];
            header('location:user_page.php');
 
        }
      
    }else{
        $error[] = 'incorrect email or password!';
    }

};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
        

    <title>Login Form</title>
    
    
    <div class="form-container">
        
    
        <form action="" method="post">
            <h3>Login Now</h3>
            <?php

            if(isset($error)){
                foreach($error as $error){
                    echo '<span class="error-msg">'.$error.'</span>';
                };
            };
            ?>
            <input type="email" name="email" required placeholder="Enter Your Email Address">
            <input type="password" name="password" required placeholder="Enter Your Password">
            <input type="submit" name="submit" value="Login Now" class="form-btn">
            <p>Don't Have An Account? <a href="register_form.php">Register Now</a></p>
        </form>
    </div>
</head>
<body>
    
</body>
</html>