<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastro de Usuário</title>
</head>
<body>

	<div class="container" style="width:400px; margin-top: 40px;">
		<h4>Cadastro de Usuário</h4>
		<form action="_insert_usuario.php" method="post">
			<div>
				<label>Nome do Usuário</label>
				<input type="text" name="nomeusuario" autocomplete="off" placeholder="Nome Completo" required>
			</div>
			
			<div>
				<label>E-mail</label>
				<input type="email" name="mailusuario" autocomplete="off" placeholder="Digite seu E-mail" required>
			</div>

			<div>
				<label>Senha do Usuário</label>
				<input type="password" name="senhausuario" autocomplete="off" placeholder="Senha" required>
			</div>

			<div>
				<label>Repetir Senha</label>
				<input type="password" name="senhausuario2" autocomplete="off" placeholder="Repetir Senha" required>
				<small>Precisa ser igual a senha digitada acima</small>
			</div>

			<div>
				<label>Nível de Acesso</label>
				<select name="nivelusuario">
					<option value="1">Administrador</option>
					<option value="2">Funcionário</option>
				</select>
			</div>

			<div style="text-align: right;">
				<a href="cadastro_usuario.php" role="button">Voltar</a>
				<button type="submit">Cadastrar</button>
			</div>
		</form>
	</div>
</body>
</html>