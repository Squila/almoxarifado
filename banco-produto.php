<?php
function listaProduto($conexao){
		$produtos = array();
		//conexao, query
	$resultado = mysqli_query($conexao, "select * from produtos");
	while($produto = mysqli_fetch_assoc($resultado)){
		array_push($produtos, $produto);
		}
		return $produtos;
	}
function insereProduto($conexao, $nome, $unidade_de_medida){
	$query = "insert into produtos (nome, unidade_de_medida)  values ('{$nome}', '{$unidade_de_medida}')";
	$resultadoDaInsercao = mysqli_query($conexao, $query);
	return $resultadoDaInsercao;
}

function removeProduto($conexao, $id){
	$query = "delete from produtos where id = {$id}";
	return mysqli_query($conexao, $query);
}

function buscaProduto($conexao, $id){
	$query = "select * from produtos where id = {$id}";
	$resultado = mysqli_query($conexao, $query);
	return mysqli_fetch_assoc($resultado);
}

function alteraProduto($conexao, $id, $nome, $unidade_de_medida){
	$query = "update produtos set nome = '{$nome}', unidade_de_medida = '{$unidade_de_medida}'  where id = '{$id}'";
	return mysqli_query($conexao, $query);
}

?>