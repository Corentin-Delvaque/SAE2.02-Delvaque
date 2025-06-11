<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
			</main>
		</div>
	</div>

<footer>
    <div class="website-infos-section">
        <div class="wrapper">
            <div class="left-website-infos">
                <a href="<?= get_site_url(); ?>" class="website-infos">
                    <img class="website-logo left-website-infos" src="<?= esc_url( wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' )[0] ); ?>" alt="">
                        <h2 class="website-title uppercase"><?= get_bloginfo('name'); ?></h2>
                </a>
            </div>
            <div class="right-website-infos">
                <p><img class="picto" src="<?= get_home_url() . '/wp-content/themes/twentytwentyone-child/assets/images/pictos/location-picto.png'; ?>" alt="Email pictogramme">
                    <a href="https://maps.app.goo.gl/PkdczCWdH2p4xcaMA" target="_blank">12 All. André Maurois, 87065 Limoges</a>
                </p>
                <p>
                    <img class="picto" src="<?= get_home_url() . '/wp-content/themes/twentytwentyone-child/assets/images/pictos/email-picto.png'; ?>" alt="Email pictogramme">
                    <a href="mailto:contact@techaddict.fr" target="_blank">
                        contact@techaddict.fr
                    </a>
                </p>
                <p><img class="picto" src="<?= get_home_url() . '/wp-content/themes/twentytwentyone-child/assets/images/pictos/phone-picto.png'; ?>" alt="Téléphone pictogramme"><span><a href="tel:+33555434355">05 55 43 43 55</a></span></p>
            </div>
        </div>
    </div>
    <div class="legals-section-footer">
        <div class="wrapper">
            <div class="legals-links">
                <?php wp_nav_menu(['theme_location'=>'legals']); ?>
            </div>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<?php wp_footer(); ?>

</body>
</html>
