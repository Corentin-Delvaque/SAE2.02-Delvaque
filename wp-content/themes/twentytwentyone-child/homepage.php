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
                <p>Comment bouger plus au bureau, sans matériel ni contraintes ?</p>
                <p>Cette vidéo vous présente CoMove, l’application pensée pour transformer vos pauses en moments d’énergie, de lien et de bien-être.</p>
                <a href="/a-propos" class="button-primary button-blue">En savoir plus</a>
            </div>
            <div class="right-section">
                <div class="image-decoration">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/zjJM2_kmDBA?si=OVAsMBqoSjyj0259" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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
                <p>Tech’Addict présente CoMove, une application mobile innovante pour lutter contre la sédentarité au bureau.</p>
                <p>Pensée pour les professionnels, cette solution transforme vos pauses en moments de mouvement, de cohésion et de bonne humeur.</p>
                <p>Explorez cette nouveauté dans notre communiqué de presse et découvrez comment 15 minutes par jour peuvent faire toute la différence.</p>
                
                <a href="<?= get_home_url() . '/wp-content/themes/twentytwentyone-child/assets/images/fichier/communique_de_presse.pdf'; ?>" download target="_blank" class="button-primary button-blue">communique de presse</a>
            </div>
            <div class="right-section">
                <div class="image-decoration">
                    <img src="<?= get_home_url() . '/wp-content/themes/twentytwentyone-child/assets/images/photo/communiqué_de_presse.jpeg'; ?>" alt="Car keys decoration">
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
                <h2>Jetez un œil à CoMove en action !</h2>
            </div>
            <?php echo do_shortcode( '[carousel_slide id="37"]' ); ?>
        </div>
    </div>
</section>

<div class="section-separator"></div>

<section class="partner-section">
    <div class="wrapper">
        <div class="left-area">
            <img src="<?= get_home_url() . '/wp-content/themes/twentytwentyone-child/assets/images/logo/logo-Hemera.svg'; ?>" alt="Stade CSP Limoges">

        </div>
        <div class="right-area">
            <h2 class="title-decoration">
                Partenaire officiel de <span>Héméra</span>
            </h2>
            <p>Tech’Addict est fier d’établir un partenariat avec Héméra, un acteur majeur de l’écosystème entrepreneurial et du coworking en France.</p>
            <p>Unis par une vision commune du bien-être au travail et de l’innovation collaborative, nous expérimentons conjointement de nouvelles façons d’intégrer la technologie au quotidien des professionnels. Héméra offre un contexte idéal pour déployer CoMove, notre application qui favorise le mouvement, le lien social et l’énergie dans les espaces de travail.
            </p>
            <a class="button-primary button-big button-blue" href="https://www.hemera.camp" target="_blank">
                Visiter le site
            </a>

        </div>
    </div>
</section>

<?php get_footer(); ?>