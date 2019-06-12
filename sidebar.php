<?php
/**
 * The sidebar containing the main widget area
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<aside class="sidebar">
	<?php foundationpress_sidebar_t(); ?>
	<?php dynamic_sidebar( 'sidebar-widgets' ); ?> 
</aside>
