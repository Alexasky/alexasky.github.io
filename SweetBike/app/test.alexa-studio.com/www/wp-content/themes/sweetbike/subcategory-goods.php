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
								<ul class="accordion">


									<?php $children_categories = get_categories( "parent={$category_goods}&orderby=ID" ); // дочерние категории?>
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


								<div class="col-lg-9 catalog-block">
									<?php
										the_archive_title( '<h2>', '</h2>' );
									?>
		              <div class="catalog-wrapper">



						<?php
						// номер рубрики
						$category_catlist_id = get_query_var( 'cat' );
						// данные о дочерних рубриках
						$catlist = get_categories( "parent={$category_catlist_id}&orderby=ID" ); // var_dump($catlist);// get list of categories
						?>
						<?php
						foreach($catlist as $catlist_item){



										// get data from plagin Taxonomy Images
										$terms = apply_filters('taxonomy-images-get-terms', '', array(
											'taxonomy' => 'category' // taxonomy that need images
											));

										if (!empty($terms)){
											foreach((array)$terms as $term){
												if ( $catlist_item->term_id == $term->term_id && !empty($term)){
													// displaying images of category
													print '<div class="col-lg-4 item-catalog item-catalog-menu"><a class="menu-link-hover" href="' . esc_url(get_term_link($term, $term->taxonomy)) . '" title="Нажмите, чтобы посмотреть все товары"><div class="item-catalog-block">' . wp_get_attachment_image($term->image_id, 'thumbnail');
																								 
																								 // displaying name of category
													echo '<div class="description"><p class="title-item">' . $catlist_item->cat_name . '</p></div></div></a></div>';
															}

												}
											}
										}
										?>







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
