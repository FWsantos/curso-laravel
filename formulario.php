<!DOCTYPE html>
<html>
<head>
	<title>Curso Laravel</title>
</head>
<body>
	<?php 

	echo "<p>Nome - ".$_POST["txtnome"]."</p>";
	echo "<p>Endereço - ".$_POST["txtendereco"]."</p>";

	if ($_POST["numidade"] < 18) {
		echo "Menor de idade!";
	}else{
		echo "Minha idade é: ".$_POST["numidade"];
	}
	?>
</body>
</html>