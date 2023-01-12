<html>
<head>
  <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <script type="text/javascript" src="js/index.js"></script>
  <script type="text/javascript" src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link href="css/index.css" rel="stylesheet" type="text/css" />
</head>
  <body id='login_body'>
    <div class="container-fluid text-center">
      <div class="row justify-content-md-center">
        <div class="w-50 bg-secondary">
          <form action="controlloLogin.php" method="post">
            <div class="mb-3 mt-3 display-1 bg-danger text-white">
              C I N E M A
            </div>
            <div class="mb-3 mt-3">
              <label for="user" class="form-label display-5">Username</label>
              <input style="font-size:1.5em" type="text" class="form-control text-center" id="user" name="user" placeholder="Username">
            </div>
            <div class="mb-3">
              <label for="pwd" class="form-label display-5">Password</label>
              <input style="font-size:1.5em" type="password" class="form-control text-center" id="pwd" name="pwd" placeholder="Password">
            </div>
            <div class="mb-3 d-flex align-items-center justify-content-center">
              <input style="font-size:1.5em" type="color" class="form-control w-25" id="colore" name="colore">
            </div>
            <div class="mb-3">
              <input style="font-size:1.5em" type="submit" class="form-control text-center btn-danger" value="ENTRA">
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
