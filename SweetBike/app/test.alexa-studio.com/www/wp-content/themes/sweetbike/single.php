<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package SweetBike
 */


  $post = $wp_query->post;

  if (in_category('rent')) { //slug  категории
      include(TEMPLATEPATH.'/single-rent.php');
      exit;
  }
  else if (in_category('link')) { //slug  категории
      include(TEMPLATEPATH.'/single-link.php');
      exit;
  }
  else if (in_category('workshop')) { //slug  категории
      include(TEMPLATEPATH.'/single-workshop.php');
      exit;
  }
  else if (in_category('reviews')) { //slug  категории
      include(TEMPLATEPATH.'/single-reviews.php');
      exit;
  }
  else if (in_category('reports')) { //slug  категории
      include(TEMPLATEPATH.'/single-reports.php');
      exit;
  }
  else if (in_category('goods')) { //slug  категории
      include(TEMPLATEPATH.'/single-goods.php');
      exit;
  }
   else if (in_category('zozh')) { //slug  категории
      include(TEMPLATEPATH.'/single-zozh.php');
      exit;
  }
   else if (in_category('team')) { //slug  категории
      include(TEMPLATEPATH.'/single-team.php');
      exit;
  }
   else if (in_category('partners')) { //slug  категории
      include(TEMPLATEPATH.'/single-partners.php');
      exit;
  }
   else if (in_category('features')) { //slug  категории
      include(TEMPLATEPATH.'/single-features.php');
      exit;
  }
  else {
      include(TEMPLATEPATH.'/single-default.php');
      exit;
  }
?>
