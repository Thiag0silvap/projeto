<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<title>Cadastro de usuário externo</title>
</head>
<body>
	<div class="container" style="width:400px; margin-top: 40px;">
		<h4>Cadastro de Usuário</h4>
		<form action="_insert_usuario_externo.php" method="post">
			<div class="mb-3">
				<label>Nome do Usuário</label>
				<input type="text" class="form-control" name="nomeusuario" autocomplete="off" placeholder="Nome Completo" required>
			</div>
			
			<div class="mb-3">
				<label>E-mail</label>
				<input type="email" class="form-control" name="mailusuario" autocomplete="off" placeholder="Digite seu E-mail" required>
			</div>

			<div class="mb-3">
				<label>Senha do Usuário</label>
				<input type="password" id="txtSenha" class="form-control" name="senhausuario" autocomplete="off" placeholder="Senha" required>
			</div>

			<div class="mb-3">
				<label>Repetir Senha</label>
				<input type="password" class="form-control" name="senhausuario2" autocomplete="off" placeholder="Repetir Senha" required oninput="validaSenha(this)">
			</div>

			<div style="text-align:right;">
				<a href="index.php" class="btn btn-sm btn-primary" role="button">Voltar</a>
				<button type="submit" class="btn btn-success btn-sm">Cadastrar</button>
			</div>
		</form>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
		<script href="validaSenha"></script>
</body>
</html>