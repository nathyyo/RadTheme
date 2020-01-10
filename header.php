<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp-Nathy
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
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'where-beauty-meets-design' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$where_beauty_meets_design_description = get_bloginfo( 'description', 'display' );
			if ( $where_beauty_meets_design_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $where_beauty_meets_design_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation"  class="navbar navbar-expand-md navbar-light top bg-light">
    <a class="navbar-brand" href="#"><?php bloginfo('name'); ?></a>
    <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'where_beauty_meets_design' ); ?></button>
    <?php
    wp_nav_menu( array(
      'theme_location'  => 'menu-1',
      'menu_id'         => 'primary-menu',
      'container'       => 'div',
            'container_id'    => 'navbarCollapse',
      'container_class' => 'collapse navbar-collapse',
      'menu_class'      => 'navbar-nav mr-auto',
            'walker'          => new where_beauty_meets_design_navbar()
    ) );
    ?>
  </nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
