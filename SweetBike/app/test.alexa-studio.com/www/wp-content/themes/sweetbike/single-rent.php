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
			                  <ul class="breadcrumbs">

					               <?php $category_rent = get_cat_ID( 'Прокат' ); ?>
					                  <a href="<?php echo get_category_link($category_rent) ?>"><?php echo get_cat_name($category_rent) ?></a>
					                  <a href=""><?php the_title(); ?></a>


					            </ul>
			              </div>
			              <div class="banner rent">
				                
												 <?php echo apply_filters( 'the_content', carbon_get_post_meta($post->ID, 'banner') );?>


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

										$query = new WP_Query('cat=5');
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
              <h2><?php echo carbon_get_post_meta($post->ID, 'title-rent');?></h2>
              <div class="catalog-wrapper">
                <div class="row catalog-description-row">
                  <div class="col-lg-12 catalog-description">
                       <?php while (have_posts()) : the_post(); ?>

									  <?php the_content(); ?>

								<?php endwhile; ?>
                  </div>
                  <div class="cleaner"></div>
                </div>
                <div class="row catalog-column-wrapper">
                  <div class="col-lg-6 catalog-column first-catalog-column">
                <?php $list_photo_right = carbon_get_post_meta($post->ID, 'list_photo_right','complex' );?>


	                <?php foreach($list_photo_right as $list_photo_item): ?>

										<div class="item-catalog-block">
											<img src="<?php echo $list_photo_item['img_photo']; ?>" alt="" />

											<div class="description">
												<p class="title-item"><?php echo $list_photo_item['title_photo']; ?></p>
					                    	</div>

					                  </div>
					<?php endforeach; ?>

                  </div>
                  <div class="col-lg-6 catalog-column second-catalog-column">
                  <?php $list_photo_left = carbon_get_post_meta($post->ID, 'list_photo_left','complex' );?>


	                <?php foreach($list_photo_left as $list_photo_item): ?>

										<div class="item-catalog-block">

											<img src="<?php echo $list_photo_item['img_photo_left']; ?>" alt="" />

											<div class="description">
												<p class="title-item"><?php echo $list_photo_item['title_photo_left']; ?></p>
					                    	</div>

					                  </div>
					<?php endforeach; ?>
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
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
