<div>
Numero1 <input type="text" id="numero1"  /><br>
Numero2 <input type="text" id="numero2"  /><br>
<button onclick="somma_inside($('#numero1').val(),$('#numero2').val());">SOMMA</button><br>
risultato <input type="text" id="risultato"  />
</div>
<div class="gsBox">
Apertura inserimento anagrafica ragzzi da registrare<br>
a data <input type="text" class="gwClassInputDate" id="dateTo_child"  /><br>
</div>
<script>$( ".gwClassInputDate" ).datepicker($.datepicker.regional['it']);</script>