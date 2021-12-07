<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package test-verstalshuka
 */

?>
  <!doctype html>
  <html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta charset="utf-8">
    <title>test-verstalshuka</title>
    <link rel="pingback" href="<?php bloginfo ( 'pingback_url'); ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">

    <?php wp_head(); ?>

  </head>
  <body <?php body_class(); ?>>
    <header>
    <?php wp_nav_menu( array( 'theme_location' => 'primary mobile', 'menu_class' => 'nav-menu' ) ); ?>

















  <?php
  /**
   * Functions hooked in to test-verstalshuka_before_content
   *
   * @hooked test-verstalshuka_header_widget_region - 10
   * @hooked woocommerce_breadcrumb - 10
   */
  do_action( 'test-verstalshuka_before_content' );
  ?>

  <?php
  do_action( 'test-verstalshuka_content_top' );