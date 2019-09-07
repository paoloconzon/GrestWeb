<?php
require_once ("base.php");


function connettiMysql($p_indirizzo, $p_user, $p_pwd, $p_nomeDb) {
  $l_link = new mysqli($p_indirizzo, $p_user, $p_pwd, $p_nomeDb);
  if ($l_link->connect_errno) {
    die(sptrintf(_("Connection failed: %s"), $mysqli->connect_error) );
  } else {
    mysqli_set_charset($l_link,'utf8');
  }
  return $l_link;
}

function connetti() {
  global $g_db_host;
  global $g_db_user;
  global $g_db_pwd;
  global $g_db_name;
  $l_link = connettiMysql($g_db_host, $g_db_user, $g_db_pwd, $g_db_name);
  return $l_link;
}

?>
