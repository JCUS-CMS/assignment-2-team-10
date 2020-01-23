<?php get_header(); ?>
<section id="header-section">
	<div class="main-header-overlay"></div>
			<div class="row">
				<div class="col-12">
				<?php get_header('navigation'); ?>
				<div class="header">
				<?php if ( get_theme_mod( 'subh_heading' ) ) : ?><h1 class="text-center padding-bottom-15 wow slideInLeft" id="header-title"><?php echo esc_html( get_theme_mod( 'subh_heading' ) ); ?></h1><?php endif; ?>
				<?php if ( get_theme_mod( 'subh_paragraph' ) ) : ?><div class="post-info text-center padding-bottom-15 col-lg-6 col-md-8 offset-lg-3 offset-md-2  wow slideInRight"><?php echo esc_html( get_theme_mod( 'subh_paragraph' ) ); ?></div><?php endif; ?>
				<?php if ( get_theme_mod( 'subh_button_text' ) ) : ?><div class="text-center wow slideInUp header-button"><a <?php if ( get_theme_mod( 'subh_button_link' ) ) : ?> href="<?php echo esc_url( get_theme_mod( 'subh_button_link' ) ); ?>" <?php endif; ?> class="button button-primary"><?php echo esc_html( get_theme_mod( 'subh_button_text' ) ); ?></a></div><?php endif; ?>

				</div>
				</div>
			</div>
</section>

<section class="zero-padding"  id="article">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12">
									
		<!-- Start Article -->
		<article class="article">		
			
							<div class="post-content box mark-links">
								<?php 
								if (have_posts()) {
								  while (have_posts()) {
									the_post();
									the_content(); 
								  }
								} ?>
								<?php wp_link_pages(array('before' => '<div class="pagination">', 'after' => '</div>', 'link_before'  => '<span class="current"><span class="currenttext">', 'link_after' => '</span></span>', 'next_or_number' => 'next_and_number', 'nextpagelink' => __('Next','subh-lite'), 'previouspagelink' => __('Previous','subh-lite'), 'pagelink' => '%','echo' => 1 )); ?>	           
							</div><!--.post-content box mark-links-->
		</article>
		<!-- End Article -->
		<!-- Start Sidebar -->
						</div>
			</div>
		</div>
</section>
		<!-- End Sidebar -->
		<?php get_footer(); ?>