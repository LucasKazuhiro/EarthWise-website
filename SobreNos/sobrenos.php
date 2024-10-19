<!DOCTYPE html>
<html lang="PT-BR" class="-mode">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css-sobrenos.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@200;300;400;500;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="../MenuFooter/footer/footer.css">
        <link rel="stylesheet" href="responsive-sobrenos.css">
        <link rel="stylesheet" href="../MenuFooter/menu/menu.css">

        <title> Sobre Nós </title>

        <style>
            #geral{
                height: 2800px;
            }


            .box-destaque-letra{
                position: relative;
            }

                .destaque-letra{
                    color: var(--destaque-color);
                }
                
                .destaque-letra:after{
                    content: "";
                    position: absolute;
                    background-color: #249633;
                    height: 2px;
                    width: 100%;
                    border-radius: 10px;
                    left: 0;
                    top: 18px;
                    transition: 0.4s;
                }

                .destaque-letra:hover:after{
                    width: 0%;
                }

        </style>
    </head>
    <body>
<!-- -- -- -- Geral -- -- -- -->
        <div id="geral">
            <div id="container">
            <!-- -- -- -- Menu -- -- -- -->
                <div id="secao-1">
                    <?php include '../MenuFooter/menu/menu.php';?>

                    <div id="aboutus">
                        <div id="aboutus-2">
                            <div id="img-div">
                                <img src="../MenuFooter/menu/Logotipo.png" alt="">
                            </div>
                            <div id="sobrenos-box-texto">
                                <h1 id="sobrenos-title"> Sobre Nós </h1>
                                <h2 id="slogan"> O amanhã depende de nós! </h2>
                                <p id="sobrenos-texto"> 
                                    A <a href="#"><span class="box-destaque-letra"><span class="destaque-letra">EarthWise</span></span></a>  
                                    é uma empresa de notícias digitais voltada para os casos ambientais. Ela foi criada visando conscientizar a 
                                    população sobre a importância da conservação da Natureza. Esperamos ajudar você a entender uma pouco mais sobre esse 
                                    mundo ecológico.
                                </p>

                                <div id="box-btns">
                                    <a href="#secao-2" class="btn"> NOSSO TIME </a>
                                    <a href="#secao-3" class="btn"> COMENTÁRIOS </a>
                                </div>
                            </div>
                            <div id="dark-mode-box">
                                <span id="dark-mode-text"> Dark Mode </span>
                                <div id="dark-mode-checkbox">
                                    <label for="switch" id="label-dark-mode">
                                        <input type="checkbox" id="switch">
                                        <span class="slider"></span>
                                    </label>
                                </div>
                            </div>
                            
                        </div>
                        
                        
                    </div>
                </div>

                <div id="secao-2">
                    <h1 id="nossotime-title"> Nosso <span id="nossotime-title-destaque">Time</span></h1>
                    <div id="team">
                        <div class="team-member">
                            <div class="team-img">
                                <img src="img-sobrenos/DanielSilva.png" alt="">
                            </div>
                            <h3> Daniel F. S. Silva </h3>
                            <p class="cargo"> Support Analyst </p>
                            <p> 
                                Aluno, 17 anos, cursando o último ano de desenvolvimento de sistemas, gosta de acompanhar esportes como futebol,
                                e pretende seguir na área da tecnologia se aprodando no assunto.
                            </p>

                            <div id="box-redes-sociais">
                                <a href="#" target=”_blank”>
                                    <img src="../../SiteTCC/PaginaDeConteudo/imagem/instagram-icon.png" alt="Instagram do Editor da Página" class="time-redes-sociais primeiro-item">
                                </a>
                            </div>
                        </div>

                        <div class="team-member">
                            <div class="team-img">
                                <img src="img-sobrenos/FelipeSantos.jpg" alt="">
                            </div>
                            <h3> Felipe A. Santos </h3>
                            <p class="cargo"> Front-End </p>
                            <p> 
                            Felipe, tem 18 anos, atualmente está no último ano do Ensino Médio e estuda na Etec Parque Belém no curso de Desenvolvimento 
                            de sistema. Desde sempre almejou seguir uma carreina área militar ou na área de Tecnologia da Informação.
                            </p>

                            <div id="box-redes-sociais">
                                <a href="https://www.instagram.com/tuahiro/" target=”_blank”>
                                    <img src="../../SiteTCC/PaginaDeConteudo/imagem/instagram-icon.png" alt="Instagram do Editor da Página" class="time-redes-sociais primeiro-item">
                                </a>
                            </div>
                        </div>

                        <div class="team-member">
                            <div class="team-img">
                                <img src="img-sobrenos/GustavoFragas.jpg" alt="">
                            </div>
                            <h3> Gustavo F. Cunha </h3>
                            <p class="cargo"> Back-End </p>
                            <p> 
                                Gustavo Fragas, 18 anos, desde jovem trabalha para ajudar no sustento da casa e começar sua independência 
                                financeira. Aos 15 anos iniciou o curso de Desenvolvimento de Sistemas.
                            </p>

                            <div id="box-redes-sociais">
                                <a href="https://instagram.com/fragas_gustavo?igshid=ZmRlMzRkMDU=" target=”_blank”>
                                    <img src="../../SiteTCC/PaginaDeConteudo/imagem/instagram-icon.png" alt="Instagram do Editor da Página" class="time-redes-sociais primeiro-item">
                                </a>
                            </div>
                        </div>

                        <div class="team-member">
                            <div class="team-img">
                                <img src="img-sobrenos/LucasKazuhiro.jpg" alt="">
                            </div>
                            <h3> Lucas K. Okokama </h3>
                            <p class="cargo"> Front-End </p>
                            <p> 
                                Um estudante de DS paixonado por filmes, séries e animes.  Adora tudo relacionado a Tecnologia e Design, especialmente
                                fotografia, edição de vídeo, design de interiores e front-end.
                            </p>

                            <div id="box-redes-sociais">
                                <a href="https://www.instagram.com/tuahiro/" target=”_blank”>
                                    <img src="../../SiteTCC/PaginaDeConteudo/imagem/instagram-icon.png" alt="Instagram do Editor da Página" class="time-redes-sociais primeiro-item">
                                </a>
                                <a href="https://myanimelist.net/profile/HiroshiLKO" target="_blank">
                                    <img src="../../SiteTCC/PaginaDeConteudo/imagem/myanimelist-icon.png"" alt="MyAnimeList do Editor da Página" class="time-redes-sociais segundo-item">
                                </a>
                                <a href="https://www.youtube.com/channel/UCtRREkTLWYNkZuxYDDKikaA" target="_blank">
                                    <img src="../../SiteTCC/PaginaDeConteudo/imagem/youtube-icon.png" alt="Canal do Youtube do Editor da Página" class="time-redes-sociais terceiro-item">
                                </a>
                            </div>
                            <a href="comentarios-simplylink.html"><img src="img-sobrenos/EasterEgg.jpg" alt="" width="0.5px" style="float: right;"></a>
                        </div>

                        <div class="team-member">
                            <div class="team-img">
                                <img src="img-sobrenos/PauloNicolas.jpg" alt="">
                            </div>
                            <h3> Paulo N. M. Pereira </h3>
                            <p class="cargo"> Support Analyst </p>
                            <p> 
                            Paulo Nicolas é um jovem que gosta muito de assistir séries, filmes, jogar vídeo game, andar de skate 
                            e ama cachorrinhos. Para manter a saúde, ele faz uma série de exercício físicos todos os dias. 
                            Seus hobbies preferidos são tocar piano e violão.
                            </p>

                            <div id="box-redes-sociais">
                                <a href="#" target=”_blank”>
                                    <img src="../../SiteTCC/PaginaDeConteudo/imagem/instagram-icon.png" alt="Instagram do Editor da Página" class="time-redes-sociais primeiro-item">
                                </a>
                            </div>
                        </div>

                        <div class="team-member">
                            <div class="team-img">
                                <img src="img-sobrenos/ViniciusRyan.jpg" alt="">
                            </div>
                            <h3> Vinicius R. R. Pereira </h3>
                            <p class="cargo"> Web Design </p>
                            <p> 
                                Um é um jovem de 18 anos que ingressou na área de Programação em 2020. É um forte apoiador de causas que envolvam
                                preservação ambiental. Gosta muito de música, filmes, séries, jogos e animes.
                            </p>

                            <div id="box-redes-sociais">
                                <a href="https://www.instagram.com/tuahiro/#" target=”_blank”>
                                    <img src="../../SiteTCC/PaginaDeConteudo/imagem/instagram-icon.png" alt="Instagram do Editor da Página" class="time-redes-sociais primeiro-item">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="secao-3">
                    <h1 id="comentarios-title"> Nossos <span id="comentarios-title-destaque"> Comentários </span></h1>

                    <div id="comentarios">
                        <div class="main">
                            <div class="box-comentarios">
                                <div class="comentarios-foto-perfil">
                                    <img src="img-sobrenos/profile-picture-comentarios-1.jpg" alt="">
                                </div>
                                <h4> Thaís S. T. Melo </h4>

                                <img src="img-sobrenos/aspas-esquerda.png" class="aspas left-aspas">
                                <p>
                                    "Eu e a minha filha adoramos ler as postagens, todos os dias nós pegamos um tempo para aprender 
                                    um pouco mais sobre esses assuntos. Eu acho que ensinar as crianças sobre isso é bem importante!"
                                </p>
                                <img src="img-sobrenos/aspas-direita.png" class="aspas right-aspas">
                            </div>

                            <div class="shadow1"></div>
                            <div class="shadow2"></div>
                        </div>

                        <div class="main">
                            <div class="box-comentarios">
                                <div class="comentarios-foto-perfil">
                                    <img src="img-sobrenos/profile-picture-comentarios-2.jpg" alt="">
                                </div>
                                <h4> Diego C. Silva</h4>

                                <img src="img-sobrenos/aspas-esquerda.png" class="aspas left-aspas">
                                <p> 
                                    "O Site é muito legal, realmente eu aprendi muito sobre presenvação do meio ambiente. Hoje em dia, esse assunto
                                    está em alta e é realmente bom saber que há pessoas que sem preocupam com isso!"
                                </p>
                                <img src="img-sobrenos/aspas-direita.png" class="aspas right-aspas">
                            </div>

                            <div class="shadow1"></div>
                            <div class="shadow2"></div>
                        </div>

                        <div class="main">
                            <div class="box-comentarios">
                                <div class="comentarios-foto-perfil">
                                    <img src="img-sobrenos/profile-picture-comentarios-3.jpg" alt="">
                                </div>
                                <h4> Rogério T. Laiena </h4>

                                <img src="img-sobrenos/aspas-esquerda.png" class="aspas left-aspas">
                                <p> 
                                    "Recomendei esse site para meus colegas de Téc. de Meio Ambiente. Obrigado por este excelente trabalho, as explicações 
                                    são muito didáticas e objetivas. Façam um post sobre as Unidades de Conservação (UC)."
                                </p>
                                <img src="img-sobrenos/aspas-direita.png" class="aspas right-aspas">
                            </div>

                            <div class="shadow1"></div>
                            <div class="shadow2"></div>
                        </div>
                        
                    </div>
                </div>
            </div>

            
            <div id="box-footer">
                <?php include '../MenuFooter/footer/footer.html';?>
            </div>
        </div>
    </body>


    <script src="js-sobrenos.js"></script>
    <script src="../MenuFooter/menu/menu.js"></script>
</html>