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

			<div id="catalog_main" class="container">
      <div class="row">
        <div class="col-lg-12 workshop-wrap">
          <div class="row">
            <div class="col-lg-12 first-row">
              <div class="head-line">
                <?php
									the_archive_title( '<h1 class="page-title">', '</h1>' );
								?>
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
										<div class="banner rent">
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
								<ul class="accordion">
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
											<div class="number"><li><a class="menu-link" href="<?php echo $link; ?>"><?php echo $children_category->name; ?></a></li></div>
									<?php endif; ?>

									<?php endforeach; ?>
									<?php endif; ?>

								</ul>

							</div>
            	<!--<div class="col-lg-3 vertical-menu accordion">
              		<ul>

		                <li class="cat-item"><a class="menu-link" href="<?php echo(get_category_link(get_category_by_slug('repair_parts'))); ?>"><?php echo(get_cat_name(get_category_by_slug('repair_parts')->term_id)); ?></a></li>
		                <li class="cat-item"><a class="menu-link" href="<?php echo(get_category_link(get_category_by_slug('accessories'))); ?>"><?php echo(get_cat_name(get_category_by_slug('accessories')->term_id)); ?></a>
		                  <div class="accordion-item">



		                </li>
		                <li class="cat-item"><a class="menu-link" href="<?php echo(get_category_link(get_category_by_slug('clothes'))); ?>"><?php echo(get_cat_name(get_category_by_slug('clothes')->term_id)); ?></a></li>
		                <li class="cat-item"><a class="menu-link" href="<?php echo(get_category_link(get_category_by_slug('service'))); ?>"><?php echo(get_cat_name(get_category_by_slug('service')->term_id)); ?></a></li>
		                <li class="cat-item"><a class="menu-link" href="<?php echo(get_category_link(get_category_by_slug('transportation'))); ?>"><?php echo(get_cat_name(get_category_by_slug('transportation')->term_id)); ?></a></li>



		              </ul>

                </div>-->

								<div class="col-lg-9 catalog-block">
		              <h2>интересные товары</h2>
		              <div class="catalog-wrapper popup-items">

									<?php	$query = new WP_Query('numberposts=0&tag=fav_items');?>
											 <?php if ( $query->have_posts() ) :?> <?php while ( $query->have_posts() ) : $query->the_post(); ?>

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
								                    </div>											</div>
											<?php endwhile; ?>
											<?php else: ?>
											//Если записей нет 
											<?php endif; ?>


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
