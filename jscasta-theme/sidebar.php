<?php
/**
 * Sidebar template.
 *
 * @package JSCASTA
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside class="sidebar widget-area" aria-label="<?php esc_attr_e( 'Sidebar', 'jscasta' ); ?>">
  <?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside>
