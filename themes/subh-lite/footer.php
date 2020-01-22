<section id="footer"> 
      <div class="container-fluid">
            <div class="row">
				
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 padding-top-15">
				<?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('footer-left-widget') ) ?>
			</div>
        <!-- /End 1/3 -->
        <!-- 2/3 -->
		    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 padding-top-15">
				<?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('footer-centerone-widget') ) ?>
			</div>
        <!-- /End 2/3 -->
        <!-- 3/3 -->
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 padding-top-15">
				<?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('footer-centertwo-widget') ) ?>
			</div>
        <!-- /End 3/3 -->
		<!-- 3/3 -->
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 padding-top-15">
				<?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('footer-right-widget') ) ?>
			</div>
			
        <!-- /End 3/3 -->
		</div>
		</div>
		</section>
		<!--start copyrights-->
	<section id="copyright" class="padding-zero"> 
      <div class="container">
<div class="row"  >
<div class="col-lg-12 col-md-12 text-center">
	<div class="footer-navigation">
			<?php if ( has_nav_menu( 'footer-menu' ) ) { ?>
				<?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'menu_class' => 'menu text-center', 'container' => '' ) ); ?>
			<?php } else { ?>
				<ul class="menu text-center">
					<?php wp_list_pages('title_li=&depth=1'); ?>
				</ul>
			<?php } ?>
	</div>
	<div class="copyright-left-text"><?php printf( __( 'Copyright &copy; ', 'subh-lite' ),''); ?><?php echo date_i18n(__('Y','subh-lite')) ?> <a href="<?php echo esc_url( home_url() ); ?>" title="<?php bloginfo('description'); ?>" rel="nofollow"><?php bloginfo('name'); ?></a><?php printf( __( '. All rights reserved.', 'subh-lite' ),''); ?></div>
</div>
</div></div></section>

<?php wp_footer(); ?>
</body>
</html>