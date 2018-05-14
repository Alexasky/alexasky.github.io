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
							<ul class="accordion">	
								<?php				
									$category_id_workshop = get_cat_ID( 'Прокат' );
									// номер текущей страницы
									$page = get_query_var( 'paged' );
									// данные о текущей категории
									$category_workshop = get_category( $category_id_workshop );
									
									?>				


									<?php $children_categories = get_categories( "parent={$category_id_workshop}&orderby=ID" ); // дочерние категории?>
									<?php if($children_categories): // если есть дочерние категории ?>
									<?php foreach($children_categories as $children_category): ?>
									<?php $link = get_category_link( $children_category->cat_ID ); ?>
									<?php $children_category_id = get_cat_ID( $children_category->name ); ?>
									<?php $inner_children_categories = get_categories( "parent={$children_category_id}&orderby=ID" );  ?>



									<?php if($inner_children_categories): // если есть дочерние категории в дочерних рубриках?>
									<div class="accordion-link-header number"><li><a class="menu-link" href="<?php echo $link; ?>"><?php echo $children_category->name; ?></a></li></div>
										<ul class="accordion-item">
										<?php foreach($inner_children_categories as $inner_children_category): ?>
										<?php $link_inner_children = get_category_link( $inner_children_category->cat_ID ); ?>
		                    <li><a class="accordion-link" href="<?php echo $link_inner_children; ?>"><?php echo $inner_children_category->name; ?></a></li>
										<?php endforeach; ?>
									</ul>

									<?php else: // оставляем пустым ?>
									<?php

										$query = new WP_Query($children_category);
										if( $query->have_posts() ){
										    while( $query->have_posts() ){ $query->the_post();
										    ?>
										    <div class="number"><li><a class="menu-link" href="<?php echo $link; ?>"><?php echo $children_category->name; ?></a></li></div>											
										      
										    <?php
										    }
										    wp_reset_postdata(); // сбрасываем переменную $post
										}
										else ;
										?>
									
											
									<?php endif; ?>

									<?php endforeach; ?>
									<?php endif; ?>

								</ul>
							<!--	<ul>

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

								</ul>-->
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
//get_sidebar();
get_footer();
