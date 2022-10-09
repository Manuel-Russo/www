function Sorpresa()     {
    $('#demo').replaceWith('<img src="immagini/kitler.jpg" id="immagineGatto"> <button type="button" onclick="altraSorpresa()"> Vera sorpresa </button>');
}

function altraSorpresa()    {
    $('#immagineGatto').replaceWith('<img src="immagini/CentroDestra.JPG" id="immagineCentroDestra">');
}

function check()   {
    if ($('#email').val() == "") {
        alert("Inserire un indirizzo email corretto.");
        return false;
    }

    if (($('#pwd').val()) == "" || ($('#pwd_r').val() == ""))    {
        alert("Le password non sono state inserite correttamente");
        return false;
    }

    if ($('#pwd').val() != $('#pwd_r').val())     {
        alert("Le due password sono diverse");
        return false;
    }
    return true;
}

    
