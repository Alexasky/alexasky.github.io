<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package AllaEsipovich
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'allaesipovich' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 wrap-header">
					<div class="wrap-header_block">
						<div class="col-lg-6">
							<a class="logo-inner" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><span>alla esipovich</span></a>
							<span class="wrap-header_block_curator">/ куратор</span>
							<div class="clearfix"></div>
						</div>
						<div class="col-lg-6">
							<div class="contacts-inner">
								<div class="header-phone">
									<span>+7 812 969 84 30</span>
								</div>
								<div class="header-email">
									<span>alya.e@mail.ru</span>
								</div>
								<div class="header-lang-switch">
									<?php the_msls(); ?>									
								</div>
							</div>
						</div>
						<div class="col-lg-9">
							<?php
									$curator_menu = wp_nav_menu( array(
										'theme_location' => 'curator_menu_inner',
										'menu'=>'curator_menu_inner',
										'container'       => 'nav',
										'container_class' => 'menu-inner',
										'menu_class'      => 'menu-inner_list',
										'echo' => 0,
									) );
									$curator_menu = str_replace('class="menu-item', 'class="menu-item menu-inner_list_item',$curator_menu);

									echo $curator_menu;
								?>
						</div>
						<div class="col-lg-3">
							<form class="search-group" action="<?php bloginfo( 'url' ); ?>" method="get">
								<span class="search-icon"><i class="fa fa-search" aria-hidden="true"></i></span>
								<input class="search-input"  type="search" name="s"  value="<?php if(!empty($_GET['s'])){echo $_GET['s'];}?>"/>
								<button type="submit" class="search-button"><i class="fa fa-caret-right" aria-hidden="true"></i></button>
								<div class="clearfix"></div>
							</form>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>

	</header><!-- #masthead -->

	<div id="content" class="site-content">
