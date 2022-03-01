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

<section class="portfolio main-padding">
    <h2 class="section-header">portfolio</h2>
    <ul>
        <li>
            <div class="portfolio__single flex">
                <img class="portfolio__single__image" src="<?php echo get_template_directory_uri(); ?>/images/gaudeamus-thumb.png" alt="" >
                <div class="portfolio__single__about">
                    <h3 class="portfolio__single__about__title">
                        Gaudeamus
                    </h3>
                    <p class="portfolio__single__about__desc">
                        Strona Nagrody Stowarzyszenia Wydawców Szkół Wyższych
                    </p>
                    <a href="#" class="portfolio__single__about__link arrow-after flex">zobacz więcej</a>
                </div>
            </div>
        </li>
        <li>
            <div class="portfolio__single flex">
                <img class="portfolio__single__image" src="<?php echo get_template_directory_uri(); ?>/images/gaudeamus-thumb.png" alt="" >
                <div class="portfolio__single__about">
                    <h3 class="portfolio__single__about__title">
                        Gaudeamus
                    </h3>
                    <p class="portfolio__single__about__desc">
                        Strona Nagrody Stowarzyszenia Wydawców Szkół Wyższych
                    </p>
                    <a href="#" class="portfolio__single__about__link arrow-after flex">zobacz więcej</a>
                </div>
            </div>
        </li>
    </ul>
</section>