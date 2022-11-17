$(document).ready(function() {
    $(".posto").click(function() {
        //$(this).html($(this).index()+":"+$(this).parent().index());
        $('#modal_title').html("Prenotazione posto");
        $('#modal_content').html("Vuoi prenotare il posto selezionato?<br>Fila: " + ($(this).parent().index()+1) + " <br>Posto: " + ($(this).index()+1));
        $('#modal_footer').html("<button type='button' class='btn btn-danger' data-bs-dismiss='modal'>Annulla</button><button type='button' class='btn btn-success' onclick=\"prenota("+$(this).parent().index()+","+$(this).index()+")\">Ok</button>");
        $('#myModal').modal('show');
    });
});

function prenota(riga,colonna) {
    $.post("prenotazioni.php", {r_mandata:riga,c_mandata:colonna},result=>{
        //se la transazione è anata bene, coloro la cella e magari la disabilito
        var r,g,b;
        r=Math.floor(Math.random()*256);
        g=Math.floor(Math.random()*256);
        b=Math.floor(Math.random()*256);
        $(".posto:eq("+(riga*20+colonna)+")").css("background-color","rgba("+r+","+g+","+b+",0.4)");
        $('#myModal').modal('hide');

        //$(this).css("background-color","rgba("+r+","+g+","+b+",0.4)");
    });
}

