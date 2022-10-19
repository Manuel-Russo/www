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

function apriInfo (biografia)    {
    var biografia_apo = biografia.replaceAll("*","'");
    var biografia_spazio = biografia_apo.replaceAll("-"," ");
    $('#titoloDiFreddo').html("<h6>Biografia dell'autore</h6>");
    $('#corpoDiFreddo').html(biografia_spazio);
    $('#piediDiFreddo').html("<button type='button' class='btn btn-danger' data-bs-dismiss='modal'>Chiudi</button>");
    $('#freddo').modal('show');
}

function richiamoAjax(cod_autore)     { //! funzione integrazione AJAX in POST
    $(document).ready(function()    {
        $.ajax({ //inizio della funzione ajax
            type: "POST", //specifico il tipo POST della comunicazione
            dataType: "html", //come voglio che le info ritornino
            url: "cercaInfoAutore.php", //a che pagina voglio chiedere i dati
            data: {codice_autore: cod_autore}, //mappa con il codice dell'autore
            success: function(result)     { //in caso di successo entro nella funzione
                apriInfo(result); //richiamo l'apertura del modal
            }
        });
    });
} //! fine funzione AJAX
