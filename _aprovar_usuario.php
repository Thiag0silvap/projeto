<?php
include 'conexao.php';

$id = $_GET["id"];
$nivel = $_GET["nivel"];

if ($nivel == 1) {

	$update = "UPDATE usuarios SET status = 'Ativo', nivel_usuario = 1 WHERE id_usuario = $id";
	$atualizacao = mysqli_query($conexao, $update);
	echo "ADMINISTRADOR APROVADO";
} 

if (condition) {
	$update = "UPDATE usuarios SET status = 'Ativo', nivel_usuario = 2 WHERE id_usuario = $id";
	$atualizacao = mysqli_query($conexão, $update);
	echo "FUNCIONÁRIO APROVADO";
}