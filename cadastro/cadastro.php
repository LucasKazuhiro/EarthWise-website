<!DOCTYPE html>
<html lang="PT-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="cadastro.css">
        <title> Cadastre-se na EarthWise! </title>

        <link rel="stylesheet" href="../menu-footer/footer/footer.css">
        <link rel="stylesheet" href="../menu-footer/menu/menu.css">
        <link rel="stylesheet" href="reponsive-cadastro.css">
    </head>
    <body>
        <div id="geral">
            <?php include '../menu-footer/menu/menu.php';?>
            <div id="geral2">
                <div id="cadastro">
                    <form action="" method="post">
                        <h1> Cadastre-se na <span style="color: #278e27;">EarthWise!</span></h1>

                        <div class="input-field">
                            <input type="text" name="usr_name" placeholder="Username" required maxlength="23">
                            <img src="img/username.png" alt="" class="cadastrar-icons" id="username-icon">
                        </div>

                        <div class="input-field">
                            <input type="email" name="usr_email" placeholder="Email" required maxlength="35">
                            <img src="img/email.png" alt="" class="cadastrar-icons" id="email-icon">
                        </div>

                        <div class="input-field">
                            <input type="password" id="password" name="usr_senha" placeholder="Senha" required maxlength="23"> 
                            <img src="img/senha.png" alt="" class="cadastrar-icons" id="senha-icon">

                            <img src="img/esconder-senha.png" alt="" id="esconder-senha" class="esconder-mostrar-senha" onclick="senhaMostrar()">
                            <img src="img/mostrar-senha.png" alt="" id="mostrar-senha" class="esconder-mostrar-senha" onclick="senhaMostrar()">


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

                        <a href="../Home/home.php"> <p> Já tem uma conta? </p> </a>

                        <div id="mensagem-box">

                        <?php
                            include_once "../db/conexao.php";    
                            if(isset($_POST["usr_name"]) && isset($_POST["usr_email"]) && isset($_POST["usr_senha"])){
                                $userName = $_POST["usr_name"];
                                $userEmail = $_POST["usr_email"];
                                $userSenha = $_POST["usr_senha"];
                                    
                                $consulta = "insert into usuarios values ";
                                $consulta .= "(NULL,'$userName','$userEmail','$userSenha');";
                                
                                // execução da consulta
                                $resultado = mysqli_query($mysqli,$consulta);
                                
                                // verifica se a consulta foi efetivada ou não
                                if ($resultado === FALSE) {
                                    echo "<span class='mensagem'> Erro na inclusão do registro... <span>". mysqli_error($mysqli); 
                                }else {
                                    echo "<span class='mensagem'> Cadastro concluído com sucesso! </span>"; 
                                    mysqli_close($mysqli);	
                                }
                            }
                        ?>

                        </div>
                        <button type="submit" id="btnCadastrar"> Cadastrar-se Agora </button>
                    </form> 
                </div>
            </div>

            <div id="box-footer">
                <?php include '../menu-footer/footer/footer.html';?>
            </div>
        </div>

        
    </body>
    <script src="../menu-footer/menu/menu.js"></script>
</html>