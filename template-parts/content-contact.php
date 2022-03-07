<?php
/**
 * Template part for displaying page content in front-page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kodu-2022
 */

?>
<!-- contact section -->

<section class="contact main-padding" id="contact">
    <div class="contact__first flex flex-jc-sb">
        <div class="contact__first__image">
            <img src="<?php echo get_template_directory_uri(); ?>/images/cat-gif.gif" alt="">
        </div>
        <div class="contact__first__info">
            <h2 class="contact__first__info__header section-header">
                kontakt
            </h2>
            <p class="contact__first__info__text">
                Chcesz o coś zapytać? Użyj formularza lub napisz maila, a jeśli wiesz dokładnie czego potrzebujesz i chcesz uzyskać wycenę poświęć troche czasu i
                <a class="arrow-after" href="https://kodukodu.com/formularz/">wypełnij brief</a>
            </p>
            <p class="contact__first__info__email">
                kontakt@<br>kodukodu.com
            </p>
            <img src="<?php echo get_template_directory_uri(); ?>/images/hand-icon.png" alt="">
        </div>
    </div>
    <div class="contact__second flex flex-jc-c">
        <div class="contact__second__form">
            <h3 class="contact__second__form__header">Formularz kontaktowy</h3>
            <!-- contact form 7 plugin -->
            <?php echo apply_shortcodes( '[contact-form-7 id="1234" title="Contact form 1"]' ); ?>
        </div>
    </div>
</section>