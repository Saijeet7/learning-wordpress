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
acf_form_head();
get_header();
?>

<main id="primary" class="site-main">

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

	<?php
	if (get_field('location')) {
		echo '<p class="location">Location: ' . get_field('location') . '</p>';
	}
	if (get_field('profile_description')) {
		the_field('profile_description');
	}

	if (have_rows('resume')) { //to check if it has any data or not
		echo '<div class="resume">';
		$resume_format = '<section class="resume-section"> 
			<h4><span class="date">%1$s</span><span class="title">%2$s</span></h4>
			<div class="simple-description">%3$s</div>
			%4$s
		</section>'; //setting up new format and adding the markup 

		while (have_rows('resume')) { //getting the fields from out resume repeater (if no rows it returns false) or else it returns the number of rows
			the_row(); //it setups all our variables i.e sub-fields
			$title = get_sub_field('title');
			$simple_description = get_sub_field('simple_description');
			$start_date = get_sub_field('start_date');
			$end_date = get_sub_field('end_date');
			$full_description = get_sub_field('full_description');

			$dates = ($end_date) ? $start_date . '-' . $end_date : $start_date;
			printf(
				$resume_format,
				$dates,
				$title,
				$simple_description,
				$full_description
			);
		}
		echo  '</div>';
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
	acf_form(array(
		'post_id' => 'new_post',
		'post_title' => true,
		'post_content' => true,
		'new_post' => array(
			'post_type' => 'post',
			'post_status' => 'draft',
			'post_category' => array(1),
		),
	))
	?>

</main><!-- #main -->

<?php
get_sidebar();
get_footer();
