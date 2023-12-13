<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<title>Cadastro de categoria</title>
</head>
<body>
	<div class="container" style="margin-top: 40px; width: 500px;">
		<form action="_inserir_categoria.php" method="post">
			<h4>Cadastro de Categoria</h4>
			<div class="mb-3">
				<label>Categoria</label>
				<input type="text" name="categoria" placeholder="Digite o nome da categoria" autocomplete="off">
			</div>
			<div style="text-align:right;">
				<a href="#" role="button" class="btn btn-primary btn-sm">Voltar</a>
				<button type="submit" class="btn btn-success btn-sm">Cadastrar</button>
			</div>
		</form>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>