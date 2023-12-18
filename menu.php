<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<title>Menu</title>
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
		<div class="container" style="margin-top: 100px;">
			<div>
				<?php 
				if (($nivel == 1)||($nivel == 2)) {

				?>
				<div class="col-sm-6 mb-3 mb-sm-0">
					<div class="card"> 
						<div class="card-body">
							<h5 class="card-title">Adicionar Produto</h5>
							<p class="card-text">Opção para adicionar produtos em nosso estoque</p>
							<a href="adicionar_produto.php" class="btn btn-success">Cadastrar Produto</a>
						</div>
					</div>
				</div>
			<?php }?>
			<div class="col-sm-6">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Lista de Produtos</h5>
						<p class="card-text">Visualizar, editar e excluir os produtos.</p>
						<a href="listar_produtos.php" class="btn btn-success">Produtos</a>
					</div>
				</div>
			</div>
			<div class="col-sm-6 mb-3 mb-sm-0" style="margin-top: 20px;">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Adicionar Categoria</h5>
						<p class="card-text">Opção para adicionar categoria de produto</p>
						<a href="adicionar_categoria.php" class="btn btn-success">Cadastrar Categoria</a>
					</div>
				</div>
			</div>
			<div class="col-sm-6" style="margin-top: 20px;">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Adicionar Fornecedores</h5>
						<p class="card-text">Opção para adicionar fornecedores</p>
						<a href="adicionar_fornecedor.php" class="btn btn-success">Cadastrar Fornecedores</a>
					</div>
				</div>
			</div>
			<div class="col-sm-6" style="margin-top: 20px;">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Cadastrar Usuários
						</h5>
						<p class="card-text">Opção para cadastrar usuários</p>
						<a href="cadastro_usuario.php" class="btn btn-success"></a>
					</div>
				</div>
			</div>
			<div class="col-sm-6" style="margin-top: 20px;">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Aprovar Usuário</h5>
						<p class="card-text">Aprovar cadastros de usuários</p>
						<a href="aprovar_usuario.php" class="btn btn-success">Aprovar Usuários</a>
					</div>
				</div>
			</div>
			</div>
		</div>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>