<!-- POPOLAZIONE ARRAY -->
<?php
$path = "scriptCredenziali.php";
include($path);
echo "visite: " . $_COOKIE["sessione"] . "<br/>";

?>

<html>

<head>
    <title>Verifica delle credenziali</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="stileLogin.css" rel="stylesheet" type="text/css">
</head>

<body>
    <h1>Pagina di verifica credenziali.</h1>
    <form>
        <div class="container">
            <?php
            $path = "voti.txt";
            $voti;
            if ($file = fopen($path, "r")) {
                while (!feof($file)) {

                    $linea = fgets($file);
                    $nomeUtente = substr($linea, 0, strpos($linea, ":"));
                    $utenteLoggato;
                    if (isset($_COOKIE["user"])) {
                        $utenteLoggato = $_COOKIE["user"];
                    } else {
                        $utenteLoggato = $_POST["username"];
                    }
                    if ($nomeUtente == $utenteLoggato) {
                        $voti = substr($linea, strpos($linea, ":") + 1, strlen($linea));
                        $arrayvoti = explode(';', $voti);
                        break;
                    }
                }
                fclose($file);
            } else {
                echo ("Impossibile aprire il file!");
            }
            if (isset($_COOKIE["user"])) {
                echo "<div class=\"container\"><h2>Benvenuto nella tua area dedicata, </h2>";
                echo "<h1 style=\"color:green\">" . $_COOKIE["user"] . "</h1>";
                echo "<table><tr><th>Voto</th></tr>";
                foreach($arrayvoti as $voto){
                    echo "<tr>";
                    echo "<td>";
                    echo $voto;
                    echo "</td>";
                    echo "</tr>";
                }
                
                echo "</table>";
                echo "<h1 style=\"color:orange\">" . $voti . "</h2>";
                echo "</div>";
            } else {
                if (isset($_CREDENZIALI[$_POST["username"]])) {
                    if ($_POST["psw"] == $_CREDENZIALI[$_POST["username"]]) {
                        setcookie("user", $_POST["username"], time() + (60 * 60));
                        echo "<div class=\"container\"><h2>Benvenuto nella tua area dedicata, </h2>";
                        echo "<h1 style=\"color:green\">" . $_POST["username"] . "</h1>";
                        echo "<h1 style=\"color:orange\">" . $voti . "</h2>";
                        echo "</div>";
                    } else {
                        echo "<img src=\"https://i0.wp.com/vincenttechblog.com/wp-content/uploads/2018/02/lock-pc-wrong-password.jpg?ssl=1\" class =\"avatar\">";
                        echo "<h2 style=\"color:red\">Password errata!</h4>";
                    }
                } else {
                    echo "<img src=\"https://roundhouse-assets.s3.amazonaws.com/assets/Image/15214-fitandcrop-1200x681.jpg\" class =\"avatar\">";
                    echo "<h2 style=\"color:orange\">Utente non trovato!</h4>";
                }
            }

            echo "<div class=\"container\" style=\"background-color:#f1f1f1\"";
            echo "<span class=\"psw\">Esegui <a href=\"logout.php\">logout</a></span></div>";
            ?>
        </div>

    </form>
</body>

</html>