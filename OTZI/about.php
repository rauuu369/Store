<?php
    session_start();

    if (!isset($_SESSION['id'])) {
        header("Location: index.php");
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/home_about.css">
    <link rel="icon" href="images/Logo.jpg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@300&display=swap" rel="stylesheet">
    <title>About Us - OTZI</title>
</head>
<body>
    <nav class="header">
        <div class="logo">
            <a href='homepage.php'class="title">OTZI</a>
        </div>
        <div class="links">
            <ul class="nav">
                <li><a>Men's Clothing</a>
                    <ul>
                        <li><a>Cold</a></li>
                        <li><a>Warm</a></li>
                    </ul>
                </li>
                <li><a>Women's Clothing</a>
                    <ul>
                        <li><a>Cold</a></li>
                        <li><a>Warm</a></li>
                    </ul>
                </li>
                <li><a>Accessories</a></li>
                <li><a>About Us</a></li>
            </ul>
        </div>
        <div class="account">
            <ul class="nav2">
                <li><a class="account2" href='logout.php'>Sign Off</a></li>
            </ul>
        </div>
        <div class="search">
            <section>
                <form autocomplete="off">
                    <div>
                        <input type="text" name="search1" placeholder="Search">
                    </div>
                </form>
            </section>
        </div>
    </nav>
    <div class="initial_clothing">
        <img src="images/clorthing6.png" width="100%" height="600px">
    </div>
    <div class="about_title">
        <a class="otzi">About OTZI</a>
    </div>
    <div class="about">
        <h3>Our family of brands and businesses is dedicated to making it easy for customers around the world to express their unique style through fashion and design. With a wide variety of products from our own in-house lines, as well as collaborations with leading designers, we have something for everyone.</h3>
    </div>
</body>
</html>