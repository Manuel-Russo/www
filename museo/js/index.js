function apriModal(titolo,file_associato) {
    var titolo_spazio = titolo.replaceAll("-"," ");
    var titolo_ap = titolo_spazio.replaceAll("*","'");
    var file_corretto = file_associato.replaceAll("*","'");
    $('#titoloDiFreddo').html("<h6>Il titolo è "+titolo_ap+" </h6>");
    $('#corpoDiFreddo').html("<img class='immagine' src='img/"+file_corretto+"'>");
    $('#freddo').modal('show');
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
