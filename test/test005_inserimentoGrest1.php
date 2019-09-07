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


<div class="gwClassForm" id="gwFormGrest">
<!--id Grest's DateStopBooking-->
<div class="gwClassBox">
<div class="gwClassLabel">Fine Prenotazioni :</div>
<input type="text" id="gwInpIdDtStopBooking" class="gwClassInput gwClassInputDate"/>
</div>
<div class="gwClassStop"></div>
<!--id Grest's referent name-->
<div class="gwClassBox">
<div class="gwClassLabel">Referente :</div>
<input type="text" id="gwInpRefName" class="gwClassInput gwClassInputText"/>
</div>
<div class="gwClassStop"></div>
<!--id Grest's referent mail-->
<div class="gwClassBox">
<div class="gwClassLabel">Mail referente :</div>
<input type="text" id="gwInpRefMail" class="gwClassInput gwClassInputText"/>
</div>
<div class="gwClassStop"></div>
</div>
<button onClick="saveGrest('gwFormGrest');">Salva</button>                                        
<button onClick="loadGrest('gwFormGrest');">Carica</button>
<button onClick="cancGrest('gwFormGrest');">Annulla</button>
<button onClick="testMessageBox();">Test MessageBox</button>
</body>
</html>