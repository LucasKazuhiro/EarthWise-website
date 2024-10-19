<!DOCTYPE html>
<html lang="PT-BR" class="-mode">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="../css-conteudo/css-conteudo.css">
        <title> Logística Reversa, tudo sobre o assunto </title>

        <style>
            #box-content-geral{
                height: 4200px;
            }
        </style>

        <link rel="stylesheet" href="../../MenuFooter/footer/footer.css">
        <link rel="stylesheet" href="../responsive-conteudo/responsive-conteudo.css">
        <link rel="stylesheet" href="../../MenuFooter/menu/menu.css">
    </head>
    <body>
<!-- -- -- -- Geral -- -- -- -->
        <div id="geral">
            
    <!-- -- -- -- Menu -- -- -- -->
            <?php include '../../MenuFooter/menu/menu.php';?>

    <!-- -- -- -- Scroll Line -- -- -- -->
            <div id="scroll-line">
            </div>

            <div id="box1">

        <!-- -- -- -- Titulo -- -- -- -->
                <div id="box-titulo">
                    <div id="box-titulo-2">
                        <h1 class="titulo-principal has-shown"> A Importância da Reciclagem </h1>
                        <div id="box-titulo-info">
                            
                            <img src="../imagem/pfp.png" alt="Foto de Perfil" class="page-info-icon-invert has-shown">
                            <span class="titulo-info has-shown" style="animation-delay: var(--animation-delay-titulo-info-icon)"> Daniel F. S. Silva </span>

                            <img src="../imagem/calendario.png" alt="Data de Publicação" class="page-info-icon-invert has-shown">
                            <span class="titulo-info has-shown" style="animation-delay: var(--animation-delay-titulo-info-icon)"> 22/11/2022 </span>

                            <img src="../imagem/relogio.png" alt="Tempo de Leitura" class="page-info-icon-invert has-shown">
                            <span class="titulo-info has-shown" style="animation-delay: var(--animation-delay-titulo-info-icon)"> 5 Minutos de Leitura</span>
                        </div>

                        <img src="img/img-principal-reciclagem.jpg" id="img-principal-noticia" alt="Simbolo de Reciclagem">

                        <div id="dark-redes-sociais">
                            <div id="dark-mode-box">
                                <span id="dark-mode-text"> Dark Mode </span>
                                <div id="dark-mode-checkbox">
                                    <label for="switch" id="label-dark-mode">
                                        <input type="checkbox" id="switch">
                                        <span class="slider"></span>
                                    </label>
                                </div>
                            </div>

                            <div id="box-empresa-redes-sociais">
                                <div id="box-compartilhe">
                                    <span id="compartilhe"> COMPARTILHE! </span>
                                </div>
                                <div id="box-empresa-redes-socais-2">
                                    <img src="../imagem/instagram-icon.png" width="" alt="Instagram da Empresa" id="empresa-icon">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        <!-- -- -- -- Sumario-- -- -- -->
                <div id="box-content-geral">
                    <div id="box-sumario">
                        <div id="box-sumario-2">
                            <span id="sumario-title"> Vá direto ao ponto </span> <button onclick="EsconderSumario()" id="esconder-sumario-button"> [ <span id="esb-2">Esconder</span> ] </button>
    <!-- Utilizado no JS --><div id="box-esconder-sumario">
                                <a href="#o-que-e-reciclagem"> <p class="sumario-item"> <span class="underline"> 1. O que é Reciclagem? <span> <span class="seta-sumario"> ↴ </span> </p> </a>
                                <a href="#qual-a-sua-importancia"> <p class="sumario-item"> <span class="underline"> 2. Qual a sua Importância? </span> <span class="seta-sumario"> ↴ </span> </p> </a>
                                <a href="#reciclagem-no-brasil"> <p class="sumario-item"> <span class="underline"> 3. Reciclagem no Brasil </span> <span class="seta-sumario"> ↴ </span> </p> </a>
                                <a href="#como-reciclar"> <p class="sumario-item"> <span class="underline"> 4. Como Reciclar?  </span> <span class="seta-sumario"> ↴ </span> </p> </a>
                                <a href="#aterros-sanitarios-lixoes"> <p class="sumario-item"> <span class="underline"> 5. Aterros Sanitários X Lixões </span> <span class="seta-sumario"> ↴ </span> </p> </a>
                            </div>
                        </div>
                    </div>

            <!-- -- -- -- Conteudo -- -- -- -->
                    <div id="box-conteudo">
                        <div id="box-conteudo-2">
                            <h2 id="o-que-e-reciclagem" class="archor first-title-conteudo"> 
                                O QUE É RECICLAGEM?
                            </h2>
                            
                            <p class="conteudo-letra"> 
                                A reciclagem é um processo de reaproveitamento de materiais descartados, sendo o seu objetivo a reintrodução desses elementos
                                na cadeia produtiva visando atribuir-lhes um novo valor, uma nova utilidade para que possam ser reutilizados. Esse processo 
                                de reinserção dos resíduos sólidos pode ocorrer através mudanças em seus estados físico, físico-químico ou biológico.
                            </p>

                            <p class="conteudo-letra"> 
                                Isso ajuda a reduzir a produção de lixo e os problema sanitários, aumenta a preservação das matérias primas, diminui o 
                                impacto ao meio ambiente e melhora a qualidade de vida da população. 
                            </p>

                            <p class="conteudo-letra"> 
                                Muitos especialistas a considera como uma das alternativas mais eficientes para o tratamento de resíduos sólidos, 
                                tanto do ponto de vista ambienta quanto social, estando diretamente relacionado com a <a href="../materia-LogisticaReversa/LogisticaReversa.html"><span class="box-destaque-letra"><span class="destaque-letra"> Logística Reversa. </span></span></a>
                            </p>

                            <p class="conteudo-letra"> 
                                A reciclagem é comumente definida pelos 5Rs, são elas: Repense (seus hábitos e comportamentos de consumo); Reduza 
                                (o desperdício); Recuse (descartáveis e outros vilões da natureza); Reuse (procure alternativas para os objetos sem 
                                utilidades) e Recicle (qualquer material reciclável).
                            </p>




                            <h2 id="qual-a-sua-importancia" class="archor">
                                QUAL A SUA IMPORTÂNCIA?
                            </h2>

                            <p class="conteudo-letra">
                                Hoje em dia, dado o crescimento na produção de resíduos, no lixo oceânico, no lixo eletrônico e no impacto aos aterros 
                                sanitários, fica nítido a importância da reciclagem para a conservação do meio ambiente. Muitos países já possuem essa 
                                preocupação e nos últimos anos têm apoiado cada vez mais programa ambientais.
                            </p>

                            <div class="box-img-materia">
                                <img src="img/materia-guia-pratico-de-reciclagem.png" alt="Guia prático de Reciclagem" class="img-materia">
                                <p class="img-legenda"> Neoenergia (2022) </p>
                            </div>

                            <p class="conteudo-letra">
                                De acordo com a associação sem fins lucrativos Cempre (Compromisso Empresarial para Reciclagem), o faturamento e a 
                                produtividade das cooperativas de catadoras nacionais têm crescido há algum tempo. No entanto, há ainda muito catadores
                                que não possuem sua atividade formalizada, isto é, não são reconhecidos oficialmente como “trabalhadores”. 
                            </p>

                            <p class="conteudo-letra listagem-title">
                                Além disso, existe uma grande defasagem de infraestrutura no processo de coleta de resíduos sólidos e faltam 
                                políticas públicas que incentivem a Logística Reversa.
                            </p>

                            <p class="conteudo-letra">
                                Mesmo que esteja escrito na embalagem que X produto pode ser reciclável, isso não significa que ele será efetivamente
                                reciclado. Portanto, é de suma importância reduzir o consumo excessivo de produtos comercializados. 
                            </p>




                            <h2 id="reciclagem-no-brasil" class="archor"> 
                                RECICLAGEM NO BRASIL
                            </h2>

                            <p class="conteudo-letra">
                                A reciclagem no Brasil é um tema que deveria ser debatido com extrema urgência. Todos os dias, a quantidade de lixo produzida 
                                em todo o território nacional ultrapassa as 130 mil toneladas. Aproximadamente 10% desses materiais se localizam na capital 
                                paulista.
                            </p>

                            <p class="conteudo-letra">
                                Se a população separasse o lixo em dois tipos, reciclável e comum, 40% das mercadorias poderiam ser reaproveitados, 
                                mas atualmente menos de 8% são reciclados.
                            </p>

                            <h3 class="subtitle"> São Paulo </h3>

                            <p class="conteudo-letra">
                                Visto a importância e necessidade da reciclagem, o governo de São Paulo investiu em duas máquinas automatizadas das quais têm 
                                capacidade de separar mais de 250 toneladas de materiais recicláveis por dia. Esses maquinários contam com esteiras, leitores 
                                óticos e outros sensores que separam os materiais recicláveis por categoria (plásticos, papéis, vidros, metais e etc.), cor e 
                                tamanho.
                            </p>

                            <p class="conteudo-letra">
                                A tecnologia utilizada nessas maquinas é a mesma empregada em países referência em reciclagem como a Alemanha, o Japão e a França.
                            </p>




                            <h2 id="como-reciclar" class="archor"> 
                                COMO RECICLAR? 
                            </h2>

                            <p class="conteudo-letra">
                                Existem muitas formas de destinar o seu lixo para a reciclagem. Primeiramente é preciso saber se um certo produto é reciclável, 
                                por lei essa informação deve estar contida na embalagem por meio do símbolo da reciclagem (três setas que formam um triângulo).
                            </p>

                            <p class="conteudo-letra">
                                Após isso, é necessário separar os resíduos entre Comum x Reciclável para facilitar o processo de seleção desses materiais. 
                                O lixo comum é aquele lixo que não deve ser destinado aos centros de reciclagem, alguns são: panos e papeis usados, tecidos,
                                bitucas de cigarro, fraldas, folhas secas, absorventes, fitas adesivas, comida, embalagens plásticas metalizadas, esponjas de 
                                limpeza, algodões e etc. Vale ressaltar que comida (frutas e legumes) e folhas secas podem ser reciclados por meio da compostagem, 
                                gerando o adubo para as plantas.
                            </p>

                            <p class="conteudo-letra">
                                Já o lixo reciclável é o resíduo que será encaminhado para os centros de reciclagem, pode ser plástico (sacolas, canudos, 
                                garrafas PET), papéis (cartolina, sulfite), vidros (frascos de perfume, vidros de automóveis, copos) e metais (lata de refrigerante, 
                                de óleo, de sardinha). Para descarta-los corretamente basta higienizar as embalagens e seca-los. Procure não gastar muita água ou
                                gerar mais resíduos nesse processo!
                            </p>

                            <div class="box-img-materia">
                                <img src="img/materia-lixo-reciclavel.png" alt="Lixo Reciclável" class="img-materia">
                                <p class="img-legenda"> Portal Residuos Solidos (2019) </p>
                            </div>

                            <p class="conteudo-letra">
                                Por fim, é necessário separar, em sacos, o lixo reciclável do lixo comum. Normalmente os resíduos recicláveis são colocados 
                                em sacos azuis e/ou transparentes e o lixo comum em sacos pretos. Ademais, o ideal é saber os dias e o horário que a coleta 
                                de lixo acontece no local onde você mora. Você pode se informar sobre o caminhão da coleta seletiva pelo site 
                                da <a href="https://www.reciclasampa.com.br/horarios-de-coleta"><span class="box-destaque-letra"><span class="destaque-letra"> Recicla Sampa </span></span></a>.
                            </p>




                            <h2 id="aterros-sanitarios-lixoes" class="archor"> 
                                ATERROS SANITÁRIOS x LIXÕES
                            </h2>

                            <p class="conteudo-letra">
                                Os aterros sanitários são locais com vida útil de dez anos que utilizam técnicas adequadas para o descarte de resíduos gerados 
                                pela população, eles minimizam ao máximo os impactos ambientais sem causar danos à saúde pública e à segurança nacional.
                                Os aterros possuem um sistema de impermeabilização, captação e queima controlada dos gases do efeito estuda produzidos e 
                                coleta e drenagem de chorume. 
                            </p>

                            <p class="conteudo-letra">
                                Já os lixões são espaços inadequados para o descarte de resíduos. Mais de 2.500 cidades do Brasil ainda dispõem de locais como esse. 
                                O descarte de materiais nesses lugares é feito sem qualquer cuidado, técnica ou medida de tratamento ou controle, impondo 
                                um grande risco a população que vive próxima a região. Depositar lixo nesses lugares é crime desde 1998 e segundo a Política
                                Nacional de Resíduos Sólidos (PNRS), Lei n° 12.305b de 2010, os lixões devem ser fechados até 2024.
                            </p>

                        </div>
                    </div>

            <!-- -- -- -- Publicidade -- -- -- -->
                    <div id="box-publicidade">
                        <div id="box-publicidade-2">
                            <img src="img/publicidade-coca.jpg" alt="Publicidade 1" class="publicidade" style="margin-top: 153px;">

                            <img src="img/publicidade-agua-primavera.PNG" alt="Publicidade 2" class="publicidade" style="margin-top: 614px; height: 325px">

                            <img src="img/publicidade-danone.jpg" alt="Publicidade 3" class="publicidade" style="margin-top: 1000px;">

                            <img src="img/publicidade-odontologia.jpg" alt="Publicidade 4" class="publicidade" style="margin-top: 1212px;">
                        </div>
                    </div>

                </div>

        <!-- -- -- -- Referencias -- -- -- -->    
                <div id="box-referencias">
                    <div id="box-referencias-2">
                        <h2> Referências </h2>
                        <a href="https://www.reciclasampa.com.br/artigo/reciclaveis-x-lixo-comum" target="_blank" class="box-link-ref">
                            <span class="text-link-ref"> RECICLÁVEIS X LIXO COMUM. Recicla Sampa, 2018. </span>
                        </a>
                        <a href="https://www.reciclasampa.com.br/artigo/reciclagem:-o-guia-absolutamente-completo" target="_blank" class="box-link-ref">
                            <span class="text-link-ref"> RECICLAGEM: O GUIA ABSOLUTAMENTE COMPLETO. Recicla Sampa, 2020. </span>
                        </a>
                        <a href="https://www.ecycle.com.br/reciclagem/" target="_blank" class="box-link-ref">
                            <span class="text-link-ref"> Reciclagem: o que é e qual a importância?. Ecycle, 2022. </span>
                        </a>
                    </div>
                </div>

        <!-- -- -- -- Autor / Editor -- -- -- -->
                <div id="box-editor">
                    <div id="box-editor-2">
                        <div id="box-perfil">
                            <img src="../../SobreNos/img-sobrenos/DanielSilva.png" alt="Foto de Perfil do Editor da Página" id="perfil-imagem">
                        </div>
                        <div id="box-info">
                            <p id="info1"> Escrito por: </p>
                            <p id="info2"> Daniel F. S. Silva </p>
                            <p id="info3"> Cursando Desenvolvimento de Sistemas | São Paulo - SP </p>

                            <div id="box-editor-redes-sociais">
                                <a href="#" target=”_blank”>
                                    <img src="../imagem/instagram-icon.png" alt="Instagram do Editor da Página" class="editor-redes-sociais primeiro-item">
                                </a>
                                <a href="#" target="_blank">
                                    <img src="../imagem/myanimelist-icon.png" alt="MyAnimeList do Editor da Página" class="editor-redes-sociais segundo-item">
                                </a>
                                <a href="#" target="_blank">
                                    <img src="../imagem/youtube-icon.png" alt="Canal do Youtube do Editor da Página" class="editor-redes-sociais terceiro-item">
                                </a>
                            </div>
                        </div>
                        <div id="box-texto-editor">
                            <p> Aluno, 17 anos, cursando o último ano de desenvolvimento de sistemas, gosta de acompanhar esportes como futebol, 
                                e pretende seguir na área, portanto ainda quer se aprofundar mais sobre o assuntos referentes a tecnologia. </p>
                        </div>
                    </div>
                </div>

        <!-- -- -- -- Noticias -- -- -- -->   
                <div id="box-noticia">
                    <div id="box-noticia-2">
                        <div id="box-noticia-titulo">
                            <h2> Notícias em Destaque </h2>
                        </div>

                        <div id="box-noticia-3-grid">
                            <a href="../materia-LogisticaReversa/LogisticaReversa.php">
                                <div class="box-noticia-4">
                                    <div class="box-imagem-noticia">
                                        <img src="../materia-noticias/noticias-logistica-reversa.png" alt="Logística Reversa, tudo sobre o assunto" class="imagem-noticia">
                                        <div class="imagem-noticia-sombra"> </div>
                                    </div>
                                    <p class="noticias-letra"> Logística Reversa, tudo sobre o assunto </p>
                                    <p class="ler-agora"> Ler agora <img src="../imagem/seta-ler-noticia.png" alt="" class="seta-ler-artigo"> </p>
                                </div>
                            </a>

                            <a href="../materia-Reciclagem/Reciclagem.php">
                                <div class="box-noticia-4">
                                    <div class="box-imagem-noticia">
                                        <img src="../materia-noticias/noticias-reciclagem.png" alt="A Importância da Reciclagem" class="imagem-noticia">
                                        <div class="imagem-noticia-sombra"> </div>
                                    </div>
                                    <p class="noticias-letra"> A Importância da Reciclagem </p>
                                    <p class="ler-agora"> Ler agora <img src="../imagem/seta-ler-noticia.png" alt="" class="seta-ler-artigo"> </p>
                                </div>
                            </a>

                            <a href="../materia-TiposDeLixo/TiposDeLixo.php">
                                <div class="box-noticia-4">
                                    <div class="box-imagem-noticia">
                                        <img src="../materia-noticias/noticias-tipos-de-lixo.png" alt="Quais são os tipos de lixo?" class="imagem-noticia">
                                        <div class="imagem-noticia-sombra"> </div>
                                    </div>
                                    <p class="noticias-letra"> Quais são os tipos de lixo? </p>
                                    <p class="ler-agora"> Ler agora <img src="../imagem/seta-ler-noticia.png" alt="" class="seta-ler-artigo"> </p>
                                </div>
                            </a>

                            <a href="../materia-DescarteDeLixoEletronico/DescarteLixoEletronico.php">
                                <div class="box-noticia-4">
                                    <div class="box-imagem-noticia">
                                        <img src="../materia-noticias/noticias-lixo-eletronico.png" alt="Lixo Eletrônico e seus problemas para o meio ambiente " class="imagem-noticia">
                                        <div class="imagem-noticia-sombra"> </div>
                                    </div>
                                    <p class="noticias-letra"> Lixo Eletrônico e seus problemas para o meio ambiente </p>
                                    <p class="ler-agora"> Ler agora <img src="../imagem/seta-ler-noticia.png" alt="" class="seta-ler-artigo"> </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                
        <!-- -- -- -- Rodapé -- -- -- -->
                <div id="box-footer" style="background-color: var(--cor-box-noticias);">
                    <?php include '../../MenuFooter/footer/footer.html';?>
                </div>
            </div>

            <a href="#"> 
                <div class="box-arrow-up-top">
                    <img src="../imagem/arrow-up.png" alt="Seta para Voltar ao Início da Página" id="arrow-up"> 
                </div>
            </a>
        </div>
    </body>
    <script src="../js-conteudo/js-conteudo.js"></script>
    <script src="../../MenuFooter/menu/menu.js"></script>
</html>