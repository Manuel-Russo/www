<?php
  session_start();
  if(!isset($_SESSION['id_user'])){
    header("location:login.php");
  }
?>
<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

    <script type="text/javascript" src="js/jquery-3.6.1.min.js"></script>

    <link rel="stylesheet" href="css/bootstrap.css">
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="css/index.css">

    <script type="text/javascript" src="js/index.js"></script>

  </head>
  <body>
    <ul class="nav nav-pills justify-content-end">
      <li class="nav-item">
        <a class="btn btn-outline-danger m-1" href="logout.php">Logout</a>
      </li>
    </ul>
    <div class="container-fluid p-5 text-center border border-bottom-1">
      <h1>Università degli Studi di Gardone</h1>
      <h2><?php echo $_SESSION['nome_cognome'] ?></h2>
      <p>dove puoi trovare di tutto</p>
    </div>
    <div class="container mt-5">
      <div class="row text-center">
        <table class="table table-bordered">
            <thead class="table-info">
              <tr>
                <th>Nome corso</th>
                <th>Numero crediti</th>
                <th>Tenta l'esame</th>
                <th>Risultato</th>
              </tr>
            </thead>
            <tbody>
              <?php
                $conn=new mysqli("localhost","root","gardone","universita");
                $sql="SELECT * FROM corso ";
                $result=$conn->query($sql);
                while ($row=$result->fetch_assoc()) {
                  echo "<tr>";
                  echo "<td>{$row['denominazione']}</td>";
                  echo "<td>{$row['crediti']}</td>";
                  echo "<td><button onclick=\"richiamoAjax({$row['id']})\" class='btn btn-success'>Tenta l'esame!</button></td>";
                  echo "<td id='{$row['id']}' class='text-white'></td>";
                  echo "</tr>";
                }
              ?>
            </tbody>
          </table>
      </div>
    </div>
  </body>
</html>
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
        Modal body..
      </div>
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>