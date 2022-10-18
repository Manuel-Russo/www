<?php
  session_start();
  if (!isset($_SESSION['stato']))  {
    header('location:login.php');
  }
?>

<!DOCTYPE html>
<html lang="it">
  <head>
    <script src="js/jquery-3.6.1.min.js"></script>
    <meta charset="utf-8">
    <script type="text/javascript" src="js/index.js"></script>
  </head>
  <?php
    //connessione al database: siamo all'interno del server web e chiamiamo il server mysql (il DBMS)
    try   { //in php gli oggetti usano le freccie ->
      $conn = new mysqli("localhost","root","gardone","museo"); //(dove sta server msql, utente, psw_utente, nomeDatabase)
      $conn->set_charset("utf8"); //setto charset mysql
      $sql = "SELECT biografia FROM autore WHERE cod_autore"; //è una query, tutto dalla tabella opera
      $result = $conn->query($sql); //ottengo risultato che andrò a stampare(lancia query e database restituisce dati)
      while($row = $result->fetch_assoc())  { //estraggo array_associativi dal il risultato che la connessione mi restituisce
        $cod_autore = $row['cod_autore'];
        $autore = $row['nome'];
        $biografia = $row['biografia'];
        $autore = str_replace(" ", '-', $autore);
        $biografia = str_replace(" ", '-', $biografia);
        $biografia = str_replace("'", '*', $biografia);
        //echo "<tr>";
        //echo "<td>".$row['nome']."</td>";
        //echo "<td><button onclick=\"apriInfo('".$autore."','".$biografia."')\" class='btn btn-success'> Informazioni </button></td>";
        //echo "</tr>";
      }
    }
    catch(Exception $errore)   {
      echo "Errore di connessione: ".$errore;
    }
    return $biografia;
  ?>
</html>