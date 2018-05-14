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
		<main id="main" class="site-main workshop-inner">
			 <div class="container">
			      <div class="row">
			        <div class="col-lg-12 workshop-wrap">
			          <div class="row">
			            <div class="col-lg-12 first-row">
			              <div class="head-line">
			                  <ul class="breadcrumbs">
					               <?php $category_workshop = get_cat_ID( 'МАСТЕРСКАЯ' );?>
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
            	<div class="col-lg-3 vertical-menu">
								<ul>
									<?php
										$query = new WP_Query('cat=3');
										if( $query->have_posts() ){
										    while( $query->have_posts() ){ $query->the_post();
										    ?>
										       <li><a class="menu-link" href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></li>
										    <?php
										    }
										    wp_reset_postdata(); // сбрасываем переменную $post
										}
										else ;
										?>
								</ul>
                </div>
            <div class="col-lg-9 catalog-block">
              <h2><?php the_title(); ?></h2>
              <div class="row workshop-column-wrapper">
                <div class="col-lg-6 first-workshop-column">
	               <?php $list_services_right = carbon_get_post_meta($post->ID, 'list_services_right','complex' );?>
	                <?php foreach($list_services_right as $list_services_item): ?>
										<div class="item-catalog-block">
										<h3><?php echo $list_services_item['title']; ?></h3>
										  <div class="workshop-content">
						           	<?php echo apply_filters( 'the_content', $list_services_item['list'] );?>
					            </div>
					          </div>
									<?php endforeach; ?>
                </div>
                <div class="col-lg-6 second-workshop-column">
	                <?php $list_services_left = carbon_get_post_meta($post->ID, 'list_services_left','complex' );?>
	                <?php foreach($list_services_left as $list_services_left_item): ?>
										<div class="item-catalog-block">
										<h3><?php echo $list_services_left_item['title_left']; ?></h3>
										  <div class="workshop-content">
						             <?php echo apply_filters( 'the_content', $list_services_left_item['list_left'] );?>
					            </div>
					           </div>
									<?php endforeach; ?>
                		</div>
                		<div class="cleaner"></div>
              		</div>
	            	<div class="cleaner"></div>
	          	</div>
	        	</div>
	      	</div>
	    	</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
