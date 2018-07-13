<?php
/**
* Enqueue scripts and styles.
*/
function hermex_scripts() {


	wp_enqueue_style( 'hermex-bootsrtap-style', get_template_directory_uri() . '/layouts/bootstrap.min.css' );

	wp_enqueue_style( 'hermex-fontawesome-styles', get_template_directory_uri() . '/layouts/fontawesome-all.min.css' );

	wp_enqueue_style( 'hermex-style', get_stylesheet_uri() );

	wp_enqueue_script( 'hermex-jquery-script', get_template_directory_uri() . '/js/jquery.min.js', array(), '20151215', true );

	wp_enqueue_script( 'hermex-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'hermex-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script( 'jquery-cookie-script', get_template_directory_uri() . '/js/jquery.cookie.js', array(), '20151215', true );

	wp_enqueue_script( 'hermex-custom-script', get_template_directory_uri() . '/js/custom.js', array(), '20151215', true );

	wp_localize_script( 'hermex-ajaxurl-script', 'hermexAjaxUrl',admin_url('admin-ajax.php') );

	//	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
//		wp_enqueue_script( 'comment-reply' );
//	}
}
add_action( 'wp_enqueue_scripts', 'hermex_scripts' );