<?php
    if ($_SESSION["user"]) {
        echo '<a href="php/logout.php"><button type="submit" class="btn btn-secondary mb-2">Logout</button></a>';
    }
    
    else {
?>

<!DOCTYPE html>
<html lang="nl">
    <head>
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="../css/design.css">
    </head>

    <body>
        <div class="inlogpagina">
            <form method="POST" class="login" action="php/login.php">
                <input type="email" class="form-control mb-2 mr-sm-2" placeholder="e-mail" id="mail" name="mail">
                <input type="password" class="form-control mb-2 mr-sm-2" placeholder="wachtwoord" id="pass" name="pass">
                <button type="submit" class="btn btn-secondary mb-2">Login</button>
            </form>
            
            <br>
            <br>
            <div class="inlogtekst">
            <h3>Heeft u nog geen account?</h3>
            <h4>Maak hier dan een account aan:</h4>
            <a href="php/nieuwAccount.php">Nieuw account:</a>
            </div>
        </div>
    </body>
</html>

<?php
    }
?>