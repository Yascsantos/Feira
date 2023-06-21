<?php
	include('../login/protect.php');
?>
<!DOCTYPE html>
<html lang="port">
<head>
    <link rel="icon" type="imagem/png" href="imagens/icon.png" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre|Join in the Spoon</title>
    
    <link rel="stylesheet" href="css/sobre.css">
</head>
<style>
body {
background-color:#e9d1d0f5;
}
</style>
<body>
    <div class="scroll-up-btn">
        <ion-icon name="chevron-up-outline"></ion-icon>
    </div>
    <div class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#sobre">Sobre <span>nós</span></a></div>
            <ul class="menu">
                <li><a href="../index/index.php">INICIO</li></a>
                <li><a href="../contato/contato.html">CONTATO</a></li>
                <li><a href="#equipe">EQUIPE</a></li>
                <li><a href="https://goo.gl/maps/E9MvDvJCDCmGBeWX7">ENDEREÇO</a></li>
                <li><a href="../logout.php">SAIR</a></li>
            </ul>
            <div class="menu-btn">
                <ion-icon name="menu-outline"></ion-icon>
            </div>
        </div>
    </div>

    <!-- inicio-->
    <section class="inicio" id="inicio">
        <div class="max-width">
            <div class="inicio-content">
                <div class="text-1">Página de apresentação</div>
               
                <div class="text-3">Produzida por <span class="typing"></span></div> 
               

            </div>
        </div>
    </section>

    <!--sessão sobre-->
    <section class="sobre" id="sobre">
        <div class="max-width">
            <h2 class="title">Sobre</h2>
            <div class="sobre-content">
                <div class="column left">
                    <video controls>
                        <source  src="video/sobre_nos.mp4" type="video/mp4">
                      </video>
                </div>
                <div class="column right">
                    <div class="text">  <span class="typing-2"></span></div>
                    <p >Nesse video o Wini vai apresentar<br>
                         a funcionalidade do nosso site.</p>
                  
                        
                </div>
            </div>
        </div>
    </section>

    
     <!--sessão equipe-->
     <section class="equipe" id="equipe">
        <div class="max-width">
            <h2 class="title">Grupo</h2>
         <div class="carousel owl-carousel ">
               <div class="card">
                   <div class="box">
                       <img src="video/img-1.jpg" alt="">
                       <div class="text">Yasmin</div>
                       <p>Responsavel pelo Backend (Parte de conexão e programação do site).</p>
                   </div>
               </div>
                <div class="card">
                    <div class="box">
                        <img src="video/img-2.jpg" alt="">
                        <div class="text">Winicius</div>
                        <p>Responsavel pelo Backend ( banco de dados do site).</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="video/img-3.jpeg" alt="">
                        <div class="text">Daiane</div>
                        <p>Responsavel pelo Frontend (Estilização do site).</p>
                    </div>
                </div>
        </div>
    </section>
     <!--sessão função-->
     <section class="funcao" id="funcao">
        <div class="max-width">
            <h2 class="title">Podcast</h2>
            <div class="funcao-content">
                <div class="column left">
                    <div class="text">Aperte o play para escutar nosso podcast de apresentação.</div>
                    <p></p>
                    <a href=""></a><audio controls>
                        <source  src="video/audio_sobre.mp3" type="audio/mp3">
                    </audio></a>
                    
                </div>
                <div class="column right">
                   <div class="bars">
                       <div class="info">
                           <span>Daiane-HTML</span>
                           <span>100%</span>
                       </div>
                       <div class="line html"></div>
                   </div>
                   <div class="bars">
                    <div class="info">
                        <span>Daiane-CSS</span>
                        <span>100%</span>
                    </div>
                    <div class="line css"></div>
                </div>
                <div class="bars">
                    <div class="info">
                        <span>Yasmin-PHP</span>
                        <span>100%</span>
                    </div>
                    <div class="line php"></div>
                </div>
                <div class="bars">
                    <div class="info">
                        <span>Winicius-MySQL</span>
                        <span>100%</span>
                    </div>
                    <div class="line mysql"></div>
                </div>
                </div>
            </div>
        </div>
    </section>



    <!--sessão  footer-->
    <footer>
        <span>Criado <a href="#">Para</a> | Fins Pedagógicos</span>
    </footer>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/script.sobre.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

</body>
</html>