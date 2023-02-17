<?php
    session_start();

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <link rel="icon" href="images/Logo.jpg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@300&display=swap" rel="stylesheet">
    <title>OTZI - Official Webside</title>
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
                    <li><a href="about.html">About Us</a></li>
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
            <img src="images/clorthing5.png" width="100%" height="600px">
        </div>
        <div class="men_menu">
            <h1>MEN'S CLOTHING</h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="four_columns">
                    <div class="garment">
                        <div class="container-garment">
                            <img src="images/clothing/Mens_Clothing/garmentman1.jpg" class="top">
                        </div>
                        <div class="info_garment">
                            <h2>Sports Jacket</h4>
                            <p class="homeprice">$34.64</p>
                        </div>
                    </div>
                </div>
                <div class="four_columns">
                    <div class="garment">
                        <div class="container-garment">
                            <img src="images/clothing/Mens_Clothing/garmentman3.jpg" class="top">
                        </div>
                        <div class="info_garment">
                            <h2>Mustard Slim Fit Jacket</h4>
                            <p class="homeprice">$30.90</p>
                        </div>
                    </div>
                </div>
                <div class="four_columns">
                    <div class="garment">
                        <div class="container-garment">
                            <img src="images/clothing/Mens_Clothing/garmentman6.jpg" class="top">
                        </div>
                        <div class="info_garment">
                            <h2>Gray Sweatshirt</h4>
                            <p class="homeprice">$20.50</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="woman_menu">
            <h1>WOMEN'S CLOTHING</h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="four_columns">
                    <div class="garment">
                        <div class="container-garment">
                            <img src="images/clothing/Womens_Clothing/garmentwomen1.jpg" class="top">
                        </div>
                        <div class="info_garment">
                            <h2>Cream Suit</h4>
                            <p class="homeprice">$30.64</p>
                        </div>
                    </div>
                </div>
                <div class="four_columns">
                    <div class="garment">
                        <div class="container-garment">
                            <img src="images/clothing/Womens_Clothing/garmentwomen3.jpg" class="top">
                        </div>
                        <div class="info_garment">
                            <h2>Black Hoodies</h4>
                            <p class="homeprice">$24.90</p>
                        </div>
                    </div>
                </div>
                <div class="four_columns">
                    <div class="garment">
                        <div class="container-garment">
                            <img src="images/clothing/Womens_Clothing/garmentwomen5.jpg" class="top">
                        </div>
                        <div class="info_garment">
                            <h2>Pink Tank Top</h4>
                            <p class="homeprice">$10.50</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <footer>
        <div class="footer">
            <img src="images/facebook.png" class="redes">
            <img src="images/instagram.png" class="redes">
            <img src="images/twitter-sign.png" class="redes">
            <img src="images/youtube.png" class="redes">
            <img src="images/pinterest.png" class="redes">
        </div>
    </footer>
</body>
</html>