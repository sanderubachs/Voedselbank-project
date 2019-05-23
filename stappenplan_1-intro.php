<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "public/parts/head.php"; ?>
    <title>Interactief stappenplan</title>
</head>

<body>

<?php include "components/header.php"; ?>

<main>
    <div class="wit-vlak">
        <div class="content">
            <div class="stappenplan-titel">
                <h3>Hey hallo! Welkom bij het stappenplan</h3>
            </div>

            <p>Kun jij een voedselpakket krijgen?<p>
            <p>Kom er via deze stappen dan achter of jij in aanmerking komt.</p>
        </div>

        <div class="opties-stappenplan">
            <a href="stappenplan_2-huishouden.php" class="optie-stappenplan">
                <div class="optie-stappenplan">
                    <p>Ik wil hulp bij het berekenen</p>
                </div>
            </a>

            <a href="stappenplan_7-advies.php" class="optie-stappenplan">
                <div class="optie-stappenplan">
                    <p>Ik weet hoeveel geld ik overhoud voor eten en kleding per maand</p>
                </div>
            </a>

        </div>
    </div>
</main>

<?php include "components/footer.php"; ?>

</body>
</html>