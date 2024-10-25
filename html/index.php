<?php 
    include 'menu-footer/menu/session_start.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="index.css">
        <title> Home </title>

        <link rel="stylesheet" href="menu-footer/footer/footer.css">
        <link rel="stylesheet" href="menu-footer/menu/menu.css">
        <link rel="stylesheet" href="index-responsive.css">
    </head>
    <body>
        <div id="geral">
            <?php include 'menu-footer/menu/menu.php';?>

            

            <div id="geral2">
                <div id="box-login">
                    <div id="reponsive-box-login">
                        <div id="box-texto-empresa">
                            <h1> Porque você deveria se juntar a EarthWise? </h1>

                            <p>
                                A EarthWise é uma empresa de notícias digitais voltada para os casos ambientais. Ela foi criada visando conscientizar 
                                a população sobre a importância da conservação da Natureza. Nosso objetivo é proteger o meio ambiente e para isso 
                                precismos de você! Isso mesmo, você e muitas outras pessoas podem se juntar ao nosso projeto, cadastre-se em nosso 
                                site e esteja por dentro de impotantes notícias ecológicas!
                            </p>
                        </div>
                        <div id="box-login-2">
                            <form action="" method="POST">
                                <h1> Entre na <span style="color: #278e27;">EarthWise!</span></h1>

                                <div class="input-field">
                                    <input type="email" name="email" placeholder="Email" required maxlength="35">
                                    <img src="cadastro/img/email.png" alt="" class="cadastrar-icons" id="email-icon">
                                </div>

                                <div class="input-field">
                                    <input type="password" id="password" name="senha" placeholder="Senha" required maxlength="23">
                                    <img src="cadastro/img/senha.png" alt="" class="cadastrar-icons" id="senha-icon">

                                    <img src="cadastro/img/esconder-senha.png" alt="" id="esconder-senha" class="esconder-mostrar-senha" onclick="senhaMostrar()">
                                    <img src="cadastro/img/mostrar-senha.png" alt="" id="mostrar-senha" class="esconder-mostrar-senha" onclick="senhaMostrar()">


                                    <script>
                                        var state = false;
                                        
                                        function senhaMostrar(){
                                            if(state){
                                                document.getElementById("password").setAttribute("type", "password");
                                                state = false;

                                                document.getElementById('esconder-senha').style.display = 'inline';
                                                document.getElementById('mostrar-senha').style.display = 'none';
                                            } else{
                                                document.getElementById("password").setAttribute("type", "text");
                                                state = true;

                                                document.getElementById('esconder-senha').style.display = 'none';
                                                document.getElementById('mostrar-senha').style.display = 'inline';
                                            }
                                        }
                                    </script>
                                </div>

                                <a href="cadastro/cadastro.php"> <p> Não possui um conta? </p> </a>
                                
                                <div id="mensagem-box">
                                    <?php
                                        include('db-connection/conexao.php');
                                        

                                        if(isset($_POST['email']) || isset($_POST['senha'])) {
                                                $email = $mysqli->real_escape_string($_POST['email']);
                                                $senha = $mysqli->real_escape_string($_POST['senha']);

                                                $stmt = $mysqli->prepare("SELECT id, nome, email, senha FROM usuarios WHERE email = ?");
                                                $stmt->bind_param("s", $email);
                                                $stmt->execute();
                                                $stmt->store_result();

                                                if($stmt->num_rows > 0){
                                                    $stmt->bind_result($userId, $userNome, $userEmail, $senha_hashed);
                                                    
                                                    $stmt->fetch();

                                                    if(password_verify($senha, $senha_hashed)){
                                                        if(!isset($_SESSION)) {
                                                            session_start();
                                                        }

                                                        $_SESSION['id'] = $userId;
                                                        $_SESSION['nome'] = $userNome;
                                                        $_SESSION['trava'] = '1';

                                                        echo "<span class='mensagem'> Login efetuado com sucesso! </span>";
                                                        echo '<script type="text/javascript">';
                                                        echo 'window.location.href = "/";';
                                                        echo '</script>';
                                                    }
                                                    else{
                                                        echo "<span class='mensagem'> E-mail e/ou Senha incorretos! </span>";
                                                    }
                                                }
                                                else {
                                                    echo "<span class='mensagem'> E-mail e/ou senha incorretos! </span>";
                                                }
                                        }
                                    ?>
                                </div>

                                <script>
                                    if ( window.history.replaceState ) {
                                        window.history.replaceState( null, null, window.location.href );
                                    }
                                </script>
                                
                                <button type="submit" id="btnLogin"> Entrar Agora </button>

                            </form>
                        </div>
                    </div>
                </div>

                <div id="box-noticia">
                    <div id="box-noticia-2">
                        <div id="box-noticia-titulo">
                            <h2> Notícias em Destaque </h2>
                        </div>

                        <div id="box-noticia-3-grid">
                            <a href="conteudo-pags/materia-LogisticaReversa/LogisticaReversa.php">
                                <div class="box-noticia-4">
                                    <div class="box-imagem-noticia">
                                        <img src="conteudo-pags/materia-noticias/noticias-logistica-reversa.png" alt="Logística Reversa, tudo sobre o assunto" class="imagem-noticia">
                                        <div class="imagem-noticia-sombra"> </div>
                                    </div>
                                    <p class="noticias-letra"> Logística Reversa, tudo sobre o assunto </p>
                                    <p class="ler-agora"> Ler agora <img src="imagem/seta-ler-noticia.png" alt="" class="seta-ler-artigo"> </p>
                                </div>
                            </a>

                            <a href="conteudo-pags/materia-Reciclagem/Reciclagem.php">
                                <div class="box-noticia-4">
                                    <div class="box-imagem-noticia">
                                        <img src="conteudo-pags/materia-noticias/noticias-reciclagem.png" alt="A Importância da Reciclagem" class="imagem-noticia">
                                        <div class="imagem-noticia-sombra"> </div>
                                    </div>
                                    <p class="noticias-letra"> A Importância da Reciclagem </p>
                                    <p class="ler-agora"> Ler agora <img src="imagem/seta-ler-noticia.png" alt="" class="seta-ler-artigo"> </p>
                                </div>
                            </a>

                            <a href="conteudo-pags/materia-TiposDeLixo/TiposDeLixo.php">
                                <div class="box-noticia-4">
                                    <div class="box-imagem-noticia">
                                        <img src="conteudo-pags/materia-noticias/noticias-tipos-de-lixo.png" alt="Quais são os tipos de lixo?" class="imagem-noticia">
                                        <div class="imagem-noticia-sombra"> </div>
                                    </div>
                                    <p class="noticias-letra"> Quais são os tipos de lixo? </p>
                                    <p class="ler-agora"> Ler agora <img src="imagem/seta-ler-noticia.png" alt="" class="seta-ler-artigo"> </p>
                                </div>
                            </a>

                            <a href="conteudo-pags/materia-DescarteDeLixoEletronico/DescarteLixoEletronico.php">
                                <div class="box-noticia-4">
                                    <div class="box-imagem-noticia">
                                        <img src="conteudo-pags/materia-noticias/noticias-lixo-eletronico.png" alt="Capivaras são animais considerados em perigo de extinção" class="imagem-noticia">
                                        <div class="imagem-noticia-sombra"> </div>
                                    </div>
                                    <p class="noticias-letra"> Lixo Eletrônico e seus problemas para o meio ambiente </p>
                                    <p class="ler-agora"> Ler agora <img src="imagem/seta-ler-noticia.png" alt="" class="seta-ler-artigo"> </p>
                                </div>
                            </a>

                            <a href="conteudo-pags/materia-CarroEletrico/CarroEletrico.php">
                                <div class="box-noticia-4">
                                    <div class="box-imagem-noticia">
                                        <img src="conteudo-pags/materia-noticias/noticias-carro-eletrico.png" alt="Capivaras são animais considerados em perigo de extinção" class="imagem-noticia">
                                        <div class="imagem-noticia-sombra"> </div>
                                    </div>
                                    <p class="noticias-letra"> Carro Elétrico vale a Pena </p>
                                    <p class="ler-agora"> Ler agora <img src="imagem/seta-ler-noticia.png" alt="" class="seta-ler-artigo"> </p>
                                </div>
                            </a>

                            <a href="#">
                                <div class="box-noticia-4">
                                    <div class="box-imagem-noticia">
                                        <img src="conteudo-pags/materia-noticias/noticias-aquecimento-global.PNG" alt="Os problemas gerados pelo Aquecimento Global" class="imagem-noticia">
                                        <div class="imagem-noticia-sombra"> </div>
                                    </div>
                                    <p class="noticias-letra"> Os problemas gerados pelo Aquecimento Global </p>
                                    <p class="ler-agora"> Ler agora <img src="imagem/seta-ler-noticia.png" alt="" class="seta-ler-artigo"> </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>



                
            </div>
        </div>

        <div id="box-footer">
            <?php include 'menu-footer/footer/footer.html';?>
        </div>
    </body>
    <script src="menu-footer/menu/menu.js"></script>
</html>