<?php
/**
 * The front page template file.
 * 
 * @package Subh Lite
 */
?>
<?php 

if ( is_front_page() && is_home() ) {
get_template_part( 'templates/frontpage','blog' );

} elseif ( is_front_page()){
get_template_part( 'templates/frontpage','static' );

}
?>