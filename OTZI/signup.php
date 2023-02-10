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
    <title>Login - OTZI</title>
</head>
<body>
    <div class="container">
    <div class="video_login">
        <img src="images/signup.png" width=50% height=850px >
    </div>
    <div class="welcome_login">
        <div class="sing_in">
            <h1>Welcome to OTZI, Sing In to Continue.</h1>
        </div>
        <div class="question">
            <h2>Don't have an account? <a href="">Create a account</a> It takes less than a minute.</h2>
        </div>
        <form action="login.php" method="post">
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