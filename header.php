<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Artist
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="profile" href="http://gmpg.org/xfn/11">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <header class="site-header">
    <h1 class="site-title"><a href="<?php echo esc_url( home_url() ); ?>" class="site-name" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
    <?php 
      wp_nav_menu( array(
        'menu_class'        => 'nav header-menu',
        'fallback_cb'       => 'false',
        'container'         => 'false',
      ) );
    ?>
  </header>

  <div class="content">