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
        <form action="controlloLogin.php" class="w-25 m-5" method="POST" onsubmit="return controlloLatoClient()">
            <div class="mb-3 mt-3">
                <label for="user" class="form-label">Username:</label>
                <input type="text" class="form-control" id="user" placeholder="Inserisci l'email" name="user"> <!--name per php, id per js-->
            </div>
            <div class="mb-3">
                <label for="pwd" class="form-label">Password:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Inserisci la password" name="pwd">
            </div>
            <button type="submit" class="btn btn-primary">Entra</button>
        </form>
        <div id='Freddi' class='w-25 m-5'>
            
        </div>
    </body>
</html>