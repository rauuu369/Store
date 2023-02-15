<?php

    session_start();

    if (isset($_SESSION['user_id'])) {
        header('location:homepage.php');
    }

    require 'db_conection.php';

    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        $records = $conexion->prepare('SELECT id, email, password FROM users WHERE email = :email');
        $records->bindParam(':email', $_POST['email']);
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);

        $message = '';

        if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
            $_SESSION['user_id'] = $results['id'];
            header("location:homepage.php");
        }   else {
            $message = 'Sorry, Those Credentials do not match';
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
        <video src="images/login.mp4" width=50% height=850px autoplay muted loop></video>
    </div>
    <div class="welcome_login">
        <div class="sing_in">
            <h1>Welcome to OTZI, Sing In to Continue.</h1>
        </div>
        <div class="question">
            <h2>Don't have an account? <a href="signup.php">Create a account</a> It takes less than a minute.</h2>
        </div>

        <?php if(!empty($message)) : ?>
            <p><? $message ?></p>
        <?php endif;?>

        <form action="index.php" method="post">
            <label for="">Email</label>
            <input type="text" name="email" placeholder="Enter your mail">
            <label for="">Password</label>
            <input type="password" name="password" placeholder="Enter your password">
            <input type="submit" value="Sing In">
        </form>
    </div>
    </div>
</body>
</html>