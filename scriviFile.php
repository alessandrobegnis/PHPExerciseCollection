<html>

<body>

    <form action="scriviFile.php" method="post">

        <textarea name="testoFile" rows="5" cols="40"></textarea>
        <input type="submit">

        <?php

        $file = "ciao.txt";
        $handler = fopen($file, "a+") or  die("File not exists");

        if (isset($_POST["testoFile"])) {
            fwrite($handler, $_POST["testoFile"]);
            echo "<br/> File aggiornato ";  
        }

        ?>

    </form>

</body>

</html>