<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tela de Login</title>
	<style>
		#tamanho {
			width: 350px;
		}
	</style>
</head>
<body>
	<div class="container" id="tamanho" style="margin-top: 100px; border-radius: 15px; border: 2px solid #f3f3f3;">
		
		<div style="padding: 10px;">
			<center>
				<img src="imagens/cadeado.png" alt="imagem" style="width: 125px; height: 125px;">
			</center>
			<form action="index1.php" method="post">
				<div>
					<label>Usuário</label>
					<input type="text" name="usuario" placeholder="Usuário" autocomplete="off" required>
				</div>
				
				<div>
					<label>Senha</label>
					<input type="password" name="senha" placeholder="Senha" autocomplete="off" required>
				</div>
				<div style="text-align: right;">
					<button type="submit">Entrar</button>
				</div>
			</form>
		</div>
	</div>
	<div style="margin-top: 10px;">
		<center>
			<small>Você não possui cadastro? Clique<a href="cadastro_usuario_externo.php">Aqui</a></small>
		</center>
	</div>
</body>
</html>