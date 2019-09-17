<?php
function theme_styles()  
{ 

	// Example of loading a jQuery slideshow plugin just on the homepage
	// wp_register_style( 'flexslider', get_template_directory_uri() . '/css/flexslider.css' );

	// Load all of the styles that need to appear on all pages
	wp_enqueue_style( 'general', get_template_directory_uri() . '/general-style-guide.css' );
    wp_enqueue_style( 'index', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'top-nav', get_template_directory_uri() . '/static-components/css/top-nav.css' );
    wp_enqueue_style( 'footer', get_template_directory_uri() . '/static-components/css/footer.css' );
	wp_enqueue_style( 'side-bar', get_template_directory_uri() . '/static-components/css/side-banner-contact-buttons.css' );
	wp_enqueue_style( 'hero-image', get_template_directory_uri() . '/static-components/css/hero-image-left-text-and-btn.css' );
	wp_enqueue_style( 'various-logos', get_template_directory_uri() . '/static-components/css/various-logos-section.css' );
	wp_enqueue_style( 'left-text-right-image', get_template_directory_uri() . '/static-components/css/left-text-right-image-card' );

	// // Conditionally load the FlexSlider CSS on the homepage
	// if(is_page('home')) {
	// 	wp_enqueue_style('flexslider');
	// }

}
add_action('wp_enqueue_scripts', 'theme_styles');
?>
