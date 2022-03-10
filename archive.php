<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kodu-2022
 */

get_header();
?>

<section class="portfolio main-padding" id="portfolio">
    <h2 class="section-header">portfolio</h2>
    <ul>
        <?php
            $args  = array(
                'post_type'       => 'portfolio',
                'post_status'     => 'publish',
                'orderby'         => 'post_date'
            );
        
        $posts = get_posts($args);
        
        foreach ($posts as $post) :
        ?>
            <?php get_template_part('template-parts/content', 'single-post');?>
        
        <?php endforeach; ?>
    </ul>
</section>

<?php
get_footer();
