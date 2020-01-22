<?php
/*-----------------------------------------------------------------------------------*/
/* Welcome Page Top Section
/*-----------------------------------------------------------------------------------*/
		 function subh_main_heading() {
		   $heading = '<h1>' . __("Welcome to Subh Lite!", 'subh-lite') . '</h1>';
		   $paragraph = __("Subh Lite is a free WordPress theme. Its perfect for company website, web agency website, corporate website, personal and parallax business portfolio, photography sites and for freelancer website. It is built on BootStrap and it is responsive, clean, modern and minimal. Subh Lite is WPML, RTL, Retina-Ready and SEO Friendly. It is one of the best business themes.", 'subh-lite');
		   $logolink = esc_url( 'https://www.digitaladquest.com/' );
		   
		   
		   echo '<div class="wrap about-wrap epsilon-wrap">';
		   echo "$heading";
		   echo '<div class="about-text">';
		   echo "$paragraph";
		   echo '</div>';
		   echo "<a href='$logolink' class='wp-badge epsilon-welcome-logo' target='_blank'></a>";
		}
		subh_main_heading();
?>
<?php 
/*-----------------------------------------------------------------------------------*/
/* Welcome Page Tabs
/*-----------------------------------------------------------------------------------*/
  function subh_page_tabs($current = 'first') {
    $tabs = array(
        'getting_started'   => __("Getting Started", 'subh-lite'), 
        'recommended_plugins'  => __("Recommended Plugins", 'subh-lite'),
		'more_themes'  => __("More Themes", 'subh-lite'),
		'support'   => __("Support", 'subh-lite'), 
        'free_vs_pro'  => __("FREE VS PRO", 'subh-lite')
    );
    $html =  '<h2 class="nav-tab-wrapper">';
    foreach( $tabs as $tab => $name ){
        $class = ($tab == $current) ? 'nav-tab-active' : '';
        $html .=  '<a class="nav-tab ' . $class . '" href="?page=about-subh-lite&tab=' . $tab . '">' . $name . '</a>';
    }
    $html .= '</h2>';
    echo $html;
}
?>

<?php
$tab = (!empty($_GET['tab']))? esc_attr($_GET['tab']) : 'getting_started';
subh_page_tabs($tab);
/*-----------------------------------------------------------------------------------*/
/* Welcome Page 1st Tab
/*-----------------------------------------------------------------------------------*/
if($tab == 'getting_started' ) {
		function subh_first_tab() {
		   $heading1 = '<h4>' . __("GETTING STARTED", 'subh-lite') . '</h4>';
		   $paragraph1 = '<p>' . __("Welcome! Thank you for choosing our WordPress Theme. Before you start going through the theme and website setup, Here you may have the informations, which may be used during the setup of our WordPress theme.", 'subh-lite') . '</p>';
		   $button_text1 = __("Visit Our Website", 'subh-lite');
		   $button_link1 = esc_url( 'https://www.digitaladquest.com/wordpress-theme/subh-lite/' );
		   $heading2 = '<h4>' . __("MORE THEME DETAILS", 'subh-lite') . '</h4>';
		   $paragraph2 = '<p>' . __("Subh Lite is one of our most loved theme and we hope you too will have a great experience working with this beautiful theme. Subh Lite is simple, responsive, clean, minimal and SEO friendly WordPress theme. Need more details?", 'subh-lite') . '</p>';
		   $button_text2 = __("Theme Demo", 'subh-lite');
		   $button_link2 = esc_url( 'https://demo.digitaladquest.com/wordpress-theme/subh-lite/' );
		   $heading3 = '<h4>' . __("GO TO CUSTOMIZER", 'subh-lite') . '</h4>';
		   $paragraph3 = '<p>' . __("Magic is waiting for you in WordPress Customizer, you can customise the every aspects of this theme using the WordPress Customizer, Includes - Top Contacts, Social Media, Background Colors and Links etc. So, lets get started now.", 'subh-lite') . '</p>';
		   $button_text3 = __("Go to Customizer", 'subh-lite');
		   $button_link3 = esc_url( admin_url( 'customize.php' ) );
		   
		   echo '<div class="feature-section three-col"> <div class="col">';
		   echo "$heading1";
		   echo "$paragraph1";
		   echo "<p><a href='$button_link1' target='_blank' class='button'>$button_text1</a></p>";
		   echo '</div> <div class="col">';
		   echo "$heading2";
		   echo "$paragraph2";
		   echo "<p><a href='$button_link2' target='_blank' class='button'>$button_text2</a></p>";
		   echo '</div> <div class="col">';
		   echo "$heading3";
		   echo "$paragraph3";
		   echo "<p><a href='$button_link3' class='button button-primary'>$button_text3</a></p>";
		   echo '</div> </div>';
		}
		subh_first_tab();
}
/*-----------------------------------------------------------------------------------*/
/* Welcome Page Second Tab
/*-----------------------------------------------------------------------------------*/
if($tab == 'recommended_plugins' ) {

			function subh_second_tab() {
		   $heading1 = '<h4>' . __("Page Builder By SiteOrigin (Important)", 'subh-lite') . '</h4>';
		   $paragraph1 = '<p>' . __("SiteOrigin Page Builder is the most popular page creation plugin for WordPress. It makes it easy to create responsive column based content, using the widgets you know and love. Your content will accurately adapt to all mobile devices, ensuring your site is mobile-ready.", 'subh-lite') . '</p>';
		   $button_text1 = __("More Details", 'subh-lite');
		   $button_link1 = esc_url( 'https://wordpress.org/plugins/siteorigin-panels/' );
		   $heading2 = '<h4>' . __("Top Smooth Scroll (Important)", 'subh-lite') . '</h4>';
		   $paragraph2 = '<p>' . __("Top Smooth Scroll is a complete plugin for adding scrolling feature to your website. With this plugin you can easily add Smooth Scroll Button To Top (Also you can easily customize the top scrolling button), Smooth Scroll To ID, Smooth Scrolling on Pages while Mouse scrolling.", 'subh-lite') . '</p>';
		   $button_text2 = __("Install Now", 'subh-lite');
		   $button_link2 = esc_url( admin_url( '/themes.php?page=tgmpa-install-plugins' ) );
		   $heading3 = '<h4>' . __("Inject Header &amp; Footer (Useful)", 'subh-lite') . '</h4>';
		   $paragraph3 = '<p>' . __("Inject Header And Footer is one of the really useful and light weight pugin for all WordPress Websites and blogs. With the use of this plugin, you can easily add scripts (Google Analytics or any other scripts or HTML) to the header and footer of your WordPress Website and Blog.", 'subh-lite') . '</p>';
		   $button_text3 = __("Install Now", 'subh-lite');
		   $button_link3 = esc_url( admin_url( '/themes.php?page=tgmpa-install-plugins' ) );
		   
		   echo '<div class="feature-section three-col"> <div class="col">';
		   echo "$heading1";
		   echo "$paragraph1";
		   echo "<p><a href='$button_link1' target='_blank' class='button'>$button_text1</a></p>";
		   echo '</div> <div class="col">';
		   echo "$heading2";
		   echo "$paragraph2";
		   echo "<p><a href='$button_link2' class='button button-primary'>$button_text2</a></p>";
		   echo '</div> <div class="col">';
		   echo "$heading3";
		   echo "$paragraph3";
		   echo "<p><a href='$button_link3' class='button button-primary'>$button_text3</a></p>";
		   echo '</div> </div>';
		}
		subh_second_tab(); 
}
/*-----------------------------------------------------------------------------------*/
/* Welcome Page Third Tab
/*-----------------------------------------------------------------------------------*/
if($tab == 'more_themes' ) {

			function subh_third_tab() {
		   $heading1 = '<h3 class="subh-center">' . __("NEED MORE THEMES?", 'subh-lite') . '</h3>';
		   $paragraph1 = '<p class="subh-center">' . __("Need more WordPress Theme for your WordPress website and blog. You can browse our other featured rich WordPress Theme. We hope, you will like our other WordPress Theme as you like this one.", 'subh-lite') . '</p>';
		   $button_text1 = __("VIEW OUR OTHER THEMES", 'subh-lite');
		   $button_link1 = esc_url( 'https://www.digitaladquest.com/wordpress-theme/' );
		   
		   echo '<div class="feature-section one-col text-center"> <div class="col text-center">';
		   echo "$heading1";
		   echo "$paragraph1";
		   echo "<h4 class='subh-center'><a href='$button_link1' target='_blank' class='button button-primary'>$button_text1</a></h4>";
		   echo '</div> </div>';
		}
		subh_third_tab(); 
}
/*-----------------------------------------------------------------------------------*/
/* Welcome Page 4th Tab
/*-----------------------------------------------------------------------------------*/
if($tab == 'support' ) {

		function subh_fourth_tab() {
		   $heading1 = '<h4>' . __("CONTACT SUPPORT", 'subh-lite') . '</h4>';
		   $paragraph1 = '<p>' . __("We want to make sure you have the best experience using our theme. We hope you will enjoy using Subh Lite and create a beautiful website. If you stuck any where don&rsquo;t hesitate to reach our friendly support team.", 'subh-lite') . '</p>';
		   $button_text1 = __("Contact Support", 'subh-lite');
		   $button_link1 = esc_url( 'https://www.digitaladquest.com/contact-us/' );
		   $heading2 = '<h4>' . __("CREATE A CHILD THEME", 'subh-lite') . '</h4>';
		   $paragraph2 = '<p>' . __("If you want to make changes to the theme&rsquo;s files, those changes are likely to be overwritten when you next update the theme. In order to prevent that from happening, you need to create a child theme.", 'subh-lite') . '</p>';
		   $button_text2 = __("More Details", 'subh-lite');
		   $button_link2 = esc_url( 'https://codex.wordpress.org/Child_Themes' );
		   $heading3 = '<h4>' . __("SPEED UP YOUR SITE", 'subh-lite') . '</h4>';
		   $paragraph3 = '<p>' . __("If you find yourself in the situation where everything on your WordPress website is running slow, you may check the below article, where you will find the most common issues causing this and possible solutions.", 'subh-lite') . '</p>';
		   $button_text3 = __("More Details", 'subh-lite');
		   $button_link3 = esc_url( 'https://www.digitaladquest.com/speed-up-your-wordpress-site/' );
		   
		   echo '<div class="feature-section three-col"> <div class="col">';
		   echo "$heading1";
		   echo "$paragraph1";
		   echo "<p><a href='$button_link1' target='_blank' class='button button-primary'>$button_text1</a></p>";
		   echo '</div> <div class="col">';
		   echo "$heading2";
		   echo "$paragraph2";
		   echo "<p><a href='$button_link2' target='_blank' class='button'>$button_text2</a></p>";
		   echo '</div> <div class="col">';
		   echo "$heading3";
		   echo "$paragraph3";
		   echo "<p><a href='$button_link3' target='_blank' class='button'>$button_text3</a></p>";
		   echo '</div> </div>';
		}
		subh_fourth_tab(); 
			
}
/*-----------------------------------------------------------------------------------*/
/* Welcome Page 5th Tab
/*-----------------------------------------------------------------------------------*/
if($tab == 'free_vs_pro' ) {

 		function subh_fifth_tab() {
		   $heading1 = '<h3>' . __("Fully Responsive", 'subh-lite') . '</h3>';
		   $paragraph1 = '<p>' . __("Built with Bootstrap framework, It&acute;s fully responsive for all devices.", 'subh-lite') . '</p>';
		   
		   $heading2 = '<h3>' . __("Parallax effect", 'subh-lite') . '</h3>';
		   $paragraph2 = '<p>' . __("Smooth &amp; easy scrolling experience for great user experience.", 'subh-lite') . '</p>';
		   
		   $heading3 = '<h3>' . __("Slider Front Page Header", 'subh-lite') . '</h3>';
		   $paragraph3 = '<p>' . __("Front page having slider option for background and text over it.", 'subh-lite') . '</p>';
		   
		   $heading10 = '<h3>' . __("Pre-Built Sections", 'subh-lite') . '</h3>';
		   $paragraph10 = '<p>' . __("Pre built parallax sections on home page - About Us, Teams, Products etc.", 'subh-lite') . '</p>';
		   
		   $heading4 = '<h3>' . __("More Page Templates", 'subh-lite') . '</h3>';
		   $paragraph4 = '<p>' . __("Pro version having more page templates like, left sidebar etc.", 'subh-lite') . '</p>';
		   
		   $heading5 = '<h3>' . __("Unlimited Color Option", 'subh-lite') . '</h3>';
		   $paragraph5 = '<p>' . __("With pro version, you have the option to set any color as link color.", 'subh-lite') . '</p>';
		   
		   $heading6 = '<h3>' . __("Featured Image As BG", 'subh-lite') . '</h3>';
		   $paragraph6 = '<p>' . __("Each page and post header will have different background image.", 'subh-lite') . '</p>';
		   
		   $heading11 = '<h3>' . __("WooCommerce Compatible", 'subh-lite') . '</h3>';
		   $paragraph11 = '<p>' . __("Create an e-store and sell anything with WooCommerce", 'subh-lite') . '</p>';
		   
		   $heading7 = '<h3>' . __("Premium Support", 'subh-lite') . '</h3>';
		   $paragraph7 = '<p>' . __("With pro version, you will get our premium support on all our products.", 'subh-lite') . '</p>';
		   
		   $heading8 = '<h3>' . __("White Label", 'subh-lite') . '</h3>';
		   $paragraph8 = '<p>' . __("You can remove the &quot;THEME DESIGNED BY DIGITAL AD QUEST&quot; from the footer. ", 'subh-lite') . '</p>';
		   
		   $heading9 = '<h3>' . __("More Social Media Icons", 'subh-lite') . '</h3>';
		   $paragraph9 = '<p>' . __("Free Version have only 5 Social Media icons, Pro Version has more options to choose from. ", 'subh-lite') . '</p>';
		   
		   $icon_yes = '<span class="dashicons-before dashicons-yes"></span>';
		   $icon_no = '<span class="dashicons-before dashicons-no-alt"></span>';
		   $button_text3 = __("Get Subh Pro Now!", 'subh-lite');
		   $button_link3 = esc_url( 'https://www.digitaladquest.com/wordpress-theme/subh-pro/' );
		   
		   
		   echo '<div class="feature-section"><div id="free_pro">';
		   echo '<table class="free-pro-table"><thead><tr><th></th><th>';
		   echo 'Subh Lite';
		   echo '</th><th>';
		   echo 'Subh PRO';
		   echo '</th></tr></thead>';
		   echo '<tbody>';
		   
		   echo '<tr><td>';
		   echo "$heading1";
		   echo "$paragraph1";
		   echo '</td><td class="only-lite">';
		   echo "$icon_yes";
		   echo '</td><td class="only-lite">';
		   echo "$icon_yes";
		   echo '</td></tr>';
		   
		   echo '<tr><td>';
		   echo "$heading2";
		   echo "$paragraph2";
		   echo '</td><td class="only-lite">';
		   echo "$icon_yes";
		   echo '</td><td class="only-lite">';
		   echo "$icon_yes";
		   echo '</td></tr>';
		   
		   echo '<tr><td>';
		   echo "$heading3";
		   echo "$paragraph3";
		   echo '</td><td class="only-lite">';
		   echo "$icon_no";
		   echo '</td><td class="only-lite">';
		   echo "$icon_yes";
		   echo '</td></tr>';
		   
		   echo '<tr><td>';
		   echo "$heading10";
		   echo "$paragraph10";
		   echo '</td><td class="only-lite">';
		   echo "$icon_no";
		   echo '</td><td class="only-lite">';
		   echo "$icon_yes";
		   echo '</td></tr>';
		   
		   echo '<tr><td>';
		   echo "$heading9";
		   echo "$paragraph9";
		   echo '</td><td class="only-lite">';
		   echo "$icon_no";
		   echo '</td><td class="only-lite">';
		   echo "$icon_yes";
		   echo '</td></tr>';
		   
		   echo '<tr><td>';
		   echo "$heading4";
		   echo "$paragraph4";
		   echo '</td><td class="only-lite">';
		   echo "$icon_no";
		   echo '</td><td class="only-lite">';
		   echo "$icon_yes";
		   echo '</td></tr>';
		   
		   echo '<tr><td>';
		   echo "$heading5";
		   echo "$paragraph5";
		   echo '</td><td class="only-lite">';
		   echo "$icon_no";
		   echo '</td><td class="only-lite">';
		   echo "$icon_yes";
		   echo '</td></tr>';
		   
		   echo '<tr><td>';
		   echo "$heading6";
		   echo "$paragraph6";
		   echo '</td><td class="only-lite">';
		   echo "$icon_no";
		   echo '</td><td class="only-lite">';
		   echo "$icon_yes";
		   echo '</td></tr>';
		   
		   echo '<tr><td>';
		   echo "$heading11";
		   echo "$paragraph11";
		   echo '</td><td class="only-lite">';
		   echo "$icon_no";
		   echo '</td><td class="only-lite">';
		   echo "$icon_yes";
		   echo '</td></tr>';
		   
		   echo '<tr><td>';
		   echo "$heading7";
		   echo "$paragraph7";
		   echo '</td><td class="only-lite">';
		   echo "$icon_no";
		   echo '</td><td class="only-lite">';
		   echo "$icon_yes";
		   echo '</td></tr>';
		   
		   echo '<tr><td>';
		   echo "$heading8";
		   echo "$paragraph8";
		   echo '</td><td class="only-lite">';
		   echo "$icon_no";
		   echo '</td><td class="only-lite">';
		   echo "$icon_yes";
		   echo '</td></tr>';
		   
		   echo '<tr><td>';
		   echo '</td><td colspan="2">';
		   echo "<p><a href='$button_link3' target='_blank' class='button button-primary button-hero'>$button_text3</a></p>";
		   echo '</td></tr>';
		   
		   echo '</tbody></table>';
		   echo '</div> </div>';
		}
		subh_fifth_tab(); 
}
else {
die;    
}
?>