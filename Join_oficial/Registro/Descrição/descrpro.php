<?php
	//Conectando ao banco
	include_once("../../conexaoBD.php");
	//Tabela no BD
	$tabela="descricao";
	//define campos do insert
	$campos = "pro, preco, sabor";
	
	//se o botão for pressionado
	if (isset($_GET['cadastrar'])) {
		//traz as variáveis do formulário
		$produto = $_GET['produto'];
		$preco = $_GET['preco'];
        $sabor = $_GET['sabor'];
		
		//$preco = floatval ($$pre); //converção 
		
		//Script para inserir um registro na tabela no Banco de Dados
		$sql = "INSERT INTO $tabela ($campos) 
			VALUES ('$produto','$preco','$sabor')";
		
		// executando instrução SQL
		$instrucao = mysqli_query($conexao,$sql);
		
		//concluindo operação
		if (!$instrucao) {
			die(' Query Inválida: ' . mysqli_error($conexao));
	
		} 
		else 
		{
			mysqli_close($conexao);
			header ('location: ../index.html');
			
			exit;
		}
	}	
?>