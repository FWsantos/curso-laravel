<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Curso Laravel</title>
</head>
<body>
	<?php
		foreach (range(1, $_POST["repeticao"]) as $loop) {
		echo "<p style='color:".$_POST["cor"].";text-align:".$_POST["alinhamento"].";font-size:".$_POST["tamanho"]."px;'>".$_POST["txttexto"]."</p>";
			
		}

	
	?>
</body>
</html>