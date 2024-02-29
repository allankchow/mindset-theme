<?php

/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package FWD_Starter_Theme
 */

if (!is_active_sidebar('sidebar-1')) {
	return;
}

if (!is_active_sidebar('sidebar-2')) {
	return;
}



echo "<aside id='secondary' class='widget-area'>";
if (is_page()) {
	dynamic_sidebar('sidebar-2');
} else {
	dynamic_sidebar('sidebar-1');
}
?>

<?php get_template_part('template-parts/work', 'categories'); ?>
<?php get_template_part('template-parts/testimonial', 'random'); ?>

</aside>