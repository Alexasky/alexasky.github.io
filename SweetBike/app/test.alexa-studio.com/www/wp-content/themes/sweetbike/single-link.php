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
		<main id="main" class="site-main contact">

	<div class="container">
      <div class="row">
        <div class="col-lg-12 workshop-wrap">
          <div class="row">
            <div class="col-lg-12 first-row">
              <div class="head-line">
                <h1><?php the_title(); ?></h1>
              </div>
              <div class="border-block"></div>
            </div>
            <div class="cleaner"></div>
          </div>
          <div class="row">
            <div class="col-lg-12">
	            <div class="map-link">
              <?php echo carbon_get_post_meta($post->ID, 'map' ); ?>
              	</div>
            </div>
            <div class="col-lg-6">
              <div class="block-contact">
                <span class="title-block-contact">Адрес:</span>
                <p><?php echo carbon_get_theme_option( 'city' ); ?><br><?php echo carbon_get_theme_option( 'metro' ); ?></p>
                <span class="title-block-contact">КАК ДОБРАТЬСЯ:</span><p><?php echo carbon_get_theme_option( 'direction' ); ?></p>
                <span class="title-block-contact worktime">ВРЕМЯ РАБОТЫ: </span><p><?php echo carbon_get_post_meta($post->ID, 'work_time_contact' ); ?></p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="block-contact">
                <span class="title-block-contact second-block">Контакты:</span>
                <div class="contact-item-wrapper">
                  <div class="contact-item">
                    <a class="phone-image" href=""></a>
                    <span><?php echo carbon_get_theme_option( 'phone' ); ?> - звонить сюда  </span>
                  </div>
                  <div class="contact-item">
                    <a href="<?php echo carbon_get_theme_option( 'whatsapp' ); ?>" target="_blank"></a>
                    <span>- писать сюда    </span>
                  </div>
                  <div class="contact-item">
                    <a href="<?php echo carbon_get_post_meta($post->ID, 'telegram' ); ?>" target="_blank"></a>
                    <span>- телеграфировать сюда    </span>
                  </div>
                  <div class="contact-item">
                    <a href="<?php echo carbon_get_post_meta($post->ID, 'email' ); ?>" target="_blank"></a>
                    <span>sweetbike@mail.ru - староверы могут писать сюда    </span>
                  </div>
                  <div class="contact-item">
                    <a href="<?php echo carbon_get_theme_option( 'vk' ); ?>" target="_blank"></a>
                    <span>- много интересного можно найти здесь   </span>
                  </div>
                  <div class="contact-item">
                    <a href="<?php echo carbon_get_theme_option( 'instagram' ); ?>" target="_blank"></a>
                    <span>@sweet_bike_spb - красивые фоточки можно полистать тут   </span>
                  </div>
                  <div class="contact-item">
                    <a href="<?php echo carbon_get_post_meta($post->ID, 'km' ); ?>" target="_blank"></a>
                    <span>- километрами мериться тут   </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="border-block"></div>
              <div class="border-block"></div>
            </div>
          </div>
          <div class="cleaner"></div>
        </div>
        <div class="cleaner"></div>
      </div>
    </div>
  </main>
</div><!-- #primary -->

</div><!-- #content -->

	<footer class="main-footer contact">

</footer>
<div class="modern-upbutton" title="" data-scroll="up" data-pos="0">
			<div class="highlight-area">
					<div class="subscripted-arrow">
							<span>наверх</span>
					</div>
					<div class="modern-upbutton-disable">
							<span title="Скрыть кнопку">убрать<span>
					</div>
			</div>
	</div>
<?php echo carbon_get_theme_option( 'header_script_yandex_metrika' ); ?>
<?php echo carbon_get_theme_option( 'header_google_analytics' ); ?>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
