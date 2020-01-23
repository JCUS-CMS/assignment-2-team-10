<?php /* Template Name: Full Width Template */ ?>
<?php get_header(); ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<div id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>	
	
<section id="header-section">
	<div class="main-header-overlay"></div>
			<div class="row">
				<div class="col-12">
				<?php get_header('navigation'); ?>
				<div class="header">
			    <h1 class="text-center" id="header-title"><?php the_title(); ?></h1>
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
								<?php the_content(); ?> 
								<?php wp_link_pages(array('before' => '<div class="pagination">', 'after' => '</div>', 'link_before'  => '<span class="current"><span class="currenttext">', 'link_after' => '</span></span>', 'next_or_number' => 'next_and_number', 'nextpagelink' => __('Next','subh-lite'), 'previouspagelink' => __('Previous','subh-lite'), 'pagelink' => '%','echo' => 1 )); ?>	           
							</div><!--.post-content box mark-links-->
							<?php comments_template( '', true ); ?>
				<?php endwhile; ?>
		</article>
		<!-- End Article -->
		<!-- Start Sidebar -->
						</div>
			</div>
		</div>
</section>
		<!-- End Sidebar -->
		<?php get_footer(); ?>