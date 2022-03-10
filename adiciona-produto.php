<?php include("cabecalho.php");?>
<?php include("conecta.php");?>
<?php include("banco-produto.php");?>
<?php

	$nome = $_POST["nome"];
	$unidade_de_medida = $_POST["unidade_de_medida"];
	//(conexao, query)
	if(insereProduto($conexao, $nome, $unidade_de_medida)){
		?>
		<p class="alert alert-success">
	Produto <?php echo $nome;?> com a unidade de medida <?php echo $unidade_de_medida;?> adicionado com sucesso!
		</p>
		<?php
	}else{
		?>
		<p class="alert alert-danger">
	Produto <?php echo $nome;?> com a unidade de medida <?php echo $unidade_de_medida;?> não foi adicionado!
		</p>
		<?php
	}
	//fechar conexao
	mysqli_close($conexao);

?>

<?php include("rodape.php");?>	