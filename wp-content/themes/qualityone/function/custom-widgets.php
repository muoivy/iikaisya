<?php

// Register the sidebar
function wpmv_register_sidebars() {
  register_sidebar(
    array(
      'id'            => 'primary',
      'name'          => __( 'Primary Sidebar' ),
      'description'   => __( 'A short description of the sidebar.' ),
      'before_widget' => '<div id="%1$s" class="widget %2$s item">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>',
    )
  );
}
add_action( 'widgets_init', 'wpmv_register_sidebars' );