<?php
/*
*  TEST apertura DB e reperimento id wordpress
**/
require_once ("..\config.php");
require_once( GREST_WP_PATH.'wp-config.php' );
//require_once(GREST_WP_PATH.'wp-load2.php');

$wp_did_header = true;
echo"<hr>".get_current_user_id()."<br>";
if ( is_user_logged_in() ) {
    echo 'Welcome, registered user!';
} else {
    echo 'Welcome, visitor!';
}

require_once (GREST_INCLUDE_PATH."dbMysql.php");


//Test Funcion
function testDb(){
   $l_link = connetti();
   if ($l_link){
     echo _("connessione riuscita")."<br>";
     $res = $l_link->query("SELECT id, nome FROM utenti");
     for ($ii = 0; $ii<$res->num_rows; $ii++) {
        $res->data_seek($ii);
        $row = $res->fetch_assoc();
        echo sprintf(" id = %s  ,  nome = %s <br>", $row['id'] , $row['nome'] );
     }
     mysqli_close($l_link);
     echo tr("Db Chiuso");
   } else {
     echo tr("connessione non  riuscita<br>");
   }
}

echo testDb();


    
?>
