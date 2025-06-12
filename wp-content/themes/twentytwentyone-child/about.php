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
                <p>Chez Tech’Addict, nous plaçons l’humain au cœur de l’innovation numérique.</p>
                <p>Depuis 2015, notre agence créative conçoit des solutions technologiques à impact, combinant santé, design, expérience utilisateur et performance. Notre mission : créer des outils concrets qui améliorent le quotidien, notamment dans le monde professionnel.</p>
                <p>Notre dernière initiative, CoMove, illustre parfaitement notre philosophie. Cette application mobile transforme 15 minutes de pause en un moment de mouvement, de lien social et de bien-être partagé. Conçue pour les espaces de coworking et les équipes, CoMove ne nécessite ni matériel, ni préparation. Elle s’utilise partout, facilement, et en quelques secondes.</p>
                <p>À travers des projets comme celui-ci, nous réaffirmons notre engagement : mettre la technologie au service de la santé, de la convivialité et de la qualité de vie au travail.</p>
            </div>
            <div class="right-section">
                <div class="image-decoration">
                    <img src="<?= get_home_url() . '/wp-content/themes/twentytwentyone-child/assets/images/logo/logo-techaddict.png'; ?>" 
                    alt="Logo TechAddict">
                </div>
            </div>
        </div>
    </div>
</section>

<?php

get_footer();


?>