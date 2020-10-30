<html>

<body style="text-align: center">
	<h1> Esercizio script php integrato </h1>
	<br /><br />
	<h3> Quale pulsante ho premuto? </h3>
	<br /><br />

	<?php
    if(isset($_POST["button"])){
		echo "Pulsante selezionato = " . $_POST["button"];
	}
	

	?>
	<br /><br />

	<form action="pulsanti.php" method="post">

		<input type="submit" name="button" value="b1" />
		<input type="submit" name="button" value="b2" />

	</form>

</body>

</html>