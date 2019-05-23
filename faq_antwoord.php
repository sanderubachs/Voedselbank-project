<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM `vraag` WHERE `id` = " . $_GET['vraag'];
$results = mysqli_query($conn, $sql);

mysqli_close($conn);
?>

<!doctype html>
<html lang="en">
<head>
    <?php include "public/parts/head.php"; ?>
    <title>FAQ - <?php foreach ($results as $result) : ?><?= $result['vraag'] ?><?php endforeach; ?></title>
</head>
<body>

<?php include "components/header.php"; ?>

<main>
    <div id="faq">
        <div class="wrapper">
            <div class="faq-content">
                <div class="faq-content-titel">
                    <a href="faq-home.php"><p><i class="fas fa-arrow-left"></i> terug</p></a>
                </div>

                <?php if ($results != null) : ?>
                    <?php foreach ($results as $result) : ?>
                        <div class="faq---vraag--container">
                            <div class="faq--vraag bold-text">
                                <h2><?= $result['vraag'] ?></h2>
                            </div>

                            <div class="faq--antwoord">
                                <p><?= $result['antwoord'] ?></p>
                            </div>

                            <div class="faq--extra">
                                <span>Was dit antwoord nuttig?</span>
                                <div class="faq--nuttig">
                                    <button class="btn-primary"><i class="fa fa-thumbs-up"></i> Ja</button>
                                    <button class="btn-primary"><i class="fa fa-thumbs-down"></i> Nee</button>
                                </div>
                                <hr>
                                <span>Deel dit antwoord:</span>
                                <div class="faq--share">
                                    <button class="btn-primary">Deel via Facebook <i class="fab fa-facebook"></i></button>
                                    <button class="btn-primary">Kopieer deze link <i class="fas fa-copy"></i></button>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else : ?>
                    <div class="faq---vraag--container">
                        Er zijn geen resultaten gevonden...
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="faq-cards-blok">
            <div class="wrapper">

                <h2>Misschien ook interessant voor jou</h2>

                <div class="faq-cards">
                    <div class="info-block">
                        <div class="info-header" style="background-image: url('public/assets/faq-persoonlijke-hulp.jpg')">
                            <div class="info-header-icon"></div>
                        </div>
                        <div class="info-content">
                            <div class="info-content-inner">
                                <h3 class="info-content-title">
                                    Persoonlijke prblemen
                                </h3>
                                Hieronder komt de rest van de tekst om de gebruiker wat meer info te geven over dit infoblokje
                            </div>
                        </div>
                    </div>
                    <div class="info-block">
                        <div class="info-header" style="background-image: url('public/assets/faq-aanmelden.jpg')">
                            <div class="info-header-icon"></div>
                        </div>
                        <div class="info-content">
                            <div class="info-content-inner">
                                <h3 class="info-content-title">
                                    Aanmelden
                                </h3>
                                Hieronder komt de rest van de tekst om de gebruiker wat meer info te geven over dit infoblokje
                            </div>
                        </div>
                    </div>
                    <div class="info-block">
                        <div class="info-header" style="background-image: url('public/assets/faq-geldzaken.jpg')">
                            <div class="info-header-icon"></div>
                        </div>
                        <div class="info-content">
                            <div class="info-content-inner">
                                <h3 class="info-content-title">
                                    Geld zaken
                                </h3>
                                Hieronder komt de rest van de tekst om de gebruiker wat meer info te geven over dit infoblokje
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include "components/footer.php"; ?>

</body>
</html>


<script>
    $('.question').click(function(){
        $(this).find('.faq-content-antwoord').toggle();
    });
</script>