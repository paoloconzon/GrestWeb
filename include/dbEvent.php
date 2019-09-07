<?php
require_once("time.php");

//Aggiunge gli apici
function quote($p_str, $p_quote = '"') {
  if ($p_quote=='"') {$l_quoteAlt='\'';} else {$l_quoteAlt='"';}
  $p_str= $p_quote.str_replace($p_quote, $l_quoteAlt, $p_str).$p_quote;
  return($p_str);
}

function saveData($p_input){
  $l_result[k_result]=0;
  $l_result[k_message]='';
  $l_table = $p_input[k_table];
  $l_operation = $p_input[k_operation];
  try {
    $l_link = connetti();
    if (!$l_link) {throw new Exception(kerr_noConnDB);}
    if ($l_operation==k_INSERT) {
      $l_fields = '';
      $l_values = '';
      foreach ($p_input[k_fields] as $value) {
        $l_name = $value[k_name];
        $l_val = $value[k_value];
        $l_type = $value[k_type];
        //echo sprintf('%s %s %s <br>', $l_name, $l_val, $l_type);
        if ($l_fields!='') { $l_fields.= ', ';}
        if ($l_values!='') { $l_values.= ', ';}
        $l_fields .= $l_name;
        if ( ($l_val=='') || ($l_val=='null'))  {$l_values .= 'NULL ';}
        elseif ($l_type==ktp_date) {$l_values .= quote(gw_time2Str(gw_str2Time($l_val,'d/m/y')));}    
        elseif ($l_type==ktp_text) {$l_values .= quote($l_val);}    
        elseif (($l_type==ktp_integer) || ($l_type==ktp_float)  || ($l_type==ktp_boolean) ) {$l_values .= $l_val;}
        else {$l_values .= $l_val;}
      }
      $l_sqlStr = "INSERT INTO $l_table ($l_fields) values ($l_values) ";
      //echo $l_sqlStr."<br>";     
      $l_qryResult =$l_link->query($l_sqlStr);
      if (!$l_qryResult) {
           throw new Exception(kerr_faultInsert.' : '.$l_link->error);
      } else {
           $l_result[k_outInsertId]=  $l_link->insert_id;     
      }
    }
    elseif ($l_operation==k_EDIT) {
      $l_id='';
      $l_values = '';
      $l_where = '';
      foreach ($p_input[k_fields] as $value)  {
        $l_name = $value[k_name];
        $l_val = $value[k_value];
        $l_type = $value[k_type];
        //echo sprintf('%s %s %s <br>', $l_name, $l_val, $l_type);
        if ($l_name==kf_ID) {
          $l_id = $l_val ;
        } else {
          if ($l_values!='') { $l_values.= ', ';}
          $l_values .= $l_name."=";
          if ( ($l_val=='') || ($l_val=='null') )  {$l_values .= 'NULL ';}
          elseif ($l_type==ktp_date) {
            $l_values .= quote(gw_time2Str(gw_str2Time($l_val,'d/m/y')));
            //echo sprintf('%s %s %s <br>', $l_name, $l_val, gw_str2Time($l_val,'d/m/y'));
            }    
          elseif ($l_type==ktp_text) {$l_values .= quote($l_val);}    
          elseif (($l_type==ktp_integer) || ($l_type==ktp_float)  || ($l_type==ktp_boolean) ) {$l_values .= $l_val;}
          else {$l_values .= $l_val;}
        }
      }
      if ( ($l_id=='') ||  ($l_id=='0') )  {        
        throw new Exception(kerr_faultEditNoId);
      } else {
      $l_where = ' WHERE ID='.$l_id;
      
        $l_sqlStr = "SELECT 1 AS TEST FROM $l_table  $l_where ";
        //echo $l_sqlStr;
        $l_qryResult =$l_link->query($l_sqlStr);
        if (($l_qryResult->num_rows)!=1) {
           throw new Exception(kerr_faultEditNoId);
        }     
        $l_sqlStr = "UPDATE $l_table SET $l_values $l_where ";     
        $l_qryResult =$l_link->query($l_sqlStr);
        if (!$l_qryResult) {
           throw new Exception(kerr_faultEdit.' : '.$l_link->error);
        } else {
           //$l_result[k_outInsertId]=  $link->insert_id;     
        }
        
      }     
    }
  } catch (Exception $e) {
      $l_result[k_result] = -1;
      $l_result[k_message] = sprintf(kerr_erroreAggTabella, $l_table, $e->getMessage());
  }
  return($l_result);
}

//
function add(&$p_input, $p_inpId, $p_name, $p_value) {
  $l_type= ktp_text;
  //echo sprintf('%s - %s <br>',$p_name, strToUpper(substr($p_name,0,4)));
  if (strToUpper(substr($p_name,0,2))=='ID') {$l_type=ktp_integer;}
  elseif (strToUpper(substr($p_name,0,4))=='DATE') {$l_type=ktp_date;}
  $p_input[k_fields][$p_inpId][k_name]=$p_name;
  $p_input[k_fields][$p_inpId][k_value]=$p_value;
  $p_input[k_fields][$p_inpId][k_type]=$l_type;
}


?>