function controllo_campi() {
  var ok=true;
  $('#errori').html("");
  if($('#user').val().trim()==""){
    ok=false;
    $('#errori').append("Il campo usernme non può essere vuoto");
    $('#user').css('background-color',"#ffffee");
  }
  if($('#pwd').val().trim()==""){
    ok=false;
    $('#errori').append("Il campo password non può essere vuoto");
    $('#pwd').css('background-color',"#ffffee");
  }
  return ok;
}
function ajax(id_cella) {
  $.post("tenta.php",{},result=>{
    $('#'+id_cella).html(result);
    if(result>=18){
      $('#'+id_cella).css('background-color','green');
    }
    else{
      $('#'+id_cella).css('background-color','red');
    }
  });
}
