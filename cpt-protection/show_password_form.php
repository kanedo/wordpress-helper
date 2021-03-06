<?php
/**
 * The function returns the HTML for a login form which allows you to login to a certain post type which items all have the same password
 * 
 * @param string $posttype The Custom Post Type which is protected
 * @param string $class one ore more classes to be applied on th form (optional)
 * @param string $textdomain a custom textdomain for translating some phrases (optional)
 * */
function kanedo_show_password_form($posttype, $class = 'kanedo_protected_login', $textdomain = ''){
	$pages = get_posts(array('post_type' => $posttype, 'post_status' => 'published'));
	$page_id = $pages[0]->ID;
	$form = "";
	$url = get_post_type_archive_link($posttype);		
	$form .= '<form method="post" action="'.home_url( '/' ).'wp-login.php?action=postpass&_wp_http_referer='.urlencode($url).'" class="'.$class.'">';
    $form .= '<p class="twelvecol last"><label for="pwbox-'.$page_id.'">Password:';
    $form .= '<input type="password" size="20" id="pwbox-'.$page_id.'" name="post_password"/></label></p>';
    $form .= '<p class="twelvecol last">';
    $form .= '<input type="submit" value="'.__('login', $textdomain).'" name="Submit" class="right"/>';
    $form .= '</p>';
    $form .= '</form>';
	return $form;
}
