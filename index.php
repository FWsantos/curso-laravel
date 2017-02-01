<!DOCTYPE html>
<html>
<head>
	<title>Curso laravel</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style type="text/css">
		body{
			font-size: 20px;
		}

	</style>
</head>
<body>
	<h3>Preencha o Formulario:</h3>
	<form method="post" action="formulario.php">
		<table>
			<tr>
				<td><label for="txtnome">Nome: </label></td><td><input type="text" name="txtnome" id="txtnome"></td>
			</tr>
			<tr>
				<td><label for="txtendereco">Endereço: </label></td><td><input type="text" name="txtendereco" id="txtendereco"></td>
			</tr>
			<tr>
				<td><label for="numidade">Idade: </label></td><td><input type="number" name="numidade" id="numidade"></td>
			</tr>
			<tr>
				<td><label for="homem">homem</label></td><td><input type="radio" name="sexo" value="masculino" id="homem"></td>
			</tr>
			<tr>
				<td>mulher</td><td><input type="radio" name="sexo" value="feminino" id="sexo"></td>				
			</tr>
			<tr>
				<td>
					<input type="submit" value="enviar">
				</td>
			</tr>
		</table>

	</form>

</body>
</html>