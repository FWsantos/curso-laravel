<!DOCTYPE html>
<html>
<head>
	<title>Curso laravel</title>
</head>
<body>
	<table border="1">
		<thead>
			<th>Elemento</th>
			<th>Dia da Semana</th>
			<th>Prato do Dia</th>
			<th>Preço</th>
		</thead>
		<tbody>
			<?php 
			$nomesSemana[0] = "Domingo";
			$nomesSemana[1] = "Segunda";
			$nomesSemana[2] = "Terça";
			$nomesSemana[3] = "Quarta";
			$nomesSemana[4] = "Quinta";
			$nomesSemana[5] = "Sexta";
			$nomesSemana[6] = "Sábado";

			$pratosDoDia[0] = "Lasanha";
			$pratosDoDia[1] = "Frango";
			$pratosDoDia[2] = "Arroz";
			$pratosDoDia[3] = "Feijoada";
			$pratosDoDia[4] = "Nhoque";
			$pratosDoDia[5] = "Bacalhau";
			$pratosDoDia[6] = "Feijão";

			$preços[0] = "R$ 12,60";
			$preços[1] = "R$ 10,00";
			$preços[2] = "R$ 09,40";
			$preços[3] = "R$ 11,20";
			$preços[4] = "R$ 08,50";
			$preços[5] = "R$ 15,20";
			$preços[6] = "R$ 10,00";

			foreach ($nomesSemana as $posicao => $nomeSemana) {
				echo "<tr>";
				echo "<td>".$posicao."</td>";
				echo "<td>".$nomeSemana."</td>";
				echo "<td>".$pratosDoDia[$posicao]."</td>";
				echo "<td>".$preços[$posicao]."</td>";
				echo "</tr>";

			}



			?>
		</tbody>
	</table>

	<p>
		<?php 
		echo "Hoje é ".$nomesSemana[date("N")];
		echo "<br>";
		echo "O prato é ".$pratosDoDia[date("N")]." no valor de ".$preços[date("N")];

		?>
	</p>
</body>
</html>