<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login Università</title>
    <script type="text/javascript" src="js/jquery-3.6.1.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="css/index.css">
    <script type="text/javascript" src="js/index.js"></script>
  </head>
  <body>
    <div class="container-fluid p-5 text-center border border-bottom-1">
      <h1>Università degli Studi di Gardone</h1>
      <p>dove puoi trovare di tutto</p>
    </div>
    <div class="container mt-5">
      <div class="row text-center">
        <h3>Login</h3>
        <div class="col-sm-12 d-flex justify-content-center">
          <form action="controlloLogin.php" method="POST" class="w-25" onsubmit="return controlloCampi()">
            <div class="mb-3 mt-3">
              <label for="user" class="form-label">Username</label>
              <input type="text" id="user" class="form-control" placeholder="Scrivi il tuo usernme" name="user">
            </div>
            <div class="mb-3">
              <label for="pwd" class="form-label">Password</label>
              <input type="password" id="pwd" class="form-control" placeholder="Scrivi la tua password" name="pwd">
            </div>
            <button type="submit" class="btn btn-success">Entra</button>
          </form>
          <div id="errori">

          </div>
        </div>
      </div>
    </div>
  </body>
</html>
