<?php
include 'conexao.php';
$id = $_GET['id'];

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<style>
		#tamanhoContainer {
			width: 400px;
		}
	</style>
	<title>Editar Produto</title>
</head>
<body>
	<div class="container" id="tamanhoContainer" style="margin-top: 40px;">
		<h4>Editar Produto</h4>
		<form action="_atualizar_produto.php" method="post" style="margin-top: 20px;">
			
			<?php
			$sql = "SELECT FROM `estoque` WHERE id_estoque = $id";
			$buscar = mysqli_query($conexao, $sql);
			while ($array = mysqli_fetch_array($buscar)) {
				$id_estoque = $array['id_estoque'];
				$codproduto = $array['codproduto'];
				$nomeproduto = $array['nomeproduto'];
				$categoria = $array['categoria'];
				$quantidade = $array['quantidade'];
				$fornecedor = $array['fornecedor'];
			?>
			<div class="mb-3">
				<label>Cod Produto</label>
				<input type="number" class="form-control" name="codproduto" value="<?php echo $codproduto ?>" disabled>
				<input type="number" class="form-control" name="id" value="<?php echo $id ?>" style="display: none;">
			</div>
			<div class="mb-3">
				<label>Nome Produto</label>
				<input type="text" class="form-control" name="nomeproduto" value="<?php echo $nomeproduto?>">
			</div>
			<div class="mb-3">
				<label>Categoria</label>
				<select class="form-select" name="categoria">
					<?php 
					include 'conexao.php';
					$sql = "SELECT * FROM categoria order by nome_categoria ASC";
					$buscar = mysqli_query($conexao, $sql);
					while ($array = mysqli_fetch_array($buscar)) {
						$id_categoria = $array['id_categoria'];
						$nomecategoria = $array['categoria'];
					?>
					<option><?php echo $nomecategoria ?></option>
				<?php }?>
				</select>
			</div>
			<div class="mb-3">
				<label>Quantidade</label>
				<input type="number" class="form-control" name="quantidade" value="<?php echo $quantidade?>">
			</div>
			<div>
				<label>Fornecedor</label>
				<?php 
				include 'conexao.php';
				$sql = "SELECT * FROM `fornecedor` order by nome_forn ASC";
				$buscar = mysqli_query($conexao, $sql);
				while ($array = mysqli_fetch_array($buscar)) {
					$id_fornecedor = $array['id_fornecedor'];
					$nome_fornecedor = $array['nome_forn'];
				?>
				<option><?php echo $nome_fornecedor?></option>
			<?php }?>
			</div>
			<div style="text-align: right;">
				<button type="submit" class="btn btn-success btn-sm">Atualizar</button>
			</div>
		<?php }?>
		</form>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>