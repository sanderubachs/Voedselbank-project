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
                        Hoeveel inkomsten ontvangt het huishouden per maand?
                        <i class="fas fa-question-circle tooltip-btn"></i>
                    </h3>
                </div>
            </div>

            <div class="invul">
                <form action="" id="inkomsten">
                    <div class="column">
                        <div class="form--group">
                            <input class="radiobutton" type="radio" name="loon" value="500">
                            <label class="bedrag">€300 - €600</label>
                        </div>
                        <div class="form--group">
                            <input class="radiobutton" type="radio" name="loon" value="1000">
                            <label class="bedrag">€600 - €900</label>
                        </div>
                        <div class="form--group">
                            <input class="radiobutton" type="radio" name="loon" value="1500">
                            <label class="bedrag">€900 - €1200</label>
                        </div>
                        <div class="form--group">
                            <input class="radiobutton" type="radio" name="loon" value="1500plus">
                            <label class="bedrag">€1200 - €1500</label>
                        </div>
                        <div class="form--group">
                            <input class="radiobutton" type="radio" name="loon" value="500">
                            <label class="bedrag">€1500 - €1800</label>
                        </div>
                    </div>

                    <div class="column">
                        <div class="form--group">
                            <input class="radiobutton" type="radio" name="loon" value="500">
                            <label class="bedrag">€1800 - €2100</label>
                        </div>
                        <div class="form--group">
                            <input class="radiobutton" type="radio" name="loon" value="1000">
                            <label class="bedrag">€2100 - €24000</label>
                        </div>
                        <div class="form--group">
                            <input class="radiobutton" type="radio" name="loon" value="1500">
                            <label class="bedrag">€2400+</label>
                        </div>
                        <div class="form--group">
                            <input class="radiobutton" type="radio" name="loon" value="1500plus">
                            <label class="bedrag">Ik weet het bedrag, namelijk:</label>
                        </div>
                        <div class="form--group">
                            <label class="euro">€</label>
                            <input class="overige" type="text" name="overig">
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="buttons">
            <a href="stappenplan_2-huishouden.php" class="btn-primary">Terug</a>
            <a href="stappenplan_4-overige-inkomsten.php" class="btn-primary">Volgende</a>
        </div>

        <div class="progress-sections">
            <div class="section-title">
                <p>2/5</p>
            </div>
        </div>

        <div class="total-progress">
            <div class="progress">
                <div class="progress-bar" id="3-inkomsten" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="max-width: 40%;">
                    <span class="progress-title">40%</span>
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