<html>

<body>

    <form action="/scriviFile.php" method="post">

        <textarea name="text" rows="5" cols="40"><?php echo $contenuto; ?></textarea>
        <input type="submit">

        <?php
        $nFile = "ciao.txt";
        $handler = fopen($nFile, "a+") or  die("File not exists");
        $fSize = filesize($nFile);

        if (isset($_POST["text"])) {
            $s = $_POST["text"];
            fwrite($handler, $s);
        }

        if ($fSize != 0) {
            $contenuto = fread($handler, $fSize);
        } else {
            $contenuto = "";
        }
        ?> 

    </form>

</body>

</html>