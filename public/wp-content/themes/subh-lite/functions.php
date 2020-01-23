<?php
if ( ! isset( $content_width ) ) $content_width = 960;

/*-----------------------------------------------------------------------------------*/
/*  Theme Support
/*-----------------------------------------------------------------------------------*/

add_action( 'after_setup_theme', 'subh_setup', 11 );

function subh_setup() {
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-header', array(
	'width'         => 1920,
	'height'        => 720,
	'uploads'       => true,
	'default-text-color' => '#000000',
	) );
	add_theme_support( 'custom-background', array(
	'default-color' => '#ffffff',
	) );
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 220, 162, true );
	add_image_size( 'subh_featured', 220, 162, true ); //Latest posts thumb
	
	add_theme_support( 'custom-logo', array(
	'height'      => 50,
	'width'       => 200,
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array( 'site-title', 'site-description' ),
	) );
	
	add_editor_style( 'custom/editor-style.css' );
	
/*-----------------------------------------------------------------------------------*/
/*  Custom Menu Support
/*-----------------------------------------------------------------------------------*/
	register_nav_menus( array(
    'primary-menu' => __( 'Primary Menu', 'subh-lite' ),
	'footer-menu' => __( 'Footer Menu', 'subh-lite' )
	) );

// Register Custom Navigation Walker
if ( ! class_exists( 'wp_bootstrap_navwalker' )) {
	require_once get_template_directory() . '/wp_bootstrap_navwalker.php';
}


/*-----------------------------------------------------------------------------------*/
/*  Re-Arrange Customizer Option
/*-----------------------------------------------------------------------------------*/
add_action( "customize_register", "subh_theme_customize_rearrange" );
function subh_theme_customize_rearrange( $wp_customize ) {
	$wp_customize->get_control( 'header_textcolor' )->section   = 'subh_bg_colors_section';
	$wp_customize->get_control( 'header_textcolor' )->priority  = 1;
	$wp_customize->get_control( 'header_image' )->section   = 'subh_bg_colors_section';
	$wp_customize->get_control( 'header_image' )->priority  = 2;
	$wp_customize->get_control( 'background_color' )->section   = 'subh_bg_colors_section';
	$wp_customize->get_control( 'background_color' )->priority  = 3;
	$wp_customize->get_control( 'background_image' )->section   = 'subh_bg_colors_section';
	$wp_customize->get_control( 'background_image' )->priority  = 4;
	$wp_customize->get_control( 'background_position' )->section   = 'subh_bg_colors_section';
	$wp_customize->get_control( 'background_size' )->section   = 'subh_bg_colors_section';
	$wp_customize->get_control( 'background_preset' )->section   = 'subh_bg_colors_section';
	$wp_customize->get_control( 'background_repeat' )->section   = 'subh_bg_colors_section';
	$wp_customize->get_control( 'background_attachment' )->section   = 'subh_bg_colors_section';
}
/*-----------------------------------------------------------------------------------*/
/*	Javascsript
/*-----------------------------------------------------------------------------------*/
function subh_add_scripts() {

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
wp_enqueue_script( 'tether', get_template_directory_uri() . '/custom/tether.min.js', array('jquery'), true); // Required for bootstrap v 4.0
wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', array('jquery'), true); // all the bootstrap javascript goodness
wp_enqueue_script( 'wow', get_template_directory_uri() . '/custom/wow.min.js', array('jquery'), true);
wp_enqueue_script( 'subh-custom', get_template_directory_uri() . '/custom/custom.js', array('jquery'), true);
wp_enqueue_script( 'fittext', get_template_directory_uri() . '/custom/jquery.fittext.js', array('jquery'), true);

}
add_action('wp_enqueue_scripts','subh_add_scripts');

/*-----------------------------------------------------------------------------------*/
/* Enqueue CSS
/*-----------------------------------------------------------------------------------*/
function subh_enqueue_css() {
    global $data;
	
	wp_enqueue_style('subh-stylesheet', get_template_directory_uri() . '/style.css', 'style');
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css' );
	wp_enqueue_style('font-awesome', get_template_directory_uri() . '/font-awesome/css/font-awesome.min.css');
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/custom/animate.min.css');
	wp_enqueue_style( 'subh-oxygen', 'https://fonts.googleapis.com/css?family=Oxygen:300,400,700' );
		
	$custom_css = "
			body {background-color:#FFFFFF; }
		 	a, a:hover, #top-contact a.email:hover, #top-contact a.mobile:hover, footer .textwidget a, .single_post a, #commentform a, a, #footer ul li a:hover, .menu > li:hover > a, .single_post .post-info a, .post-info a, .readMore a, .reply a, .footer-navigation ul li:after{color:#02B4E0;}
			
		    .navbar-nav li.current-menu-ancestor > a, .dropdown-menu > .active > a, .navbar-light .navbar-nav > .active > a {color:#02B4E0 !important;}
			
			#commentform input#submit, .pagination a, .header-button a{background-color: #02B4E0;}
			
			#s, input#author:focus, input#email:focus, input#url:focus, #commentform textarea:focus{border-color:#02B4E0;}
			";
	wp_add_inline_style( 'subh-stylesheet', $custom_css );
}
add_action('wp_enqueue_scripts', 'subh_enqueue_css', 99);

### CUSTOMIZER STYLES ("Upgrade to Pro") ###

function subh_wp_custom_customize_enqueue() {
    wp_enqueue_style( 'subh-customizer-css', get_template_directory_uri() . '/inc/admin/customizer/style.css' );
}
add_action( 'customize_controls_enqueue_scripts', 'subh_wp_custom_customize_enqueue' );


/*-----------------------------------------------------------------------------------*/
/*  Enable Widgetized sidebar
/*-----------------------------------------------------------------------------------*/
add_action( 'widgets_init', 'subh_widgets_init' );
function subh_widgets_init() {
	register_sidebar(array(
		'name'=>__( 'Sidebar', 'subh-lite' ),
		'id'   => 'sidebar-1',
		'description'   => __( 'Appears on posts and pages', 'subh-lite' ),
		'before_widget' => '<li id="%1$s" class="widget widget-sidebar %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	
	 register_sidebar(array(
        'name' => __( 'Footer Left', 'subh-lite' ),
        'id'   => 'footer-left-widget',
        'description'   => __( 'Left Footer widget position.', 'subh-lite' ),
        'before_widget' => '<div id="%1$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>'
    ));

    register_sidebar(array(
        'name' => __( 'Footer Center One', 'subh-lite' ),
        'id'   => 'footer-centerone-widget',
        'description'   => __( 'Centre Footer widget position.', 'subh-lite' ),
        'before_widget' => '<div id="%1$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>'
    ));

    register_sidebar(array(
        'name' => __( 'Footer Center Two', 'subh-lite' ),
        'id'   => 'footer-centertwo-widget',
        'description'   => __( 'Right Footer widget position.', 'subh-lite' ),
        'before_widget' => '<div id="%1$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>'
    ));
	
	 register_sidebar(array(
        'name' => __( 'Footer Right', 'subh-lite' ),
        'id'   => 'footer-right-widget',
        'description'   => __( 'Right Footer widget position.', 'subh-lite' ),
        'before_widget' => '<div id="%1$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>'
    ));
}



/*-----------------------------------------------------------------------------------*/
/*	Custom Gravatar Support
/*-----------------------------------------------------------------------------------*/
if( !function_exists( 'subh_custom_gravatar' ) ) {
    function subh_custom_gravatar( $avatar_defaults ) {
        $subh_avatar = get_template_directory_uri() . '/images/gravatar.png';
        $avatar_defaults[$subh_avatar] = 'Custom Gravatar (/images/gravatar.png)';
        return $avatar_defaults;
    }
    add_filter( 'avatar_defaults', 'subh_custom_gravatar' );
}

/*-----------------------------------------------------------------------------------*/
/*	Custom Comments template
/*-----------------------------------------------------------------------------------*/
function subh_comment($comment, $args, $depth) {
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
		<div id="comment-<?php comment_ID(); ?>" style="position:relative;">
			<div class="comment-author vcard">
				<?php echo get_avatar( $comment->comment_author_email, 70 ); ?>
				<div class="comment-metadata">
				<?php printf(__('<span class="fn">%s</span>', 'subh-lite'), get_comment_author_link()) ?>
				<time><?php comment_date(get_option( 'date_format' )); ?></time>
				<span class="comment-meta">
					<?php edit_comment_link(__('(Edit)', 'subh-lite'),'  ','') ?>
				</span>
				<span class="reply">
					<?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
				</span>
				</div>
			</div>
			<?php if ($comment->comment_approved == '0') : ?>
				<em><?php _e('Your comment is awaiting moderation.', 'subh-lite') ?></em>
				<br />
			<?php endif; ?>
			<div class="commentmetadata">
				<?php comment_text() ?>
			</div>
		</div>
	</li>
<?php }

/*-----------------------------------------------------------------------------------*/
/*	Short Post Title
/*-----------------------------------------------------------------------------------*/
function subh_short_title($after = '', $length){
	$mytitle = get_the_title();
	if ( strlen($mytitle) > $length ){
		$mytitle = substr($mytitle,0,$length);
		echo $mytitle . $after; 
	}
	else { echo $mytitle; }
}

/*-----------------------------------------------------------------------------------*/
/*  excerpt
/*-----------------------------------------------------------------------------------*/
function subh_custom_excerpt_length( $length ) {
    return 29;
}
add_filter( 'excerpt_length', 'subh_custom_excerpt_length', 999 );

function subh_excerpt_more( $more ) {
    return ' ...';
}
add_filter( 'excerpt_more', 'subh_excerpt_more' );

/*-----------------------------------------------------------------------------------*/
/*  archive title
/*-----------------------------------------------------------------------------------*/
function subh_archive_title( $title ) {
    if ( is_author() ) {
        $title = sprintf( __( 'All Posts By: %s', 'subh-lite' ), '<span class="vcard">' . get_the_author() . '</span>' );
    }
    return $title;
}
 
add_filter( 'get_the_archive_title', 'subh_archive_title' );
/*-----------------------------------------------------------------------------------*/
/* nofollow to next/previous links
/*-----------------------------------------------------------------------------------*/
function subh_pagination_add_nofollow($content) {
    return 'rel="nofollow"';
}
add_filter('next_posts_link_attributes', 'subh_pagination_add_nofollow' );
add_filter('previous_posts_link_attributes', 'subh_pagination_add_nofollow' );

/*-----------------------------------------------------------------------------------*/
/* Nofollow to category links
/*-----------------------------------------------------------------------------------*/
add_filter( 'the_category', 'subh_add_nofollow_cat' ); 
function subh_add_nofollow_cat( $text ) {
$text = str_replace('rel="category tag"', 'rel="nofollow"', $text); return $text; }

/*-----------------------------------------------------------------------------------*/ 
/* nofollow post author link
/*-----------------------------------------------------------------------------------*/
add_filter('the_author_posts_link', 'subh_nofollow_the_author_posts_link');
function subh_nofollow_the_author_posts_link ($link) {
return str_replace('<a href=', '<a rel="nofollow" href=',$link); }

/*-----------------------------------------------------------------------------------*/ 
/* nofollow to reply links
/*-----------------------------------------------------------------------------------*/
function subh_add_nofollow_to_reply_link( $link ) {
return str_replace( '")\'>', '")\' rel=\'nofollow\'>', $link );
}
add_filter( 'comment_reply_link', 'subh_add_nofollow_to_reply_link' );
    

/*-----------------------------------------------------------------------------------*/
/* adds a class to the post if there is a thumbnail
/*-----------------------------------------------------------------------------------*/
function subh_has_thumb_class($classes) {
    global $post;
    if( has_post_thumbnail($post->ID) ) { $classes[] = 'has_thumb'; }
        return $classes;
}
add_filter('post_class', 'subh_has_thumb_class');

/*-----------------------------------------------------------------------------------*/
/* Single Post Pagination
/*-----------------------------------------------------------------------------------*/
function subh_wp_link_pages_args_prevnext_add($args)
{
    global $page, $numpages, $more, $pagenow;
    if (!$args['next_or_number'] == 'next_and_number')
        return $args; 
    $args['next_or_number'] = 'number'; 
    if (!$more)
        return $args; 
    if($page-1) 
        $args['before'] .= _wp_link_page($page-1)
        . $args['link_before']. $args['previouspagelink'] . $args['link_after'] . '</a>'
    ;
    if ($page<$numpages) 
    
        $args['after'] = _wp_link_page($page+1)
        . $args['link_before'] . $args['nextpagelink'] . $args['link_after'] . '</a>'
        . $args['after']
    ;
    return $args;
}
add_filter('wp_link_pages_args', 'subh_wp_link_pages_args_prevnext_add');

/*-----------------------------------------------------------------------------------*/
/* add <!-- next-page --> button to tinymce
/*-----------------------------------------------------------------------------------*/
add_filter('mce_buttons','subh_wysiwyg_editor');
function subh_wysiwyg_editor($mce_buttons) {
   $pos = array_search('wp_more',$mce_buttons,true);
   if ($pos !== false) {
       $tmp_buttons = array_slice($mce_buttons, 0, $pos+1);
       $tmp_buttons[] = 'wp_page';
       $mce_buttons = array_merge($tmp_buttons, array_slice($mce_buttons, $pos+1));
   }
   return $mce_buttons;
}

/*-----------------------------------------------------------------------------------*/
/* Theme Welcome Message
/*-----------------------------------------------------------------------------------*/

function subh_admin() {
	require_once get_template_directory() . '/inc/admin/theme-welcome/theme-welcome.php';
}
function subh_admin_actions() {
    add_theme_page(__( 'About Subh Lite', 'subh-lite' ), __( 'About Subh Lite', 'subh-lite' ), "edit_theme_options", "about-subh-lite", "subh_admin");
} 
add_action('admin_menu', 'subh_admin_actions');

/*---------------------Welcome Page CSS-------------------------*/
add_action('admin_enqueue_scripts', 'subh_admin_style');

function subh_admin_style($hook) {
	if($hook != 'appearance_page_about-subh-lite') {
                return;
        }
  wp_enqueue_style('subh-themewelcome', get_template_directory_uri() . '/inc/admin/theme-welcome/css/style.css', 'style');
}

/*-----------------------------------------------------------------------------------*/
/* Theme Customizer
/*-----------------------------------------------------------------------------------*/

require_once get_template_directory() . '/inc/admin/customizer/theme-customizer.php';

/*-----------------------------------------------------------------------------------*/
/* Plugin Recommendations
/*-----------------------------------------------------------------------------------*/
require_once get_template_directory() . '/inc/admin/plugin-recommendation/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'subh_lite_register_required_plugins' );

function subh_lite_register_required_plugins() {

	$plugins = array(

		array(
			'name'      => 'Page Builder By SiteOrigin',
			'slug'      => 'siteorigin-panels',
			'required'  => false,
		),
		
		array(
			'name'      => 'Top Smooth Scroll',
			'slug'      => 'top-smooth-scroll',
			'required'  => false,
		),
		
		array(
			'name'      => 'Inject Header And Footer',
			'slug'      => 'inject-header-and-footer',
			'required'  => false,
		),

	);

	$config = array(
		'id'           => 'subh',             // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.

		
	);

	tgmpa( $plugins, $config );
}

?>
<?php
/*-----------------------------------------------------------------------------------*/
/* Theme Welcome Message When Theme is activated
/*-----------------------------------------------------------------------------------*/

function subh_themesettings_admin_head($hook) {

		global $pagenow;

		if ( is_admin() && ('themes.php' == $pagenow) && isset( $_GET['activated'] ) ) {

?>

<script type="text/javascript">
jQuery(function(){
var message = '<p><?php printf(
            __( 'Welcome! Thank you for choosing subh Lite! To take advantage of our theme (the best our theme can offer), please make sure you visit our <a href="%s">welcome page</a>.', 'subh-lite' ),
            esc_url( admin_url( 'themes.php?page=about-subh-lite' ) )
        ); ?></p><p><?php printf(
            __( '<a href="%s" class="button-primary">Get Started With Subh Lite</a>', 'subh-lite' ),
            esc_url( admin_url( 'themes.php?page=about-subh-lite' ) )
        ); ?></p>';
jQuery('.themes-php #message2').html(message);
});
</script>

<?php } }
add_action('admin_head', 'subh_themesettings_admin_head');
?>