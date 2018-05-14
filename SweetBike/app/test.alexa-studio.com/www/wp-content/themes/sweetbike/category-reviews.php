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

			<div class="container">
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


						<div class="col-lg-3 vertical-menu accordion">
								<ul>
									<?php if($children_categories): // если есть дочерние категории ?>
									<?php foreach($children_categories as $children_category): ?>
									<?php $link = get_category_link( $children_category->cat_ID ); ?>
									<?php $children_category_id = get_cat_ID( $children_category->name ); ?>
									<?php $inner_children_categories = get_categories( "parent={$children_category_id}&orderby=ID" );  ?>

										<li><a class="menu-link" href="<?php echo $link; ?>"><?php echo $children_category->name; ?></a>

									<?php if($inner_children_categories): // если есть дочерние категории в дочерних рубриках?>
										<div class="accordion-item">
										<?php foreach($inner_children_categories as $inner_children_category): ?>
										<?php $link_inner_children = get_category_link( $inner_children_category->cat_ID ); ?>
		                    <a class="accordion-link" href="<?php echo $link_inner_children; ?>"><?php echo $inner_children_category->name; ?></a>
										<?php endforeach; ?>
									</div>
									</li>
									<?php else: // оставляем пустым ?>
											</li>
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




              <?php

              /*displaying list of categories */

				$catlist = get_categories('include=19,20,21,22,23'); // get list of categories
				echo '<div class="col-lg-9 catalog-block">';
				the_archive_title( '<h2>', '</h2>' );

				foreach($catlist as $categories_item){



					// get data from plagin Taxonomy Images
					$terms = apply_filters('taxonomy-images-get-terms', '', array(
						'taxonomy' => 'category' // taxonomy that need images
						));

					if (!empty($terms)){
						foreach((array)$terms as $term){
							if ($term->term_id == $categories_item->term_id){
								// displaying images of category
								print '<div class="catalog-wrapper"><div class="col-lg-4 item-catalog item-catalog-menu"><div class="item-catalog-block"><a href="' . esc_url(get_term_link($term, $term->taxonomy)) . '" title="Нажмите, чтобы перейти в раздел">' . wp_get_attachment_image($term->image_id, 'thumbnail');
				                               echo '</a>';
								}
							}
						}

					// displaying name of category
					echo '<div class="description"><p>' . $categories_item->cat_name . '</p></div></div></div></div>';
					}
				echo '</div>';
				?>




            <div class="cleaner"></div>
        </div>
      </div>
    </div>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
