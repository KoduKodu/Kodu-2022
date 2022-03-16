<?php
/**
 * Template part for displaying posts on main page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kodu-2022
 */

?>

<li>
    <div class="portfolio__single flex">
        <a href="<?php the_permalink(); ?>" class="portfolio__single__image"
             style="background: url('<?php the_post_thumbnail_url(); ?>')">
        </a>
        <div class="portfolio__single__about flex">
            <h3 class="portfolio__single__about__title">
                <?php the_title(); ?>
            </h3>
            <p class="portfolio__single__about__desc flex">
                <?php the_excerpt('zobacz więcej'); ?>
            </p>
            <a class="more-link arrow-after" href="<?php the_permalink(); ?>">zobacz więcej</a>
        </div>
    </div>
</li>