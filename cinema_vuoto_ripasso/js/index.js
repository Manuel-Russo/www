$(document).ready(function() {
    $(".posto").click(function(){
        $('#modal-title').html("Prenotazione posto");
        $('#modal-content').html("Vuoi prenotare il posto selezionato?<br>Fila:"+($(this).parent().index()+1)+"<br>Posto:"+($(this).index()+1));
        $('#modal-footer').html("<button type='button' data-bs-dismiss='modal'>Annula</button><button type='button' onclick=\"prenota("+($(this).parent().index()+1),($(this).index()+1)+")\" >Conferma</button>");
    });
});

function prenota(riga,colonna)  {
    $.post("prenotazioni.php", {r:riga,c:colonna}, result=>{
        $("mymodal").modal("hide");
    })
};