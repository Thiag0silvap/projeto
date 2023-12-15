<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/d454bc4036.js" crossorigin="anonymous"></script>
	<title>Aprovar Usuário</title>
</head>
<body>
	<div class="container" style="margin-top: 40px;">
		<h3>Lista de Usuários</h3>
		<br/>
		<table class="table">
			<thead>
				<tr>
					<th scope="col">Nome</th>
					<th scope="col">E-mail</th>
					<th scope="col">Nível</th>
					<th scope="col">Ação</th>
				</tr>
			</thead>
			<?php
			include "conexao.php";
			$sql = "SELECT * FROM `usuarios` WHERE status = 'Inativo'";
			$busca = mysqli_query($conexao, $sql);
			
			while ($array = mysqli_fetch_array($busca)) {
				$id_usuario = $array['id_usuario'];
				$nomeusuario = $array['nome_usuario'];
				$mail = $array['mail_usuario'];
				$nivel = $array['nivel_usuario'];
			?>
			<tr>
				<td><?php echo $nomeusuario?></td>
				<td><?php echo $mail_usuario?></td>
				<td><?php echo $nivel?></td>
				<td>
					<a class="btn btn-second btn-sm" style="color: #fff;" href="_aprovar_usuario.php?id=<?php echo $id_usuario ?>&nivel=1" role="button"><i class="fa-sharp fa-solid fa-face-smile-beam"></i>&nbsp;Administrador</a>
					<a class="btn btn-warning btn-sm" style="color: #fff;" href="_aprovar_usuario.php?id=<?php echo $id_usuario ?>&nivel=2" role="button"><i class="fa-sharp fa-solid fa-face-smile-beam"></i>&nbsp;Funcionário</a>
					<a class="btn btn-danger btn-sm" style="color: #fff;" href="_deletar_usuario.php?id=<?php echo $id_usuario ?>" role="button"><i class="fa-solid fa-trash-can"></i>&nbsp;Excluir</a>
				</td>
			</tr>
		<?php }?>
		</table>
		<div style="text-align: right;">
			<a href="menu.php" role="button" class="btn btn-primary btn-sm">Voltar</a>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>