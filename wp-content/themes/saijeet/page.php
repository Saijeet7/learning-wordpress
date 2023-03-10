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
 * @package Sijeet
 */

get_header();
?>

<main id="primary" class="site-main">

	<?php
	if (get_field('location')) {
		echo '<p class="location">Location: ' . get_field('location') . '</p>';
	}
	if (get_field('profile_description')) {
		the_field('profile_description');
	}

	$friends = get_field('friends'); //Setting the variable 
	if ($friends) {
		echo '<ul class="profile-friends">';
		$format = '<li><a href="%1$s" title="%2$s">%3$s</a></li>';
		foreach ($friends as $post) {
			setup_postdata($post);
			printf(
				$format,
				get_permalink(),
				get_the_title(),
				get_the_post_thumbnail(get_the_ID(), 'medium')
			);
		}
		wp_reset_postdata();
		echo '</ul>';
	}
	?>
	<?php
	while (have_posts()) :
		the_post();

		get_template_part('template-parts/content', 'page');

		// If comments are open or we have at least one comment, load up the comment template.
		if (comments_open() || get_comments_number()) :
			comments_template();
		endif;

	endwhile; // End of the loop.
	?>

</main><!-- #main -->

<?php
get_sidebar();
get_footer();
