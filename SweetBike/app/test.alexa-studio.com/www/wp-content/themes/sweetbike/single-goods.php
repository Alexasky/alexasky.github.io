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
                <?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );					
				?>
              </div>
              <p class="banner rent">Велосипед выдается под залог - 3000 руб., велошлем - 500 руб., чемодан - 10тыс. руб.<br>
                                При себе необходимо иметь паспорт.
              <div class="cleaner"></div>
              <div class="border-block"></div>
            </div>
            <div class="cleaner"></div>
          </div>
          <div class="row content-wrapper">
            	<div class="col-lg-3 vertical-menu">
              		<ul>
		                <li class="cat-item"><a href="<?php
									 $idObj = get_category_by_slug('bike');
									 $id = $idObj->term_id;
									 echo get_category_link($id);?>" class="menu-link"><?php
									 $idObj = get_category_by_slug('bike');
									 $id = $idObj->term_id;
									 echo get_cat_name($id);?></a></li>
		                <li class="cat-item"><a href="<?php
									 $idObj = get_category_by_slug('suitcase');
									 $id = $idObj->term_id;
									 echo get_category_link($id);?>" class="menu-link"><?php
									 $idObj = get_category_by_slug('suitcase');
									 $id = $idObj->term_id;
									 echo get_cat_name($id);?></a></li>     
		                <li class="cat-item"><a href="<?php
									 $idObj = get_category_by_slug('bag');
									 $id = $idObj->term_id;
									 echo get_category_link($id);?>" class="menu-link"><?php
									 $idObj = get_category_by_slug('bag');
									 $id = $idObj->term_id;
									 echo get_cat_name($id);?></a></li>
		                <li class="cat-item"><a href="<?php
									 $idObj = get_category_by_slug('tools');
									 $id = $idObj->term_id;
									 echo get_category_link($id);?>" class="menu-link"><?php
									 $idObj = get_category_by_slug('tools');
									 $id = $idObj->term_id;
									 echo get_cat_name($id);?></a></li>
		                <li class="cat-item"><a class="menu-link" href="<?php echo(get_category_link(get_category_by_slug('bike_machine_tool'))); ?>"><?php echo(get_cat_name(get_category_by_slug('bike_machine_tool')->term_id)); ?></a></li>
									 
									 

		              </ul>

                </div>           
           
              
              <?php
              
              /* вывод списка рубрик */					
				
				$catlist = get_categories('orderby=name&include=12,13,14,15,16'); // получаем список рубрик
				echo '<div class="col-lg-9 catalog-block">';
				the_archive_title( '<h2>', '</h2>' );
				
				foreach($catlist as $categories_item){
				

				
					// получаем данные из плагина Taxonomy Images
					$terms = apply_filters('taxonomy-images-get-terms', '', array(
						'taxonomy' => 'category' // таксономия, для которой нужны изображения
						));
				
					if (!empty($terms)){
						foreach((array)$terms as $term){
							if ($term->term_id == $categories_item->term_id){
								// выводим изображение рубрики
								print '<div class="col-lg-6 item-catalog"><div class="item-catalog-block"><a href="' . esc_url(get_term_link($term, $term->taxonomy)) . '" title="Нажмите, чтобы перейти в раздел">' . wp_get_attachment_image($term->image_id, 'thumbnail');
				                               echo '</a>';
								}
							}
						}
					
					// выводим название рубрики
					echo '<h3>' . $categories_item->cat_name . '</h3></div></div>';
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
get_sidebar();
get_footer();
