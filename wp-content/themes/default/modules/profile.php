<?php
if (get_field('location')) {
    echo '<p class="loaction">Location: ' . get_field('location') . '</p>';
}

if (get_field('profile_description')) {
    the_field('profile_description');
}

$friends = get_field('friends');
if ($friends) {
    echo '<ul class="profile-friends">';
    $format = '<li><a href="%1$s" title=%2$s>%3$s</a></li>';
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
