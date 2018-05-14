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
		<main id="main" class="site-main rent">
			
			<div class="container">
					 <div class="row">
						 <div class="col-lg-12 workshop-wrap">
							 <div class="row">
								 <div class="col-lg-12 first-row">
									 <div class="head-line">
											 <h1><?php the_title(); ?></h1>
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

			<!--<div class="container">
	 			      <div class="row">
	 			        <div class="col-lg-12 workshop-wrap">
	 			          <div class="row">
	 			            <div class="col-lg-12 first-row">
	 			              <div class="head-line">
	 			                 <h1><?php the_title(); ?></h1>
	 			              </div>
	 			              <div class="banner rent">
	 				                <?php the_excerpt(); ?>


	 							</div>
	 			                <div class="cleaner"></div>
	 			              <div class="border-block"></div>
	 			            </div>
	 			            <div class="cleaner"></div>
	 			          </div>
	           <div class="row content-wrapper">

	              <div class="col-lg-12 catalog-block default">	               
	               <div class="catalog-wrapper">
	                 <div class="row catalog-description-row">
	                   <div class="col-lg-12 catalog-description">
	                        <?php while (have_posts()) : the_post(); ?>

	 									  <?php the_content(); ?>

	 								<?php endwhile; ?>
	                   </div>
	                   <div class="cleaner"></div>
	                 </div>
	                 <div class="cleaner"></div>
	             </div>
	             <div class="cleaner"></div>
	           </div>
	         </div>
	       </div>
	     </div>
	 		</div> #default template-->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
