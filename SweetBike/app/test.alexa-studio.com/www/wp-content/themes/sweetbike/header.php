<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SweetBike
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=1300px, initial-scale=1"> 
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'sweetbike' ); ?></a>

	<header id="masthead" class="site-header header_bg">
	    <div class="container container_main">
		      <div class="row">
		        <div class="col-lg-12">
			        

				        <?php $top_menu = wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'container_class' => 'menu',
						'before'          => '<div class="header_font">',
						'after'           => '</div>',
						'echo' => 0,

						 ) );
						 $top_menu = str_replace('class="sub-menu', 'class="sub-menu submenu',$top_menu);

						 echo $top_menu;?>
						 


		          <a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>"></a>
		        </div>
		        <div class="cleaner"></div>
		      </div>
		      <div class="row">
		        <div class="col-lg-12  header_font ">
		          <div class="address">
		            <p><?php echo carbon_get_theme_option( 'city' ); ?></p>
		            <p><?php echo carbon_get_theme_option( 'metro' ); ?></p>
		          </div>
		          <div class="social">
		            <ul>
		              <li><a href="<?php echo carbon_get_theme_option( 'whatsapp' ); ?>" target="_blank" ></a></li>
		              <li><a href="<?php echo carbon_get_theme_option( 'vk' ); ?>" target="_blank" ></a></li>
		              <li><a href="<?php echo carbon_get_theme_option( 'instagram' ); ?>" target="_blank" ></a></li>
		            </ul>
		          </div>
		        </div>
		        <div class="cleaner"></div>
		      </div>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
