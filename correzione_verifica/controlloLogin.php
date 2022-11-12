<?php
  session_start();
  try {
    $conn=new mysqli("localhost","root","gardone","universita");
    $sql="SELECT * FROM persona WHERE username='{$_POST['user']}' AND password='{$_POST['pwd']}'";
    $result=$conn->query($sql);
    if($result->num_rows>0){
      $row=$result->fetch_assoc();
      $_SESSION['id_user']=$row['id'];
      $_SESSION['nome_cognome']=$row['nome']." ".$row['cognome'];
      header("location:index.php");
    }
    else{
      header("location:login.php");
    }
  } catch (\Exception $e) {
    echo "Errore! ".$e;
  }

?>
