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
		<main id="main" class="site-main workshop">

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
			              <div class="col-lg-12 wrapper-schema">
			                <div class="col-lg-6 call-master">
			                  <h3>ВЫЗОВ МАСТЕРА НА ДОМ</h3>
			                  <img src="<?php echo get_template_directory_uri(); ?>/img/schema1.png" alt="">
			                </div>
			                <div class="col-lg-6 workshop-repair">
			                  <h3>РЕМОНТ В МАСТЕРСКОЙ</h3>
			                  <img src="<?php echo get_template_directory_uri(); ?>/img/schema2.png" alt="">
			                </div>
			                <div class="cleaner"></div>
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
            	<div class="col-lg-3 vertical-menu">
								<ul>
									<?php while (have_posts()) : the_post(); ?>
									  <li><a class="menu-link" href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></li>

									<?php endwhile; ?>
								</ul>
                </div>

                          <div class="col-lg-9 catalog-block">
              <h2><?php echo get_cat_name($category_id_workshop);?></h2>

	                <?php while (have_posts()) : the_post(); ?>
	                <div class="col-lg-6 item-catalog">
		                <a class="menu-link menu-link-hover" href="<?php echo get_permalink(); ?>">
						<div class="item-catalog-block">
			                <?php the_post_thumbnail(array(360,266)); ?>
			                <h3><?php the_title(); ?></h3>
					 	</div>
					 	</a>
	              	</div>
					<?php endwhile; ?>

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
