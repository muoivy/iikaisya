<?php

/* 1 THEME SUPPORT
/––––––––––––––––––––––––*/
function wpmv_theme_support()  {

	show_admin_bar( false );

  // Enable plugins to manage the document title
  // => http://codex.wordpress.org/Function_Reference/add_theme_support#Title_Tag
  // add_theme_support( 'title-tag');

  // Add Theme Support for Menus
  // => http://codex.wordpress.org/Navigation_Menus
  add_theme_support('menus');

  // Add HTML5 markup for search forms, comment forms, comment lists, gallery, and caption
  // => https://codex.wordpress.org/Theme_Markup
  add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script'));

  /* Gutenberg -> enable wide images
  /––––––––––––––––––––––––*/
  add_theme_support('align-wide');

  // Add Theme Support for Post Thumbnails
  add_theme_support('post-thumbnails');

  // Enable Widgets refresh from Customizer
	add_theme_support('customize-selective-refresh-widgets');

}
add_action('after_setup_theme', 'wpmv_theme_support');


/* 2 WPHEAD CLEANUP
/––––––––––––––––––––––––*/
// remove unused stuff from wp_head()

function wpmv_wphead_cleanup () {

  // remove the generator meta tag
  remove_action('wp_head', 'wp_generator');

  // Remove DNS-Prefetch
	remove_action('wp_head', 'wp_resource_hints', 2, 99 );

  // remove wlwmanifest link
  remove_action('wp_head', 'wlwmanifest_link');

  // remove RSD API connection
  remove_action('wp_head', 'rsd_link');

  // remove wp shortlink support
  remove_action('wp_head', 'wp_shortlink_wp_head');

  // remove next/previous links (this is not affecting blog-posts)
  remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10);

  // remove generator name from RSS
  add_filter('the_generator', '__return_false');

  // disable emoji support
  remove_action('wp_head', 'print_emoji_detection_script', 7);
  remove_action('wp_print_styles', 'print_emoji_styles');

  // disable automatic feeds
  remove_action('wp_head', 'feed_links_extra', 3);
  remove_action('wp_head', 'feed_links', 2);

  // remove rest API link
  remove_action('wp_head', 'rest_output_link_wp_head', 10);

  // remove oEmbed link
  remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);
  remove_action('wp_head', 'wp_oembed_add_host_js');

  // Remove version from scripts and styles
  function remove_version_scripts_styles($src) {
    if (strpos($src, 'ver=')) {
      $src = remove_query_arg('ver', $src);
    }
    return $src;
  }
  // add_filter('style_loader_src', 'remove_version_scripts_styles', 9999);
  // add_filter('script_loader_src', 'remove_version_scripts_styles', 9999);

  // Disable WordPress Lazy Load
	add_filter('wp_lazy_loading_enabled', '__return_false');

	// Remove WordPress' canonical links
	remove_action('wp_head', 'rel_canonical');

}
add_action('after_setup_theme', 'wpmv_wphead_cleanup');

?>