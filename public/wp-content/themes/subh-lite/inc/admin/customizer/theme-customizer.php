<?php
/*-----------------------------------------------------------------------------------*/
/*  Pro Features / Up Sales Option in the Theme Customizer
/*-----------------------------------------------------------------------------------*/
add_action( 'customize_register', 'subh_customize_register' );
function subh_customize_register($wp_customize) {

class subh_pro_features extends WP_Customize_Control {
    public $type = '';
 
    public function render_content() {
        ?>
		<div class="pro-features">
        <ul>
		<li><span><?php printf( __( 'PRO', 'subh-lite' ),''); ?></span><?php printf( __( 'Slider Front Page Header', 'subh-lite' ),''); ?></li>
		<li><span><?php printf( __( 'PRO', 'subh-lite' ),''); ?></span><?php printf( __( 'Front Page Sections', 'subh-lite' ),''); ?></li>
		<li><span><?php printf( __( 'PRO', 'subh-lite' ),''); ?></span><?php printf( __( 'More Social Media Icons', 'subh-lite' ),''); ?></li>
		<li><span><?php printf( __( 'PRO', 'subh-lite' ),''); ?></span><?php printf( __( 'More Page Templates', 'subh-lite' ),''); ?></li>
		<li><span><?php printf( __( 'PRO', 'subh-lite' ),''); ?></span><?php printf( __( 'Unlimited Color Option', 'subh-lite' ),''); ?></li>
		<li><span><?php printf( __( 'PRO', 'subh-lite' ),''); ?></span><?php printf( __( 'Featured Image As BG', 'subh-lite' ),''); ?></li>
		<li><span><?php printf( __( 'PRO', 'subh-lite' ),''); ?></span><?php printf( __( 'WooCommerce Compatible', 'subh-lite' ),''); ?></li>
		<li><span><?php printf( __( 'PRO', 'subh-lite' ),''); ?></span><?php printf( __( 'Premium Support', 'subh-lite' ),''); ?></li>
		<li><span><?php printf( __( 'PRO', 'subh-lite' ),''); ?></span><?php printf( __( 'White Label', 'subh-lite' ),''); ?></li>
		</ul>
		<a target="_blank" class="button button-primary custom-button" href="https://www.digitaladquest.com/wordpress-theme/subh-pro/"><?php printf( __( 'View Pro Version', 'subh-lite' ),''); ?></a>
		</div>
        <?php
    }
}

$wp_customize->add_section( 'subh_profeatures' , array(
    'title'       => __( 'View Pro Features', 'subh-lite' ),
    'priority'    => 17,
) );

$wp_customize->add_setting( 'subh_profeatures_setting', array(
    'default'        => '',
	'sanitize_callback' => 'esc_url_raw'
) );
 
$wp_customize->add_control( new subh_pro_features( $wp_customize, 'subh_profeatures_setting', array(
    'label'   => '',
    'section' => 'subh_profeatures',
    'settings'   => 'subh_profeatures_setting',
) ) );
}

/*-----------------------------------------------------------------------------------*/
/*  Header Email Option in the Theme Customizer
/*-----------------------------------------------------------------------------------*/
function subh_customizer_contactinfo( $wp_customize ) {

/*  Header Telephone Option in the Theme Customizer */
$wp_customize->add_section( 'subh_contactinfo_section' , array(
    'title'       => __( 'Email &amp; Phone', 'subh-lite' ),
    'priority'    => 21,
    'description' => __( 'Add telephone number and email ID, Will be set at the top header', 'subh-lite' ),
) );

$wp_customize->add_setting( 'subh_telephone' ,
    array ( 'default' => '',
    'sanitize_callback' => 'subh_check_number'
    ));



function subh_check_number( $value ) {
    if ( preg_match( "/^\+[0-9]{2} [0-9]{5} [0-9]{5}$/"|"/^(\([0-9]{3}\)|[0-9]{3}-)[0-9]{3}-[0-9]{4}$/", $value ) ) {
		return $value;
		}
		else
		{
		return "";
		}
}


$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'subh_telephone', array(
    'label'    => __( 'Telephone', 'subh-lite' ),
    'section'  => 'subh_contactinfo_section',
    'settings' => 'subh_telephone',
	'description' => __( 'Write a Telephone Number, Format: +99 99999 99999 or (123)123-1234', 'subh-lite' ),
) ) );

/*  Header Email Option in the Theme Customizer */

$wp_customize->add_setting( 'subh_email' ,
    array ( 'default' => '',
    'sanitize_callback' => 'sanitize_email'
    ));

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'subh_email', array(
    'label'    => __( 'Email', 'subh-lite' ),
    'section'  => 'subh_contactinfo_section',
    'settings' => 'subh_email',
	'description' => __( 'Write Email ID, Recommended 15-20 Charecters', 'subh-lite' ),
) ) );

}
add_action( 'customize_register', 'subh_customizer_contactinfo' );



/*-----------------------------------------------------------------------------------*/
/*  Header Social Media Option in the Theme Customizer
/*-----------------------------------------------------------------------------------*/
function subh_customizer_socialmedia( $wp_customize ) {

/*  Facebook Option in the Theme Customizer */
    $wp_customize->add_section( 'subh_socialmedia_section' , array(
    'title'       => __( 'Social Media', 'subh-lite' ),
    'priority'    => 22,
    'description' => __( 'Enter Social Media Links / URLs.', 'subh-lite' ),
) );

$wp_customize->add_setting( 'subh_facebook' ,
    array ( 'default' => '',
    'sanitize_callback' => 'esc_url_raw'
    ));

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'subh_facebook', array(
    'label'    => __( 'Facebook', 'subh-lite' ),
    'section'  => 'subh_socialmedia_section',
    'settings' => 'subh_facebook',
) ) );

/*  Twitter Option in the Theme Customizer */
$wp_customize->add_setting( 'subh_twitter' ,
    array ( 'default' => '',
    'sanitize_callback' => 'esc_url_raw'
    ));

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'subh_twitter', array(
    'label'    => __( 'Twitter', 'subh-lite' ),
    'section'  => 'subh_socialmedia_section',
    'settings' => 'subh_twitter',
) ) );

/*  Google + Option in the Theme Customizer */
$wp_customize->add_setting( 'subh_google+' ,
    array ( 'default' => '',
    'sanitize_callback' => 'esc_url_raw'
    ));

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'subh_google+', array(
    'label'    => __( 'Google +', 'subh-lite' ),
    'section'  => 'subh_socialmedia_section',
    'settings' => 'subh_google+',
) ) );

/*  Linked In Option in the Theme Customizer */
$wp_customize->add_setting( 'subh_linkedin' ,
    array ( 'default' => '',
    'sanitize_callback' => 'esc_url_raw'
    ));

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'subh_linkedin', array(
    'label'    => __( 'Linked In', 'subh-lite' ),
    'section'  => 'subh_socialmedia_section',
    'settings' => 'subh_linkedin',
) ) );

/*  Youtube Option in the Theme Customizer */
$wp_customize->add_setting( 'subh_youtube' ,
    array ( 'default' => '',
    'sanitize_callback' => 'esc_url_raw'
    ));

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'subh_youtube', array(
    'label'    => __( 'Youtube', 'subh-lite' ),
    'section'  => 'subh_socialmedia_section',
    'settings' => 'subh_youtube',
) ) );

}
add_action( 'customize_register', 'subh_customizer_socialmedia' );



/*-----------------------------------------------------------------------------------*/
/*  Background Color Option in the Theme Customizer
/*-----------------------------------------------------------------------------------*/
function subh_customizer_bgcolor( $wp_customize ) {

    $wp_customize->add_section( 'subh_bg_colors_section' , array(
    'title'       => __( 'Colors &amp; Backgrounds', 'subh-lite' ),
    'priority'    => 30,
) );

/*--------------------Link Color---------------------*/
$wp_customize->add_setting( 'subh_linkcolor' ,
    array ( 'default' => 'blue',
    'sanitize_callback' => 'subh_sanitize_select'
    ));

$wp_customize->add_control( 'subh_linkcolor', array(
    'label'      => __( 'Link Color', 'subh-lite' ),
    'section'    => 'subh_bg_colors_section',
    'settings'   => 'subh_linkcolor',
    'type'       => 'radio',
    'choices'    => array(
        'red' => __( 'Red', 'subh-lite' ),
        'blue' => __( 'Blue', 'subh-lite' ),
        'green' => __( 'Green', 'subh-lite' ),
        ),
) );

// Sanitize Select & Radio.
function subh_sanitize_select( $input, $setting ) {
	
	$input = sanitize_key( $input );
	$choices = $setting->manager->get_control( $setting->id )->choices;
	
	return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
}

}
add_action( 'customize_register', 'subh_customizer_bgcolor' );

/*-----------------------------------------------------------------------------------*/
/*  Header Background Image
/*-----------------------------------------------------------------------------------*/

function subh_customizer_header_bg_image() {	
	?>
		<style type="text/css">
			 #header-section{background: #CCCCCC url(<?php header_image(); ?>) no-repeat center center fixed;}
		</style>
	<?php
}
add_action( 'wp_head', 'subh_customizer_header_bg_image' );

/*-----------------------------------------------------------------------------------*/
/*  Header Text Color
/*-----------------------------------------------------------------------------------*/

function subh_customizer_header_text_color() {	
	?>
		<style type="text/css">
			 .navbar-brand .site-name a{color:#<?php header_textcolor(); ?>;}
		</style>
	<?php
}
add_action( 'wp_head', 'subh_customizer_header_text_color' );



/*-----------------------------------------------------------------------------------*/
/*  Link Color Option in the Theme Customizer
/*-----------------------------------------------------------------------------------*/

function subh_customizer_link_color() {
	$link_color = get_theme_mod( 'subh_linkcolor' );
	
	if ( $link_color != '#02B4E0' ) :
	?>
		<style type="text/css">
			 a, a:hover, #top-contact a.email:hover, #top-contact a.mobile:hover, footer .textwidget a, .single_post a, #commentform a, a, #footer ul li a:hover, .menu > li:hover > a, .single_post .post-info a, .post-info a, .readMore a, .reply a, .footer-navigation ul li:after{color: <?php echo esc_html( $link_color ); ?>}
			
		    .navbar-nav li.current-menu-ancestor > a, .dropdown-menu > .active > a, .navbar-light .navbar-nav > .active > a {color: <?php echo esc_html( $link_color ); ?> !important}
			
			#commentform input#submit, .pagination a, .header-button a{background-color: <?php echo esc_html( $link_color ); ?>}
			
			#s, input#author:focus, input#email:focus, input#url:focus, #commentform textarea:focus{border-color: <?php echo esc_html( $link_color ); ?>}
		</style>
	<?php
	endif;
}
add_action( 'wp_head', 'subh_customizer_link_color' );


/*-----------------------------------------------------------------------------------*/
/*  Front Page Header Part
/*-----------------------------------------------------------------------------------*/
function subh_frontpage_header( $wp_customize ) {

    $wp_customize->add_section( 'subh_frontpage_header_section' , array(
    'title'       => __( 'Front Page Header', 'subh-lite' ),
    'priority'    => 30,
) );
/* Heading */
$wp_customize->add_setting( 'subh_heading' ,
    array ( 'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
    ));

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'subh_heading', array(
    'label'    => __( 'Heading', 'subh-lite' ),
    'section'  => 'subh_frontpage_header_section',
    'settings' => 'subh_heading',
) ) );
/* Paragraph */
$wp_customize->add_setting( 'subh_paragraph', array(
    'default'        => '',
	'sanitize_callback' => 'sanitize_textarea_field'
) );
 
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'subh_paragraph', array(
    'label'   => 'Paragraph',
    'section' => 'subh_frontpage_header_section',
	'type' => 'textarea',
    'settings'   => 'subh_paragraph',
) ) );

/* Button Text */
$wp_customize->add_setting( 'subh_button_text' ,
    array ( 'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
    ));

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'subh_button_text', array(
    'label'    => __( 'Button Text', 'subh-lite' ),
    'section'  => 'subh_frontpage_header_section',
    'settings' => 'subh_button_text',
) ) );

/* Button Link */
$wp_customize->add_setting( 'subh_button_link' ,
    array ( 'default' => '',
    'sanitize_callback' => 'esc_url_raw'
    ));

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'subh_button_link', array(
    'label'    => __( 'Button Link', 'subh-lite' ),
    'section'  => 'subh_frontpage_header_section',
    'settings' => 'subh_button_link',
) ) );

}
add_action( 'customize_register', 'subh_frontpage_header' );



?>