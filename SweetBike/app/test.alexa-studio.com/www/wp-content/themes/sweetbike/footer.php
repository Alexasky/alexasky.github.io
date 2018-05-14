<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SweetBike
 */

?>

	</div><!-- #content -->

	  <footer class="main-footer">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="map">
	          <?php echo carbon_get_theme_option( 'map_footer' ); ?>
          </div>
        </div>
        <div class="col-lg-7">
          <div class="footer-contact">
            <p><span>КОНТАКТЫ:</span></p>
            <p><?php echo carbon_get_theme_option( 'city' ); ?><br><?php echo carbon_get_theme_option( 'metro' ); ?></p>
            <p><span>КАК ДОБРАТЬСЯ:</span><br><?php echo carbon_get_theme_option( 'direction' ); ?></p>
            <p><span>TЕЛЕФОН: <?php echo carbon_get_theme_option( 'phone' ); ?></span></p>
            <p><span>ВРЕМЯ РАБОТЫ: </span><br><?php echo carbon_get_theme_option( 'work_time' ); ?></p>
          </div>
        </div>
      </div>
    </div>
  </footer>
	<div class="modern-upbutton" title="" data-scroll="up" data-pos="0">
				<div class="highlight-area">
						<div class="subscripted-arrow">
								<span>наверх</span>
						</div>
						
				</div>
		</div>
	<?php echo carbon_get_theme_option( 'header_script_yandex_metrika' ); ?>
	<?php echo carbon_get_theme_option( 'header_google_analytics' ); ?>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
