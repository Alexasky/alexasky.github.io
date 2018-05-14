<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package AllaEsipovich
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<section>
				<div class="container">
					<div class="row">
						<div class="col-lg-12 content-inner">
							<h1>Живопись</h1>
							<div class="col-lg-3 wrap-list-block">
								<div class="wrap-list-container">
									<ul class="list-block">
										<?php
											if(the_category_ID(false) == 4){
												$query = new WP_Query('cat=4');
												$i = 0;
												if( $query->have_posts()){
														while( $query->have_posts() ){ $query->the_post();
															$i++
														?>
															 <li class="list-block_item"><a class="list-block_item_link <?php if ($i == 1) echo ' active'; ?>" href="<?php echo get_permalink(); ?>"><span><?php the_title(); ?></span></a></li>
														<?php
														}
														wp_reset_postdata(); // reset $post
												}
												else ;
											}
										?>
										<?php
											if(the_category_ID(false) == 3){
												$query = new WP_Query('cat=3');
												$i = 0;
												if( $query->have_posts()){
														while( $query->have_posts() ){ $query->the_post();
															$i++
														?>
															 <li class="list-block_item"><a class="list-block_item_link <?php if ($i == 1) echo ' active'; ?>" href="<?php echo get_permalink(); ?>"><span><?php the_title(); ?></span></a></li>
														<?php
														}
														wp_reset_postdata(); // reset $post
												}
												else ;
											}
										?>
									</ul>
								</div>
								<div class="navigation">
									<a href="#" class="down"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
									<a href="#" class="up"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
								</div>
							</div>
							<div class="col-lg-9 wrap-item-photo">
								<div class="item-photo">
									<img src="<?php echo carbon_get_post_meta($post->ID, 'photo_work');?>" title="<?php echo carbon_get_post_meta($post->ID, 'title_work');?>" alt="<?php echo carbon_get_post_meta($post->ID, 'title_work');?>">
									<div class="clearfix"></div>
								</div>
								<div class="description-photo">
									<p><?php echo carbon_get_post_meta($post->ID, 'title_work');?></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<article class="about">
				<div class="container">
					<div class="row">
						<div class="col-lg-2">
							<div class="about_photo">
								<img src="<?php echo carbon_get_post_meta($post->ID, 'photo_painter');?>" title="<?php echo carbon_get_post_meta($post->ID, 'name');?>" alt="<?php echo carbon_get_post_meta($post->ID, 'name');?>">
							</div>
						</div>
						<div class="col-lg-10">
							<div class="about_content">
								<h2 class="about_title"><?php echo carbon_get_post_meta($post->ID, 'name');?></h2>
								<p class="about_years"><?php echo carbon_get_post_meta($post->ID, 'years');?></p>
								<div class="about_txt">
									<?php if (have_posts()) : the_post(); ?>
											<?php the_content(); ?>
									<?php endif; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</article>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
