<header>
    <div class="inner-header">
        <div class="title">
            <figure>
                <img src="public/assets/Logo_Voedselbank_Small.png" alt="Voedselbanken Nederland">
            </figure>
            <h2>Voedselbanken</h2>
        </div>

        <div class="links">
            <?php if (strpos($_SERVER['REQUEST_URI'], 'meekijken') ||strpos($_SERVER['REQUEST_URI'], 'meevoedsel')) : ?>
                <a href="meekijken.php" class="bold-text active">Meekijken</a>
                <a href="meevoedsel.php" class="bold-text">Meevoedsel</a>
            <?php elseif (strpos($_SERVER['REQUEST_URI'], 'faq')) : ?>
                <a href="faq-home.php" class="bold-text active">Veelgestelde vragen</a>
                <a href="faq_contact.php" class="bold-text">Contact</a>
            <?php endif; ?>
        </div>

        <div class="options">
            <div class="font-size">
                <a href="#" class="fontSize font-1 bold-text active">A</a>
                <a href="#" class="fontSize font-2 bold-text">A</a>
                <a href="#" class="fontSize font-3 bold-text">A</a>
            </div>

            <div class="languages">
                <a href="#">
                    <figure>
                        <img src="public/assets/languages/de.png" alt="de">
                    </figure>
                </a>
                <a href="#">
                    <figure>
                        <img src="public/assets/languages/en.png" alt="en">
                    </figure>
                </a>
                <a href="#">
                    <figure>
                        <img src="public/assets/languages/nl.png" alt="nl">
                    </figure>
                </a>
            </div>
        </div>
    </div>
</header>

<?php include "components/hero.php"; ?>