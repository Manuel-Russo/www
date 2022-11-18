function controlloCampi()   {
    $('#errori').html("");
    var verifica = true;
    if ($('#user').val().trim() == "") {
        verifica = false;
        $('#user').css('background-color', 'yellow');
        $('#errori').append("<h6> campo email vuoto </h6>");
    }
    if ($('#pwd').val().trim() == "") {
        verifica = false;
        $('#pwd').css('background-color', 'yellow');
        $('#errori').append("<h6> campo psw vuoto </h6>");
    }
    return verifica;
}

function richiamoAjax(numero) {
    $.post("tenta.php",{id_corso:numero},result=>{ //! oggetto JS
        $('#'+numero).html(result);
        if (result >= 18) {
            $('#'+numero).css('background-color', 'green');
        }
        else {
            $('#'+numero).css('background-color', 'red');
        }
    });
}

