<html>
    <body>
        Benvenuto <?php 

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