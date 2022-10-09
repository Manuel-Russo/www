<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ilVoto.org</title>
        <link rel="stylesheet" href="votoStyle.css"> <!-- link per css -->
        <script src="jquery-3.6.1.min.js"></script> <!-- link per JQuery -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
        <script type="text/javascript" src="votoScript.js"></script> <!-- link per javascript -->
    </head>

    <body>
      <div class="offcanvas offcanvas-end text-bg-dark" id="demo1"> <!--offCanvas-->
        <div class="offcanvas-header">
          <h1 class="offcanvas-title">Inserisci i tuoi dati:</h1>
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">
          <form action="acquisisciDati.php" onsubmit="return check()" method="post" class="">
            <div class="mb-3 mt-3">
              <label for="email" class="form-label">Email:</label>
              <input type="email" class="form-control" id="email" placeholder="Inserisci email" name="email">
            </div>
            <div class="mb-3">
              <label for="pwd" class="form-label">Password:</label>
              <input type="password" class="form-control" id="pwd" placeholder="Inserisci password" name="password">
            </div>
            <div class="mb-3">
              <label for="pwd_r" class="form-label">Reinserisci la password:</label>
              <input type="password" class="form-control" id="pwd_r" placeholder="Reinserisci la password:" name="password_rimessa">
            </div>
            <button type="submit" class="btn btn-primary" onclick="return check()">Registrati ora!</button>
          </form>
        </div>
      </div> <!--fine offCanvas-->


      <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top"> <!--navbar-->
          <nav class="navbar navbar-inverse">
              <div class="container-fluid">
                  <div class="navbar-header">
                      <a class="navbar-brand" href="index.php">ilVoto.org</a>
                  </div>
                  <ul class="nav navbar-nav">
                      <li><a class="link" onclick="Sorpresa()" href="#"> Sorpresa</a></li>
                      <li><a class="link" href="https://www.interno.gov.it/it">votate!</a></li>
                  </ul>
              </div>
          </nav>
          <div class="collapse navbar-collapse" id="navbarsExample07XL">
 	          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
           	    <li id="registrati" class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#demo1"><span class="glyphicon glyphicon-user"></span> Registrati!</li>
              </ul>	
          </div>
      </nav>
      <br>
      <div class="mt-4 p-5 bg-primary text-white rounded">
          <h1>E' tempo di elezioni!</h1>
          <p>Guida espositiva su dove e come eseguire il proprio voto consapevolmente!</p>
      </div> <!--fine navbar-->


      <div id="demo" class="carousel slide" data-bs-ride="carousel"> <!--carosello-->
        <!-- Indicators/dots -->
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
          <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
          <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
          <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
        </div>
        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="immagini/scheda_elettorale.jpg" alt="Scheda elettorale" class="d-block">
          </div>
          <div class="carousel-item">
            <img src="immagini/senato.jpg" alt="Senato della Repubblica" class="d-block">
          </div>
          <div class="carousel-item">
            <img src="immagini/urne_elettorali.jpg" alt="Urne" class="d-block">
          </div>
          <div class="carousel-item">
            <img src="immagini/tessera_elettorale.png" alt="Tessera Elettorale" class="d-block">
          </div>
        </div>
        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
          <span class="carousel-control-next-icon"></span>
        </button>
      </div> <!--fine carosello-->
    </body>
</html>