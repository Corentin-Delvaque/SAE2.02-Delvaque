<?php
/*
Template Name: Contact
*/
?>

<?php get_header(); ?>

<section class="contact-info-section">
    <div class="wrapper">
        <div class="contact-infos">
            <a class="contact-info" href="mailto:contact@centreauto87.fr" target="_blank">
                <img src="<?= get_home_url() . '/wp-content/themes/twentytwentyone-child/assets/images/pictos/email-picto.png'; ?>" alt="Email">
                contact@techaddict.fr
            </a>

            <a class="contact-info" href="tel:+33555434355" target="_blank">
                <img src="<?= get_home_url() . '/wp-content/themes/twentytwentyone-child/assets/images/pictos/phone-picto.png'; ?>" alt="Téléphone">
                05 55 43 43 55
            </a>

            <a class="contact-info" href="https://maps.app.goo.gl/PkdczCWdH2p4xcaMA" target="_blank">
                <img src="<?= get_home_url() . '/wp-content/themes/twentytwentyone-child/assets/images/pictos/location-picto.png'; ?>" alt="Adresse">
                12 All. André Maurois <br> 87065 Limoges
            </a>
        </div>
    </div>
</section>

<section id="contact-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2779.7488986973517!2d1.2315844999999999!3d45.836309199999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47fecb41702fc8a5%3A0x60982c91a88a0fdd!2sM%C3%A9tiers%20du%20Multimedia%20et%20de%20l&#39;Internet!5e0!3m2!1sfr!2sfr!4v1749649009409!5m2!1sfr!2sfr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>

<?php

get_footer();

?>