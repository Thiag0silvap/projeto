<?php
include 'conexao.php';
include 'script/password.php';
$nomeusuario = $_POST["nomeusuario"];
$mail = $_POST["mailusuario"];
$senha = $_POST["senhausuario"];
$status = "Inativo";

$sql = "INSERT INTO `usuarios`(`nome_usuario`, `mail_usuario`, `senha_usuario`, `status`) VALUES ('$nomeusuario','$mail',sha1('$senha'),'$status')";

$inserir = mysqli_query($conexao, $sql);

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<div class="container" style="width:400px;">
	<center>
		<h3>Usuário adicionado com sucesso, esperando aprovação</h3>
		<div style="margin-top:10px;">
			<a href="menu.php" class="btn btn-sm btn-primary">Voltar</a>
		</div>
	</center>
</div>