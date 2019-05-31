<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vincente
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
  </div><!-- #9 COLUMNS -->


<aside id="secondary" class="widget-area col-md-3">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->
</div>
</div>