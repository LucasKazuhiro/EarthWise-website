<nav>
    <div id="box-menu">
        <div id="box-menu-2">
            <div class="logo"> 
                <a href="../../../SiteTCC/Home/home.php"><img src="../../../SiteTCC/MenuFooter/menu/Logotipo.png" alt="" id="logotipo"></a>
            </div>

            

            <div id="centralizar-menu">
                <ul>
                    <li> <a href="../../../SiteTCC/Home/home.php"> Home </a> </li>
                    <li> <a href="../../../SiteTCC/SobreNos/sobrenos.php"> Sobre Nós</a> </li>
                    <li> <a href="../../../SiteTCC/LoginCadastro/cadastro.php"> Cadastro </a> </li>
                </ul>
            </div>

            <div id="box-logado-menu-compactado">
                <div id="box-logado">
                    <span> 
                        <?php 
                            error_reporting(E_ALL ^ E_NOTICE);  

                            if(!isset($_SESSION)) {
                                session_start();

                                ?>
                                <div id="nome">
                                    <?php
                                        if(isset($_SESSION['nome'])){
                                            echo $_SESSION['nome']; 
                                        }
                                    ?>
                                </div>

                                <?php
                                if(isset($_SESSION['trava']) && $_SESSION['trava'] == '1'){
                                    echo "<a href='../../../SiteTCC/Home/logout.php' id='sair'> Sair </a>";
                                    
                                } else{
                                    echo "<span id='convidado'> Convidado </span>";
                                
                                } 
                            }
                        ?>
                        
                    </span>
                </div>
                <div class="menu-btn">
                    <i class="fa fa-bars fa-2x" onclick="menuShow()"></i>
                </div>
            </div>
        </div>
    </div>
</nav>