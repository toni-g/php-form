<html>
<head>
	<title>Daten einfügen</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
	<?php
	$db = mysqli_connect('localhost','root','','lernen') or die ("Keine verbindung moeglich");
        mysqli_select_db($db, 'lernen') or die ("Die DB ist nicht vorhanden");

	$vorname = $_POST['vorname'];
	$nachname = $_POST['nachname'];
	$land = $_POST['land'];

	$anfrage="INSERT INTO benutzer (vorname, nachname, land) VALUES ('$vorname','$nachname', '$land')";
	$sql=mysqli_query($db, $anfrage) or die ("Anfrage konnte nicht ausgeführt werden.");

	$abfrage = "SELECT * FROM benutzer";
	$ergebnis = mysqli_query($db, $abfrage);
	$anz = mysqli_num_rows($ergebnis);

	echo("<p> Anzahl der Datensätze: </p>");
		echo($anz);
		echo("<table>");
			echo("<tr>");
			echo("<th>");
				echo("Benutzer-ID");
			echo("</th>");
			echo("<th>");
				echo("Nachname");
			echo("</th>");
			echo("<th>");
				echo("Vorname");
			echo("</th>");
			echo("<th>");
				echo("Land");
			echo("</th>");
			echo("</tr>");
		$spaltenzahl = mysqli_num_fields($ergebnis);
		while($zeile = mysqli_fetch_row($ergebnis)){
		echo("<tr>");

			for($i=0; $i<$spaltenzahl; $i++){
			echo("<td>");
				echo($zeile[$i]);
			echo("</td>");
		}
	echo("</tr>");
}
echo("</table>");
$schluss = mysqli_close($db);
?>
</body>
</html>
