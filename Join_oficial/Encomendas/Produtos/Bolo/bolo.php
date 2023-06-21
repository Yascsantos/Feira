<?php
	//Conectando ao banco
	include_once("../../../conexaoBD.php");

	//Tabela no BD
	$tabela="pedido";
	//define campos do insert
	$campos = "idDesc, quantidade, vlTotal";
	
	//se o botão for pressionado
	if (isset($_GET['finalizar'])) 
    {
		//traz as variáveis do formulário
        $cod = $_GET['pedido'];
		$qtd = $_GET['quantidade'];
        
        //$codigo = $resultado['id_desc'];
        $sql_code = "SELECT preco FROM descricao WHERE id_desc='$cod'";
        // executando instrução SQL
        $query = mysqli_query($conexao,$sql_code);
        //coverter o array em registro
        $resultado= mysqli_fetch_array($query);
        $vlUnitario = $resultado['preco'];

        
        
        $vlTotal = $vlUnitario * $qtd;
        session_start();
        $_SESSION['total'] =  $vlTotal;

		$sql = "INSERT INTO $tabela ($campos) 
			VALUES ('$cod','$qtd','$vlTotal')";
		
		// executando instrução SQL
		$instrucao = mysqli_query($conexao,$sql);
		//$registro = mysqli_fetch_array($instrucao);

		//concluindo operação
		if (!$query) 
		{
			die(' Query Inválida: ' . mysqli_error($conexao));
           
	
		} 
		else
		{
            /*echo "<p>Valor unitário:".$resultado['preco']."</p>";
            echo "<p>Valor total: R$:".$vlTotal.",00</p>";
            echo "<a href='formulario.php'>Voltar</a>";
            mysqli_close($conexao);
            echo $_SESSION['total'];*/
			header("Location: ../../obtenção/form.html");
			exit;
		}
	}
?>