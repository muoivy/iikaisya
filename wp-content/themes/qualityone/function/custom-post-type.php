<?php
/*
////////////////////////////////////////////
Register Post Tytpe Concept
///////////////////////////////////////////
*/

// function Artist() {
//   $labels = array(
//     'name'                  => _x( 'Artist', 'Post Type General Name', 'p26' ),
//     'singular_name'         => _x( 'Artist', 'Post Type Singular Name', 'p26' ),
//     'menu_name'             => __( 'Artist', 'p26' ),
//     'name_admin_bar'        => __( 'Artist', 'p26' ),
//     'archives'              => __( 'Artist Archives', 'p26' ),
//     'parent_item_colon'     => __( 'Parent Artist:', 'p26' ),
//     'all_items'             => __( 'All Artist', 'p26' ),
//     'add_new_item'          => __( 'Add New artist', 'p26' ),
//   );
//   $args = array(
//     'label'                 => $labels,
//     'description'           => 'Artist custom post type.',
//     'labels'                => $labels,
//     'supports'              => array('title', 'editor', 'thumbnail'),
//     'hierarchical'          => false,
//     'public'                => true,
//     'show_ui'               => true,
//     'show_in_menu'          => true,
//     'menu_position'         => 5,
//     'show_in_admin_bar'     => true,
//     'show_in_nav_menus'     => true,
//     'menu_icon'             => 'dashicons-feedback',
//     'can_export'            => true,
//     'has_archive'           => true,        
//     'exclude_from_search'   => false,
//     'publicly_queryable'    => true,
//     'capability_type'       => 'page',
//     'rewrite'               => array( 'slug' => 'artist', 'with_front' => false, 'feeds' => true,'pages' => true )
//   );
//   register_post_type( 'artist', $args );
//   flush_rewrite_rules();
// }
// add_action( 'init', 'Artist', 0 );


// function Works() {
//   $labels = array(
//     'name'                  => _x( 'Works', 'Post Type General Name', 'p26' ),
//     'singular_name'         => _x( 'Works', 'Post Type Singular Name', 'p26' ),
//     'menu_name'             => __( 'Works', 'p26' ),
//     'name_admin_bar'        => __( 'Works', 'p26' ),
//     'archives'              => __( 'Works Archives', 'p26' ),
//     'parent_item_colon'     => __( 'Parent Works:', 'p26' ),
//     'all_items'             => __( 'All Works', 'p26' ),
//     'add_new_item'          => __( 'Add New Works', 'p26' ),
//   );
//   $args = array(
//     'label'                 => $labels,
//     'description'           => 'Works custom post type.',
//     'labels'                => $labels,
//     'supports'              => array('title', 'editor', 'thumbnail'),
//     'hierarchical'          => false,
//     'public'                => true,
//     'show_ui'               => true,
//     'show_in_menu'          => true,
//     'menu_position'         => 5,
//     'show_in_admin_bar'     => true,
//     'show_in_nav_menus'     => true,
//     'menu_icon'             => 'dashicons-feedback',
//     'can_export'            => true,
//     'has_archive'           => true,        
//     'exclude_from_search'   => false,
//     'publicly_queryable'    => true,
//     'capability_type'       => 'page',
//     'rewrite'               => array( 'slug' => 'works', 'with_front' => false, 'feeds' => true,'pages' => true )
//   );
//   register_post_type( 'works', $args );
//   flush_rewrite_rules();
// }
// add_action( 'init', 'Works', 0 );


// /*
// /* Register Custom Taxonomy */

// function Cat_Products() {
//   $labels = array(
//     'name'                       => __( 'カテゴリー'),
//     'singular_name'              => __( 'カテゴリー'),
//     'menu_name'                  => __( 'カテゴリー'),
//     'all_items'                  => __( 'カテゴリー')
//   );
//   $args = array(
//     'labels'                     => $labels,
//     'hierarchical'               => true,
//     'public'                     => true,
//     'show_ui'                    => true,
//     'show_admin_column'          => true,
//     'show_in_nav_menus'          => true,
//     'show_tagcloud'              => true
//     // 'rewrite'                    => array( 'cat_date' => 'area', 'with_front' => false ),
//   );
//   register_taxonomy( 'cat_products', array( 'products' ), $args );
// }
// add_action( 'init', 'Cat_Products', 0 );
