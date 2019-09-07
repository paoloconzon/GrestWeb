function saveGrest(p_nameForm) {
  l_json ={"nameForm" : p_nameForm};
  l_json["name"]={"id":'gwInpIdName',"val":$('#gwInpIdName').val()}
  alert(JSON.stringify(l_json));
}
                                        
function loadGrest(p_nameForm){

}

function cancGrest(p_nameForm){}
       
 