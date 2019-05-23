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

$sql = "SELECT * FROM categorie INNER JOIN categorie_vraag ON categorie.id = categorie_vraag.c_id INNER JOIN vraag ON categorie_vraag.v_id = vraag.id WHERE categorie.naam = '" . $_GET['categorie'] . "'";
$results = mysqli_query($conn, $sql);

mysqli_close($conn);
?>

<!doctype html>
<html lang="en">
<head>
    <?php include "public/parts/head.php"; ?>
    <title>FAQ - Doneren</title>
</head>
<body>

<?php include "components/header.php"; ?>

<main>
    <div id="faq">
        <div class="wrapper">
            <div class="faq-content">
                <div class="faq-content-titel">
                    <a href="faq-home.php"><p><i class="fas fa-arrow-left"></i> terug</p></a>
                    <h2>Er zijn <?= $results->num_rows ?> vragen over <span class="faq-searchterm"><?= $_GET['categorie'] ?></span></h2>
                </div>

                <?php if ($results != null) : ?>
                    <?php foreach ($results as $result) : ?>
                        <div class="faq-content-vraag-blok question">
                            <div class="faq-content-vraag bold-text">
                                <p><?= $result['vraag'] ?></p>
                                <i class="fas fa-chevron-down"></i>
                            </div>

                            <div class="faq-content-antwoord">
                                <p><?= $result['antwoord'] ?></p>
                                <button class="btn-primary">Deel</button>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else : ?>
                    Er zijn geen resultaten gevonden...
                <?php endif; ?>
<!--                --><?php //$ads = 'ads/'.$_GET['categorie'].'.php';
//                include($ads);
                ?>
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