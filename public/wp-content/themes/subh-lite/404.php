<?php get_header(); ?>
<section id="header-section">
	<div class="main-header-overlay"></div>
			<div class="row">
				<div class="col-12">
				<?php get_header( 'navigation' ); ?>
				<div class="header">
				<h1 class="text-center" id="header-title"><?php _e('Error 404 Not Found', 'subh-lite'); ?></h1>
				</div>
				</div>
				<div class="col-10 offset-1 text-center">
				<div class="post-info text-center"><?php _e('Oops! We couldn\'t find this Page.', 'subh-lite'); ?> 
						<?php _e('Please check your URL or use the search form below.', 'subh-lite'); ?></div>
						<p class="clear"></p>
						<?php get_search_form();?>
						<p class="clear"></p>
				
				</div>
			</div>
</section>
<?php get_footer(); ?>