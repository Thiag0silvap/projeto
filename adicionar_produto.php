<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<style>
		#tamanhoContainer{
			width: 500px;
		}
	</style>
	<title>Cadastro de Produto</title>
</head>
<body>
	<div class="container" id="tamanhoContainer" style="margin-top: 40px;">
		<h4>Cadastro de Produto</h4>
		<form action="_inserir_produto.php" method="post" style="margin-top: 20px;">
			<div class="mb-3">
				<label>Código do Produto</label>
				<input type="number" class="form-control" name="codproduto" placeholder="Insira o número do produto" autocomplete="off" required>
			</div>

			<div class="mb-3">
				<label>Nome do Produto</label>
				<input type="text" class="form-control" name="nomeproduto" placeholder="Insira o nome do produto" autocomplete="off" required>
			</div>

			<div class="mb-3">
				<label>Categoria</label>
				<select class="form-select" name="categoria">
					<?php 
					include 'conexao.php';
					$sql = "SELECT * FROM categoria order by nome_categoria ASC";
					$buscar = mysqli_query($conexao, $sql);
					while ($array = mysqli_fetch_array($buscar)) {
						$id_categoria = $array["id_categoria"];
						$nome_categoria = $array["categoria"];
						?>
					<option><?php echo $nome_categoria?></option>
				<?php }?>
				</select>
			</div>

			<div class="mb-3">
				<label>Quantidade</label>
				<input type="number" class="form-control" name="quantidade" placeholder="Insira a quantidade de produto" autocomplete="off" required>
			</div>

			<div class="mb-3">
				<label>Fornecedor</label>
				<select class="form-select" name="fornecedor">
					<?php 
					include 'conexao.php';
					$sql = "SELECT * FROM fornecedor";
					$buscar2 = mysqli_query($conexao, $sql2);
					while ($array2 = mysqli_fetch_array($buscar2)) {
						$id_fornecedor = $array2['id_fornecedor'];
						$nome_fornecedor = $array2['nome_forn'];
						?>
					<option><?php echo $nome_fornecedor?></option>
				<?php }?>
				</select>
			</div>

			<div style="text-align: right;">
				<a href="menu.php" role="button" class="btn btn-primary btn-sm">Voltar</a>
				<button type="submit" class="btn btn-success btn-sm">Cadastrar</button>
			</div>
		</form>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>