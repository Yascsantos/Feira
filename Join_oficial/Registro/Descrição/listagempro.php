<?php
	//Conectando ao banco
	include_once("../../conexaoBD.php");
	//Tabela no BD
	//$tabela="descricao";
	
	//Script de uma busca em uma tabela no Banco de Dados
	$sql = "SELECT id_desc AS codigo, nome_pro, s.nome AS sabor, preco FROM descricao d
			INNER JOIN produto p ON d.pro = p.id_pro
			INNER JOIN sabor s ON d.sabor = s.id_s
			";
	
	// executando instrução SQL
	$instrucao = mysqli_query($conexao,$sql);
	echo "<style> 
	   body{
		background-image: url(../Descrição/imgs/fundo.jpg);
		background: cover;
		background-position: 50%  20%;
	   }
	   @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap');

	   * {
	   box-sizing: border-box;
	   font-family: 'Poppins', sans-serif;
	   }
    
   
    a{
    font-family: 'Poppins', sans-serif;
    font-size: 0.9rem;
    font-size: 0.9rem;
    font-weight:600;
    color:#333235;
    }
    
    
    a:hover{
    color:#33323591;
    }
    
    .form{
    background-color: rgba(255, 255, 255, 0.4);
    backdrop-filter: blur(40px);
    padding: 30px 40px;
    width: 50%;
    border-radius:20px ;
    top:auto;
    
    }
    h2{
    font-size: 30px;
    text-align: center;
    }
	tr td th{
		margin: 5px;
		border: 2px;
		padding: 5px;
		
	}
	   </style>";
	echo "<body>";
	echo"<br><br><br><br><br><br><br><br><br><br><br>";
	echo "<center>";
	echo "<div class='form'";
//Retorna uma matriz associativa dos dados
	echo "<br/><a href='../index.html'>Voltar</a><br/>";
	echo "<h3>Lista de Produtos</h3>";
//gera uma tabela pela tag table
echo "<table>
	<tr>
	<th></th>
	<th> </th>
	<th> </th>
	<th>Código</th>
	<th>  </th>
	<th>Produto</th>
	<th>  </th>
	<th>Sabor</th>
	<th>  </th>
	<th>Preço</th>
	<th></th>
	<th></th>
	</tr>";
	
foreach ($instrucao as $exibe) {
	//cria um linha (TR) para cada registro existente na tabela
	//cada TD representa um campo do registro
	echo "<tr>
	<td align='center'><a href='editdescpro.php?&codigo=".$exibe['codigo']."'>Editar</a></td>
	<td></td><td></td>
	<td align='center'>".$exibe['codigo']."</td>
	<td></td>
	<td align='center'>".$exibe['nome_pro']."</td>
	<td></td>
	<td align='center'>".$exibe['sabor']."</td>
	<td></td>
	<td align='center'>".$exibe['preco']."</td>
	<td></td>
	<td align='center'><a href='delete_ped.php?&codigo=".$exibe['codigo']."'>Remover</a></td> <td></td>
	</tr>";
}
echo "</table>";
echo "</div>";
echo "</center>";
echo "</body>";
mysqli_close($conexao);


?>