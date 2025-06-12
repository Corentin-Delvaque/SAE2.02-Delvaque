    <?php

    $is_wide = '';
    global $template;

    if (is_single() || is_archive() || basename($template) === 'legals.php' || basename($template) === 'contact.php' || basename($template) === '404.php') {
        $is_wide = 'wide';
    }

    ?>

<section class="banner homepage <?= is_single() ? "banner-single" : "" ?> <?= $is_wide; ?> <?= $is_homepage; ?>">

    <?php

    if (is_archive()) {
        $banner_img = get_home_url() . "/wp-content/themes/twentytwentyone-child/assets/images/photo/travailleur-faisant-exercice.jpeg";
    } elseif (get_the_post_thumbnail_url()) {
        $banner_img = get_the_post_thumbnail_url(get_the_ID());
    } else {
        $banner_img = get_home_url() . "/wp-content/themes/twentytwentyone-child/assets/images/photo/travailleur-faisant-exercice.jpeg";
    }

    ?>

    <div class="banner-image"  style="background-image: url(<?= $banner_img; ?>)"></div>

    <div class="wrapper">
        <?php if (is_archive()) : ?>
            <h1 class="banner-title"><span class="highlight">Nos logiciels</span></h1>
        <?php elseif (is_front_page()) : ?>
            <img class="website-logo" src="<?= esc_url( wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' )[0] ); ?>" alt="Logo">
            <h1 class="banner-title"><span class="highlight"><?= get_bloginfo('name'); ?></span></h1>
            <h2 class="banner-subtitle"><span class="highlight"><?= get_bloginfo('description'); ?></span></h2>
        <?php elseif (is_404()) : ?>
            <h1 class="banner-title"><span class="highlight">Page introuvable</span></h1>
        <?php else : ?>
            <h1 class="banner-title"><span class="highlight"><?= get_the_title(); ?></span></h1>
        <?php endif; ?>
    </div>
</section>
