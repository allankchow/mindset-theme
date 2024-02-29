<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package FWD_Starter_Theme
 */

get_header();
?>


<main id="primary" class="site-main">

	<?php while (have_posts()) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<header class="entry-header">
				<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
			</header>

			<div class="entry-content">
				<?php
				if (function_exists('get_field')) {

					if (get_field('test_intro')) {
						the_field('test_intro');
					}

					if (get_field('test_heading')) {
						echo '<h2>' . get_field('test_heading') . '</h2>';
					}

					if (get_field('test_image')) {
						echo wp_get_attachment_image(get_field('test_image'), 'medium', '', array('class' => 'alignleft'));
					}

					if (get_field('test_text')) {
						the_field('test_text');
					}
				}
				?>
			</div>

		</article>

	<?php endwhile; // End of the loop. 
	?>

</main>

<?php
get_sidebar();
get_footer();
