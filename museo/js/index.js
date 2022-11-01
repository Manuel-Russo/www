function apriModal(titolo,file_associato)   { //funzioen per l'apertura del modal
    var titolo_spazio = titolo.replaceAll("-"," ");
    var titolo_ap = titolo_spazio.replaceAll("*","'"); //ripristino il titolo con spazi e apostrofi
    var file_corretto = file_associato.replaceAll("*","'"); //ripristivo il file_corretto con apostrofi
    $('#titoloDiFreddo').html("<h6>Il titolo è "+titolo_ap+" </h6>"); //sovrascrivo nel modal esterno le info che mi servono prese dalle variabilo
    $('#corpoDiFreddo').html("<img class='immagine' src='img/"+file_corretto+"'>");
    $('#piediDiFreddo').html("<button onclick=\"acquista('"+titolo_ap+"')\" type='button' class='btn btn-success' target='_blank'>Acquista</button><button type='button' class='btn btn-danger' data-bs-dismiss='modal'>Chiudi</button>"); //inserisco il tasto acuista che mi porta a php e il tasto chiudi che chiude il modal
    $('#freddo').modal('show'); //una volta inserito tutto, lo faccio apparire
}

function acquista(title)    { //funzione per l'acquisto, con il click del tasto acquista
    $.post("acquista.php", {titolo_ap:title}, result=>{ //mando in post a acquista.php il titolo preso dal tasto associato al titolo della funzione
        alert(result); //il risultato è un alert con il contenuto del post
    });
}

function controlloLatoClient()  { //controllo lato client delle info sul form login
    $('#div_login').html(""); //svuoto la psw
    var controllo = true; //assegno controllo a true
    if ($('#user').val().trim() == "") { //se l'username è vuoto
        controllo = false; //assegno controllo a false
        $('#user').css('background-color', '#ffff99'); //cambio il colore della casella user
        $('#div_login').append("<div class='alert alert-danger alert-dismissible'><button type='button' class='btn-close' data-bs-dismiss='alert'></button><strong>Errore!</strong> Il campo Email non può essere vuoto</div>"); //nel div faccio apparire un messaggio di errore
    }
    if ($('#pwd').val().trim() == "") { //se la pwd è vuota
        controllo = false; //assegno controllo a false
        $('#pwd').css('background-color', '#ffff99'); //cambio colore
        $('#div_login').append("<div class='alert alert-danger alert-dismissible'><button type='button' class='btn-close' data-bs-dismiss='alert'></button><strong>Errore!</strong> Il campo Password non può essere vuoto</div>"); //nel div faccio apparire un messaggio di errore
    }
    return controllo; //restituisco controllo a true o false
}

function apriInfo (biografia)    { //funzione per l'aperuta del modal su tasto informazioni
    var biografia_apo = biografia.replaceAll("*","'");
    var biografia_spazio = biografia_apo.replaceAll("-"," "); //sistemo biografia con spazi e apostrofi
    $('#titoloDiFreddo').html("<h6>Biografia dell'autore</h6>");
    $('#corpoDiFreddo').html(biografia_spazio);
    $('#piediDiFreddo').html("<button type='button' class='btn btn-danger' data-bs-dismiss='modal'>Chiudi</button>");//inserisco tutte le info
    $('#freddo').modal('show');//mostro il modal
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
