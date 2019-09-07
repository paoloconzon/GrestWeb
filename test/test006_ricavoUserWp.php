<?php
require_once ("..\config.php");

if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/../../wordpress/');
echo "<br>---".ABSPATH."---<br>";  
require_once(GREST_WP_PATH.'wp-config.php');
//require_once(GREST_WP_PATH.'wp-settings.php');
//	$wp_did_header = true;


echo"<hr>".GREST_WP_PATH."<br>";
echo"...".get_current_user_id()."...<br>";


?>
