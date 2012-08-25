<?php
/**
 * Update the post password
 * call this every time you change the password
 * @param string $newpassword The new password
 * @param string $posttype The CPT
 * */
function kanedo_update_post_password($newpassword, $posttype){
	$list = get_posts(array('post_type' => $posttype));
	if(is_array($list)){
		foreach($list as $item){
			wp_update_post(kanedo_protected_post_password($item, $newppassword, $posttype));
		}
	}
}