<?php
function kanedo_protected_post_password($post, $password, $posttype) {
    if ($post['post_type'] != $posttype)
        return $post;

    $post['post_password'] = $password;
    $post['post_status'] = 'publish';
    return $post;
}
add_filter('wp_insert_post_data', 'kanedo_protected_post_password');