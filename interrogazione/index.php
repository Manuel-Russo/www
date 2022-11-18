<?php
    session_start();
    if (!isset($_SESSION['entrata'])) {
        header('location:login.php');
    }
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTENZA</title>
</head>
<body>
    <button><a href="logout.php">LOGOUT</a></button>
    <h6>ciao</h6>
</body>
</html>