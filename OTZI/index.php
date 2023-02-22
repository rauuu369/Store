<?php
    /*Database is requested*/
    include "db_conection.php";

    $message = '';

    error_reporting(0);
    session_start();

    if (isset($_SESSION['id'])) {
        header("Location: homepage.php");
    }

    if (isset($_POST["submit"])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql="SELECT * FROM users WHERE email='$email'";
        $resultado = mysqli_query($conexion, $sql);
        $num = $resultado->num_rows;

        if ($num>0) {
            $row = $resultado->fetch_assoc();
            $password_bd = $row['password'];
            $cpassword = md5 ($password);

            if ($password_bd == $cpassword) {
                $_SESSION['id'] = $row['id'];
                $_SESSION['email'] = $row['email'];

                header("Location:homepage.php");
            }else {
                $message ='Wrong password';
            }
        }else {
            $message ='The email does not exist';
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="icon" href="images/Logo.jpg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
    <title>Login - OTZI</title>
</head>
<body>
    <div class="container">
    <div class="video_login">
        <video src="images/login.mp4" autoplay muted loop></video>
    </div>
    <div class="welcome_login">
        <div class="sing_in">
            <h1>Welcome to OTZI, Sing In to Continue.</h1>
        </div>
        <div class="question">
            <h2>Don't have an account? <a href="signup.php">Create a account</a> It takes less than a minute.</h2>
        </div>
        <div class="question">
            <?php if(!empty($message)): ?>
                <p> <?= $message?></p>
            <?php endif;?>
        </div>
        <!-- Login form-->
        <form action="index.php" method="post">
            <label for="">Email</label>
            <input type="email" name="email" placeholder="Enter your email">
            <label for="">Password</label>
            <input type="password" name="password" placeholder="Enter your password">
            <input type="submit" name="submit" value="Sing In">
        </form>
    </div>
    </div>
</body>
</html>