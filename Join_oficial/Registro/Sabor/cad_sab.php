<?php
	//Conectando ao banco
	include_once("../../conexaoBD.php");
	//Tabela no BD
	$tabela="sabor";
	//define campos do insert
	$campos = "nome";
	
	//se o botão for pressionado
	if (isset($_GET['cadastrar'])) {
		//traz as variáveis do formulário
		$sabor = $_GET['sabor'];

		//Script para inserir um registro na tabela no Banco de Dados
		$sql = "INSERT INTO $tabela ($campos) 
			VALUES ('$sabor')";
		
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