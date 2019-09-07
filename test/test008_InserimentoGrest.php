<?php
require_once ("..\config.php");
require_once( GREST_INCLUDE_PATH.'addLibs.php' );



echo "
<div class='gwClassForm' id='gwFormGrest'>

<h1>Inserimento Singolo grest</h1>
<div class='gwClassForm' id='gwFormGrest'>

<!--id username wp-->
<div class='gwClassBox gwClassInvisible'><input type='text' id='gwInpIdWP'/></div>
<!--id grest-->
<div class='gwClassBox gwClassInvisible'><input type='text' id='gwInpIdGrest'/></div>
";

setInput("N.", "gwIdInpId");
setInput("Nome", "gwIdInpName");
setInput("Descrizione", "gwIdInpDescr");
setInput("Inizio Grest", "gwInpIdDtStartGrest",true);
setInput("Fine Grest", "gwInpIdDtStopGrest",true);
setInput("Inizio Prenotazioni", "gwInpIdDtStartBooking",true);
setInput("Fine Prenotazioni", "gwInpIdDtStopBooking",true);
setInput("Referente", "gwIdInpRef");
setInput("Mail referente", "gwIdInpRefMail");

}

$gwpath='http://127.0.0.1/grestServer/';
echo "
<div class='gwClassStop' id='gwIdMsgErr'></div>
<script src='".$gwpath."js/grest.js'></script>
<button onClick='saveForm(\"gwFormGrest\");'>Salva</button>                                        
<button onClick='loadGrest(\"gwFormGrest\");'>Carica</button>
<button onClick='cancelGrest(\"gwFormGrest\");'>Annulla</button>
</div>
<script>
//Imposta larghezza input
$('.gwClassInput').css('width', '20em');
//Imposta DateTimePickers
$('.gwClassInputDate').datepicker($.datepicker.regional['it']);
//$('#gwInpIdWP').val($('#gwIdUserId').text());  
</script>
";
echo"
<hr>
<div class='gwClassForm' id='gwFormTest'>
";
setInput("Nome", "gwIdInpName");
setInput("Descrizione", "gwIdInpDescr");
echo"
<button onClick='navigaGrest(\"gwFormTest\");'>Naviga</button>                                        
<button onClick='popolaGrest(\"gwFormTest\");'>popolaGrest</button>  
</div>
";
?>

