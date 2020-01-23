<!-- Top Bar Starts -->
<section id="top-contact">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-7 col-md-7 col-sm-7 col-sm-12 custom-text-left-center">
					<?php if ( get_theme_mod( 'subh_telephone' ) ) : ?><a  class="mobile" href="<?php echo esc_url( 'tel:' . get_theme_mod( 'subh_telephone' ) ); ?>"> <span><i class="fa fa-phone-square"></i></span> <?php echo esc_html( get_theme_mod( 'subh_telephone' ) ); ?></a><?php endif; ?> &nbsp;
					<?php if ( get_theme_mod( 'subh_email' ) ) : ?><a class="email" href="<?php echo esc_url( 'mailto:' . get_theme_mod( 'subh_email' ) ); ?>"><span><i class="fa fa-envelope"></i></span> 				<?php echo esc_html( get_theme_mod( 'subh_email' ) ); ?></a><?php endif; ?>
			</div>
			<div class="col-lg-5 col-md-5 col-sm-5 col-sm-12 custom-text-right-center">
					<span><!-- Social Icons Starts -->
					<?php if ( get_theme_mod( 'subh_facebook' ) ) : ?><a href="<?php echo esc_url( get_theme_mod( 'subh_facebook' ) ); ?>" title="<?php printf( esc_attr__( 'Facebook', 'subh-lite' ),''); ?>"><i class="fa fa-facebook"></i></a> <?php else : ?><?php endif; ?>

<?php if ( get_theme_mod( 'subh_twitter' ) ) : ?><a href="<?php echo esc_url( get_theme_mod( 'subh_twitter' ) ); ?>" title="<?php printf( esc_attr__( 'Twitter', 'subh-lite' ),''); ?>"><i class="fa fa-twitter"></i> </a> <?php else : ?><?php endif; ?>

<?php if ( get_theme_mod( 'subh_google+' ) ) : ?><a href="<?php echo esc_url( get_theme_mod( 'subh_google+' ) ); ?>" title="<?php printf( esc_attr__( 'Google +', 'subh-lite' ),''); ?>"><i class="fa fa-google-plus"></i></a> <?php else : ?><?php endif; ?>

<?php if ( get_theme_mod( 'subh_linkedin' ) ) : ?><a href="<?php echo esc_url( get_theme_mod( 'subh_linkedin' ) ); ?>" title="<?php printf( esc_attr__( 'LinkedIn', 'subh-lite' ),''); ?>"><i class="fa fa-linkedin"></i></a> <?php else : ?><?php endif; ?>

<?php if ( get_theme_mod( 'subh_youtube' ) ) : ?><a href="<?php echo esc_url( get_theme_mod( 'subh_youtube' ) ); ?>" title="<?php printf( esc_attr__( 'Youtube', 'subh-lite' ),''); ?>"><i class="fa fa-youtube"></i></a> <?php else : ?><?php endif; ?>
					</span><!-- Social Icons Ends -->
					
					
<span class="search-button">
<span class="show-hide-button"><i class="fa fa-search"></i></span>
<div class="show-hide-content">
<div class="search-box hide-search animated fadeInUp"><?php get_search_form(); ?></div>
</div>
</span>

	
					
					
			</div>
		</div>
	</div>	
</section>
<!-- Top Bar Ends -->
	


<nav class="navbar navbar-toggleable-md navbar-light container-fluid custom-container-fluid">
    <button class="navbar-toggler navbar-toggler-right collapsed" type="button" data-toggle="collapse" data-target="#collapsingNavbarMd" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
       <span class="my-1 mx-1 close"><i class="fa fa-arrows-alt"></i></span>
       <span class="my-1 mx-1 open"><i class="fa fa-bars"></i></span>
    </button>
		<div class="navbar-brand">	
			<?php
			// Display the Custom Logo
			the_custom_logo();
			
			// If selected Option to Display name and description
			if (display_header_text()=='true') {
				?>
				<h1 class="site-name"><a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo('name'); ?></a></h1>
				<p class="site-tagline"><?php bloginfo( 'description' ); ?></p>
				<?php
			}
			?>
	</div>
			
    <div class="navbar-collapse collapse" id="collapsingNavbarMd">
        <?php /* Primary navigation */
		if (has_nav_menu('primary-menu')) {
			wp_nav_menu( array(
				'theme_location' => 'primary-menu',
				'depth'      => 3,
				'container'  => false,
				'menu_class' => 'nav navbar-nav ml-auto',
				'walker'     => new wp_bootstrap_navwalker())
			);
		}else { ?>
				<ul class="nav navbar-nav ml-auto">
					<?php wp_list_pages('title_li=&depth=1'); ?>
				</ul>
			<?php } ?>
			
    </div>
</nav>