<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package yellowtractor
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
<div id="page" class="site">


	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'yellowtractor' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="wrap-header">
			<div class="site-branding">
			<a href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg"></a>
				<?php
				if ( is_front_page() && is_home() ) :
					?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php
				else :
					?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php
				endif;
				$yellowtractor_description = get_bloginfo( 'description', 'display' );
				if ( $yellowtractor_description || is_customize_preview() ) :
					?>
					<p class="site-description"><?php echo $yellowtractor_description; /* WPCS: xss ok. */ ?></p>
				<?php endif; ?>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( '', 'ytbiz' ); ?>
							<div class="menuBtn-icon">
							  <span class="menuBtn-icon-line01"></span>
							  <span class="menuBtn-icon-line02"></span>
							  <span class="menuBtn-icon-line03"></span>
							</div>
						</button>
						<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
				?>
			</nav><!-- #site-navigation -->
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
