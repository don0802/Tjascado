<?php
try {
    $conn = new mysqli("localhost", "root", "root", "energy");
} catch (Exception $e) {
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
    <link rel="Stylesheet" href="../css/Algemeen.css">
    <title>Tjascado Reviews</title>
</head>

<body id="home-review">
    <!----------------------------------------------------------HEADER------------------------------------------------------------------------->
    <header id="header">
        <article id="header-art-1">
            <a href="..//pages/home.html"><img src="../media/afbeeldingen//Home/Vrumona-logo-transparant-wit.png"></a>
        </article>
        <nav>
            <a href="#">Reviews</a>
            <a href="pages/aboutus.html">About us</a>
            <a href="pages/contact.html">Contact</a>
        </nav>
        <article id="header-art-2">
            <a><img src="../media/afbeeldingen//Home/search-transparent-white1.png" id="header-img1"></a>
            <a href="../pages/login.html"><img src="../media/afbeeldingen/Home/profile-transparent-white2.png" id="header-img2"></a>
        </article>
    </header>
    <!----------------------------------------------------------MAIN------------------------------------------------------------------------->
    <main id="review-main">
        <article id="review-art1">
            <img id="review-img1" src="../media/afbeeldingen/Review/tjascado_zero_transparant2.png" alt="Tjascado Zero">
            <h1 id="review-titel">Tjascado Zero</h1>
            <p>Aantal beoordelingen: <b>5.403</b></p>
            <article id="review-art1">
                <img id="review-img1" src="../media/afbeeldingen/Review/tjascado_zero_transparant2.png" alt="Tjascado Zero">
                <h1 id="review-titel">Tjascado Zero</h1>
                <p>Aantal beoordelingen: <b>5.403</b></p>
                <?php
                try {
                    $sql = "SELECT AVG(cijfer) FROM reacties";
                    $result = $conn->query($sql);
                    while ($row = $result->fetch_object()) 
                    {
                        echo '<h1 id="review-cijfer">' . $row->cijfer . '</h1>';
                    }
                    $result->close();
                } catch (Exception $e) {
                    echo "er zit een fout in de kwerrieeee";
                }
                ?>
            </article>
            <article id="review-art2">
                <input type="text" required="required">
                <span>Laat hier je review achter!</span>
            </article>
    </main>
</body>

</html>