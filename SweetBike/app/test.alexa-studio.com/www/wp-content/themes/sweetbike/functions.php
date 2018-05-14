<?php
/**
 * SweetBike functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package SweetBike
 */


 if (function_exists('add_theme_support')) {
	add_theme_support('menus');
	}

if ( ! function_exists( 'carbon_get_post_meta' ) ) {
	function carbon_get_post_meta( $id, $name, $type = null ) {
		return false;
	}
}

if ( ! function_exists( 'carbon_get_the_post_meta' ) ) {
	function carbon_get_the_post_meta( $name, $type = null ) {
		return false;
	}
}

if ( ! function_exists( 'carbon_get_theme_option' ) ) {
	function carbon_get_theme_option( $name, $type = null ) {
		return false;
	}
}

if ( ! function_exists( 'carbon_get_term_meta' ) ) {
	function carbon_get_term_meta( $id, $name, $type = null ) {
		return false;
	}
}

if ( ! function_exists( 'carbon_get_user_meta' ) ) {
	function carbon_get_user_meta( $id, $name, $type = null ) {
		return false;
	}
}

if ( ! function_exists( 'carbon_get_comment_meta' ) ) {
	function carbon_get_comment_meta( $id, $name, $type = null ) {
		return false;
	}
}





add_action('carbon_register_fields', 'crb_register_custom_fields');
function crb_register_custom_fields() {
    include_once(dirname(__FILE__) . '/carbon_inc/options_page.php');
    include_once(dirname(__FILE__) . '/carbon_inc/post_meta.php');
}


if ( ! function_exists( 'sweetbike_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function sweetbike_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on SweetBike, use a find and replace
		 * to change 'sweetbike' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'sweetbike', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'sweetbike' ),
			'top_menu' => 'Меню сверху',
			'footer_menu' => 'Меню в подвале'
		) );


		//Delite word Category from title
		add_filter( 'get_the_archive_title', 'artabr_remove_name_cat' );
		 function artabr_remove_name_cat( $title ){
		  if ( is_category() ) {
		  $title = single_cat_title( '', false );
		  } elseif ( is_tag() ) {
		  $title = single_tag_title( '', false );
		  }
		  return $title;
		 }

     //Unique template for subcategory of definite category
     add_action('category_template', 'delfi_load_cat_parent_template');
      function delfi_load_cat_parent_template($template) {
          $cat_ID = absint( get_query_var('cat') );
          $category = get_category( $cat_ID );
          if($category->category_parent > 0) {
              $templates = array();

              if(!is_wp_error($category)) {
                  $templates[] = "category-{$category->slug}.php";
              }
              $templates[] = "category-$cat_ID.php";

              $parentCategory = get_category($category->category_parent);
              if(!is_wp_error($parentCategory)) {
                  $templates[] = "subcategory-{$parentCategory->slug}.php";
                  $templates[] = "subcategory-{$parentCategory->term_id}.php";
              }
              $subParentCategory = get_category($parentCategory->category_parent);
              if(!is_wp_error($parentCategory)&$subParentCategory>0) {
                  $templates[] = "innersubcategory-{$subParentCategory->slug}.php";
                  $templates[] = "innersubcategory-{$subParentCategory->term_id}.php";
              }

              $templates[] = "category.php";
              $template = locate_template($templates);
          }
          return $template;
      }


      // добавляем шорткод cat_desc, который будет заменен результатом выполнения функции cat_desc()
      add_shortcode( 'cat_desc', 'cat_desc' );
      // разрешаем выполнение шорткода в описаниях
      function cat_desc($attr, $text=''){
    //  echo '<div class="cat-desc">';
      echo "<img class='wp-post-image' src='{$attr['src']}' alt=''>";
      echo $text;
    //  echo '</div>';
      }




		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'sweetbike_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );


		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'sweetbike_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function sweetbike_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'sweetbike_content_width', 640 );
}
add_action( 'after_setup_theme', 'sweetbike_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function sweetbike_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'sweetbike' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'sweetbike' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'sweetbike_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function sweetbike_scripts() {
	wp_enqueue_style( 'sweetbike-style', get_stylesheet_uri() );
	wp_enqueue_style( 'sweetbike-libs-style', get_template_directory_uri() . '/css/libs.min.css' );
   wp_enqueue_style( 'sweetbike-font-awesome-style', get_template_directory_uri() . '/libs/font-awesome/css/font-awesome.min.css' );
   wp_enqueue_style( 'sweetbike-magnific-popup-style', get_template_directory_uri() . '/libs/magnific-popup/dist/magnific-popup.css' );
	wp_enqueue_style( 'sweetbike-font-style', get_template_directory_uri() . '/css/font.css' );
	wp_enqueue_style( 'sweetbike-head-style', get_template_directory_uri() . '/css/head.css' );
	wp_enqueue_style( 'sweetbike-main-style', get_template_directory_uri() . '/css/main.css' );

	wp_enqueue_script( 'sweetbike_libs_js', get_template_directory_uri() . '/js/libs.min.js', array(), '20151215', true );
	wp_enqueue_script( 'sweetbike_magnific-popup_js', get_template_directory_uri() . '/libs/magnific-popup/dist/jquery.magnific-popup.min.js', array(), '20151215', true );
	wp_enqueue_script( 'sweetbike_common_js', get_template_directory_uri() . '/js/common.js', array(), '20151215', true );

	wp_enqueue_script( 'sweetbike-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'sweetbike-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'sweetbike_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
