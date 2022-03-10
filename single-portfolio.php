<?php
/**
 * The template for displaying portfolio posts
 *
 * @package kodu-2022
 */

get_header();
?>

<?php
// Get the Video Fields
$video =  get_field('video');              

// Build the  Shortcode
$attr =  array(
'mp4'      => $video,
'preload'  => 'auto',
'width'    => '560px'
);
?>

	<main id="primary" class="site-main"></main>
        <article class="portfolio__single main-padding">
            <h2 class="section-header">
                <?php the_title();?>
            </h2>
                <div class="portfolio__single__desc flex flex-jc-sb">
                    <p class="portfolio__single__desc__content">
                        <?php the_content(); ?>
                    </p>
                    <div class="portfolio__single__desc__video">
                        <?php echo wp_video_shortcode(  $attr );?>
                    </div>
                </div>
                <div class="portfolio__single__gallery">
                    <img
                        class="portfolio__single__gallery__desktop"
                        src="<?php the_field('desktop_screenshot'); ?>"
                        alt=""
                    >
                    <img
                        class="portfolio__single__gallery__desktop__extend"
                        src="<?php the_field('desktop_screenshot_extend'); ?>"
                        alt=""
                    >
                    <img
                        class="portfolio__single__gallery__mobile"
                        src="<?php the_field('mobile_screenshot'); ?>"
                        alt=""
                    >
                </div>


        </article>
	</main><!-- #main -->

<?php
get_footer();
