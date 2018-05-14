<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package SweetBike
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main report">
			<div class="container">
				 <div class="row">
					 <div class="col-lg-12 workshop-wrap">
						 <div class="row">
							 <div class="col-lg-12 first-row">
								 <div class="head-line">

									 <?php   $category_id_workshop = get_query_var( 'cat' );?>
						 		 	 <h1><?php echo get_cat_name($category_id_workshop);?></h1>

								 </div>
								 <div class="banner rent">
									 <?php echo category_description(); ?>
								 </div>

								 <div class="cleaner"></div>
								 <div class="border-block"></div>
							 </div>
							 <div class="cleaner"></div>
						 </div>
			 <div class="row content-wrapper">
				 <?php
				 // номер текущей страницы
				 $page = get_query_var( 'paged' );
				 // данные о текущей категории
				 $category_workshop = get_category( $category_id_workshop );
				 ?>
					<div class="col-lg-12 catalog-block">					
					 <div class="catalog-wrapper report-catalog-wrapper ">

							 <?php while (have_posts()) : the_post(); ?>
							 <div class="col-lg-4 item-catalog item-catalog-menu">
				 			 	 <a class="menu-link menu-link-hover" href="<?php echo get_permalink(); ?>">
					 			 	<div class="item-catalog-block report-item-block">
										 <div class="report-item"><?php the_post_thumbnail(array(327,181)); ?></div>
										 <div class="description">
										 	<p class="title-item"><?php the_title(); ?></p>
										 </div>
					 			 	</div>
					 			 </a>
							</div>
			 <?php endwhile; ?>

					 	</div>
					 </div>
				 <div class="cleaner"></div>
			 </div>
		 </div>
	 </div>
 </div>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
