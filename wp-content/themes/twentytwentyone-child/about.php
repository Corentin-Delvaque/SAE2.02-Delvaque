<?php
/*
Template Name: À propos
*/

get_header();

?>

<section class="image-decoration-section">
    <div class="wrapper">
        <div class="page">
            <div class="left-section">
                <h2 class="title-decoration">Qui sommes-nous ?</h2>
                <p>Centre auto 87, votre concessionnaire de confiance à Couzeix, à deux pas de Limoges, est dédié à offrir une expérience automobile exceptionnelle !</p>
                <p>Notre vaste inventaire de voitures d'occasion, principalement de marques françaises, répond aux besoins de particuliers exigeants.</p>
                <p>Grâce à notre engagement envers la qualité, la fiabilité et la satisfaction du client, nous sommes devenus un pilier de la communauté automobile de Limoges.</p>
            </div>
            <div class="right-section">
                <div class="image-decoration">
                    <img src="<?= get_home_url() . '/wp-content/themes/twentytwentyone-child/assets/images/logo/logo-techaddict.png'; ?>" alt="Logo TechAddict">
                </div>
            </div>
        </div>
    </div>
</section>

<?php

get_footer();


?>