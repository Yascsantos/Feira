<?php
	//Conectando ao banco
	include_once("../../conexaoBD.php");
	//Tabela no BD
	$tabela="descricao";
	//define campos para clásula where
	$campos = "id_desc"; //chave primaria 
	
	//traz informação de listar categoria
	$edit = $_GET['codigo'];
	
	//estrutura usada para o placeholder no formulário
	//define campos para edição
	$pesq = "preco, sabor";
	
	//busca de valores 
	$sqlPesq = "SELECT $pesq FROM $tabela WHERE $campos= $edit";
	
	//executa, testa e encerra conexão
	$pesquisa = mysqli_query($conexao,$sqlPesq);
	
	if (!$pesquisa) 
	{
		die(' Query Inválida: ' . mysqli_error($conexao));
	} 
	else 
	{
		//mysqli_close($conexao);
	}
	
	//se o botão for pressionado
	if (isset($_GET['alterar'])) {
		//traz as variáveis do formulário
		$codigo = $_GET['codigo'];
		$preco = $_GET['preco'];
        $sabor = $_GET['sabor'];
		
		//Script para atualizar um registro na tabela no Banco de Dados
		$sql = "UPDATE $tabela SET 
			preco = '$preco',
			sabor = '$sabor'
			WHERE $campos =$codigo";
			
		// executando instrução SQL
		$instrucao = mysqli_query($conexao,$sql);
		
		//concluindo operação
		if (!$instrucao) {
			die(' Query Inválida: ' . mysqli_error($conexao));
	
		} else {
			mysqli_close($conexao);
			header ('location: listagempro.php');
			exit;
		}
	}	
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Editar produtos</title>
		<meta charset="utf-8" />
		   <link rel="icon" type="imagem/png" href="../Descrição/imgs/icon.png" />
    <link rel="stylesheet" href="form.css">
	</head>
	<style>
		body{
			background-image: url(imgs/fundo.jpg);
			background: cover;
			background-position: 50%  20%;
		}
	</style>
	<body>
	<br><br>	<br><br>	<br><br>
	     	<center>
		<h2><b>ALTERAÇÃO DE DESCRIÇÕES</b></h2> <br>
		<div class="form">
		
		<!-- formulário alteração -->
		<form action="" method="GET">
			<!-- input oculto que traz do formulário anterior o código do produto -->
			<input type="hidden" name="codigo" value="<?= $edit; ?>" />
			<!-- usa campo pesquisado para exibir em placeholder -->
	<!-- ancoras de navegação -->
		<a href="../index.html">Voltar</a><br/>
		<a href="listagempro.php">Listar Descrições</a><br/><br/>
			
				<!--preço-->
				<span>Preço R$: </span>
				<input type="text" pattern="([0-9]{1,4}.[0-9]{2}$" name="preco"/><br/>

				<!--Sabor-->
				<span><b>Sabor: </b></span> <br>
				<?= include ("sabores.php");?>
				<br><br>  
			

			<input type="submit" name="alterar" value="Alterar" />
		</form>
		</div></center>
	</body>
</html>


