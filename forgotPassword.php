<?php

//popolo file e array solamente se l'utente mi ha già passato il parametro username
if (isset($_POST["username"])) {
    $path = "scriptCredenziali.php";
    include($path);
}
?>
 
<html>

<head>
    <title>Recupera Password</title>
    <link href="stileLogin.css" rel="stylesheet" type="text/css"> <!-- Connessione con file CSS -->
</head>

<body>
    <h1>Pagina recupero credenziali</h1>
    <form action="forgotPassword.php" method="post">
        <div class="imgcontainer">
            <img src="https://www.piemontetopnews.it/wp-content/uploads/2018/08/Giovanni-Bosco-1-1024x547.jpg" class="avatar">
        </div>
        <div class="container">
            <?php
            if (!isset($_POST["username"])) {
                // se l'utente non ha ancora inserito username faccio apparire il form per l'inserimento del dato
                echo "<label for=\"username\"><b>Username</b></label>";
                echo "<input type=\"text\" placeholder=\"Inserisci Username\" name=\"username\" required><button type=\"submit\">Login</button>";
            } else {
                //se ha già passato l'username inizio a fare le verifiche su esistenza dell'username e restituisco la password
                //molto semplificato senza nessun controllo di sicurezza
                if (isset($_CREDENZIALI[$_POST["username"]])) {

                    echo "<div class=\"container\"><h3>Di seguito vengono riportate le tue credenziali di accesso:</h3>";

                    echo "<label for=\"showUser\"><b>Username</b></label>";
                    echo "<input type=\"text\" name=\"showUser\" value=\"" . $_POST["username"] . "\" readonly>";
                    echo "<label for=\"showPsw\"><b>Password</b></label>";
                    echo "<input type=\"text\" name=\"showPsw\" value=\"" . $_CREDENZIALI[$_POST["username"]] . "\" readonly></div>";
                } else {
                    echo "<img src=\"https://roundhouse-assets.s3.amazonaws.com/assets/Image/15214-fitandcrop-1200x681.jpg\" class =\"avatar\">";
                    echo "<h2 style=\"color:orange\">Utente non trovato!</h4>";
                    echo "</div><div class=\"container\" style=\"background-color:#f1f1f1\"";
                    echo "<span class=\"psw\">Torna al <a href=\"forgotPassword.php\">recupero credenziali</a></span></div><br><div>";
                }
            }
            ?>
        </div>
        <div class="container" style="background-color:#f1f1f1">
            <span class="psw">Torna a <a href="formLogin.php">login</a></span>
        </div>
    </form>
</body>

</html>