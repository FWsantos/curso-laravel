<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Curso laravel</title>
</head>
<body>
	<form method="post" action="formate.php">
		<input type="text" name="txttexto"><button>Formatar</button><br>

		<select name="cor">
			<option value="blue">Azul</option>
			<option value="red">Vermelho</option>
		</select>
		<br>
		<select name="alinhamento">
			<option value="left">Alinhar a esquerda</option>
			<option value="right">Alinhar a direita</option>
		</select>
		<br>
		Tamanho em pixels: <input type="number" name="tamanho">
		<br>
		<label for="repeticao">Número de Repetições: </label><input type="number" name="repeticao" id="repeticao">
		<br>
	</form>

	


	
</body>
</html>