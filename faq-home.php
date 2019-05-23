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

$sql = "SELECT * FROM categorie";
$sql2 = "SELECT * FROM hoofden";
$results = mysqli_query($conn, $sql);
$results2 = mysqli_query($conn, $sql2);

mysqli_close($conn);
?>
<!doctype html>
<html lang="en">
<head>
    <?php include "public/parts/head.php"; ?>

    <script>
        function showResult(str) {
            if (str.length==0) {
                document.getElementById("faq-livesearch").innerHTML="";
                document.getElementById("faq-livesearch").style.border="0px";
                return;
            }
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp=new XMLHttpRequest();
            } else {  // code for IE6, IE5
                xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange=function() {
                if (this.readyState==4 && this.status==200) {
                    document.getElementById("faq-livesearch").innerHTML=this.responseText;
                    // document.getElementById("faq-livesearch").style.border="";
                    document.getElementById("faq-livesearch").style.background="#E5E5E5";

                }
            }
            xmlhttp.open("GET","faq-livesearch.php?q="+str,true);
            xmlhttp.send();
        }
    </script>
</head>
<body>
    <?php include "components/header.php"; ?>
<main>
    <div class="wrapper">
        <div class="faq--home">
            <div class="faq--search--container">
                <h2>Voedselbank FAQ</h2>
                <form action="faq_contact.php" method="post">
                        <form>
                            <input style="width: 100%;" placeholder="Type hier uw zoekopdracht.." type="text" size="30" onkeyup="showResult(this.value)">
                            <div style="background: #ddd" id="faq-livesearch"></div>
                        </form>
                </form>
            </div>

            <div class="faq--tags">
                <ul>
                    <li>Waar gaat je vraag over?</li>
                    <li><a href="faq_antwoord.php?vraag=7">Aanmeldingsgesprek</a></li>
                    <li><a href="faq_antwoord.php?vraag=5">Voedselpakket</a></li>
                    <li><a href="faq_antwoord.php?vraag=1">Doneren</a></li>
                    <li><a href="faq_antwoord.php?vraag=14">Verslaving</a></li>
                    <li><a href="faq_antwoord.php?vraag=4">Ophalen</a></li>
                    <li><a href="faq_antwoord.php?vraag=13">Financieel</a></li>
                </ul>
            </div>

            <div class="faq--introductie">
                <h3>Welkom bij de veelgestelde vragen van de voedselbank</h3>
                <p>
                    Op deze pagina vind je antwoord op al je vragen over de voedselbank. Wij zijn een website speciaal gemaakt voor de klanten van de voedselbank.
                    Neem gerust kijkje tussen de verschillende categorien of stel je vraag bovenin de zoekbalk.
                    Kan je het echt niet vinden? Neem dan contact op beneden aan deze pagina.
                </p>
            </div>

            <div class="faq--categories">
                <?php if ($results != null) : ?>
                    <?php foreach ($results as $result) : ?>
                        <a class="info-block" href="faq_vragen.php?categorie=<?= strtolower($result['naam']); ?>">
                            <div class="info-header"
                                 style="background-image: url('<?= ($result['img-link']);  ?>')">
                                <div class="info-header-icon"></div>
                            </div>
                            <div class="info-content">
                                <div class="info-content-inner">
                                    <h3 class="info-content-title">
                                        <?= $result['naam'] ?>
                                    </h3>
                                    Hier komt een korte beschrijving van dit onderwerp.
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
    <div class="faq--people--container">
        <?php if ($results2 != null) : ?>
            <?php foreach ($results2 as $result2) : ?>
                <div class="faq--people"><img src="<?= $result2['image-link'] ?>"/></div>
            <?php endforeach; ?>
        <?php else : ?>
            Niks te zien
        <?php endif; ?>
    </div>
</main>
    <?php include "components/footer.php"; ?>
</body>
</html>