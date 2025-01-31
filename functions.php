<?php

// Enabling custom menu support
function ccju_register_menus() {
  register_nav_menus(array(
    'primary-menu' => __('Primary Menu', 'comet-cat-japan_ume'),
  ));
}
add_action('after_setup_theme', 'ccju_register_menus');

add_theme_support('custom-header', array(
  'default-image'      => get_template_directory_uri() . '/assets/images/default-header.jpg',
  'default-text-color' => '000',
));

add_theme_support( "custom-logo" );
add_theme_support( "custom-background" );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );
add_theme_support( "wp-block-styles" );
add_theme_support( 'responsive-embeds' );
add_theme_support( 'html5', array(
  'search-form',
  'comment-form',
  'comment-list',
  'gallery',
  'caption',
  'script',
  'style',
) );
add_theme_support( "align-wide" );

// Registering a custom widget
function ccju_register_widgets() {
  register_sidebar(array(
    'name' => __('Sidebar', 'comet-cat-japan_ume'),
    'id' => 'sidebar-1',
    'description' => __('Add widgets here to customize the sidebar.', 'comet-cat-japan_ume'),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget' => '</section>',
    'before_title' => '<h2 class="widget-title">',
    'after_title' => '</h2>',
  ));
}
add_action('widgets_init', 'ccju_register_widgets');
  
// Functions that reflect theme customizer settings
function ccju_customize_css() {
  // Get basic site information settings
  $catchphrase = get_theme_mod( 'mytheme_catchphrase' );

  // output css
  echo '<style type="text/css">';

  // basic site information CSS
  // echo 'body { background-color: ' . esc_attr( $background_color ) . '; }';
  // echo '.site-logo { background-image: url(' . esc_url( $logo ) . '); }';
  echo '.site-catchphrase { color: ' . esc_attr( $header_text_color ) . '; }';
  echo '.site-catchphrase::after { content: "' . esc_html( $catchphrase ) . '"; }';

  // Header and footer CSS
  echo '.site-header { height: ' . esc_attr( $header_height ) . 'px; background-image: url(' . esc_url( $header_image ) . '); color: ' . esc_attr( $header_text_color ) . '; }';
  echo '.site-footer { height: ' . esc_attr( $footer_height ) . 'px; background-color: ' . esc_attr( $footer_background_color ) . '; color: ' . esc_attr( $footer_text_color ) . '; }';
  echo '.site-footer-copy::after { content: "' . esc_html( $footer_copy ) . '"; }';
}

// wp_head
// function ccju_adds_head() {
//   echo '<link rel="preconnect" href="https://fonts.googleapis.com">'."\n";
//   echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>'."\n";
//   echo '<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&family=Noto+Sans+JP:wght@300;600;700&display=swap" rel="stylesheet">'."\n";
//   echo '<style>
//     .site-navigation{ color: #'.get_header_textcolor().'; }
//   </style>';
// }
// add_action('wp_head', 'ccju_adds_head');
function ccju_preload_resources($preload_resources) {
  $new_resources = array(
      array(
          'href' => 'https://fonts.googleapis.com',
          'as'   => 'document',
          'rel' => 'preconnect',
      ),
      array(
          'href' => 'https://fonts.gstatic.com',
          'as'   => 'document',
          'rel' => 'preconnect',
          'crossorigin' => 'anonymous',
      ),
  );

  return array_merge($preload_resources, $new_resources);
}
add_filter('wp_preload_resources', 'ccju_preload_resources');


function ccju_enqueue_styles() {
  // Load theme stylesheet
  wp_enqueue_style('comet-cat-japan_ume-style', get_stylesheet_uri());

  wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&family=Noto+Sans+JP:wght@300;600;700&display=swap', array(), null);
  
  $custom_css = "
      .site-navigation {
          color: #" . get_header_textcolor() . ";
      }
  ";
  wp_add_inline_style('google-fonts', $custom_css);
}
add_action('wp_enqueue_scripts', 'ccju_enqueue_styles');

// wp_footer
function ccju_adds_footer() {
	echo '<script src="'.get_template_directory_uri().'/assets/init.js"></script>'."\n";
}
add_action('wp_footer', 'ccju_adds_footer');

function ccju_wpdocs_theme_add_editor_styles() {
	add_theme_support( 'editor-styles' );
	add_editor_style( array( 'style.css', 'editor-style.css' ) );
}
add_action( 'after_setup_theme', 'ccju_wpdocs_theme_add_editor_styles' );
add_theme_support( 'editor-styles' );

function ccju_my_language(){
    load_theme_textdomain('comet-cat-japan_ume', get_template_directory() . '/languages');
}
add_action('after_setup_theme', 'ccju_my_language');