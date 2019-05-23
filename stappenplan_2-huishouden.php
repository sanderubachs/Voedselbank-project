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
                        Uit hoeveel mensen bestaat jouw huishouden?
                        <i class="fas fa-question-circle tooltip-btn"></i>
                    </h3>
                </div>
            </div>

            <div class="invul">
                <form action="" id="usrform">
                    <input type="number" min="1" max="8" name="aantal" value="1">
                </form>
            </div>
        </div>

        <div class="buttons">
            <a href="stappenplan_1-intro.php" class="btn-primary">Terug</a>
            <a href="stappenplan_3-inkomsten.php" class="btn-primary">Volgende</a>
        </div>

        <div class="progress-sections">
            <div class="section-title">
                <p>1/5</p>
            </div>
        </div>

        <div class="total-progress">
            <div class="progress">
                <div class="progress-bar" id="2-huishouden" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="20" style="min-width: 0; max-width: 20%;">
                    <span class="progress-title">20%</span>
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