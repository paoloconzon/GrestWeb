<?php
$gwpath='http://127.0.0.1/grestServer/';
$gwpath_js=$gwpath.'js/';
$gwpath_thirdLib=$gwpath_js.'thirdsParts/';
$gwpath_css=$gwpath.'css/';

echo"
<!--Jquery-->
<script type='text/javascript' src='".$gwpath_thirdLib."jquery-1.12.1.js'></script>
<link rel='stylesheet' href='".$gwpath_thirdLib."jquery-ui.1.12.1/jquery-ui.min.css'>
<script src='".$gwpath_thirdLib."jquery-ui.1.12.1/jquery-ui.min.js'></script>
  
<script src='".$gwpath_js."test.js'></script>
<link rel='stylesheet' type='text/css' href='".$gwpath_css."style.css'>
";


/*
<!-- Link per utilizzo di datetimepicker -->
<link rel='stylesheet' href='".$gwpath_thirdLib."DateTimerPicker/jquery-ui-timepicker-addon.css' type='text/css' media='all' />
<script type='text/javascript' src='".$gwpath_thirdLib."DateTimerPicker/jquery-ui-timepicker-addon.js'></script>
<!--Message box -->
<script src='https://cdn.jsdelivr.net/npm/gasparesganga-jquery-message-box@3.1.0/dist/messagebox.min.js'></script>
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/gasparesganga-jquery-message-box@3.1.0/dist/messagebox.min.css' type='text/css' media='all' />
*/

?>