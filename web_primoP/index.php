<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Primo sito 5C</title>
    <link rel="stylesheet" href="web.css"> <!-- link per css -->
    <script src="jquery-3.6.1.min.js"></script> <!-- link per JQuery -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script type="text/javascript" src="web.js"></script> <!-- link per javascript -->
  </head>
  <body id="sfondo">
    <form action="checkUserPassword.php" method="post" class="w-25 border border-info border-5">
      <div class="mb-3 mt-3">
      <label for="email" class="form-label">Email:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter email" name="username">
      </div>
      <div class="mb-3">
      <label for="pwd" class="form-label">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
      </div>
      <div class="form-check mb-3">
      <label class="form-check-label">
      <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>


    <!--
    <div class='scrittona'>Dimmi il tuo codice di accesso</div>
    <input class="scrittona" type="password" placeholder="...codice segreto..." id="codice"> assegnato id = codice per l'oggetto input 
    <br>
    <input type="color" id="colore" value="#FF0000">
    <br>
    <button onclick="checkCodice()">Ok</button>  utilizzo evento onClick per richiamare la funzione JS checkCodice() con click bottone
    <button onclick="faiSparire()">Sparisci!</button>
    <table id="gabrach">
      <tr>
        <td class="scura"></td><td class="chiara"></td>
        <td class="scura"></td><td class="chiara"></td>
        <td class="scura"></td><td class="chiara"></td>
        <td class="scura"></td><td class="chiara"></td>
      </tr>
      <tr>
        <td class="chiara"></td><td class="scura"></td>
        <td class="chiara"></td><td class="scura"></td>
        <td class="chiara"></td><td class="scura"></td>
        <td class="chiara"></td><td class="scura"></td>
      </tr>
      <tr>
        <td class="scura"></td><td class="chiara"></td>
        <td class="scura"></td><td class="chiara"></td>
        <td class="scura"></td><td class="chiara"></td>
        <td class="scura"></td><td class="chiara"></td>
      </tr>
      <tr>
        <td class="chiara"></td><td class="scura"></td>
        <td class="chiara"></td><td class="scura"></td>
        <td class="chiara"></td><td class="scura"></td>
        <td class="chiara"></td><td class="scura"></td>
      </tr>
      <tr>
        <td class="scura"></td><td class="chiara"></td>
        <td class="scura"></td><td class="chiara"></td>
        <td class="scura"></td><td class="chiara"></td>
        <td class="scura"></td><td class="chiara"></td>
      </tr>
      <tr>
        <td class="chiara"></td><td class="scura"></td>
        <td class="chiara"></td><td class="scura"></td>
        <td class="chiara"></td><td class="scura"></td>
        <td class="chiara"></td><td class="scura"></td>
      </tr>
      <tr>
        <td class="scura"></td><td class="chiara"></td>
        <td class="scura"></td><td class="chiara"></td>
        <td class="scura"></td><td class="chiara"></td>
        <td class="scura"></td><td class="chiara"></td>
      </tr>
      <tr>
        <td class="chiara"></td><td class="scura"></td>
        <td class="chiara"></td><td class="scura"></td>
        <td class="chiara"></td><td class="scura"></td>
        <td class="chiara"></td><td class="scura"></td>
      </tr>
    </table> -->
  </body>
</html>
