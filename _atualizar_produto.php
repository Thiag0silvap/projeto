<?php
include 'conexao.php';
$id = $_POST['id'];
$nomeproduto = $_POST['nomeproduto'];
$categoria = $_POST['categoria'];
$quantidade = $_POST['quantidade'];
$fornecedor = $_POST['fornecedor'];

$sql = "UPDATE `estoque` SET `nomeproduto` = '$nomeproduto', `categoria` = '$categoria', `quantidade` = $quantidade, `fornecedor` = '$fornecedor' WHERE id_estoque = $id";
$atualizar = mysqli_query($conexao, $sql);

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<div class="container" style="width:400px;">
	<center>
		<h3>Atualizado com sucesso</h3>
		<div style="margin-top:10px;">
			<a href="listar_produtos.php" class="btn btn-sm btn-primary">Voltar</a>
		</div>
	</center>
</div>