<?php

if (!defined('_S_VERSION')) {
  // Replace the version number of the theme on each release.
  define('_S_VERSION', '1.0.0');
}

/* Function Them Setup */
if (file_exists(dirname(__FILE__) . '/function/theme_setup.php')) {
  require_once(dirname(__FILE__) . '/function/theme_setup.php');
}

/* Function Custom Post Type */
if (file_exists(dirname(__FILE__) . '/function/custom-post-type.php')) {
  require_once(dirname(__FILE__) . '/function/custom-post-type.php');
}

/* Function Sidebar and Widgets */
if (file_exists(dirname(__FILE__) . '/function/custom-widgets.php')) {
  require_once(dirname(__FILE__) . '/function/custom-widgets.php');
}

/* Function Menus */
if (file_exists(dirname(__FILE__) . '/function/custom-navmenus.php')) {
  require_once(dirname(__FILE__) . '/function/custom-navmenus.php');
}

/* Enable Advanced Custom Fields theme option pages */
if (file_exists(dirname(__FILE__) . '/function/custom-acf.php')) {
  require_once(dirname(__FILE__) . '/function/custom-acf.php');
}

/* THEME SETUP */
function theme_setup()
{

  // define value default
  define('THEME_URL', get_template_directory_uri());

  // Separator for the document title.
  function my_document_title_separator($sep)
  {
    $sep = '｜';
    return $sep;
  }
  add_filter('document_title_separator', 'my_document_title_separator');
}
add_action('init', 'theme_setup');


/**
 * Enqueue scripts and styles.
 */

function theme_scripts()
{

  // Theme stylesheet.
  wp_dequeue_style('global-styles');
  wp_enqueue_style('theme-splide', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css');
  wp_enqueue_style('theme-OverlayScrollbars', 'https://cdn.jsdelivr.net/npm/overlayscrollbars/css/OverlayScrollbars.min.css');
  wp_enqueue_style('theme-layout', THEME_URL . '/assets/css/layout.css', array(), true);
  wp_enqueue_style('style', get_stylesheet_uri());

  // Theme scripts.
  // wp_enqueue_script('jquery');
  wp_enqueue_script('theme-jquery', 'https://code.jquery.com/jquery-3.7.1.min.js', array(), false, true);
  wp_enqueue_script('theme-bundle', THEME_URL . '/assets/js/bundle.js', array(), false, true);
  wp_enqueue_script('theme-validationEngine-ja', THEME_URL . '/assets/js/jquery.validationEngine-ja.js', array(), false, true);
  wp_enqueue_script('theme-validateForm', THEME_URL . '/assets/js/validateForm.js', array(), false, true);
  wp_enqueue_script('theme-common', THEME_URL . '/assets/js/common.js', array(), false, true);

}

add_action('wp_enqueue_scripts', 'theme_scripts');


/**
 * Add body class
 */

function add_body_class($classes)
{

  if (is_home()) {
    $classes[] = 'top-page';
  } else {
    $classes[] = 'sub-page';
  }

  return $classes;
}
add_filter('body_class', 'add_body_class');


add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init()
{

  // Check function exists.
  if (function_exists('acf_add_options_page')) {

    // Register options page.
    // $option_page = acf_add_options_page(array(
    //   'page_title'    => __('GALLERY'),
    //   'menu_title'    => __('GALLERY'),
    //   'menu_slug'     => 'gallery',
    //   'capability'    => 'edit_posts',
    //   'redirect'      => false,
    //   'post_id'       => 'gallery',
    // ));

  }
}

add_filter( 'acf/admin/prevent_escaped_html_notice', '__return_true' );


// Add custom validation for email confirmation
add_filter('wpcf7_validate_email*', 'custom_email_confirmation_validation_filter', 20, 2);

function custom_email_confirmation_validation_filter($result, $tag)
{
  if ('your-email_confirm' == $tag->name) {
    $your_email = isset($_POST['your-email']) ? trim($_POST['your-email']) : '';
    $your_email_confirm = isset($_POST['your-email_confirm']) ? trim($_POST['your-email_confirm']) : '';

    if ($your_email != $your_email_confirm) {
      $result->invalidate($tag, "メールアドレスが一致しません。");
    }
  }

  return $result;
}
