<html>
  <head>
    <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="js/index.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/all.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link href="css/index.css" rel="stylesheet" type="text/css" />
  </head>
  <body id='login_body'>
    <div class="container-fluid text-center">
      <div class="row justify-content-md-center">
        <div class="w-50 bg-secondary">
          <form action="controlloRegistrazione.php" method="POST" onsubmit="return controlloRegistrazione()">
            <div class="mb-3 mt-3 display-1 bg-danger text-white">
              R E G I S T R A Z I O N E
            </div>
            <div class="mb-3 mt-3">
              <label for="reg_nome" class="form-label display-5">Nome</label>
              <input style="font-size:1.5em" type="text" class="form-control text-center" id="reg_nome" name="reg_nome" placeholder="Nome">
            </div>
            <div class="mb-3 mt-3">
              <label for="reg_cognome" class="form-label display-5">Cognome</label>
              <input style="font-size:1.5em" type="text" class="form-control text-center" id="reg_cognome" name="reg_cognome" placeholder="Cognome">
            </div>
            <div class="mb-3 mt-3">
              <label for="reg_user" class="form-label display-5">Username</label>
              <input style="font-size:1.5em" type="text" class="form-control text-center" id="reg_user" name="reg_user" placeholder="Username">
            </div>
            <div class="mb-3">
              <label for="reg_pwd" class="form-label display-5">Password</label>
              <input style="font-size:1.5em" type="password" class="form-control text-center" id="reg_pwd" name="reg_pwd" placeholder="Password">
            </div>
            <div class="mb-3">
              <label for="reg_pwdR" class="form-label display-5">Ripeti la password</label>
              <input style="font-size:1.5em" type="password" class="form-control text-center" id="reg_pwdR" name="reg_pwdR" placeholder="Ripeti la password">
            </div>
            <div class="mb-3 d-flex align-items-center justify-content-center">
              <label for="reg_color" class="form-label">Inserisci il tuo colore preferito</label>
              <br>
              <input style="font-size:1.5em" type="color" class="form-control text-center w-25" id="reg_color" name="reg_color">
            </div>
            <div class="mb-3 ">
              <input style="font-size:1.5em" type="submit" class="form-control text-center btn-danger" value="REGISTRATI">
            </div>
          </form>
          <div class="mb-3">
            <a href='login.php'> <button style="font-size:1.5em" class="text-center btn-danger">INDIETRO</button></a>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>