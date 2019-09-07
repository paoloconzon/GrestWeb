<?php

//ritorna una data nel formato timeStamp
function  gw_str2Time($p_dataStr = '', $p_formato = 'Ymd'){ //formato Ymd
  if ($p_dataStr==''){$p_dataStr=date($p_formato);}
  elseif ($p_formato=='Ymd') {$p_dataStr=substr($p_dataStr,0,8);}
  elseif ($p_formato=='ymd') {$p_dataStr=substr($p_dataStr,0,6);}
  elseif ($p_formato=='dmy') {$p_dataStr=substr($p_dataStr,0,6);}
  elseif ($p_formato=='d/m/y') {$p_dataStr=substr($p_dataStr,0,8);}
  elseif ($p_formato=='d/m/Y') {$p_dataStr=substr($p_dataStr,0,10);}
  elseif ($p_formato=='Y-m-d') {$p_dataStr=substr($p_dataStr,0,10);}

  return date_create_from_format($p_formato, $p_dataStr)->getTimestamp();
}

//Incrementa la data in formato timestamp
function  gw_incrData($p_dataStart, $ii){ //timeStamp
  return  $p_dataStart+($ii*86400);
}

//ritorna data nel formato Ymd
function  gw_time2Str($p_dataTime = '', $p_formato = 'Ymd'){ //timestamp
  if ($p_dataTime==''){$p_dataTime=time();}
  return date($p_formato, $p_dataTime);
}

?>