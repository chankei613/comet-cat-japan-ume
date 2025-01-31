<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
  <?php wp_head(); ?>
</head>
<?php // $mytheme_background_color = get_theme_mod('mytheme_background_color');?>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'comet-cat-japan_ume' ); ?></a>
<header id="masthead" class="flex relative py-4 px-10 shadow justify-between items-center	max-md:pl-4 max-md:pr-16 max-md:py-2">
    <div class="site-branding">
      <?php
      $catchphrase = get_bloginfo('description');
      if (!empty($catchphrase)) {
          echo '<p class="text-xs">' . esc_html($catchphrase). '</p>';
      }
      if (is_home() && is_front_page()) {
        echo '<h1 class="text-xl max-md:text-xl">';
      } else {
        echo '<p class="text-xl max-md:text-xl">';
      }
      ?>
      <?php 
      if ( has_custom_logo() ) {
        the_custom_logo();
      }else {
        echo '<a href="'.esc_url(home_url('/')).'" rel="home" class="block w-48">';
        bloginfo('name');
        echo '</a>';
      }
      ?>
      <?php
      if (is_home() && is_front_page()) {
        echo '</h1>';
      } else {
        echo '</p>';
      }
      ?>
    </div>
    <button class="site-navbtn w-11 h-11 absolute top-0 bottom-0 m-auto right-4" id="menuButton"></button>
    <nav class="site-navigation js-menu-body max-md:shadow-md">
      <?php
      wp_nav_menu(array(
        'theme_location' => 'primary-menu',
        'menu_id' => 'primary-menu',
      ));
      ?>
    </nav>
  </header>

  <div id="content">