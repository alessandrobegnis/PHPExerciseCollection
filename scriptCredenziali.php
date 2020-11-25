<!-- POPOLAZIONE ARRAY -->
<?php
// dichiaro nome file
$path = "loginInfo.txt";
//istanzio fuori dal contesto del while var generica credenziali che diventerà array associativo
$_CREDENZIALI;
//creo  hendle del file e verifico che esista
if ($fileCredenziali = fopen($path, "r")) {
    while (!feof($fileCredenziali)) { 
        // lettura della stringa
        $linea = fgets($fileCredenziali);
        // estraggo dalla linea il nome utente e di seguito la password
        $nomeUtente = substr($linea, 0, strpos($linea, ";"));
        /* sono obbligato a fare questo pasticcio per togliere l'ultimo carattere finale della
           password poichè si buggava con il <br />
           sono arrivato a questa soluzione anche se moolto brutta dopo 3 ore di troubleshooting e test */
        $password = substr($linea, strpos($linea, ";") + 1, strpos($linea, "|") - 1);
        $password = $password . " .";
        $password = substr($password, 0, strpos($password, "|"));

        /*indicizzo al nome utente la rispettiva password, questo tipo di indicizzazione anche se potrebbe
        sembrare inizialmente confusionaria e non efficace penso sia utile nell'eventualità di dover salvare 
        molte informazioni relative ad utente in seguito es. Pw Email Sesso Tel Indirizzo etc...*/
        $_CREDENZIALI[$nomeUtente] = $password;
    }
    // chiudo stream al file
    fclose($fileCredenziali);
} else {
    //comunico l'impossibilità di apertura del file
    echo ("Impossibile aprire il file!");
}
?>