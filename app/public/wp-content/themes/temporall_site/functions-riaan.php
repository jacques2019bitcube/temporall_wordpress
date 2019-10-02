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

if ( function_exists( 'lazyblocks' ) ) :

    lazyblocks()->add_block( array(
        'id' => 430,
        'title' => 'What our customers say - carousel',
        'icon' => '',
        'keywords' => array(
        ),
        'slug' => 'lazyblock/no-slug',
        'description' => '',
        'category' => 'common',
        'category_label' => 'common',
        'supports' => array(
            'customClassName' => true,
            'anchor' => false,
            'align' => array(
                0 => 'wide',
                1 => 'full',
            ),
            'html' => false,
            'multiple' => true,
            'inserter' => true,
        ),
        'controls' => array(
            'control_a67bfe4232' => array(
                'label' => '',
                'name' => '',
                'type' => 'text',
                'child_of' => 'control_cadb414bcf',
                'default' => '',
                'placeholder' => '',
                'help' => '',
                'placement' => 'content',
                'hide_if_not_selected' => 'false',
                'save_in_meta' => 'false',
                'save_in_meta_name' => '',
                'required' => 'false',
                'choices' => array(
                ),
                'checked' => 'false',
                'allow_null' => 'false',
                'multiple' => 'false',
                'allowed_mime_types' => array(
                ),
                'alpha' => 'false',
                'min' => '',
                'max' => '',
                'step' => '',
                'date_time_picker' => 'date_time',
                'multiline' => 'false',
            ),
            'control_e9b984444e' => array(
                'label' => '',
                'name' => '',
                'type' => 'number',
                'child_of' => 'control_cadb414bcf',
                'default' => '',
                'placeholder' => '',
                'help' => '',
                'placement' => 'content',
                'hide_if_not_selected' => 'false',
                'save_in_meta' => 'false',
                'save_in_meta_name' => '',
                'required' => 'false',
                'choices' => array(
                ),
                'checked' => 'false',
                'allow_null' => 'false',
                'multiple' => 'false',
                'allowed_mime_types' => array(
                ),
                'alpha' => 'false',
                'min' => '',
                'max' => '',
                'step' => '',
                'date_time_picker' => 'date_time',
                'multiline' => 'false',
            ),
            'control_8c19bd4c23' => array(
                'label' => 'slides',
                'name' => 'slides',
                'type' => 'repeater',
                'child_of' => '',
                'default' => '',
                'placeholder' => '',
                'help' => '',
                'placement' => 'content',
                'hide_if_not_selected' => 'false',
                'save_in_meta' => 'false',
                'save_in_meta_name' => '',
                'required' => 'false',
                'choices' => array(
                ),
                'checked' => 'false',
                'allow_null' => 'false',
                'multiple' => 'false',
                'allowed_mime_types' => array(
                ),
                'alpha' => 'false',
                'min' => '',
                'max' => '',
                'step' => '',
                'date_time_picker' => 'date_time',
                'multiline' => 'false',
            ),
            'control_4e59ce417a' => array(
                'label' => 'Quote',
                'name' => 'quote',
                'type' => 'textarea',
                'child_of' => 'control_8c19bd4c23',
                'default' => '',
                'placeholder' => '',
                'help' => '',
                'placement' => 'content',
                'hide_if_not_selected' => 'false',
                'save_in_meta' => 'false',
                'save_in_meta_name' => '',
                'required' => 'false',
                'choices' => array(
                ),
                'checked' => 'false',
                'allow_null' => 'false',
                'multiple' => 'false',
                'allowed_mime_types' => array(
                ),
                'alpha' => 'false',
                'min' => '',
                'max' => '',
                'step' => '',
                'date_time_picker' => 'date_time',
                'multiline' => 'false',
            ),
            'control_3d7b3d4fa0' => array(
                'label' => 'Client Contact',
                'name' => 'client_contact',
                'type' => 'text',
                'child_of' => 'control_8c19bd4c23',
                'default' => '',
                'placeholder' => '',
                'help' => '',
                'placement' => 'content',
                'hide_if_not_selected' => 'false',
                'save_in_meta' => 'false',
                'save_in_meta_name' => '',
                'required' => 'false',
                'choices' => array(
                ),
                'checked' => 'false',
                'allow_null' => 'false',
                'multiple' => 'false',
                'allowed_mime_types' => array(
                ),
                'alpha' => 'false',
                'min' => '',
                'max' => '',
                'step' => '',
                'date_time_picker' => 'date_time',
                'multiline' => 'false',
            ),
            'control_a5a9b6429c' => array(
                'label' => 'Contact Title',
                'name' => 'contact_title',
                'type' => 'text',
                'child_of' => 'control_8c19bd4c23',
                'default' => '',
                'placeholder' => '',
                'help' => '',
                'placement' => 'content',
                'hide_if_not_selected' => 'false',
                'save_in_meta' => 'false',
                'save_in_meta_name' => '',
                'required' => 'false',
                'choices' => array(
                ),
                'checked' => 'false',
                'allow_null' => 'false',
                'multiple' => 'false',
                'allowed_mime_types' => array(
                ),
                'alpha' => 'false',
                'min' => '',
                'max' => '',
                'step' => '',
                'date_time_picker' => 'date_time',
                'multiline' => 'false',
            ),
            'control_cf49fc4025' => array(
                'label' => 'Client Logo',
                'name' => 'client_logo',
                'type' => 'image',
                'child_of' => 'control_8c19bd4c23',
                'default' => '',
                'placeholder' => '',
                'help' => '',
                'placement' => 'content',
                'hide_if_not_selected' => 'false',
                'save_in_meta' => 'false',
                'save_in_meta_name' => '',
                'required' => 'false',
                'choices' => array(
                ),
                'checked' => 'false',
                'allow_null' => 'false',
                'multiple' => 'false',
                'allowed_mime_types' => array(
                ),
                'alpha' => 'false',
                'min' => '',
                'max' => '',
                'step' => '',
                'date_time_picker' => 'date_time',
                'multiline' => 'false',
            ),
        ),
        'code' => array(
            'editor_html' => '',
            'editor_callback' => '',
            'editor_css' => '',
            'frontend_html' => '<style type="text/css" media="all">
        #what-our-customers-say {
            max-width: 770px;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
        }
        
        .slick-dots {
            bottom: -35px;
        }
        
        @media screen and (max-width: 770px) {
            #what-our-customers-say {
                max-width: 90%;
            }
        }
        
        #what-our-customers-say h1 {
            font-size: 32px;
            color: #373A3C;
            margin-bottom: 24px;
        }
        
        #what-our-customers-say p {
            font-size: 18px;
            color: #505050;
            margin-bottom: 24px;
        }
        
        #what-our-customers-say img {
            height: 24px;
            width: auto;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
    
    <div id="what-our-customers-say">
        <h1 id="">What our customers say</h1>
        
        <div class="carousel">
            {{#each slides}}
            <div class="slide">
                <p>{{quote}}</p>
                <p style="color: #ED7401;">{{client_contact}}</p>
                <p style="color: #505050;">{{client_title}}</p>
                <img src="{{client_logo.url}}">
            </div>
            {{/each}}    
        </div>
    </div>    
    
    <script type="text/javascript" charset="utf-8">
        jQuery(document).ready(function(){
            console.log(\'test\');
            $(\'.carousel\').slick({arrows: false, dots: true});
        })
    </script>
    ',
            'frontend_callback' => '',
            'frontend_css' => '',
            'show_preview' => 'always',
            'single_output' => false,
        ),
        'condition' => array(
        ),
    ) );
    
endif;

?>