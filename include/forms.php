<?php
function getInputBox($p_label, $p_id, $p_se_date = false, $p_se_invisible= false, $p_val = '', $p_comment = '') {
  $l_classInputDate = '';
  $l_classInvisible = '';
  $l_idErr=$p_id.'Err';
  if ($p_se_date) {$l_classInputDate = 'gwClassInputDate';}
  if ($p_se_invisible) {$l_classInvisible = 'gwClassInvisible';}  
  $l_out ="
  <div class='gwClassBox $l_classInvisible'>
  <div class='gwClassLabel'>$p_label :</div>
  <input type='text' id='$p_id' class='gwClassInput $l_classInputDate'>$p_val</input>
  <div class='gwClassStop'  id='$l_idErr'></div>
  </div>
  ";
  return $l_out;
}

?>