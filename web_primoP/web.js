function checkCodice()  { //dichiarazione funzione checkCodice
  var codiceLetto=$('#codice').val(); //creazione variabile codiceLetto a cui si assegna il valore dell'oggetto codice(id presente in index.php)
  var codiceGiusto="gabrach"; //definisco quele è codice giusto //falla di sicurezza
  if(codiceLetto==codiceGiusto)   {
    //document.body.style.backgroundColor = $('#colore').val(); //cambio il colore di sfondo di tutto il body prendendo l'esadecimale del colore scelto salvato nell'id colore
    //document.getElementById('sfondo').style.backgroundColor = $('#colore').val(); //metodo con uso ID
    $('#sfondo').css('background-color',$('#colore').val());
  }
  else  {
    alert("Hai sbagliato!"); //faccio apparire un alert 
  }
}
