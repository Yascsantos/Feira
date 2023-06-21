<?php
	//Conectando ao banco
	include_once("../conexaoBD.php");
	//Tabela no BD
	$tabela="cadastro";
	//define campos do insert
	$campos = "nome, email, telefone, senha";

	//diretório da imagem de perfil
	/*
	$diretorio = "../Cadastro/imgs/";
	$arq= "perfil.png"; */

	
	//se o botão for pressionado
	if (isset($_GET['cadastrar'])) {
		//traz as variáveis do formulário
		$nome = $_GET['nome'];
		$email = $_GET['email'];
        $tel = $_GET['telefone'];
        $senha = $_GET['senha'];
	

		/*$arquivo = $diretorio.$arq; //arquivo = pasta + nome do arquivo 
		move_uploaded_file($arquivo["tmp_name"], $arquivo);*/
		
		
		//Script para inserir um registro na tabela no Banco de Dados
		$sql = "INSERT INTO $tabela ($campos) 
			VALUES ('$nome','$email','$tel','$senha')";
		
		// executando instrução SQL
		$instrucao = mysqli_query($conexao,$sql);
		
		//concluindo operação
		if (!$instrucao) 
		{
			die(' Query Inválida: ' . mysqli_error($conexao));
	
		} 
		else {
			mysqli_close($conexao);
			header ('Location: ../login/login.php');
			exit;
		}
	}	
?>