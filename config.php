<?php
//global variables

//Db parameters
$g_db_host = '127.0.0.1';
$g_db_user = 'root';
$g_db_pwd = '';
$g_db_name = 'test';

function dbgLog($p_str) {
echo "<br>--> $p_str<br>" ;
} 
//Where is located wordpress
define( 'GREST_WP_PATH', dirname( __FILE__ ) . '\\..\\wordpress\\' );
//Where is located include library
define( 'GREST_INCLUDE_PATH', dirname( __FILE__ ) . '\\include\\' );


error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
//Only if debug error_reporting(E_ALL);

?>
