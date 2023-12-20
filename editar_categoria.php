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
	<title>Editar categoria</title>
</head>
<body> 
	<div class="container" id="tamanhoContainer" style="margin-top: 40px;"> 
		<h4>Editar Categoria</h4>
		<form action="_atualizar_categoria.php" method="post" style="margin-top: 20px;">
			<?php
			$sql = "SELECT FROM categoria WHERE id_categoria = $id";
			$buscar = mysqli_query($conexao, $sql);
			while ($array = mysqli_fetch_array($buscar)) {
				$id_categoria = $array['id_categoria'];
				$nomecategoria = $array['categoria'];
			?>
			<div class="mb-3">
				<label>Nome Categoria</label>
				<input type="text" class="form-control" name="categoria" value="<?php echo $nomecategoria?>">
				<input type="text" class="form-control" name="id" value="<?php echo $id_categoria?>" style="display: none;">
			</div>
			<div style="text-align: right;">
				<button type="submit" class="btn btn-success btn-sm">Atualizar</button>
			</div>
		<?php } ?>
		</form>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>