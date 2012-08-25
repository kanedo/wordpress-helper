<?php
	if(wp_check_password($options['protected_page_password'], $_COOKIE['wp-postpass_' . COOKIEHASH])){
		//Password was correct now get the content
	}else{
		//You shall not pass
	}