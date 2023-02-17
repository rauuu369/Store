<?php
    /*Database is requested*/
    include "db_conection.php";

    $message = '';

    error_reporting(0);
    session_start();
    /*If the user exists in the database*/
    if (isset($_SESSION["username"])) {
        header("Location:homepage.php");
    }

    if (isset($_POST["submit"])) {
        $username=$_POST["username"];
        $email=$_POST["email"];
        $password= md5($_POST["password"]);
        $cpassword= md5 ($_POST["cpassword"]);
                /*Password Comparison*/
            if ($password==$cpassword) {
                $sql="SELECT * FROM users WHERE email='$email'";
                $result = mysqli_query($conexion, $sql);
                    /*Entered user validation*/
                if (!empty($_POST['username'])) {
                    $sqli="SELECT * FROM users WHERE username='$username'";
                    $results = mysqli_query($conexion, $sqli);
                        /*If a user is repeated*/
                    if (!$results->num_rows > 0) {
                            /*The data is inserted and redirected*/
                        if (!$result->num_rows > 0 && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['cpassword'])) {
                            $sql = "INSERT INTO users (username,email,password) VALUES ('$username', '$email', '$password')";
                            $result = mysqli_query($conexion,$sql);

                            if ($result) {
                                header("Location:successful.php");
                            }else {
                                $message ='Error try again';
                            }
                        }else {
                            $message ='The email already exists or is not correct';
                        }
                    }else {
                        $message ='The username already exists';
                    }
                }else {
                    $message ='The username is not correct';
                }
            }else {
                $message ='The passwords are not the same';
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
        <div class="question">
            <?php if(!empty($message)): ?>
                <p> <?= $message?></p>
            <?php endif;?>
        </div>
        <!--User creation form-->
        <form action="signup.php" method="post">
            <label for="">Username</label>
            <input type="text" name="username" placeholder="Enter your username">
            <label for="">Email</label>
            <input type="email" name="email" placeholder="Enter your email">
            <label for="">Password</label>
            <input type="password" name="password" placeholder="Enter your password">
            <label for="">Confirm Password</label>
            <input type="password" name="cpassword" placeholder="Confirm your password">
            <input type="submit" name="submit" value="Create account" href="index.php">
        </form>
    </div>
    </div>
</body>
</html>