<?php
$url = $_SERVER['REQUEST_URI'];
?>

<div class="hero-content">
    <!--  Dit zijn de if statements voor de hero iamges  -->

    <!--  Hero image meekijken pagina  -->
    <?php if (strpos($url, 'meekijken')) : ?>
        <div class="hero-image" style="background-image: url('public/assets/placeholders/hero-placeholder.png')"></div>

    <!--  Hero image meevoedsel pagina  -->
    <?php elseif (strpos($url, 'meevoedsel')) : ?>
        <div class="hero-image" style="background-image: url('public/assets/placeholders/hero-placeholder.png')"></div>

    <!--  Hero images faq paginas  -->
    <?php elseif (strpos($url, 'faq')) : ?>

        <?php
        if (isset($categorie)) {
            $categorie = $_GET['categorie'];

            switch ($categorie) {
                case 'voedselpakket':
                    echo '<div class="hero-image" style="background-image: url("public/assets/placeholders/hero-placeholder.png")"></div>';
                    break;
                case 'inschrijvingsgesprek':
                    echo '<div class="hero-image" style="background-image: url("public/assets/placeholders/hero-placeholder.png")"></div>';
                    break;
                case 'voedselbank':
                    echo '<div class="hero-image" style="background-image: url("public/assets/placeholders/hero-placeholder.png")"></div>';
                    break;
                case 'voeding':
                    echo '<div class="hero-image" style="background-image: url("public/assets/placeholders/hero-placeholder.png")"></div>';
                    break;
                case 'financieel':
                    echo '<div class="hero-image" style="background-image: url("public/assets/placeholders/hero-placeholder.png")"></div>';
                    break;
                case 'persoonlijk':
                    echo '<div class="hero-image" style="background-image: url("public/assets/placeholders/hero-placeholder.png")"></div>';
                    break;
                case 'traject':
                    echo '<div class="hero-image" style="background-image: url("public/assets/placeholders/hero-placeholder.png")"></div>';
                    break;
                case 'klachten':
                    echo '<div class="hero-image" style="background-image: url("public/assets/placeholders/hero-placeholder.png")"></div>';
                    break;
                default:
                    echo '<div class="hero-image" style="background-image: url("public/assets/placeholders/hero-placeholder.png")"></div>';
                    break;
            }
        } else {
            echo '<div class="hero-image" style="background-image: url("public/assets/placeholders/hero-placeholder.png")"></div>';        }
        ?>

    <!--  Hero image stappenplan  -->
    <?php elseif (strpos($url, 'stappenplan')) : ?>
        <div class="hero-image" style="background-image: url('public/assets/placeholders/hero-placeholder.png')"></div>

    <?php else : ?>
        <div class="hero-image" style="background-image: url('public/assets/placeholders/hero-placeholder.png')"></div>
    <?php endif; ?>

    <a href="index.php" class="btn-home">
        <p class="bold-text">Home</p>
    </a>
</div>