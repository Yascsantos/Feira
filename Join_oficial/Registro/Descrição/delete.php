<?php
	//Conectando ao banco
	include_once("../../conexaoBD.php");
	//Tabela no BD
	$tabela="pedido";
	//define campos para cláusula where
	$campos = "idDesc"; //chave primaria 
	
	//traz informação de listar categoria
	//include("listarCateg.php");
	$codigo = $_GET['codigo'];
	
	//Script para atualizar um registro na tabela no Banco de Dados
	$sql = "DELETE FROM $tabela WHERE $campos='$codigo'";
	
	// executando instrução SQL
	$instrucao = mysqli_query($conexao,$sql);
	
	//concluindo operação
	if (!$instrucao) 
	{
		die(' Query Inválida: ' . mysqli_error($conexao));

	} 
	else 
	{
		//busca de valores 
		$sqlPesq = "SELECT id_ped FROM pedido WHERE idDesc= $codigo";
		
		//executa, testa e encerra conexão
		$pesquisa = mysqli_query($conexao,$sqlPesq);
			if (!$pesquisa) 
			{
				die(' Query Inválida: ' . mysqli_error($conexao));
				echo "existe um pedido feito com esse código";
			}
			else
			{
						//Script para atualizar um registro na tabela no Banco de Dados
						$sql_code = "DELETE FROM descricao WHERE pro='$codigo'";
				
						// executando instrução SQL
						$resultado = mysqli_query($conexao,$sql_code);
						
						//concluindo operação
						if (!$resultado) 
						{
							die(' Query Inválida: ' . mysqli_error($conexao));
				
						} 
						else 
						{
							mysqli_close($conexao);
							echo "A descrição do produto foi deletada o com Sucesso!
								<br/><a href='../index.html'>Voltar</a>
								<br/><a href='listagempro.php'>Listar descrições</a>";
							exit;
						}
				
				
			} 
		mysqli_close($conexao);
		
		exit;
	}

?>