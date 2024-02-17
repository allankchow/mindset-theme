<?php

/**
 * The template for displaying the homepage of the site
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package FWD_Starter_Theme
 */

get_header();
?>

<main id="primary" class="site-main">

	<?php
	while (have_posts()) :
		the_post();

		get_template_part('template-parts/content', 'page');
		?>

		<section class="home-intro"></section>
		<section class="home-work"></section>
		<section class="home-work"></section>
		<section class="home-left"></section>
		<section class="home-right"></section>
		<section class="home-slider"></section>
		<section class="home-blog"></section>

		<?php
	endwhile; // End of the loop.
	?>

</main><!-- #primary -->

<?php
get_sidebar();
get_footer();
