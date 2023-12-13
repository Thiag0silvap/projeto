<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<title>Cadastro de Usuário</title>
</head>
<body>

	<div class="container" style="width:400px; margin-top: 40px;">
		<h4>Cadastro de Usuário</h4>
		<form action="_insert_usuario.php" method="post">
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
				<input type="password" class="form-control" name="senhausuario" autocomplete="off" placeholder="Senha" required>
			</div>

			<div class="mb-3">
				<label>Repetir Senha</label>
				<input type="password" class="form-control" name="senhausuario2" autocomplete="off" placeholder="Repetir Senha" required>
			</div>

			<div class="mb-3">
				<label>Nível de Acesso</label>
				<select name="nivelusuario">
					<option value="1">Administrador</option>
					<option value="2">Funcionário</option>
				</select>
			</div>

			<div style="text-align: right;">
				<a href="cadastro_usuario.php" class="btn btn-primary btn-sm" role="button">Voltar</a>
				<button type="submit" class="btn btn-success btn-sm">Cadastrar</button>
			</div>
		</form>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>