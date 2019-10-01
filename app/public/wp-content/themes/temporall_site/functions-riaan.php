<?php
// CODE ADDED BY RIAAN
add_theme_support( 'post-thumbnails' );

function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

add_action( 'wp_ajax_contact_us_form', 'contact_us_form' );
add_action( 'wp_ajax_nopriv_contact_us_form', 'contact_us_form' );

function contact_us_form() {
	$response = 'success';
	wp_mail('riaan@bitcube.tech','Contact Us Form Submitted',print_r($_POST['form_data'],true));
	wp_mail('sanjay@temporall.com','Contact Us Form Submitted',print_r($_POST['form_data'],true));
	exit(json_encode($response));	
}

?>
