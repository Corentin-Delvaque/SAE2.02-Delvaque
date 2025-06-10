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
                <h2 class="title-decoration">Trouvez la voiture idéale à deux pas de Limoges !</h2>
                <p>Notre concession automobile propose une vaste sélection de voitures d'occasion de marques françaises et internationales.</p>
                <p>Chez nous, vous trouverez le véhicule parfait pour répondre à vos besoins et à votre budget !</p>
                <p>Basés à Limoges, nous sommes fiers de servir la communauté locale depuis plus de 5 ans. En tant que passionnés de l'industrie automobile, notre mission est de vous offrir des véhicules de qualité, alliant performance, fiabilité et économie. Découvrez pourquoi tant de particuliers et professionnels font confiance à notre expertise en matière de voitures d'occasion.</p>
                <a href="/a-propos" class="button-primary button-blue">En savoir plus</a>
            </div>
            <div class="right-section">
                <div class="image-decoration">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/dQw4w9WgXcQ?si=VmxTCtrMh3Ah5krw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="image-decoration-section image-decoration-left leboncoin-section">
    <div class="wrapper">
        <div class="page">
            <div class="left-section">
                <h2>Découvrez toutes nos voitures disponibles !</h2>
                <p>Explorez notre large sélection de voitures neuves et d'occasion sur leboncoin.</p>
                <p>Trouver votre prochain véhicule parmi notre inventaire de qualité, mis à jour régulièrement. Centre auto 87 vous offre les meilleures options à Limoges et ses environs.</p>
                <p>Ne manquez pas nos offres exclusives !</p>
                
                <!--<p>Que vous cherchiez à acheter une nouvelle voiture ou à en apprendre davantage sur les dernières tendances de l'industrie, Centre Auto 87 est votre partenaire de confiance. </p>-->
                <!--<p>Nous mettons tout en œuvre pour offrir un service exceptionnel, des offres spéciales avantageuses, et des véhicules éco-responsables pour une conduite de qualité.</p>-->
                <!--<p>Explorez notre gamme de véhicules et découvrez pourquoi Centre auto 87 est le choix incontournable pour vos besoins automobiles à Limoges !</p>-->
                
                <a href="https://www.leboncoin.fr/boutique/6021088/centre_auto_87.htm" target="_blank" class="button-primary button-orange">Aller sur leboncoin</a>
            </div>
            <div class="right-section image-decoration">
                <!--<div class="image-decoration">-->
                    <img src="<?= get_home_url() . '/wp-content/themes/twentytwentyone-child/assets/images/photo/car-keys-3.jpg'; ?>" alt="Car keys decoration">
                <!--</div>-->
            </div>
        </div>
    </div>
</section>

<section class="partner-section">
    <div class="wrapper">
        <div class="left-area">
            <img src="<?= get_home_url() . '/wp-content/themes/twentytwentyone-child/assets/images/logo/limoges-csp-logo.png'; ?>" alt="Stade CSP Limoges">

        </div>
        <div class="right-area">
            <h2 class="title">
                Partenaire officiel du <span>Limoges&nbsp;CSP</span>
            </h2>
            <p>Le Centre auto 87 est fier d'être le partenaire officiel du prestigieux club de basket du CSP Limoges.</p>
            <p>Unis par la passion du sport et de la performance, nous soutenons l'équipe dans ses défis, offrant qualité et engagement à nos clients, tout comme le CSP incarne l'excellence sur le terrain.</p>
            <a class="button-primary button-big button-green" href="https://www.limogescsp.com/" target="_blank">
                Visiter le site
            </a>

        </div>
    </div>
</section>

<?php get_footer(); ?>