<html>
<head>
<?php 
/*
*  TEST Menù e messagebox
**/

require_once ("..\config.php");
require_once( GREST_INCLUDE_PATH.'addLibs.php' );
?>
<!--Message box-->
<script>
function testMessageBox(){
$.MessageBox(
{
buttonDone          : "OK"         // String / Object / Boolean
,buttonFail          : "CANCEL"    // String / Object / Boolean
,buttonsOrder        : "df"  // String
,customClass         : ""           // String
,customOverlayClass  : ""           // String
,filterDone          : function(){window.confirm("Fatta?");}    // Function
,filterFail          : function(){window.confirm("Cancellata?");}  // Function
,input               : false        // Boolean / String / Array / Object / jQuery object / DOM element
,message             : "<b>Here is a complex form with different input types!</b>"           // String / jQuery object / DOM Element
,queue               : true         // Boolean
,speed               : 200          // Integer / String
,title               : "Errore"           // String / Boolean
,top                 : "25%"        // Integer / String
,width               : undefined 
}
);
}
</script>
</head>
<body>
<div class="gsMenu">
<div id="gsIdMenuTestSomma" class="gsMenuItem" onclick="openForm(this);">Test Somma</div>
<div id="gsIdMenuInsGrest" class="gsMenuItem" onclick="openForm(this);">Nuovo grest</div>
<div id="gsIdMenuQryGrest" class="gsMenuItem" onclick="openForm(this);">Elenco dei grest attivi</div>
<div id="gsIdMenuInsParent" class="gsMenuItem" onclick="openForm(this);">Registra nuovo genitore</div>
<div id="gsIdMenuInsSon" class="gsMenuItem" onclick="openForm(this);">Registra nuovo ragazzo</div>
<div id="gsIdMenuInsSon" class="gsMenuItem" onclick="testMessageBox(this);">Test messaggio</div>
</div>
<div class="gsCenterForm" id="gsIdCenterForm">
Test Apertura pagine
</div>
</body>
</html>