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
$sql = "SELECT * FROM verhaal WHERE type = 'klant'";
$results = mysqli_query($conn, $sql);

mysqli_close($conn);
?>


<!doctype html>
<html lang="en">
<head>
    <?php include "public/parts/head.php"; ?>
    <title>Meekijken - Voedselbank</title>
</head>
<body>

<?php include "components/header.php"; ?>
<?php include "popup.php";?>

<main>
    <div class="wrapper">
        <div class="intro-block">
            <div class="intro-header">
                <h2>Verhalen van (Ex-) klanten</h2>
            </div>
            <div class="intro-content">
                <p>
                    Heb je altijd al eens willen weten hoe het leven van een (ex) klant van de voedselbank in elkaar
                    zit en hoe ze bij de voedselbank gekomen zijn? Zoek niet verder! Hieronder kun je uit verschillende mensen
                    kiezen die ieder hun verhaal doen !
                </p>
            </div>
        </div>

        <div class="wrapper">
            <div class="faq--home">
                <div class="faq--categories">
                    <?php if ($results != null) : ?>
                        <?php foreach ($results as $result) : ?>
                            <a class="info-block">
                                <div class="info-header"
                                     style="background-image: url('public/assets/placeholders/info-placeholder.png')">
                                    <div class="info-header-icon"></div>
                                </div>
                                <div class="info-content">
                                    <div class="info-content-inner">
                                        <h3 class="info-content-title">
                                            <?= $result['titel'] ?>

                                        </h3>
                                        <?= $result['content']?>
                                    </div>
                                </div>
                            </a>
                        <?php endforeach; ?>
                    <?php else : ?>
                        Niks te zien
                    <?php endif; ?>
                </div>
            </div>
        </div>


</main>

<?php include "components/footer.php"; ?>
<script>
    $(function()
    {
        $(".info-block, .close").click(function(){
            $(".popup-block").toggleClass("show");
        });
    });
</script>


</body>
</html>