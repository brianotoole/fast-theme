<?php
/**
 * The header for our theme.
 * This is the template that displays all of the <head> section up 'til <div clas="site-content">
 * @package fast
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="wrapper" id="js-wrapper">

  <header id="masthead" class="site-header" role="banner">
    <div class="sidebar-wrapper">
      <nav class="sidebar-nav" role="navigation">
        <?php wp_nav_menu( array(
           'theme_location' => 'primary',
           'menu_id' => 'primary-menu'
         ) ); ?>
      </nav><!-- .sidebar-nav -->
    </div><!-- /.sidebar-wrapper -->
  </header><!-- #masthead -->
  
  <div id="content" class="site-content">
    <a href="#menu-toggle" class="btn btn-default menu-toggle" id="js-menu-toggle">Menu</a>