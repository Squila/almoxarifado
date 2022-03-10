<?php include("cabecalho.php");?>
<?php include("conecta.php");?>
<?php include("banco-produto.php");?>
<?php
 	$id = $_POST["id"];
	$nome = $_POST["nome"];
	$unidade_de_medida = $_POST["unidade_de_medida"];
	
	if(alteraProduto($conexao, $id, $nome, $unidade_de_medida)){
		?>
		<p class="alert alert-success">
	Produto <?php echo $nome;?> alterado com sucesso!
		</p>
		<?php
	}else{
		?>
		<p class="alert alert-danger">
	Produto <?php echo $nome;?> não foi alterado!
		</p>
		<?php
	}
	//fechar conexao
	mysqli_close($conexao);

?>
<?php include("rodape.php");?>