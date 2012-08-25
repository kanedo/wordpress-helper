<?php
/**
 * This function automatically protects certain posttypes with one password
 * @param Object $post The Post to be protected
 * @param string $password Password
 * @param string $posttype The custom post type
 * */
function kanedo_protected_post_password($post, $password, $posttype) {
    if ($post['post_type'] != $posttype)
        return $post;

    $post['post_password'] = $password;
    $post['post_status'] = 'publish';
    return $post;
}
//A Simple implementation of the function
function protect_post($post){
	return kanedo_protected_post_password($post, 'aSimplePassword', 'myCustomPostType');
}
add_filter('wp_insert_post_data', 'protect_post');