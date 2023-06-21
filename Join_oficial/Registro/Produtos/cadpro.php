<?php
	//Conectando ao banco
	include_once("../../conexaoBD.php");
	//Tabela no BD
	$tabela="produto";
	//define campos do insert
	$campos = "nome_pro";
	
	//se o botão for pressionado
	if (isset($_GET['cadastrar'])) {
		//traz as variáveis do formulário
		$produto = $_GET['produto'];

		//Script para inserir um registro na tabela no Banco de Dados
		$sql = "INSERT INTO $tabela ($campos) 
			VALUES ('$produto')";
		
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