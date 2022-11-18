$(document).ready(function () {
    $(".posto").click(function(){

        if ($(this).text() == "") {
            $("#modal_title").html("Prenotazione posto");
            $("#modal_content").html("Vuoi prenotare il posto selezionato?<br>Fila: "+($(this).parent().index()+1)+"<br>Posto: "+($(this).index()+1));
            $("#modal_footer").html('<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Annulla</button><button type="button" class="btn btn-success" onclick=\'prenota('+$(this).parent().index()+','+$(this).index()+')\' data-bs-dismiss="modal">Prenota</button>');
            $("#myModal").modal('show');
        }
        else{
            $("#modal_content").html("Vuoi annullare la prenotazione nel posto selezionato?<br>Fila: "+($(this).parent().index()+1)+"<br>Posto: "+($(this).index()+1));
            $("#modal_footer").html('<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Annulla</button><button type="button" class="btn btn-danger" data-bs-dismiss="modal" onclick=\'annulla('+$(this).parent().index()+','+$(this).index()+')\'>Disdici</button>');
            $("#myModal").modal('show');
        }
        
        // var riga = parseInt($(this).attr('id')) + 1;
        // var colonna = parseInt($(this).parent().attr('id')) + 1;
        // alert(riga+" : "+colonna);
        
    })
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

function annulla(riga, colonna){
    $.post("annullaPrenotazione.php",{r:riga,c:colonna},result=>{
        $("#"+(riga*20+colonna)+"").html("");
        $("#"+(riga*20+colonna)+"").css('background-color','white');
         //se la transizione è andata bene colora la cella (e magari le disabilita)
    })
}