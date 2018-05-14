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
		<main id="main" class="site-main workshop-inner">

		    <div class="container">
			      <div class="row">
			        <div class="col-lg-12 workshop-wrap">
			          <div class="row">
			            <div class="col-lg-12 first-row">
			              <div class="head-line">
				                <ul class="breadcrumbs">
					                
					               <?php $category_workshop = get_cat_ID( 'МАСТЕРСКАЯ' );?>
					                  <li class="breadcrumbs-item"><a href="<?php echo get_category_link($category_workshop) ?>"><?php echo get_cat_name($category_workshop) ?></a></li>
					                  <li class="breadcrumbs-item"><a href=""><?php the_archive_title( );?></a></li>
													
												
					            </ul>	                
						</div>

			              
			              <div class="banner rent">
								<?php echo category_description(); ?>
							</div> 	
							
				<?php query_posts('category_name=workshop'); ?>
					
			              			                
			              <div class="cleaner"></div>
			              <div class="border-block"></div>
			            </div>
			            <div class="cleaner"></div>
			          </div>
          <div class="row content-wrapper">
						<?php
						// номер рубрики
						$category_id_workshop = get_query_var( 'cat' );
						// номер текущей страницы
						$page = get_query_var( 'paged' );
						// данные о текущей категории
						$category_workshop = get_category( $category_id_workshop );
						 
						?>
            	<div class="col-lg-3 vertical-menu">
								<ul>
									  <?php while (have_posts()) : the_post(); ?>
									  <li><a class="menu-link" href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></li
					
					<?php endwhile; ?>
									<?php if($children_categories_workshop): // если есть дочерние категории ?>
									<?php foreach($children_categories_workshop as $children_category_workshop): ?>
									<?php $link_workshop = get_category_link( $children_category_workshop->cat_ID ); ?>
										<li><a class="menu-link" href="<?php echo $link_workshop; ?>"><?php echo $children_category_workshop->name; ?></a></li>
									<?php endforeach; ?>
									<?php endif; ?>
								</ul>
                </div>
                <div class="col-lg-9 catalog-block">
              <h2><?php the_archive_title( );?></h2>
              <div class="row workshop-column-wrapper">
                <div class="col-lg-6 first-workshop-column">
                  <div class="item-catalog-block">
                    <h3>Тормозная система</h3>
                    <div class="workshop-content">
                      <p>
                        <h4>V-brake:</h4>
                        Настройка - 150<br>
                        Переборка (чистка+смазка) - 200<br>
                        Замена:<br>
                        -тормозных колодок - 200<br>
                        -калипера - 300<br>
                        -тормозной ручки - 200<br>
                        -троса+рубашки - 300<br>
                        -троса+рубашки с внутр. проводкой - 500<br><br>

                        <h4>Гидравлические/механические:</h4>
                        Настройка - 200<br>
                        Установка - 400<br>
                        Прокачка - 400<br>
                        Правка тормозного ротора - 100<br>
                        Замена:<br>
                        -гидролинии/калипера/ручки - 400<br>
                        -ротора - 100<br>
                        -тормозных колодок - 200<br>
                        -троса+рубашки/гидролинии с внутренней проводкой - 500<br>
                      </p>
                    </div>
                  </div>
                  <div class="item-catalog-block">
                    <h3>Тормозная система</h3>
                    <div class="workshop-content">
                      <p>
                        <h4>V-brake:</h4>
                        Настройка - 150<br>
                        Переборка (чистка+смазка) - 200<br>
                        Замена:<br>
                        -тормозных колодок - 200<br>
                        -калипера - 300<br>
                        -тормозной ручки - 200<br>
                        -троса+рубашки - 300<br>
                        -троса+рубашки с внутр. проводкой - 500<br><br>

                        <h4>Гидравлические/механические:</h4>
                        Настройка - 200<br>
                        Установка - 400<br>
                        Прокачка - 400<br>
                        Правка тормозного ротора - 100<br>
                        Замена:<br>
                        -гидролинии/калипера/ручки - 400<br>
                        -ротора - 100<br>
                        -тормозных колодок - 200<br>
                        -троса+рубашки/гидролинии с внутренней проводкой - 500<br>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 second-workshop-column">
                  <div class="item-catalog-block">
                    <h3>Тормозная система</h3>
                    <div class="workshop-content">
                      <p>
                        <h4>V-brake:</h4>
                        Настройка - 150<br>
                        Переборка (чистка+смазка) - 200<br>
                        Замена:<br>
                        -тормозных колодок - 200<br>
                        -калипера - 300<br>
                        -тормозной ручки - 200<br>
                        -троса+рубашки - 300<br>
                        -троса+рубашки с внутр. проводкой - 500<br><br>

                        <h4>Гидравлические/механические:</h4>
                        Настройка - 200<br>
                        Установка - 400<br>
                        Прокачка - 400<br>
                        Правка тормозного ротора - 100<br>
                        Замена:<br>
                        -гидролинии/калипера/ручки - 400<br>
                        -ротора - 100<br>
                        -тормозных колодок - 200<br>
                        -троса+рубашки/гидролинии с внутренней проводкой - 500<br>
                      </p>
                    </div>
                  </div>
                  <div class="item-catalog-block">
                    <h3>Тормозная система</h3>
                    <div class="workshop-content">
                      <p>
                        <h4>V-brake:</h4>
                        Настройка - 150<br>
                        Переборка (чистка+смазка) - 200<br>
                        Замена:<br>
                        -тормозных колодок - 200<br>
                        -калипера - 300<br>
                        -тормозной ручки - 200<br>
                        -троса+рубашки - 300<br>
                        -троса+рубашки с внутр. проводкой - 500<br><br>

                        <h4>Гидравлические/механические:</h4>
                        Настройка - 200<br>
                        Установка - 400<br>
                        Прокачка - 400<br>
                        Правка тормозного ротора - 100<br>
                        Замена:<br>
                        -гидролинии/калипера/ручки - 400<br>
                        -ротора - 100<br>
                        -тормозных колодок - 200<br>
                        -троса+рубашки/гидролинии с внутренней проводкой - 500<br>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="cleaner"></div>
              </div>
            <div class="cleaner"></div>
          </div>
        </div>
      </div>
    </div>

              <?php while (have_posts()) : the_post(); ?>
					
					<?php the_content(); ?>
					
					<?php endwhile; ?>




            <div class="cleaner"></div>
        </div>
      </div>
    </div>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
