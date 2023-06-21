<?php
	//Conectando ao banco
	include_once("../../conexaoBD.php");
	//Tabela no BD
	//$tabela="sabor";
    	
	//Script de uma busca em uma tabela no Banco de Dados
	$sql = "SELECT * FROM sabor";
		
	// executando instrução SQL
	$instrucao = mysqli_query($conexao,$sql);
	echo "<table>
    <th></th>
    <th></th>
    <th></th>   <!--linha de espaço-->
    <th></th>   <!--linha de espaço-->
    <th></th>   <!--linha de espaço-->

    <th></th>
    ";
	//mostrar os sabores	
	foreach ($instrucao as $exibe) 
	{
	
		
		echo "	
        <tr>
        <td align='center'><input type='radio' id=".$exibe['nome']." name='sabor' value=".$exibe['id_s']."></td> 
        <td ><label for=".$exibe['nome'].">".$exibe['nome']."</label></td> 
        <td></td> <!--linha de espaço-->
        <td></td>   <!--linha de espaço-->
        <td></td>   <!--linha de espaço--> 

        </tr>" ;
		
	}
	echo "</table>";
	
	

?>