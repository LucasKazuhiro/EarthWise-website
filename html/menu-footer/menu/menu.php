<nav>
    <div id="box-menu">
        <div id="box-menu-2">
            <div class="logo"> 
                <a href="/"><img src="../../menu-footer/menu/Logotipo.png" alt="" id="logotipo"></a>
            </div>

            <div id="centralizar-menu">
                <ul>
                    <li><a href="/"> Home </a></li>
                    <li><a href="../../sobre-nos/sobrenos.php"> Sobre Nós</a></li>
                    <li><a href="../../cadastro/cadastro.php"> Cadastro </a></li>
                </ul>
            </div>

            <div id="box-logado-menu-compactado">
                <div id="box-logado">
                    <span> 
                        <?php 
                            error_reporting(E_ALL ^ E_NOTICE);  
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
                            echo "<a href='../../logout.php' id='sair'> Sair </a>";
                        } else {
                            echo "<span id='convidado'> Convidado </span>";
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
