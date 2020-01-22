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
			<div class="post-info text-center"><i class="fa fa-user"></i> <span class="theauthor"><?php the_author_posts_link(); ?></span> &nbsp;&nbsp;&nbsp;<i class="fa fa-clock-o"></i> <span class="thetime"><?php the_modified_time( get_option( 'date_format' ) ) ;?></span> &nbsp;&nbsp;&nbsp;<i class="fa fa-info-circle"></i> <span class="thecategory"><?php the_category(', ') ?></span> &nbsp;&nbsp;&nbsp;<i class="fa fa-comment"></i> <span class="thecomment"><a href="<?php comments_link(); ?>"><?php comments_number();?></a></span></div>
			</div>
				</div>
			</div>
</section>

<section class="zero-padding"  id="article">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 col-md-8">
		<article class="article">
						
						<!-- Start Content -->
						<div class="post-single-content box mark-links">
							<?php the_content(); ?>
							<!--Start Pagination-->
							<?php wp_link_pages(array(
							'before' => '<div class="pagination">',
							'after' => '</div>',
							'link_before'  => '<span class="current"><span class="currenttext">',
							'link_after' => '</span></span>',
							'next_or_number' => 'next_and_number',
							'nextpagelink' => __('Next','subh-lite'),
							'previouspagelink' => __('Previous','subh-lite'),
							'pagelink' => '%','echo' => 1 
							)); ?>
							<!--End Pagination-->	
										
							<!-- Start Tags -->
							<div class="tags"><?php the_tags('<span class="tagtext">'.__('Tags','subh-lite').':</span>',', ') ?></div>
							<!-- End Tags -->
							
						</div>
						<!-- End Content -->
						
							<!-- Start Related Posts -->
							<?php $categories = get_the_category($post->ID); if ($categories) { $category_ids = array(); foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id; $args=array( 'category__in' => $category_ids, 'post__not_in' => array($post->ID), 'ignore_sticky_posts' => 1, 'showposts'=>4,'orderby' => 'rand' );
							$my_query = new wp_query( $args ); if( $my_query->have_posts() ) {
								echo '<div class="related-posts"><h3>'.__('Related Posts','subh-lite').'</h3><div class="postauthor-top"><ul>';
								$pexcerpt=1; $j = 0; $counter = 0; while( $my_query->have_posts() ) { ++$counter; if($counter == 4) { $postclass = 'last'; $counter = 0; } else { $postclass = ''; } $my_query->the_post();?>
								<li class="<?php echo $postclass; ?> rpexcerpt<?php echo $pexcerpt ?> <?php echo (++$j % 2 == 0) ? 'last' : ''; ?>">
									<a rel="nofollow" class="relatedthumb" href="<?php the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>">
										<span class="rthumb">
											<?php if(has_post_thumbnail()): ?>
												<?php the_post_thumbnail('widgetthumb', 'title='); ?>
											<?php else: ?>
												<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/nothumb.png" alt="<?php the_title(); ?>" class="wp-post-image" />
											<?php endif; ?>
										</span>
										<span>
											<?php the_title(); ?>
										</span>
									</a>
									<div class="meta">
										<i class="fa fa-comment"></i> <a href="<?php comments_link(); ?>" rel="nofollow"><?php comments_number();?></a> &nbsp;&nbsp;&nbsp;<i class="fa fa-clock-o"></i> <span class="thetime"><?php the_modified_time( get_option( 'date_format' ) ); ?></span>
									</div> <!--end .entry-meta-->
								</li>
								<?php $pexcerpt++;?>
								<?php } echo '</ul></div></div>'; }} wp_reset_postdata();  ?>
							<!-- End Related Posts -->
						
							<!-- Start Author Box -->
							<div class="postauthor-container">
								<h4><?php _e('About The Author', 'subh-lite'); ?></h4>
								<div class="postauthor">
									<?php if(function_exists('get_avatar')) { echo get_avatar( get_the_author_meta('email'), '100' );  } ?>
									<h5><?php the_author_meta( 'display_name' ); ?></h5>
									<p><?php the_author_meta('description') ?></p>
								</div>
							</div>
							<!-- End Author Box -->
					  
				<?php comments_template( '', true ); ?>
			<?php endwhile; ?>
		</article>
		<!-- End Article -->
		</div>
		<!-- Start Sidebar -->
		<div class="col-lg-4 col-md-4">
		<?php get_sidebar(); ?>
		<!-- End Sidebar -->
			</div>
			</div>
		</div>
</section>
		<?php get_footer(); ?>