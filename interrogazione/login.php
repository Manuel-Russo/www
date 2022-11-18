<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="controlloLogin.php" method="POST">
        <input type="text" placeholder="username" name="user">
        <input type="password" placeholder="password" name="psw">
        <button type="submit">Entra</button>
    </form>
</body>
</html>