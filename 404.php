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
	<section>
		<h1><?php esc_html_e('Oops! That page can&rsquo;t be found.', 'cp-wp-test'); ?></h1>
	</section>
</main>

<?php
get_footer();
