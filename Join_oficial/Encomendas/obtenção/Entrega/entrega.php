<?php
	//Conectando ao banco
	include_once("../../../conexaoBD.php");
	//Tabela no BD
	$tabela="entrega";
	//define campos do insert
	$campos = "data_entrega, hora, endereco";
	
	//se o botão for pressionado
	if (isset($_GET['finalizar'])) {
		//traz as variáveis do formulário
		$data = $_GET['data'];
		$hora = $_GET['hora'];
		$endereco = $_GET['endereco'];
        
		//Script para inserir um registro na tabela no Banco de Dados
		$sql = "INSERT INTO $tabela ($campos) 
			VALUES ('$data','$hora', '$endereco')";
		
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
			header("Location: ../../Pagamento/pag.php");			
			exit;
		}
	}	
?>