<html>

<body>
            <?php


                //$file = "ciao.txt";
                //$handler = fopen($file, "a+") or  die("File not exists");

                //if (isset($_POST["name"]) && isset($_POST["lastname"]) && isset($_POST["sesso"]) && isset($_POST["descrizione"]) && isset($_POST["data"])) {
                    //fwrite($handler, "\n" . $_POST["name"]);
                    //fwrite($handler, "\n" . $_POST["lastname"]);
                    //fwrite($handler, "\n" . $_POST["sesso"]);
                    //fwrite($handler, "\n" . $_POST["descrizione"]);
                    //fwrite($handler, "\n" . $_POST["data"]);
                //}               

                include("function.php");

                $myFile = "loginInfo.txt";
                $file = fopen($myFile, "r");
                $loginInfo = $_POST["name"] . $_POST["lastname"] . $_POST["sesso"] . $_POST["descrizione"] . $_POST["data"];
                $fileInfo = fgets($file);

                if ( $fileInfo == $loginInfo ) {
                    echo "Benvenuto" . $_POST["name"] . " " . $_POST["lastname"] . "<br/>" .
                    "Data Di Nascita: " . $_POST["data"] . "<br/>" .
                    "Sesso: " . $_POST["sesso"] . "<br/>" .
                    "Descrizione: " . $_POST["descrizione"] . "<br/>";

                    debug_to_console($_POST);

                }else{
                    echo "credenziali non valide";
                }

                
               

                echo "<br/>";

                ?>
</body>

</html>