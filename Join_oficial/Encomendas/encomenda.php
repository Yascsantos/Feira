<?php
	//Conectando ao banco
	include_once("../conexaoBD.php");
	//Tabela no BD
	$tabela="pedido";
	//define campos do insert
	$campos = "produto, quantidade , sabor ";
	
	//se o botão for pressionado
	if (isset($_GET['finalizar'])) {
		//traz as variáveis do formulário
		$produto = $_GET['produto'];
		$qtd = $_GET['quantidade'];
        $sabor = $_GET['sabor'];
	
	/*Criação da sessão de produto
		$query = mysqli_query("SELECT preco FROM descricao WHERE produto= '$produto'");
		$dados= mysqli_fetch_array ($query);
			session_start();
			$_SESSION ('produto')= $dados['produto'];
	//final da sessão*/

		//Script para inserir um registro na tabela no Banco de Dados
		$preço= "SELECT preco FROM descricao WHERE produto= '$produto'";

		$sql = "INSERT INTO $tabela ($campos) 
			VALUES ('$produto','$qtd','$sabor')";
		
		// executando instrução SQL
		$instrucao = mysqli_query($conexao,$sql);
		
		//concluindo operação
		if (!$instrucao) 
		{
			die(' Query Inválida: ' . mysqli_error($conexao));
	
		} 
		else
		{
			mysqli_close($conexao);
			header("Location: obtenção/form.html");
			exit;
		}
	}
?>