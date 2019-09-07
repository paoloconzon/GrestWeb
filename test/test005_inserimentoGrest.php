<html>
<head>
<?php 
/*
*  TEST Chiamata a server rest e datetimepicker
**/
require_once ("..\config.php");
require_once( GREST_INCLUDE_PATH.'addLibs.php' );
?>
<script src='http://127.0.0.1/grestServer/js/grestEvent.js'></script>

</head>
<body>

<h1>Inserimento Singolo grest</h1>
<div class="gwClassForm" id="gwFormGrest">

<!--id username wp-->
<div class="gwClassBox gwClassInvisible"><input type="text" id="gwInpIdWP"/></div>
<!--id grest-->
<div class="gwClassBox gwClassInvisible"><input type="text" id="gwInpIdGrest"/></div>

<!--id Grest's name-->
<div class="gwClassBox">
<div class="gwClassLabel">Nome :</div>
<input type="text" id="gwInpIdName" class="gwClassInput gwClassInputText"/>
<div class="gwClassStop"></div>
</div>
<!--id Grest's Descr-->
<div class="gwClassBox">
<div class="gwClassLabel">Descr :</div>
<input type="memo" id="gwInpIdDescr" class="gwClassInput gwClassInputMemo"/>
<div class="gwClassStop"></div>
</div>
<!--id Grest's DateStart-->
<div class="gwClassBox">
<div class="gwClassLabel">Inizio :</div>
<input type="text" id="gwInpIdDtStart" class="gwClassInput gwClassInputDate"/>
<div class="gwClassStop"></div>
</div>
<!--id Grest's DateStop-->
<div class="gwClassBox">
<div class="gwClassLabel">Fine :</div>
<input type="text" id="gwInpIdDtStop" class="gwClassInput gwClassInputDate"/>
<div class="gwClassStop"></div>
</div>
<!--id Grest's DateStartBooking-->
<div class="gwClassBox">
<div class="gwClassLabel">Inizio Prenotazioni :</div>
<input type="text" id="gwInpIdDtStartBooking" class="gwClassInput gwClassInputDate"/>
<div class="gwClassStop"></div>
</div>
<!--id Grest's DateStopBooking-->
<div class="gwClassBox">
<div class="gwClassLabel">Fine Prenotazioni :</div>
<input type="text" id="gwInpIdDtStopBooking" class="gwClassInput gwClassInputDate"/>
<div class="gwClassStop"></div>
</div>
<!--id Grest's referent name-->
<div class="gwClassBox">
<div class="gwClassLabel">Referente :</div>
<input type="text" id="gwInpRefName" class="gwClassInput gwClassInputText"/>
<div class="gwClassStop"></div>
</div>
<!--id Grest's referent mail-->
<div class="gwClassBox">
<div class="gwClassLabel">Mail referente :</div>
<input type="text" id="gwInpRefMail" class="gwClassInput gwClassInputText"/>
<div class="gwClassStop"></div>
</div>

</div>
<button onClick="saveGrest('gwFormGrest');">Salva</button>                                        
<button onClick="loadGrest('gwFormGrest');">Carica</button>
<button onClick="cancGrest('gwFormGrest');">Annulla</button>
                      
</body>
</html>