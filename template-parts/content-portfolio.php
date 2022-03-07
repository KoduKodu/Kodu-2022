<?php
/**
 * Template part for displaying page content in front-page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kodu-2022
 */

?>

<!-- portoflio section -->

<section class="portfolio main-padding" id="portfolio">
    <h2 class="section-header">portfolio</h2>
    <ul>
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
                ?>
                <?php get_template_part('template-parts/content', 'single-post');?>
                <?php
            endwhile;
        else :
        endif;
        ?>
    </ul>
</section>