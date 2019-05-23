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
            <div class="question">
                <div class="inner-question">
                    <h3 class="question-title">
                        Overige inkomsten
                        <i class="fas fa-question-circle tooltip-btn"></i>
                    </h3>
                </div>
            </div>

            <div class="invul">
                <div class="form--group">
                    <label class="tekst-overig" for="naam">Vul hier het bedrag in:</label>
                    <label class="euro">€</label>
                    <input class="overige" type="text" name="overig">
                </div>
            </div>
        </div>

        <div class="buttons">
            <a href="stappenplan_3-inkomsten.php" class="btn-primary">Terug</a>
            <a href="stappenplan_5-uitgaven.php" class="btn-primary">Volgende</a>
        </div>

        <div class="progress-sections">
            <div class="section-title">
                <p>3/5</p>
            </div>
        </div>

        <div class="total-progress">
            <div class="progress">
                <div class="progress-bar" id="4-overige-inkomsten" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="max-width: 60%;">
                    <span class="progress-title">60%</span>
                </div>
            </div>
        </div>
    </div>
</main>

<div class="tooltip">
    <div class="tooltip-content">
        <a class="close-tooltip"><i class="fas fa-times"></i></a>
        <h4>Titel van deze vraag</h4>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.</p>
    </div>
</div>

<?php include "components/footer.php"; ?>

</body>
</html>