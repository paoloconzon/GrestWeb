<html>
<head>
<?php 
/*
*  TEST Chiamata a server rest e datetimepicker
**/
require_once ("..\config.php");
require_once( GREST_INCLUDE_PATH.'addLibs.php' );
?>

</head>
<body>


Numero1 <input type="text" id="numero1"  /><br>
Numero2 <input type="text" id="numero2"  /><br>
<button onclick="somma();">SOMMA</button><br>
risultato <input type="text" id="risultato"  />
<div class="gsBox">
Apertura inserimento anagrafica ragzzi da registrare<br>

a data <input type="text" class="gsDateTimePicker" id="dateTo_child"  /><br>
</div>
<script type="text/javascript">
  $( function() { $( "#dateTo_child" ).datepicker($.datepicker.regional['it']);
                } );
 	
</script>

</body>
</html>