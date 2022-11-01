<!DOCTYPE html>
<html lang="it">
    <head>
        <script src="js/jquery-3.6.1.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/index.css">
        <script type="text/javascript" src="js/index.js"></script>
        <title>Museo</title>
    </head>
    <body>
        <form action="controlloLogin.php" class="w-25 m-5" method="POST" onsubmit="return controlloLatoClient()"> <!-- apro un form, che punta a controlloLogin.php con metodo post e che al submit si aspetta un return di una funzione js -->
            <div class="mb-3 mt-3">
                <label for="user" class="form-label">Username:</label> <!-- label username -->
                <input type="text" class="form-control" id="user" placeholder="Inserisci l'email" name="user"> <!--name per php, id per js; campo per l'inserimento email-->
            </div>
            <div class="mb-3">
                <label for="pwd" class="form-label">Password:</label> <!-- label psw -->
                <input type="password" class="form-control" id="pwd" placeholder="Inserisci la password" name="pwd"> <!-- campo per la psw -->
            </div>
            <button type="submit" class="btn btn-primary">Entra</button> <!-- bottone per il submit che avvia il controllo -->
        </form>
        <div id='div_login' class='w-25 m-5'> <!-- div per possibili errori -->
            
        </div>
    </body>
</html>