<?php
/*
Template Name: Accueil
*/
?>

<?php get_header(); ?>

<section class="image-decoration-section">
    <div class="wrapper">
        <div class="page">
            <div class="left-section">
                <h2>Découvrez CoMove en vidéo !</h2>
                <p>Comment rester actif au bureau, sans matériel ni contraintes ?</p>
                <p>CoMove, l’application conçue Pour les coworker d'Héméra, vous aide à transformer vos pauses en instants d’énergie, de cohésion et de bien-être. Découvrez comment elle s’intègre naturellement dans le quotidien des équipes.</p>
                <a href="https://www.youtube.com/embed/DCIM6n2Bqyg?si=FdrEcnvz6xAk_RC_" class="button-primary button-blue">Voir la vidéo</a>
            </div>
            <div class="right-section">
                <div class="image-decoration">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/DCIM6n2Bqyg?si=FdrEcnvz6xAk_RC_" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="section-separator"></div>

<section class="image-decoration-section image-decoration-left">
    <div class="wrapper">
        <div class="page">
            <div class="left-section">
                <h2>Notre nouvelle initiative pour le bien-être au travail !</h2>
                <p>Tech’Addict lance CoMove : une application mobile pensée pour lutter efficacement contre la sédentarité en entreprise.</p>
                <p>Conçue pour les professionnels d'Héméra, CoMove transforme chaque pause en un moment simple, ludique et revitalisant, favorisant l'engagement collectif et le bien-être quotidien.</p>
                <p>Explorez cette nouveauté dans notre communiqué de presse et découvrez comment 15 minutes par jour peuvent faire toute la différence.</p>
                <a href="<?= get_home_url() . '/wp-content/themes/twentytwentyone-child/assets/images/fichier/communique_de_presse.pdf'; ?>" download target="_blank" class="button-primary button-blue">Télécharger le communiqué</a>
            </div>
            <div class="right-section">
                <div class="image-decoration">
                    <img src="<?= get_home_url() . '/wp-content/themes/twentytwentyone-child/assets/images/photo/communiqué_de_presse.jpeg'; ?>" alt="Communiqué de presse">
                </div>
            </div>
        </div>
    </div>
</section>

<div class="section-separator"></div>

<section class="image-decoration-section">
    <div class="wrapper">
        <div class="page-column">
            <div class="left-section">
                <h2>Jetez un œil à l'application CoMove !</h2>
            </div>
            <?php echo do_shortcode( '[carousel_slide id="37"]' ); ?>
        </div>
    </div>
</section>

<div class="section-separator"></div>

<section class="image-decoration-section">
    <div class="wrapper">
        <div class="left-section">
            <h2>Les avis de nos utilisateurs !</h2>
        </div>
        <div class="testimonials-section light">
            <div class="testimonial-wrapper">
                <img src="<?= get_home_url() . '/wp-content/uploads/2025/06/Face-1.jpeg'; ?>" alt="Portrait de Wade." class="testimonial-photo">
                <div class="testimonial-text">
                    <blockquote class="testimonial-quote">Franchement, j’étais pas convaincu au départ, mais l’appli m’a surpris. Elle motive bien, surtout avec les défis entre collègues, et crée une bonne ambiance chez Héméra.</blockquote>
                    <p class="testimonial-author">Wade K. Guerra
                        <span>Développeur</span>
                    </p>
                </div>
            </div>
            <div class="testimonial-wrapper">
                <img src="<?= get_home_url() . '/wp-content/uploads/2025/06/Face-2-1.jpg'; ?>" alt="Portrait de Leone." class="testimonial-photo">
                <div class="testimonial-text">
                    <blockquote class="testimonial-quote">Je ne m’attendais pas à ce que ça me plaise autant. L’appli est super simple à utiliser, et ce que j’adore, c’est l’esprit de communauté qu’elle crée chez Héméra.</blockquote>
                    <p class="testimonial-author">Leone Dennis
                        <span>Designer</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="section-separator"></div>

<section class="partner-section">
    <div class="wrapper">
        <div class="left-area">
            <img src="<?= get_home_url() . '/wp-content/themes/twentytwentyone-child/assets/images/logo/logo-Hemera.svg'; ?>" alt="Logo Héméra">
        </div>
        <div class="right-area">
            <h2 class="title-decoration">Partenaire officiel de <span>Héméra</span></h2>
            <p>Tech’Addict est fier d’établir un partenariat avec Héméra, un acteur majeur de l’écosystème entrepreneurial et du coworking en France.</p>
            <p>Unis par une vision commune du bien-être au travail et de l’innovation collaborative, nous expérimentons conjointement de nouvelles façons d’intégrer la technologie au quotidien des professionnels. Héméra offre un contexte idéal pour déployer CoMove, notre application qui favorise le mouvement, le lien social et l’énergie dans les espaces de travail.</p>
            <a class="button-primary button-big button-blue" href="https://www.hemera.camp" target="_blank">Visiter le site</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>