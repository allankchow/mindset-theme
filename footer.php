<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package FWD_Starter_Theme
 */

?>

<footer id="colophon" class="site-footer">
	<div>
		<button id="scrollToTop" style="display: none;">Scroll to Top</button>
	</div>


	<div class="footer-contact">
		<?php

		if (function_exists('get_field')) {
			if (!is_page('contact')) {
				if (get_field('physical_address', 19)) {
					echo '<div class="footer-contact-left">';
					get_template_part('icons/location');
					the_field('physical_address', 19);
					echo '</div>';
				}
				if (get_field('email', 19)) {
					$email  = get_field('email', 19);
					$mailto = 'mailto:' . $email;
		?>
					<div class="footer-contact-right">
						<p><a href="<?php echo esc_url($mailto); ?> "><?php echo esc_html($email); ?></a></p>
					</div>
		<?php
				}
			}
		}


		?>
	</div><!-- .footer-contact -->
	<div class="footer-menus">
		<!-- left nav -->
		<nav id="footer-navigation-1" class="footer-navigation">
			<?php
			wp_nav_menu(array('theme_location' => 'footer-left'));

			?>
		</nav>

		<!-- right nav -->
		<nav id="footer-navigation-2" class="footer-navigation">
			<?php
			wp_nav_menu(array('theme_location' => 'footer-right'));
			?>
		</nav>

	</div><!-- .footer-menus -->
	<div class="site-info">
		<?php the_privacy_policy_link('', '<span class="privacy-policy-link">', '</span>'); ?>
	</div><!-- .site-info -->

</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>