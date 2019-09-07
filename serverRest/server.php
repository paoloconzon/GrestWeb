<?php
require_once("stuff.php");


function inizializza() {
  header("Content-Type: application/json; charset=UTF-8");
  // get the HTTP method, path and body of the request
  $method = $_SERVER['REQUEST_METHOD'];
  //$request = explode('/', trim($_SERVER['PATH_INFO'],'/'));
  $input = json_decode(file_get_contents('php://input'),true);
  //l_result = $json_encode(array("result"=>0, "message"=>"tutto ok", "data"=>array()));
  $l_payload = json_decode($input, false);
  $l_result = array("result"=>-1, "message"=>"funzione non definita!");
  if ($input["func"]=="somma") {
    $l_result["result"]=0; 
    $l_result["message"]="";
    $l_result = somma($input); 
  }
  else if ($input["func"]=="saveForm") {
     $l_result=saveForm($input);
  } 
  else if ($input["func"]=="codificaGenitore") {
  }  
  else if ($input["func"]=="codificaGenitore") {
  }
  else {    
  }  
  echo json_encode($l_result);
}


inizializza();


?>
