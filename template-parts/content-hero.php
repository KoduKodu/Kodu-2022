<?php
/**
 * Template part for displaying page content in front-page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kodu-2022
 */

?>
<!-- hero section -->
<section class="hero main-padding flex flex-jc-sb">
    <!-- hero description -->
    <div class="hero__descritpion">
        <p class="hero__description">
            Tworzę miejsca
            w internecie
            dla Twojego <span>biznesu,
            produktu</span> lub <span>idei</span>.
        </p>
        <a href="#">
            <button class="button">
                poznajmy się
            </button>
        </a>
    </div>
    <div class="hero__image flex flex-ai-end">
        <img src="<?php echo get_template_directory_uri(); ?>/images/mind-blowing-gif.gif" alt="">
    </div>

</section>