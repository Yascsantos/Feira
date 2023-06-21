<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="icon" type="imagem/png" href="../login/icon.png" />
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../login/css/protect.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/1ab94d0eba.js" crossorigin="anonymous"></script>
    <title>Inicio| Join in the Spoon</title>
   
</head>
<style>
  
        body{
            background-image:url(../login/backgroud.gif);
            background-size: cover;
            background-position: 50% 5%;

        }
    
  
   
</style>
<body>


<?php
    if(!isset($_SESSION))
    {
        session_start();
    }

    if(!isset($_SESSION['id']))
    {
        die
        (" <header><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR></header>
         <center><form>
        <h2 ><b>Tá doido, é? Cê nem logou ainda.<br> /:</b></h2> <br>
        <button type='button'><a href='../login/login.php'>CLIQUE AQUI PARA LOGAR </a></button></form></center>
        ");
    }
    
?>
</body><html>