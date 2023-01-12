<?php
  session_start();
  if(!isset($_SESSION['username'])){
    header("location:login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
  <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
  <link href="css/bootstrap.min.css" rel="stylesheet" />
  <script src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/popper.min.js"></script>
  <link href="css/index.css" rel="stylesheet" type="text/css" />
  <script type="text/javascript" src="js/index.js"></script>
</head>
  <body>

    <div class="d-flex flex-row-reverse bd-highlight">
    <div class="p-2 bd-highlight"><a href='logout.php'><button class='btn btn-danger'>Logout</button></a></div>
    <div class="p-2 bd-highlight"><button class='btn btn-outline-success' disabled>
      <?php 
        echo $_SESSION['nome']." ".$_SESSION['cognome'];
      ?>
    </button></div>
    </div>
    <div class="container h-100">
      <h1>Sala 1 - House of Gucci</h1>
      <div class="row">
        <div class="col-md-3 text-center">
          <img src="img/houseOfGucci.jpg" class="w-100 mb-3" alt="locandina">
              <kbd style="font-size:1.5em;">Oggi <?php echo date('d/m/Y') ?></kbd>
        </div>
        <div class="col-md-9">
          <table id="posti_sala1" class="text-center align-middle">
            <tbody>
              <tr>
                <td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td>
              </tr>
              <tr>
                <td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td>
              </tr>
              <tr>
                <td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td>
              </tr>
              <tr>
                <td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td>
              </tr>
              <tr>
                <td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td>
              </tr>
              <tr>
                <td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td>
              </tr>
              <tr>
                <td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td>
              </tr>
              <tr>
                <td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td>
              </tr>
              <tr>
                <td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td>
              </tr>
              <tr>
                <td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td>
              </tr>
              <tr>
                <td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td><td class='posto'></td>
              </tr>
              <tr>
                <td colspan="20" style="border-left-color:white;border-right-color:white"></td>
              </tr>
              <tr>
                <td colspan="20">SCHERMO</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </body>
</html>

<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="modal_title">Modal Heading</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body" id="modal_content">
        Modal body..
      </div>
      <div class="modal-footer" id="modal_footer">
      </div>
    </div>
  </div>
</div>
