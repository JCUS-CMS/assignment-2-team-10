<form method="get" id="searchform" class="search-form" action="<?php echo esc_url( home_url() ); ?>">
	<fieldset>
		<input type="text" name="s" id="s" placeholder="<?php esc_attr_e('Search the site ...','subh-lite'); ?>" value="<?php the_search_query(); ?>" >
		<input id="search-image" class="sbutton" type="submit">
	</fieldset>
</form>