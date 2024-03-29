<?php
    try{
        $conn = new mysqli("localhost", "root", "", "energy");
    }catch(Exception $e){
        $error = $e->getMessage();
        echo $error;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="Stylesheet" href="/css/Algemeen.css">
    <title>Tjascado Energy van Vrumona</title>
</head>
<body id="home-body">
    <!----------------------------------------------------------HEADER------------------------------------------------------------------------->
    <header id="header">
        <article id="header-art-1">
            <a href="https://www.vrumona.nl"><img src="/media/afbeeldingen//Home/Vrumona-logo-transparant-wit.png"></a></article>
            <video autoplay loop muted lpays-inline id="promovideo-1">
            <source src="/media/video/promotievideo-temp-1.mp4" type="video/mp4">
            </video>
        <nav>
            <a href="/pages/review.php">Reviews</a>
            <a href="pages/aboutus.php">About us</a>
            <a href="pages/contact.php">Contact</a>
        </nav>
            <article id="header-art-2">
                <a><img src="/media/afbeeldingen//Home/search-transparent-white1.png" id="header-img1"></a>
                <a href="/pages/login.php"><img src="/media/afbeeldingen/Home/profile-transparent-white2.png" id="header-img2"></a>
            </article>
    </header>

    <!----------------------------------------------------MAIN / VIDEO------------------------------------------------------------------------->
    <main id="#home-main">
        <article id="home-main-art-1">
            <img src="/media/afbeeldingen/Home/blik-achtergrond-donker-temp4.jpg" alt="Tjascado">
        </article>  
    </main>
</body>
</html>