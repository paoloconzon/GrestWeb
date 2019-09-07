<?php
require_once ("..\config.php");
require_once (GREST_INCLUDE_PATH."dbMysql.php");
require_once (GREST_INCLUDE_PATH."const.php");
require_once(GREST_INCLUDE_PATH."dbEvent.php");

function test(){
add($l_input, kfInp_NAME, kf_NAME, 'Nuovo test');
add($l_input, kfInp_NOTE, kf_NOTE, 'Note sul nuovo test');
add($l_input, kfInp_REFERENT_NAME, kf_REFERENT_NAME, 'Paolo');
add($l_input, kfInp_REFERENT_MAIL, kf_REFERENT_MAIL, 'Paolo@gmail.com');
add($l_input, kfInp_DATE_START, kf_DATE_START, '01/01/19');
add($l_input, kfInp_DATE_STOP, kf_DATE_STOP, '01/09/19');
add($l_input, kfInp_DATE_BOOK_START, kf_DATE_BOOK_START, '01/01/19');
add($l_input, kfInp_DATE_BOOK_STOP, kf_DATE_BOOK_STOP, '01/09/19');
$l_input[k_table] = 'grestwp_event'; 
$l_input[k_operation] = k_INSERT; 
                
echo"<hr><b>Dati di Input</b>";
$l_result = saveData($l_input);
echo"<pre>";
print_r($l_result);
$l_id = $l_result[k_outInsertId];
echo"</pre>";

echo"<hr><b>modifico in maiuscolo $l_id</b>";
add($l_input, kfInp_ID, kf_ID, $l_id);
add($l_input, kfInp_NAME, kf_NAME, 'NUOVO TEST');
$l_input[k_operation] = k_EDIT;
$l_result = saveData($l_input); 
echo"<pre>";
print_r($l_result);
echo"</pre><br>";
}

test();

?>