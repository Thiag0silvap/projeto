<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/d454bc4036.js" crossorigin="anonymous"></script>
	<title>Lista de Produtos</title>
</head>
<body>
	<?php
	session_start();
	$usuario = $_SESSION['usuario'];
	if (!isset($_SESSION['usuario'])) {
		header('Location: index.php');
	}
	include 'conexao.php';
	$sql = "SELECT nivel_usuario FROM usuarios WHERE mail_usuario = '$usuario' and status = 'Ativo'";
	$buscar = mysqli_query($conexao, $sql);
	$array = mysqli_fetch_array($buscar);
	$nivel = $array['nivel_usuario'];
	?>
	<div class="container" style="margin-top: 40px;">
		<h3>Lista de Produtos</h3>
		<br>
		<table class="table">
			<thead>
				<tr>
					<th scope="col">Cod Produto</th>
					<th scope="col">Nome Produto</th>
					<th scope="col">Categoria</th>
					<th scope="col">Quantidade</th>
					<th scope="col">Fornecedor</th>
					<th scope="col">Ação</th>
				</tr>
			</thead>
			<?php
			include 'conexao.php';
			$sql = "SELECT * FROM estoque";
			$buscar = mysqli_query($conexao, $sql);
			while ($array = mysqli_fetch_array($buscar)) {
				$id_estoque = $array['id_estoque'];
				$codproduto = $array['codproduto'];
				$nomeproduto = $array['nomeproduto'];
				$categoria = $array['categoria'];
				$quantidade = $array['quantidade'];
				$fornecedor = $array['fornecedor'];
			?>
			<tr>
				<td><?php echo $codproduto?></td>
				<td><?php echo $nomeproduto?></td>
				<td><?php echo $categoria?></td>
				<td><?php echo $quantidade?></td>
				<td><?php echo $fornecedor?></td>
				<td>
					<?php
					if (($nivel == 1)||($nivel == 2)) {

					?>
					<a class="btn btn-warning btn-sm" href="editar_produto.php?id=<?php echo id_estoque?>" role="button"><i class="fa-regular fa-pen-to-square"></i>&nbsp;Editar</a>
				    <?php }	
				    	if ($nivel == 1) {

				    ?>
				    <a class="btn btn-danger btn-sm" href="deletar_produto.php?id=<?php echo $id_estoque?>" role="button"><i class="fa-solid fa-trash-can"></i>&nbsp;Excluir</a>
				<?php } ?>
				</td>
			</tr>
		<?php } ?>
		</table>
		<div style="text-align: right;">
			<a href="menu.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>