<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kodu-2022
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

	<header id="masthead" class="site-header main-padding flex flex-jc-sb">
		
	<!-- LOGO -->

		<div class="site-header__logo">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-header__logo__title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><span>kodu</span>kodu</a></h1>
				<?php
			else :
				?>
				<p class="site-header__logo__title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><span>kodu</span>kodu</a></p>
			<?php endif; ?>
		</div>
	
	<!-- MAIN MENU  -->
		<ul class="site-header__menu flex flex-ai-c">
			<li class="site-header__menu__item">
				<a href="" class="">co robię</a>
			</li>
			<li class="site-header__menu__item">
				<a href="" class="">portfolio</a>
			</li>
			<li class="site-header__menu__item">
				<a href="" class="">kontakt</a>
			</li>
		</ul>
	
	</header><!-- #masthead -->
