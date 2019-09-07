// JavaScript Document
function form2json(p_formName){
  l_name = '#'+p_formName;
  l_json ={}
  $(l_name).find('.gwClassInput').each(function(  ){
                l_id=$(this).attr('id');
                l_json[l_id] = $(this).val();
                //console.log('CIAOLO '+l_id);
                });
  console.log(l_json);
  return l_json;
}

function json2form(p_formName, p_json){
  l_name = '#'+p_formName;
  $(l_name).find('.gwClassInput').each(function(){
                l_id=$(this).attr('id');
                l_idErr=l_id+'Err';
                console.log('Contenuto '+l_id+' : '+l_json[l_id]);
                $(this).val(l_json[l_id]);
                if (l_json[l_idErr]) {
                  console.log('Errore '+l_id+' : '+l_json[l_idErr]);
                  $(l_name).find('#'+l_idErr).val(l_json[l_idErr])
                } 
            });
  $(l_name).find('#gwIdMsgErr').val(l_json['gwIdMsgErr']);                               
}

function saveForm(p_formName, p_table) {
  l_json = form2json(p_formName);
  l_pathServer = 'http://127.0.0.1/grestServer/serverRest/server.php';
  l_jsonData = form2json();
  callAjax('saveForm', '1', l_jsonData, l_pathServer
           ,function(data){
              if (data.result<0) {
                if (data.message!=''){
                  json2form(p_formName, data);
                  messageBox('dialog-confirm', 'Salvataggio Dati', '<b>ERRORE :</b><br>'+data.message);
                }
              } else {
                if (data.message!=''){
                  json2form(p_formName, data);
                  messageBox('dialog-confirm', 'Salvataggio Dati', '<b>INFO :</b><br>'+data.message);
                }
                $('#gwIdInpId').val(data.data.id);
              }
            }
           ,function(errMsg) { messageBox('dialog-confirm', 'ERRORE TECNICO in Salvataggio Dati', '<b>ERRORE :</b><br>'+errMsg); }
          );
  
}
/*
function saveGrest() {
    l_pathServer = 'http://127.0.0.1/grestServer/serverRest/server.php';
    l_jsonData = form2json();
    callAjax('saveGrest', '1', l_jsonData, l_pathServer
             ,function(data){
                if (data.result<0) {
                  if (data.message!=''){
                    messageBox('dialog-confirm', 'Salvataggio Grest', '<b>ERRORE :</b><br>'+data.message);
                  }
                } else {
                  if (data.message!=''){
                    messageBox('dialog-confirm', 'Salvataggio Grest', '<b>INFO :</b><br>'+data.message);
                  }
                  $('#gwIdInpId').val(data.data.id);
                }
              }
             ,function(errMsg) { messageBox('dialog-confirm', 'ERRORE TECNICO in Salvataggio Grest', '<b>ERRORE :</b><br>'+errMsg); }
            );
  }

function loadGrest() {
    l_pathServer = 'http://127.0.0.1/grestServer/serverRest/server.php';
    
    l_jsonData = {};
    json2form(l_jsonData);
    callAjax('loadGrest', '1', l_jsonData, l_pathServer
             ,function(data){
                messageBox('dialog-confirm', 'Salvataggio Grest', data.message);
                $('#gwIdInpId').val(data.data.id);
              }
             ,function(errMsg) { messageBox('dialog-confirm', 'Errore in Salvataggio Grest', errMsg); }
            );
  }

*/