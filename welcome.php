<html>

<body>
    Benvenuto <?php


                $file = "ciao.txt";
                $handler = fopen($file, "a+") or  die("File not exists");

                if (isset($_POST["name"]) && isset($_POST["lastname"]) && isset($_POST["sesso"]) && isset($_POST["descrizione"]) && isset($_POST["data"])) {
                    fwrite($handler, "\n" . $_POST["name"]);
                    fwrite($handler, "\n" . $_POST["lastname"]);
                    fwrite($handler, "\n" . $_POST["sesso"]);
                    fwrite($handler, "\n" . $_POST["descrizione"]);
                    fwrite($handler, "\n" . $_POST["data"]);
                }

                include("function.php");

                echo $_POST["name"] . " " . $_POST["lastname"] . "<br/>" .
                    "Data Di Nascita: " . $_POST["data"] . "<br/>" .
                    "Sesso: " . $_POST["sesso"] . "<br/>" .
                    "Descrizione: " . $_POST["descrizione"] . "<br/>";

                debug_to_console($_POST);

                echo "<br/>";

                ?>
</body>

</html>