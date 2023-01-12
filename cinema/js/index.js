$(document).ready(function(){
    scaricaPrenotazioni();
    $(".posto").click(function()    {
        $.post("checkprenotazione.php",{riga:$(this).parent().index(),colonna:$(this).index()},result=>{
            switch(result)  {
                case "OCCUPATO DA ME":
                    $('#modal_title').html("Prenotazione posto");
                    $('#modal_content').html("Questo posto è già stato prenotato da te.<br>Vuoi cancellare la prenotazione?<br>Fila: "+($(this).parent().index()+1)+"<br>Posto: "+($(this).index()+1));
                    $('#modal_footer').html("<button type='button' class='btn btn-danger' data-bs-dismiss='modal'>Annulla</button><button type='button' class='btn btn-success' onclick=\"annullaPrenotazione("+$(this).parent().index()+","+$(this).index()+")\" data-bs-dismiss='modal'>Cancella</button>");
                    break;
                case "OCCUPATO":
                    $('#modal_title').html("Prenotazione posto");
                    $('#modal_content').html("Questo posto è già stato prenotato da un'altra persona.<br>");
                    $('#modal_footer').html("<button type='button' class='btn btn-success' data-bs-dismiss='modal'>Ok</button>");
                    break;
                default:
                    $('#modal_title').html("Prenotazione posto");
                    $('#modal_content').html("Vuoi prenotare il posto selezionato?<br>Fila: "+($(this).parent().index()+1)+"<br>Posto: "+($(this).index()+1));
                    $('#modal_footer').html("<button type='button' class='btn btn-danger' data-bs-dismiss='modal'>Annulla</button><button type='button' class='btn btn-success' onclick=\"prenota("+$(this).parent().index()+","+$(this).index()+")\" data-bs-dismiss='modal'>Prenota</button>");
            }
            $('#myModal').modal('show');
        });
    });
});

function prenota(riga, colonna){
    $.post("prenotazioni.php",{r:riga,c:colonna},result=>{
         //se la transizione è andata bene colora la cella (e magari le disabilita)
        var r,g,b;
        $("#"+(riga*20+colonna)+"").html(colonna+" "+riga); 
        r=Math.floor(Math.random()*256);
        g=Math.floor(Math.random()*256);
        b=Math.floor(Math.random()*256);
        $("#"+(riga*20+colonna)+"").css('background-color','rgb('+r+','+g+','+b+',0.5)');
    })
}

function annullaPrenotazione(riga, colonna){
    $.post("annullaPrenotazione.php",{r:riga,c:colonna},result=>{
        $("#"+(riga*20+colonna)+"").html("");
        $("#"+(riga*20+colonna)+"").css('background-color','white');
         //se la transizione è andata bene colora la cella (e magari le disabilita)
    })
}

function scaricaPrenotazioni(){
    $.post("scaricaPrenotazioni.php",{},result=>{
        var lista_prenotazioni = JSON.parse(result);
        for (var i = 0; i < lista_prenotazioni.length; i++) {
            var r,g,b;  
            pos = parseInt((lista_prenotazioni[i].riga))*20+parseInt((lista_prenotazioni[i].colonna));
            console.log(pos);
            $("#"+pos).html(lista_prenotazioni[i].prenotante); 
            r=Math.floor(Math.random()*256);
            g=Math.floor(Math.random()*256);
            b=Math.floor(Math.random()*256);
            $("#"+pos).css('background-color','rgb('+r+','+g+','+b+',0.5)');
        }
    })
}

function controlloRegistrazione() {
    var password = $('#reg_pwd').val();
    var ripetuta_password = $('#reg_pwdR').val();
    var nome = $('#reg_nome').val();
    var cognome = $('#reg_cognome').val();
    var username = $('#reg_user').val();
    var controllo = true;
    if(nome.trim() == "")   {
        alert("Il nome è vuoto");
        return controllo = false;
    }
    if(cognome.trim() == "")   {
        alert("Il cognome è vuoto");
        return controllo = false;
    }
    if(username.trim() == "")   {
        alert("L'username è vuoto");
        return controllo = false;
    }
    if(password.trim() == "")     {
        alert("La psw è vuota");
        return controllo = false;
    }
    if(ripetuta_password.trim() == "")     {
        alert("La psw è vuota");
        return controllo = false;
    }
    if(password.trim() != ripetuta_password.trim())    {
        alert("Le psw non sono uguali");
        return controllo = false;
    }
    return controllo;
}

function controlloLogin() {
    var username = $('#user').val();
    var password = $('#pwd').val();
    var controllo = true;
    if(username.trim() == "")   {
        alert("L'username è vuoto");
        return controllo = false;
    }
    if(password.trim() == "")     {
        alert("La psw è vuota");
        return controllo = false;
    }
    return controllo;
}

// $(document).ready(function () {
//     $(".posto").click(function(){

//         if ($(this).text() == "") {
//             $("#modal_title").html("Prenotazione posto");
//             $("#modal_content").html("Vuoi prenotare il posto selezionato?<br>Fila: "+($(this).parent().index()+1)+"<br>Posto: "+($(this).index()+1));
//             $("#modal_footer").html('<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button><button type="button" class="btn btn-success" data-bs-dismiss="modal" onclick=\'prenota('+$(this).parent().index()+','+$(this).index()+')\'>Ok</button>');
//             $("#myModal").modal('show');
//         }
//         else{
//             $("#modal_content").html("Vuoi annullare la prenotazione nel posto selezionato?<br>Fila: "+($(this).parent().index()+1)+"<br>Posto: "+($(this).index()+1));
//             $("#modal_footer").html('<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button><button type="button" class="btn btn-danger" data-bs-dismiss="modal" onclick=\'annulla('+$(this).parent().index()+','+$(this).index()+')\'>Annulla</button>');
//             $("#myModal").modal('show');
//         }
        
//         // var riga = parseInt($(this).attr('id')) + 1;
//         // var colonna = parseInt($(this).parent().attr('id')) + 1;
//         // alert(riga+" : "+colonna);
        
//     })
// });

// function prenota(riga, colonna){
//     $.post("prenotazioni.php",{r:riga,c:colonna},result=>{
//          //se la transizione è andata bene colora la cella (e magari le disabilita)
//         var r,g,b;
//         $("#"+(riga*20+colonna)+"").html(colonna+" "+riga); 
//         r=Math.floor(Math.random()*256);
//         g=Math.floor(Math.random()*256);
//         b=Math.floor(Math.random()*256);
//         $("#"+(riga*20+colonna)+"").css('background-color','rgb('+r+','+g+','+b+',0.5)');
//     })
// }

// function annulla(riga, colonna){
//     $.post("annullaPrenotazione.php",{r:riga,c:colonna},result=>{
//         $("#"+(riga*20+colonna)+"").html("");
//         $("#"+(riga*20+colonna)+"").css('background-color','white');
//          //se la transizione è andata bene colora la cella (e magari le disabilita)
//     })
// }