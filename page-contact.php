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
	<div>
		<?php
		while (have_posts()) :
			the_post();

			get_template_part('template-parts/content', 'page');

			// If comments are open or we have at least one comment, load up the comment template.
			if (comments_open() || get_comments_number()) :
				comments_template();
			endif;
		endwhile; // End of the loop.


		if (function_exists('get_field')) {

			if (get_field('physical_address')) {
				the_field('physical_address');
			}
			if (get_field('email')) {
				$email  = get_field('email');
				$mailto = 'mailto:' . $email;
		?>
				<p><a href="<?php echo esc_url($mailto); ?> "><?php echo esc_html($email); ?></a></p>
		<?php
			}

			if (get_field('contact_image')) {
				echo wp_get_attachment_image(get_field('contact_image'), 'medium');
			}
		}

		?>
	</div>
</main><!-- #primary -->

<?php
get_sidebar();
get_footer();
