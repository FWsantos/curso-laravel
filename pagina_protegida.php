<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Curso Laravel</title>
</head>
<body>
<?php 

$nome = "Blade Baiano";
$senha = "qwe123";

$loginNome = $_POST["txtnome"];
$loginSenha = $_POST["pwdsenha"];

if ($loginNome !== $nome) {
	echo "Nome incorreto";
}elseif ($loginSenha !== $senha) {
	echo "Senha Incorreta";
}else{
	echo "Bem vindo, God de la Bahia.";
}

?>
</body>
</html>