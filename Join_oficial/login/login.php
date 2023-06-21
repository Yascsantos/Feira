<!--EXECUÇÃO DE PHP-->
<?php
    include_once("../conexaoBD.php");
?>

<!--FORMULÁRIO DE LOGIN-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="icon" type="imagem/png" href="imgs/icon.png" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/1ab94d0eba.js" crossorigin="anonymous"></script>
    <script src="https://accounts.google.com/gsi/client" async defer></script>
    <script src="https://unpkg.com/jwt-decode/builid/jwt-decode.js"></script>
    <script>
        function handleCredentialResponse(response) {
       const data = jwt_decode(response.creential)
       console.log(data)
        }
        window.onload = function () {
          google.accounts.id.initialize({
            client_id: "438995254297-haloblbi7ltlpvul8d7te877rjbpsbcm.apps.googleusercontent.com",
            callback: handleCredentialResponse
          });
          google.accounts.id.renderButton(
            document.getElementById("buttonDiv"),
            { theme: "filled_black",
            size: "large",
            type:"standard",
            shape:"pill",
            text:"${button.text}",
            locale:"br",
            logo_alignment :"left",
            width:"300"


        }  // customization attributes
          );
          google.accounts.id.prompt(); // also display the One Tap dialog
        }
    </script>
    <title>Login| Join in the Spoon</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
<header id="menu">
      
       
      <nav >
        <div class="logo"><img src="imagens/logo.png"  ></div>

       
        <ul class="nav-list">
          <li><a href="https://goo.gl/maps/E9MvDvJCDCmGBeWX7">ENDEREÇO</a></li>
          <li><a href="../Cadastro/cadastro.html">CADASTRE-SE</a></li></i>
      
         
        </ul>

       </nav>
</header>
   
    <main class="container">
        
        <h2>Login</h2>
        <div>  
            <label>
                Ainda não possui cadastro?<br>
                <a href="../Cadastro/cadastro.html">CADASTRE-SE</a>
            </label>
        </div>
        <form action="" method="post">
            <div class="input-field">
                <input type="text" name="usuario" id="usuario" placeholder="Enter Your Name">
                    <div class="underline"></div>
            </div>
            
            <div class="input-field">
                <input type="password" name="senha" id="senha" placeholder="Enter Your Password">
                    <div class="underline"></div>
            </div>

            <input type="submit" name="Logar" value="Logar">
        </form>

        <div class="footer">
        <span>Or Connect With Google</span>
        <div id="buttonDiv"></div>
</div>

    </main>
   
</body>
<script src="js/modal.js"></script>

<!--EXECUÇÃO DE PHP-->
<?php

    if(isset($_POST['usuario']) || isset($_POST['senha']))
    {
        if(strlen($_POST['usuario']) == 0)
        {
            echo "Preencha seu nome";
        }
        else if(strlen($_POST['senha']) == 0)
        {
            echo "Preencha sua senha";
        }
        else 
        {
            //selecionando o usuário e a senha 
            $usuario= $conexao->real_escape_string($_POST['usuario']);
            $senha= $conexao->real_escape_string($_POST['senha']);

            $sql_code= "SELECT * FROM cadastro WHERE nome= '$usuario' AND senha='$senha'";
            $sql_query= $conexao->query($sql_code) or die("Falha na execução do códigdo SQL: ". mysqli_error($conexao));

            
            //selecionando o usuário e a senha     
            $quantidade= $sql_query->num_rows;

            if($quantidade == 1)
            {
                $usuario = $sql_query->fetch_assoc();
                
                if(!isset($_SESSION))
                {
                    session_start();
                }

                $_SESSION['id'] = $usuario['id_user'];
                $_SESSION['nome'] = $usuario['nome'];

                header("Location: ../index/index.php");

            }
            else
            {
                echo "<center>Falha ao Logar!
                      <br> 
                      Usuário ou senha incorretos </center>";
            }
        }

    }


?>