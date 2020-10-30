<html>
<?php
echo "<h1>Testo del File </h1>";
$myFile = "ciao.txt";
if (!file_exists($myFile)) {

	echo "File non trovato <br/><br/>";
} else if (!$file = fopen($myFile, "r")) {

	echo "Non riesco ad aprire il file <br/><br/>";
} else {

	echo "<h5>Apertura file riuscita</h5> <br/><br/>";
	while (!feof($file)) {
		echo fgets($file) . "<br/>";
	}
}
?>

</html>