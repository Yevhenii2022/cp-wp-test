<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package cp-wp-test
 */

get_header();
?>

<main>
	<section style="background-color: #acbdec; padding: 100px">
		<div class="container">
			<h1 style="margin-bottom: 30px"><?php esc_html_e('На жаль, цю сторінку не знайдено.', 'cp-wp-test'); ?></h1>

			<div>
				<a href="<?php echo get_home_url(); ?>" class="button">
					Повернутися на головну сторінку
					<svg class="arrow-icon stroke">
						<use href="<?php echo get_template_directory_uri() ?>/assets/images/icon-sprite.svg#arrow"></use>
					</svg>
				</a>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
