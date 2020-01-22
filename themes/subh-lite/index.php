<?php get_header(); ?>
<section id="header-section">
	<div class="main-header-overlay"></div>
			<div class="row">
				<div class="col-12">
				<?php get_header('navigation'); ?>
				<div class="header">
				<?php if( is_home() && get_option('page_for_posts') ) { ?>
				<h1 class="text-center" id="header-title"><?php echo esc_html( apply_filters('the_title',get_page( get_option('page_for_posts') )->post_title) ); ?></h1>
				<?php } elseif( is_singular() ) { ?>
				<h1 class="text-center" id="header-title"><?php the_title(); ?></h1>
				<?php } ?>
				</div>
				</div>
				</div>
			</div>
</section>

<section>
        <div class="container-fluid">
            <div class="row no-gutter">
                <div class="col-lg-8 col-md-8 col-sm-12">
						<?php  $j=0; $i =0; if (have_posts()) : while (have_posts()) : the_post(); ?>
						<article class="col-lg-12 col-md-12 col-sm-12 featured-article wow fadeInUp" class="<?php echo 'pexcerpt'.$i++?> post excerpt <?php echo (++$j % 2 == 0) ? 'last' : ''; ?>"> 
						<div class="col-lg-4 col-md-4 featured-img">
							<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>" rel="nofollow" id="featured-thumbnail">
							
								<?php if ( has_post_thumbnail() ) { ?> 
									<?php echo '<div class="featured-thumbnail">'; the_post_thumbnail('subh_featured',array('title' => '')); echo '</div>'; ?>
								<?php } else { ?>
									<div class="featured-thumbnail">
										<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/nothumb.png "class="attachment-featured wp-post-image" alt="<?php the_title_attribute(); ?>">
									</div>
								<?php } ?>
								<div class="featured-cat"><?php $category = get_the_category(); echo esc_html( $category[0]->cat_name ); ?></div>
							</a>
							</div>
							<div class="col-lg-8 offset-lg-4 col-md-8 offset-md-4 padding-bottom-15">
								<p class="filler">&nbsp;</p>						
								<h2 class="title custom-text-left-center">
									<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a>
								</h2>
								<?php echo the_excerpt();?>
								<div class="post-info"><i class="fa fa-user"></i> <span class="theauthor"><?php the_author_posts_link(); ?></span> &nbsp;&nbsp;&nbsp;<i class="fa fa-clock-o"></i> <span class="thetime"><?php the_modified_time( get_option( 'date_format' ) );?></span> <span class="readMore"><a class="readMore" href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>" rel="nofollow"><?php _e('READ MORE <i class="fa fa-long-arrow-right"></i>','subh-lite'); ?></a></span></div>
							</div>
						</article>
					<?php endwhile; else: ?>
						<div class="no-results">
							<h5><?php _e('No results found. We apologize for any inconvenience, please hit back on your browser or use the search form below.', 'subh-lite'); ?></h5>
							<?php get_search_form(); ?>
						</div><!--noResults-->
					<?php endif; ?>
					<!--Start Pagination-->
					<div class="pagination">						
						 <?php the_posts_pagination( array(
							'prev_text' => __('&larr; Previous', 'subh-lite'),
							'next_text' => __('Next &rarr;', 'subh-lite')
						 ) ); ?>
					</div>
					<!--End Pagination-->			
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12">
				<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
</section>
<?php get_footer(); ?>