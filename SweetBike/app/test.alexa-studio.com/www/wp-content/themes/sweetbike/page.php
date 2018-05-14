<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package SweetBike
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<div class="container">
		      <div class="row">
		        <div class="col-lg-12 content-main">
		
		         <?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

	
			endwhile; // End of the loop.
			?>
		          <div class="velo">
			           <div><pre class="text1">   стучит,<br>люфтит - <br>    починим</pre></div>
			            <div><pre class="text2">    скрипит,<br>свистит - <br>  смажем</pre></div>
			            <div><pre class="text3">   есть<br>вопросы - <br>     ответим</pre></div>
			            <div><pre class="text4">сломалось,<br>    отвалилось - <br>  поменяем</pre></div>
			            <div><pre class="text5">  устали, замерзли - <br>напоим горячим чаем <br>        с вкусняшками</pre></div>
			            <div><pre class="text6">    водители-негодяи, <br>пешеходы-самоубийцы - <br> выслушаем, поймем<br>         и посочувствуем</pre></div>
			            <div><pre class="text7">хотите от <br>   велосипеда<br>большего -  <br>   "Прокачаем"</pre></div>
		          </div>
		        </div>
		      </div>
		    </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
