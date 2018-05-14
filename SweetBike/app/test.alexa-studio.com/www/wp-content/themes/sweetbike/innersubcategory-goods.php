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
		<main id="main" class="site-main catalog">

			<div id="catalog_sub_inner_main" class="container">
      <div class="row">
        <div class="col-lg-12 workshop-wrap">
          <div class="row">
            <div class="col-lg-12 first-row">
              <div class="head-line">
								<ul class="breadcrumbs">
									<?php $category_goods = get_cat_ID( 'ТОВАРЫ' ); // id родительской рубрики ?>
									<?php $category = get_category( $category_goods );?>
									<?php $parentCategory = get_category($category->category_parent);?>

									<?php echo get_category_parents($cat, TRUE, '  '); ?>

								</ul>
							</div>
							<?php
								// номер рубрики
								$category_id = get_query_var( 'cat' );
								// номер текущей страницы
								$page = get_query_var( 'paged' );
								// данные о текущей категории
								$category = get_category( $category_id );
								// данные о дочерних рубриках
								$children_categories = get_categories( "parent={$category_id}&orderby=ID" );

								?>

									<?php if($category->description):?>
										<div class="banner banner-inner">
											<?php echo category_description($category_id); ?>
										</div>
									<?php endif; ?>



              <div class="cleaner"></div>
              <div class="border-block"></div>
            </div>
            <div class="cleaner"></div>
          </div>
          <div class="row content-wrapper">


						<div class="col-lg-3 vertical-menu">
								<?php get_sidebar(); ?>

							</div>


								<div class="col-lg-9 catalog-block">
									<?php
										the_archive_title( '<h2>', '</h2>' );
									?>
		              <div class="catalog-wrapper popup-items">
									<?php while (have_posts()) : the_post(); ?>
											<div class="col-lg-4 item-catalog item-catalog-menu">
												<a href="" class="popup_content">
												<div class="item-catalog-block">
																	<?php the_post_thumbnail(array(236,181)); ?>
																	<div class="description">
																	<p class="title-item title-item-inner"><?php the_title(); ?><br><?php echo carbon_get_post_meta($post->ID, 'desc' ); ?></p>
																	<span class="catalog-price"><?php echo carbon_get_post_meta($post->ID, 'price' ); ?> руб.</span>
																	</div>
												</div>
												</a>
												  <div class="hidden">
									                  <div class="popup-item">
									                    <?php the_post_thumbnail(array(600,457)); ?>
									                    <div class="popup-item-content">
									                      <p class="popup-item-title"><?php the_title(); ?></p>
									                      <div class="popup-item-description"><?php the_content(); ?></div>
									                    </div>
									                    </div>
								                    </div>
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
