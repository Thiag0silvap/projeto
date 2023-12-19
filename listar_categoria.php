<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/d454bc4036.js" crossorigin="anonymous"></script>
	<title>Listagem de Categoria</title>
</head>
<body>
	<div class="container" style="margin-top: 40px; width: 500px;">
		<h3>Lista de Categorias</h3>
		<br>
		<table class="table">
			<thead>
				<tr>
					<th scope="col">Nome Categoria</th>
					<th scope="col">Ação</th>
				</tr>
			</thead>
			<?php
			include 'conexao.php';
			$sql = "SELECT * FROM categoria";
			$buscar = mysqli_query($conexao, $sql);
			while ($array = mysqli_fetch_array($buscar)) {
				$id_categoria = $array['id_categoria'];
				$nomecategoria = $array['categoria'];
			?>
			<tr>
				<td><?php echo $nomecategoria?></td>
				<td>
					<a class="btn btn-warning btn-sm" href="editar_categoria.php?id=<?php echo $id_categoria ?>" role="button"><i class="fa-regular fa-pen-to-square"></i>&nbsp;Editar</a>

					<a class="btn btn-danger btn-sm" href="deletar_categoria.php?id=<?php echo $id_categoria?>" role="button"><i class="fa-solid fa-trash-can"></i>&nbsp;Excluir</a>
				</td>
			</tr>
		<?php } ?>
		</table>
		<div style="text-align:right;">
			<a href="index.php" role="button" class="btn btn-primary">Voltar</a>
 		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>