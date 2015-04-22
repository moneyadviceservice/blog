<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Simone
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
	<div class="l-sidebar" role="complementary">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div>
