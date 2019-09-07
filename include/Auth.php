<?php

function testAuth() {
  $id = '';
  $name = '';
  $mail = '';
  $roles = '';
  if(!empty($_REQUEST[kfInp_wpID])) { // i used $_REQUEST because it receives the data from POST or GET.
    $id = $_REQUEST[kfInp_wpID];
    $name = $_REQUEST[kfInp_wpNAME];
    $mail = $_REQUEST[kfInp_wpMAIL];
    $roles = $_REQUEST[kfInp_wpROLES];
  }
  
  if ($id=='*') {
  echo "Utente non connesso... non puoi inserire il dato" ;
  }else {
  echo Sprintf("Ciao %s-%s la tua email è %s e il ruolo è %s", $name, $id, $mail, $roles);

}


function echoAuth() {
  $l_id = 0;
  $l_name = 'guest';
  $l_mail = '';
  $l_roles[0]='none';
  try {
    $l_user=wp_get_current_user();
    $l_userInfo=get_userdata($l_user->id);
    $l_id=$l_user->id;
    $l_name=$l_userInfo->user_login;  
    $l_mail=$l_userInfo->user_email;  
    if ($l_userInfo->roles!='') {$l_roles=implode(', ', $l_userInfo->roles);}
  } catch (Exception $e) {
  }

echo getInputBox('',kfInp_wpID,false,true,$l_id);  
echo getInputBox('',kfInp_wpNAME,false,true,$l_name);  
echo getInputBox('',kfInp_wpMAIL,false,true,$l_mail);  
echo getInputBox('',kfInp_wpROLES,false,true,$l_roles);  
?>