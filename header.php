<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package jut
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=0">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="container">

	<header class="jut_header" >
		<div class="jut_header__mobile">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php
			endif;?>
			<div class="mobileNav ">
				<div id="nav" >
					<div class="mobileNav-top_bar"></div>
					<div class="mobileNav-middle_bar"></div>
					<div class="mobileNav-bottom_bar"></div>
				</div>
			</div>
		</div><!-- .site-branding -->

		<nav id="responsive">
			<div class="responsive__menu">
				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
				?>
			</div>
			<li class="nav__cart">
				<ul>					
					<a class="cart-customlocation" href="<?php echo wc_get_cart_url(); ?>"
						title="<?php _e( 'View your shopping cart' ); ?>">
						<?php echo sprintf ( _n( 'Cart (%d)', 'Cart (%d) ', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?>

					</a>
				</ul>
			</li>
		</nav><!-- #site-navigation -->


	</header><!-- #masthead -->

	<div>
