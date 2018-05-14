<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SweetBike
 */

//if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	//return;
//}
?>

<aside id="secondary" class="widget-area">
						
						
								<ul class="accordion">
									<?php $category_goods = get_cat_ID( 'ТОВАРЫ' );  // id родительской рубрики ?>
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

		
	<!--<?php dynamic_sidebar( 'sidebar-1' ); ?>-->
</aside><!-- #secondary -->
