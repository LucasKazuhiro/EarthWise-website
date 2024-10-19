<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="home.css">
        <title> Home </title>

        <link rel="stylesheet" href="../MenuFooter/footer/footer.css">
        <link rel="stylesheet" href="../MenuFooter/menu/menu.css">
        <link rel="stylesheet" href="../Home/reponsive-home.css">
    </head>
    <body>
        <div id="geral">
            <?php include '../MenuFooter/menu/menu.php';?>

            

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
                                    <img src="../LoginCadastro/img/email.png" alt="" class="cadastrar-icons" id="email-icon">
                                </div>

                                <div class="input-field">
                                    <input type="password" id="password" name="senha" placeholder="Senha" required maxlength="23">
                                    <img src="../LoginCadastro/img/senha.png" alt="" class="cadastrar-icons" id="senha-icon">

                                    <img src="../LoginCadastro/img/esconder-senha.png" alt="" id="esconder-senha" class="esconder-mostrar-senha" onclick="senhaMostrar()">
                                    <img src="../LoginCadastro/img/mostrar-senha.png" alt="" id="mostrar-senha" class="esconder-mostrar-senha" onclick="senhaMostrar()">


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

                                <a href="../LoginCadastro/cadastro.php"> <p> Não possui um conta? </p> </a>
                                
                                <div id="mensagem-box">
                                    <?php
                                        include('../BancoDeDados/conexao.php');
                                        

                                        if(isset($_POST['email']) || isset($_POST['senha'])) {
                                                

                                                $email = $mysqli->real_escape_string($_POST['email']);
                                                $senha = $mysqli->real_escape_string($_POST['senha']);

                                                $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
                                                $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

                                                $quantidade = $sql_query->num_rows;

                                                if($quantidade == 1) {
                                                    
                                                    $usuario = $sql_query->fetch_assoc();
    
                                                    if(!isset($_SESSION)) {
                                                        session_start();
                                                    }

                                                    $_SESSION['id'] = $usuario['id'];
                                                    $_SESSION['nome'] = $usuario['nome'];
                                                    $_SESSION['trava'] = '1';


                                                    echo "<span class='mensagem'> Por favor recarregue a página! </span>";
                                                } else {
                                                    echo "<span class='mensagem'> Falha ao logar! E-mail ou senha incorretos </span>";
                                                    $_SESSION['trava'] = '0';
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
                            <a href="../PaginaDeConteudo/materia-LogisticaReversa/LogisticaReversa.php">
                                <div class="box-noticia-4">
                                    <div class="box-imagem-noticia">
                                        <img src="../PaginaDeConteudo/materia-noticias/noticias-logistica-reversa.png" alt="Logística Reversa, tudo sobre o assunto" class="imagem-noticia">
                                        <div class="imagem-noticia-sombra"> </div>
                                    </div>
                                    <p class="noticias-letra"> Logística Reversa, tudo sobre o assunto </p>
                                    <p class="ler-agora"> Ler agora <img src="../imagem/seta-ler-noticia.png" alt="" class="seta-ler-artigo"> </p>
                                </div>
                            </a>

                            <a href="../PaginaDeConteudo/materia-Reciclagem/Reciclagem.php">
                                <div class="box-noticia-4">
                                    <div class="box-imagem-noticia">
                                        <img src="../PaginaDeConteudo/materia-noticias/noticias-reciclagem.png" alt="A Importância da Reciclagem" class="imagem-noticia">
                                        <div class="imagem-noticia-sombra"> </div>
                                    </div>
                                    <p class="noticias-letra"> A Importância da Reciclagem </p>
                                    <p class="ler-agora"> Ler agora <img src="../imagem/seta-ler-noticia.png" alt="" class="seta-ler-artigo"> </p>
                                </div>
                            </a>

                            <a href="../PaginaDeConteudo/materia-TiposDeLixo/TiposDeLixo.php">
                                <div class="box-noticia-4">
                                    <div class="box-imagem-noticia">
                                        <img src="../PaginaDeConteudo/materia-noticias/noticias-tipos-de-lixo.png" alt="Quais são os tipos de lixo?" class="imagem-noticia">
                                        <div class="imagem-noticia-sombra"> </div>
                                    </div>
                                    <p class="noticias-letra"> Quais são os tipos de lixo? </p>
                                    <p class="ler-agora"> Ler agora <img src="../imagem/seta-ler-noticia.png" alt="" class="seta-ler-artigo"> </p>
                                </div>
                            </a>

                            <a href="../PaginaDeConteudo/materia-DescarteDeLixoEletronico/DescarteLixoEletronico.php">
                                <div class="box-noticia-4">
                                    <div class="box-imagem-noticia">
                                        <img src="../PaginaDeConteudo/materia-noticias/noticias-lixo-eletronico.png" alt="Capivaras são animais considerados em perigo de extinção" class="imagem-noticia">
                                        <div class="imagem-noticia-sombra"> </div>
                                    </div>
                                    <p class="noticias-letra"> Lixo Eletrônico e seus problemas para o meio ambiente </p>
                                    <p class="ler-agora"> Ler agora <img src="../imagem/seta-ler-noticia.png" alt="" class="seta-ler-artigo"> </p>
                                </div>
                            </a>

                            <a href="../PaginaDeConteudo/materia-CarroEletrico/CarroEletrico.php">
                                <div class="box-noticia-4">
                                    <div class="box-imagem-noticia">
                                        <img src="../PaginaDeConteudo/materia-noticias/noticias-carro-eletrico.png" alt="Capivaras são animais considerados em perigo de extinção" class="imagem-noticia">
                                        <div class="imagem-noticia-sombra"> </div>
                                    </div>
                                    <p class="noticias-letra"> Carro Elétrico vale a Pena </p>
                                    <p class="ler-agora"> Ler agora <img src="../imagem/seta-ler-noticia.png" alt="" class="seta-ler-artigo"> </p>
                                </div>
                            </a>

                            <a href="#">
                                <div class="box-noticia-4">
                                    <div class="box-imagem-noticia">
                                        <img src="../PaginaDeConteudo/materia-noticias/noticias-aquecimento-global.PNG" alt="Os problemas gerados pelo Aquecimento Global" class="imagem-noticia">
                                        <div class="imagem-noticia-sombra"> </div>
                                    </div>
                                    <p class="noticias-letra"> Os problemas gerados pelo Aquecimento Global </p>
                                    <p class="ler-agora"> Ler agora <img src="../imagem/seta-ler-noticia.png" alt="" class="seta-ler-artigo"> </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>



                
            </div>
        </div>

        <div id="box-footer">
            <?php include '../MenuFooter/footer/footer.html';?>
        </div>
    </body>
    <script src="../MenuFooter/menu/menu.js"></script>
</html>