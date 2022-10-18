function apriModal(titolo,file_associato)   {
    var titolo_spazio = titolo.replaceAll("-"," ");
    var titolo_ap = titolo_spazio.replaceAll("*","'");
    var file_corretto = file_associato.replaceAll("*","'");
    $('#titoloDiFreddo').html("<h6>Il titolo è "+titolo_ap+" </h6>");
    $('#corpoDiFreddo').html("<img class='immagine' src='img/"+file_corretto+"'>");
    $('#piediDiFreddo').html("<button onclick=\"acquista('"+titolo_ap+"')\" type='button' class='btn btn-success' target='_blank'>Acquista</button><button type='button' class='btn btn-danger' data-bs-dismiss='modal'>Chiudi</button>");
    $('#freddo').modal('show');
}

function acquista(title)    {
    $.post("acquista.php", {titolo_ap:title}, result=>{
        alert(result);
    });
}

function controlloLatoClient()  {
    $('#Freddi').html("");
    var controllo = true;
    if ($('#user').val().trim() == "") {
        controllo = false;
        $('#user').css('background-color', '#ffff99');
        $('#Freddi').append("<div class='alert alert-danger alert-dismissible'><button type='button' class='btn-close' data-bs-dismiss='alert'></button><strong>Errore!</strong> Il campo Email non può essere vuoto</div>");
    }
    if ($('#pwd').val().trim() == "") {
        controllo = false;
        $('#pwd').css('background-color', '#ffff99');
        $('#Freddi').append("<div class='alert alert-danger alert-dismissible'><button type='button' class='btn-close' data-bs-dismiss='alert'></button><strong>Errore!</strong> Il campo Password non può essere vuoto</div>");
    }
    return controllo;
}

function richiamoAjax()     {
    $(document).ready(function()    {
        $("#info").click(function()     {
            $.ajax({    //create an ajax request to display.php
                type: "GET",
                url: "cercaInfoAutore.php",
                dataType: "html",   //expect html to be returned
                success: function(response)     {
                    $("#corpoDiFreddo").html(response);
                    apriInfo(response);
                }
            });
        });
    });
}

function apriInfo (autore,biografia)    {
    var autore_spazio = autore.replaceAll("-"," ");
    var biografia_apo = biografia.replaceAll("*","'");
    var biografia_spazio = biografia_apo.replaceAll("-"," ");
    $('#titoloDiFreddo').html("<h6>L'autore è "+autore_spazio+" </h6>");
    $('#corpoDiFreddo').html(biografia_spazio);
    $('#piediDiFreddo').html("<button type='button' class='btn btn-danger' data-bs-dismiss='modal'>Chiudi</button>");
    $('#freddo').modal('show');
}
