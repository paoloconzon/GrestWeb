<?php
require_once ("..\config.php");
require_once (GREST_INCLUDE_PATH."dbMysql.php");
require_once (GREST_INCLUDE_PATH."const.php");
require_once(GREST_INCLUDE_PATH."dbEvent.php");

function somma($p_input) {
    $l_result = Array();
    $l_numero1 = $p_input["data"]["numero1"];
    $l_numero2 = $p_input["data"]["numero2"];
    $l_result["data"]=Array();
    $l_result["data"]["somma"]= $l_numero1+$l_numero2;
    $l_result["result"]= 0;
    $l_result["message"]= "tutto ok ";
    $l_result["user_id"]=get_current_user_id();
    return($l_result);
}

    
function saveForm($p_input){
  $l_result =$p_input;
  $l_result['gwIdMsgErr'] ='ERRORE DI TEST';
  $l_result['message'] ='ERRORE DI TEST (messaggio)';
  $l_result['result'] =-2;
  return($l_result);
}
    
?>
