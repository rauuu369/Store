<?php

    require 'db_conection.php';

    $message = '';

    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
        $stmt = $conexion->prepare($sql);
        $stmt->bindParam(':email', $_POST['email']);
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $stmt->bindParam(':password', $password);

        if ($stmt->execute()) {
            header('location:index.php');
        } else {
            $message = 'Sorry there must have been an issue creating your account';
    }
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/signup.css">
    <link rel="icon" href="images/Logo.jpg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
    <title>Sign Up - OTZI</title>
</head>
<body>

    <?php if(!empty($message)): ?>
        <p> <?= $message ?></p>
    <?php endif; ?>

    <div class="container">
    <div class="image_signup">
        <img src="images/signup.png" width=50% height=850px >
    </div>
    <div class="welcome_signup">
        <div class="sign_up">
            <h1>Create Your Account</h1>
        </div>
        <div class="question">
            <h2>Enter the fields  below to get started.</h2>
        </div>
        <form action="signup.php" method="post">
            <label for="">Email</label>
            <input type="text" name="email" placeholder="Enter your mail">
            <label for="">Password</label>
            <input type="password" name="password" placeholder="Enter your password">
            <label for="">Confirm Password</label>
            <input type="password" name="confirm_password" placeholder="Confirm your password">
            <input type="submit" value="Create account" href="index.php">
        </form>
    </div>
    </div>
</body>
</html>