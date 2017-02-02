<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Curso laravel</title>
</head>
<body>
	<form method="post" action="">

		<table>
			<tr>
				<td><label for="numtermo1">Termo 1:</label></td>
				<td><input type="number" name="numtermo1" id="numtermo1"></td>
			</tr>
			<tr>
				<td><label for="numtermo2">Termo 2:</label></td>
				<td><input type="number" name="numtermo2" id="numtermo2"></td>
			</tr>
			<tr>
				<td><label for="somar">Somar</label></td>
				<td><input type="radio" name="operacao" id="somar" value="somar"></td>
			</tr>
			<tr>
				<td><label for="subtrair">Subtrair</label></td>
				<td><input type="radio" name="operacao" id="subtrair" value="subtrair"></td>
			</tr>
			<tr>
				<td><label for="multiplicar">Multiplcar</label></td>
				<td><input type="radio" name="operacao" id="multiplicar" value="multiplicar"></td>
			</tr>
			<tr>
				<td><label for="dividir">Dividir</label></td>
				<td><input type="radio" name="operacao" id="dividir" value="dividir"></td>
			</tr>
			<tr>
				<td><input type="submit" name="executar" value="Executar"></td>
			</tr>
		</table>
	</form>

	<p>
		<?php
		if (isset($_POST["numtermo1"])) {

			$termo1 = $_POST["numtermo1"];
			$termo2 = $_POST["numtermo2"];

			$operacao = $_POST["operacao"];

			echo "Resultado = ";
			if ($operacao == "somar") {
				echo $termo1+$termo2;
			}elseif ($operacao == "subtrair") {
				echo $termo1-$termo2;
			}elseif ($operacao == "multiplicar") {
				echo $termo1*$termo2;
			}elseif ($operacao == "dividir") {
				echo $termo1/$termo2;
			}
		} 
		?>
	</p>
</body>
</html>