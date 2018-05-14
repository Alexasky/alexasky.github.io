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
		<main id="main" class="site-main review">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 workshop-wrap">
						<div class="row">
							<div class="col-lg-12 first-row">
								<div class="head-line">
									<h1><?php the_title(); ?></h1>
								</div>
									<div class="banner-wrapper">
										<div class="banner">
											<?php while (have_posts()) : the_post(); ?>
													<?php the_content(); ?>
											<?php endwhile; ?>
										</div>
										<div class="social-review">
											<ul>
												<li><a href="<?php echo carbon_get_post_meta($post->ID, 'vk_link_review' ); ?>" target="_blank"></a></li>
												<li><a href="<?php echo carbon_get_post_meta($post->ID, 'google_link_review' ); ?>" target="_blank"></a></li>
												<li><a href="<?php echo carbon_get_post_meta($post->ID, 'yandex_link_review' ); ?>" target="_blank"></a></a></li>
											</ul>
										</div>
									</div>
								<div class="cleaner"></div>
								<div class="border-block"></div>
							</div>
							<div class="cleaner"></div>
						</div>
						<div class="row content-wrapper">
							<?php $list_reviews = carbon_get_post_meta($post->ID, 'list_reviews','complex' );?>
							 <?php foreach($list_reviews as $list_reviews_item): ?>
								 <div class="col-lg-12 item-review">
									 <div class="row item-review-block">
										 <div class="col-lg-2">
										 <img src="<?php echo $list_reviews_item['photo']; ?>" alt="" />
										 </div>
										 <div class="col-lg-10 description-review">
											 <span class="client-name"><?php echo $list_reviews_item['name']; ?></span>
											 <span class="client-review"><?php echo $list_reviews_item['review']; ?></span>
										 </div>
										 <div class="cleaner"></div>
										</div>
									</div>
							 <?php endforeach; ?>
						<div class="cleaner"></div>
					</div>
					<div class="cleaner"></div>
				</div>
				<div class="cleaner"></div>
			</div>
		</div>
	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
