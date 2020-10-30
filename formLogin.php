<html>

<body>
    <form action="welcome.php" method="post">
        Name: <input type="text" name="name" />
        <br /><br />
        Last Name: <input type="text" name="lastname" />
        <br /><br />
        Sesso: <input type="radio" name="sesso" <?php if (isset($gender) && $gender == "maschio") echo "checked"; ?> value="maschio">Maschio
        <input type="radio" name="sesso" <?php if (isset($gender) && $gender == "Femmina") echo "checked"; ?> value="femmina">Femmina
        <input type="radio" name="sesso" <?php if (isset($gender) && $gender == "other") echo "checked"; ?> value="altro">Altro
        <br /><br />
        Descrizione: <br /> <textarea name="descrizione" rows="5" cols="40"></textarea>
        <br /> <br />
        Data: <input type="date" name="data" />
        <br /><br />
        <input type="submit">
    </form>
</body>

</html>