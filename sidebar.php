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




if ( is_page() ){
echo "<aside id='secondary' class='widget-area'>";
	dynamic_sidebar('sidebar-2');
	echo "</aside>";
} else {
	echo "<aside id='secondary' class='widget-area'>";
	dynamic_sidebar('sidebar-1');
	echo "</aside><!-- #secondary -->";
}