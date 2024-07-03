<?php

// Menu Locations

if ( ! function_exists( 'brk_navmenus' ) ) {

	function wpmv_navmenus() {

		register_nav_menus(
			array(
				'header' => esc_html__( 'Header Menu', 'bricks' ),
				'footer' => esc_html__( 'Footer Menu', 'bricks' ),
			)
		);

	}
}

add_action( 'after_setup_theme', 'wpmv_navmenus' );