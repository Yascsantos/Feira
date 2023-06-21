<?php
	//Conectando ao banco
	include_once("../../../conexaoBD.php");
	
	//Script de uma busca em uma tabela no Banco de Dados
	$sql = "SELECT d.id_desc,p.nome_pro, s.nome, d.preco FROM descricao AS d
        INNER JOIN produto AS p
        ON p.id_pro= d.pro
        INNER JOIN sabor AS s
        ON s.id_s = d.sabor WHERE p.nome_pro= 'Trufa '";
	
	// executando instrução SQL
	$instrucao = mysqli_query($conexao,$sql);
    //coverter o array em registro
    $resultado = mysqli_fetch_array($instrucao);

    //concluindo operação
    echo "<form><table>
    <th></th>
    <th></th>
    <th></th>   <!--linha de espaço-->
    <th></th>   <!--linha de espaço-->
    <th></th>   <!--linha de espaço-->

    <th></th>
    ";
    foreach ($instrucao as $exibe) 
    {

       
        echo "   <tr>
        <td align='center'><input type='radio' id='pedido' name='pedido' value=".$exibe['id_desc']."</td> 
        <td '><label for=".$exibe['nome_pro'].">".$exibe['nome_pro']." de ".$exibe['nome']."</label></td>
        <td></td>   <!--linha de espaço-->
        <td></td>   <!--linha de espaço-->
        <td></td>   <!--linha de espaço--> 
        <td align='center'><label for=".$exibe['preco'].">".$exibe['preco']."</label></td>
        <td> <input type='number' name='quantidade' placeholder= 'Selecione a quantidade' max='100' min='0'/> <td>
       
        </tr></form>
        ";
    }
    echo "</table>  ";
    mysqli_close($conexao);
?>