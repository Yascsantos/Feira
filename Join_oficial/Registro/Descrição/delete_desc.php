<?php
	//Conectando ao banco
	include_once("../../conexaoBD.php");
	//Tabela no BD
	$tabela="descricao";
	//define campos para cláusula where
	$campos = "id_desc"; //chave primária
	
	//traz informação de listar categoria
	//include("listarCateg.php");
	$codigo = $_GET['codigo'];
	
	//Script para atualizar um registro na tabela no Banco de Dados
	$sql = "DELETE FROM $tabela WHERE $campos='$codigo'";
	
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