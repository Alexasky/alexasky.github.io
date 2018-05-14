<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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
											 <ul class="breadcrumbs">
												<?php $category_workshop = get_cat_ID( 'КОМАНДА' );?>
													 <a href="<?php echo get_category_link($category_workshop) ?>"><?php echo get_cat_name($category_workshop) ?></a>
													 <a href=""><?php the_title(); ?></a>
										 </ul>
									 </div>
										 <div class="banner rent">
												 <?php while (have_posts()) : the_post(); ?>
														 <?php the_content(); ?>
												 <?php endwhile; ?>
										 </div>
										 <div class="cleaner"></div>
									 <div class="border-block"></div>
								 </div>
								 <div class="cleaner"></div>
							 </div>
					 <div class="row content-wrapper">
						 <div class="col-lg-12 catalog-block">
								 <div class="catalog-wrapper">
									<?php $list_works = carbon_get_post_meta($post->ID, 'list_works','complex' );?>
									 <?php foreach($list_works as $list_works_item): ?>
										 <div class="col-lg-4 item-catalog item-catalog-menu">
											 <div class="item-catalog-block full">
												 <img src="<?php echo $list_works_item['photo_work']; ?>" alt="" />
												 <div class="description">
													 <p class="title-item"><?php echo $list_works_item['title_work']; ?></p>
												 </div>
												</div>
											</div>
									 <?php endforeach; ?>
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
get_footer();
