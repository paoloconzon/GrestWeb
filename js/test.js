  function callAjax(p_func, p_sessionId, p_jsonData, p_path, p_callBackOK, p_callBackKO){
    data=p_jsonData;
    l_json ={ func: p_func, sessionId : p_sessionId, data } ;
    //alert(JSON.stringify(l_json));
    $.ajax({
        type: "POST",
        url: p_path,
        // The key needs to match your method's input parameter (case-sensitive).
        data: JSON.stringify(l_json),
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        success: p_callBackOK,
        failure: p_callBackKO        
    });
  }

  function messageBox(p_id, p_title, p_message, p_function1, p_function2){
    if ( $( "#"+p_id).length ) 
    {
      $( "#"+p_id).attr("title", p_title);
      $( "#"+p_id).html("<p><span class='ui-icon ui-icon-alert' style='float:left; margin:12px 12px 20px 0;'></span>"+p_message);
    console.log("2");
    } else {
      $( "body" ).append(    
         "<div id='"+p_id+"' title="+p_title+" style='display:none' ><p>"+
         "<span class='ui-icon ui-icon-alert' style='float:left; margin:12px 12px 20px 0;'></span>"+
         p_message+"</p></div>" );
    console.log("3");
    }
    var p_buttons ={ "OK": function() {
                            if (p_function1) {p_function1();};
                            $( this ).dialog( "close" );
                       } };
    if (p_function2){
      p_buttons = jQuery.extend(p_buttons,
            { "CANCEL": function() {
                          p_function2();
                          $( this ).dialog( "close" );
                       }
            } );
    }
 
    $( "#"+p_id).dialog({
      resizable: false,
      height: "auto",
      width: 400,
      modal: true,
      buttons: p_buttons
      });   
  }

  //Esempio di messageBox
  function testMessageBox(){
  messageBox("dialog-confirm", "Titolo", "messaggio mooooolto luuungo..."
             , function(){messageBox('Hai cliccato accetto');}
             , function(){messageBox('Hai cliccato annulla');}             
             )
  }
  
  //inizializzazione deatetimepicker italiano
  $.datepicker.regional['it'] = {
    closeText: 'Chiudi',
    prevText: 'Precedente',
    nextText: 'Successivo',
    currentText: 'Oggi',
    monthNames: ['Gennaio','Febbraio','Marzo','Maggio','Giugno','Luglio','Agosto','Settembre','Ottobre','Novembre','Dicembre'],
    monthNamesShort: ['Gen','Feb','Mar','Apr','Mar','Giu','Set','Ott','Nov','Dic'],
    dayNames: ['Domenica','Lunedì','Martedì','Mercoledì','Giovedì','Venerdì','Sabato'],
    dayNamesShort: ['Do','Lu','Ma','Me','Gi','Ve','Sa'],
    dayNamesMin: ['Do','Lu','Ma','Me','Gi','Ve','Sa'],
    weekHeader: 'Týd',
    dateFormat: 'dd/mm/yy',
    firstDay: 1,
    isRTL: false,
    showMonthAfterYear: false,
    yearSuffix: ''
  };
  

  function openForm(p_name) {
      //alert($('#gwIdUserInfoI').text());
      //aa = eval($('#gwIdUserInfo').text());
      //alert(aa);
      aa = {id : $('#gwIdUserInfoId').text(), name : $('#gwIdUserInfoName').text()
            ,mail : $('#gwIdUserInfoMail').text(), roles : $('#gwIdUserInfoRoles').text()}
      $("#gsIdCenterForm").load("http://127.0.0.1/grestServer/"+p_name, aa);
      //$("#gsIdCenterForm").load("http://127.0.0.1/grestServer/"+p_name, {id:"1", name:"PAOLO"});
  }
  
  //Esempio funzione di test somma
  function somma_inside(p_num1, p_num2){
    l_pathServer = "http://127.0.0.1/grestServer/serverRest/server.php";
    l_jsonData = {numero1:p_num1, numero2:p_num2 };
    callAjax("somma", "1", l_jsonData, l_pathServer
             ,function(data){
                  messageBox("dialog-confirm", "Funzione Somma", "Risultato "+data.data.somma);
                  $("#risultato").val(data.data.somma); 
                  //alert(JSON.stringify(data));
                  }
             ,function(errMsg) { messageBox("dialog-confirm", "Funzione Somma", errMsg); }
            );
  }
  
String.prototype.format = function() {
  a = this;
  for (k in arguments) {
    a = a.replace("{" + k + "}", arguments[k])
  }
  return a
}
  

$( window ).load(function() {
  // Handler for .load() called.
  $( ".gwClassInputDate" ).datepicker($.datepicker.regional['it']);
  
}) 
  