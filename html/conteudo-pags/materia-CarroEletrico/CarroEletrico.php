<?php 
    include '../../menu-footer/menu/session_start.php';
?>

<!DOCTYPE html>
<html lang="PT-BR" class="-mode">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="../css-conteudo/css-conteudo.css">
        <title> Carro Elétrico vale a pena? </title>

        <style>
            #box-content-geral{
                height: 6250px;
            }
        </style>

        <link rel="stylesheet" href="../../menu-footer/footer/footer.css">
        <link rel="stylesheet" href="../responsive-conteudo/responsive-conteudo.css">
        <link rel="stylesheet" href="../../menu-footer/menu/menu.css">
    </head>
    <body>
<!-- -- -- -- Geral -- -- -- -->
        <div id="geral">
            
    <!-- -- -- -- Menu -- -- -- -->
            <?php include '../../menu-footer/menu/menu.php';?>

    <!-- -- -- -- Scroll Line -- -- -- -->
            <div id="scroll-line">
            </div>

            <div id="box1">

        <!-- -- -- -- Titulo -- -- -- -->
                <div id="box-titulo">
                    <div id="box-titulo-2">
                        <h1 class="titulo-principal has-shown"> Carro Elétrico vale a pena? </h1>
                        <div id="box-titulo-info">
                            
                            <img src="../imagem/pfp.png" alt="Foto de Perfil" class="page-info-icon-invert has-shown">
                            <span class="titulo-info has-shown" style="animation-delay: var(--animation-delay-titulo-info-icon)"> Gustavo F. Cunha </span>

                            <img src="../imagem/calendario.png" alt="Data de Publicação" class="page-info-icon-invert has-shown">
                            <span class="titulo-info has-shown" style="animation-delay: var(--animation-delay-titulo-info-icon)"> 30/11/2022 </span>

                            <img src="../imagem/relogio.png" alt="Tempo de Leitura" class="page-info-icon-invert has-shown">
                            <span class="titulo-info has-shown" style="animation-delay: var(--animation-delay-titulo-info-icon)"> 8 Minutos de Leitura</span>
                        </div>

                        <img src="img/img-principal-carro-eletrico.jpg" id="img-principal-noticia" alt="Simbolo de Reciclagem">

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
                                <a href="#contextualizando"> <p class="sumario-item"> <span class="underline"> 1. Contextualizando <span> <span class="seta-sumario"> ↴ </span> </p> </a>
                                <a href="#primeiro-carro-eletrico-da-historia"> <p class="sumario-item"> <span class="underline"> 2. Primeiro carro elétrico da História </span> <span class="seta-sumario"> ↴ </span> </p> </a>
                                <a href="#carro-eletrico-no-brasil"> <p class="sumario-item"> <span class="underline"> 3. Carro Elétrico no Brasil </span> <span class="seta-sumario"> ↴ </span> </p> </a>
                                <a href="#vantanges-e-desvantagens"> <p class="sumario-item"> <span class="underline"> 4. Vantagens e Desvantagens </span> <span class="seta-sumario"> ↴ </span> </p> </a>
                                <a href="#beneficios"> <p class="sumario-item"> <span class="underline"> 5. Benefícios </span> <span class="seta-sumario"> ↴ </span> </p> </a>
                                <a href="#maleficios"> <p class="sumario-item"> <span class="underline"> 6. Malefícios  </span> <span class="seta-sumario"> ↴ </span> </p> </a>
                            </div>
                        </div>
                    </div>

            <!-- -- -- -- Conteudo -- -- -- -->
                    <div id="box-conteudo">
                        <div id="box-conteudo-2">
                            <h2 id="contextualizando" class="archor first-title-conteudo"> 
                                CONTEXTUALIZANDO
                            </h2>
                            
                            <p class="conteudo-letra"> 
                                O surgimento dos veículos elétricos é resultado de vários fatores. Um dos maiores avanços desde a invenção da máquina
                                a vapor no final do século 18 foi a ferrovia, que facilitou o transporte de longa distância. No entanto, o transporte 
                                individual de pessoas ainda era destinado ao uso de carroças puxadas por cavalos, o que fazia com que os industriais 
                                e engenheiros da época investissem tempo e energia na busca de uma solução.
                            </p>

                            <p class="conteudo-letra"> 
                                Além disso, com o advento da eletricidade, uma grande revolução ocorreu no século XIX, revolucionando a indústria e, 
                                posteriormente, a habitação, os transportes e os espaços públicos.
                            </p>




                            <h2 id="primeiro-carro-eletrico-da-historia" class="archor">
                                O PRIMEIRO CARRO ELÉTRICO DA HISTÓRIA
                            </h2>

                            <p class="conteudo-letra">
                                Muitos avanços e melhorias levaram à criação de veículos elétricos. Uma das figuras mais famosas da sua história 
                                é o inventor e engenheiro húngaro Ányos Jedlik, que por volta de 1828 criou a origem de todos os motores elétricos: 
                                o primeiro motor elétrico do mundo, que mais tarde foi aplicado a pequenos modelos de automóveis. 
                            </p>

                            <p class="conteudo-letra">
                                Enquanto isso, o ferreiro americano Thomas Davenport construiu um dispositivo semelhante em 1834 que funcionava em 
                                uma pista circular eletrificada. No entanto, o empresário e químico escocês Robert Anderson é conhecido como o pai 
                                dos veículos elétricos. Entre 1832 e 1839, estudou e demonstrou um protótipo que melhorava o automóvel convencional 
                                movido a bateria.
                            </p>

                            <div class="box-img-materia">
                                <img src="img/materia-robert-anderson.png" alt="O que é Logística Reversa" width="40%" height="40%" style="border-radius: 10px;">
                                <p class="img-legenda"> Robert Anderson - Jornal Joca (2019) </p>
                            </div>

                            <p class="conteudo-letra">
                                Muitos modelos foram desenvolvidos posteriormente, mas as limitações da bateria (não recarregável) tornavam o uso de 
                                veiculos elétricos impraticável. O verdadeiro avanço ocorreu em 1859, quando o cientista francês Gaston Planté inventou 
                                a bateria recarregável de chumbo-ácido, o que significa que o veículo não precisava estar conectado à rede. A partir desse 
                                momento, é possível armazenar a energia necessária para o funcionamento do veículo. 
                            </p>

                            <p class="conteudo-letra">
                                Além disso, em 1881, o inventor Camille Faure refinou o modelo para aumentar a capacidade de carga da bateria. Esses 
                                avanços permitiram ao engenheiro francês Gustave Trouvé demonstrar um veículo de três rodas movido por um motor elétrico 
                                na Exposição Internacional de Eletricidade daquele ano em Paris. Em 1888, surgiu na Alemanha aquele que se acredita 
                                ser o primeiro carro elétrico: o Flocken Elektrowagen, criado pelo inventor e empresário Andreas Flocken.
                            </p>




                            <h2 id="carro-eletrico-no-brasil" class="archor"> 
                                CARRO ELÉTRICO NO BRASIL
                            </h2>

                            <p class="conteudo-letra">
                                Em 1913, o fundador da Ford criou um protótipo de veículo elétrico com a ajuda do amigo Thomas Edison, Ford 
                                investiu US$1,5 milhão no projeto que usaria as baterias de níquel-ferro desenvolvidas por Edison.
                            </p>

                            <p class="conteudo-letra">
                                A Ford está fazendo progresso constante na eletrificação e planeja ter metade de suas vendas em veículos elétricos até 2030. 
                                Como parte do plano, anunciou um investimento de US$ 50 bilhões nos próximos quatro anos, além de garantir baterias e 
                                matérias-primas por meio de parcerias. Poucas pessoas sabem que as sementes dessa ideia foram plantadas na empresa há 
                                mais de 100 anos. Em 1913, o fundador da marca Henry Ford criou um protótipo de carro elétrico com a ajuda de seu amigo 
                                Thomas Edison, um dos maiores inventores no início da revolução elétrica. 
                            </p>

                            <div class="box-img-materia">
                                <img src="img/materia-primeiro-carro-eletrico-brasileiro.png" alt="Imagem Exemplificando as Etapas da Logística Reversa" class="img-materia">
                                <p class="img-legenda"> QuatroRodas (2021) </p>
                            </div>

                            <p class="conteudo-letra">
                                Henry Ford trabalhava para a Edison Lighting Company, onde conheceu seu chefe e, com seu incentivo, embarcou em um projeto 
                                para desenvolver um veículo automotor. Mais tarde, na mesma época, a Ford Motor Company. Fundada em 1903, a Edison desenvolveu
                                a tecnologia de bateria de níquel-ferro para uma variedade de aplicações.
                            </p>

                            <p class="conteudo-letra">
                                A Ford estava prestes a adquirir 100.000 baterias de Edison para um veículo de carro experimental, mas quando percebeu que ele não 
                                poderia competir com os automóveis de carros a gasolina, teve que desfazer e cancelar o negócio. Porém, a pesquisa de carros 
                                elétricos da Ford não parou. No final do século XX 20, outros protótipos foram construídos, como o Comuta, projetado na Inglaterra 
                                e nos Estados Unidos em 1967, abrindo caminho para um desenvolvimento em escala comercial na década de 90.
                            </p>




                            <h2 id="vantanges-e-desvantagens" class="archor"> 
                                Vantagens e Desvantagens
                            </h2>

                            <p class="conteudo-letra">
                                Os veículos elétricos são uma alternativa ao transporte sustentável em comparação com os veículos convencionais 
                                movidos a combustíveis fósseis que poluem o meio ambiente. Os veículos movidos a recursos naturais não renováveis 
                                respondem por 72,6% das emissões de gases de efeito estufa, segundo dados do Inventário de Emissões Atmosféricas 
                                do Transporte Rodoviário de Passageiros da cidade de São Paulo.
                            </p>

                            <p class="conteudo-letra">
                                Apesar de alguns entraves e barreiras na popularização e adoção de veículos elétricos, como alto investimento inicial, 
                                falta de incentivo e poucas opções no mercado, o uso de veículos menos poluentes vem crescendo: De acordo com o Centro
                                Alemão de Pesquisa em Energia Solar e Hidrogênio da Alemanha, no início de 2019, o número de veículos elétricos em todo
                                o mundo chegou a atingir 5,6 milhões, um crescimento de 64% em relação ao ano anterior. 
                            </p>

                            <div class="box-img-materia">
                                <img src="img/materia-carro-eletrico-antigo.png" alt="Imagem Exemplificando as Etapas da Logística Reversa" class="img-materia">
                                <p class="img-legenda"> Oldcars (2017) </p>
                            </div>

                            <p class="conteudo-letra">
                            Os países nórdicos lideram o caminho na adoção de veículos elétricos e híbridos: em 2020, a Noruega se tornou o primeiro 
                            país do mundo onde os veículos elétricos representaram mais de 50% dos novos emplacamentos registrados, juntando-se à 
                            Islândia, Finlândia e Suécia, respectivamente, no ranking. No Brasil, a adoção de veículos elétricos tem acontecido a 
                            passos lentos, mesmo com um aumento no crescimento das vendas: entre 2012 e 2018, havia no Brasil cerca de 10.666 
                            veículos elétricos nas ruas brasileiras. De 2018 para a 2019, a frota circulante atual passou para 22.524 modelos movidos à bateria. 
                            </p>




                            <h2 id="beneficios" class="archor"> 
                                BENEFÍCIOS
                            </h2>

                            <p class="conteudo-letra">
                                Alguns benefícios de se utilizar Carros elétricos são:
                            </p>

                            <h3 class="subtitle"> Sem emissões de gases poluentes </h3>

                            <p class="conteudo-letra">
                                Não emitir poluentes no meio ambiente é uma das maiores contribuições do veículo elétrico. Em comparação ao 
                                motor a combustão, o de propulsão elétrica reduz em, aproximadamente, 30% a geração de CO₂. Embora os automóveis 
                                elétricos não liberem fumaça enquanto circulam – nem sequer possuem escapamento –, eles produzem gás carbônico 
                                somente durante sua fabricação, o que limita a área atingida.
                            </p>

                            <h3 class="subtitle"> Eficiência energética </h3>

                            <p class="conteudo-letra">
                                O veículo elétrico é altamente eficiente quando colocado em movimento. Segundo Sugahara, ele consome, aproximadamente, 
                                90% da eficiência energética disponível, ao contrário dos modelos dotados de motor a combustão, que aproveitam apenas 
                                de 30% a 40%.
                            </p>

                            <h3 class="subtitle"> Manutenção </h3>

                            <p class="conteudo-letra">
                                Em um carro com propulsão 100% elétrica, os custos de manutenção são inferiores, pois não é necessário substituir, 
                                por exemplo, filtros de óleo e ar, velas de ignição e correia dentada. O desgaste das peças também é bem menor. 
                                A manutenção leva de 60 a 90 minutos e se resume à limpeza e ao ajuste dos freios, balanceamento, rotação e alinhamento 
                                das rodas, revisão de faróis, suspensão e direção, lubrificação de fechaduras, dobradiças e tranca do porta-malas, 
                                revisão dos níveis de fluidos e controle das baterias de íons de lítio.
                            </p>

                            <h3 class="subtitle"> Custo por quilômetro rodado </h3>

                            <p class="conteudo-letra">
                                Em geral, a energia elétrica é mais em conta que a gasolina, o diesel e o etanol. Ou seja, o consumidor terá de 
                                desembolsar cerca de R$ 15 para recarregar a bateria do carro e rodar 200 quilômetros.
                            </p>

                            <h3 class="subtitle"> Menos cobrança de impostos </h3>

                            <p class="conteudo-letra">
                                Um dos maiores desafios de ter um automóvel elétrico é o custo tributário. “É preciso taxar menos impostos sobre esse 
                                tipo de veículo para que ele chegue mais rapidamente ao consumidor, como está acontecendo na Europa”. Além disso, 
                                os carros com propulsão eletrificada estão livres do rodízio, como o existente em cidades como São Paulo.
                            </p>




                            <h2 id="maleficios" class="archor"> 
                                MALEFÍCIOS
                            </h2>

                            <p class="conteudo-letra">
                                Alguns malefícios de se utilizar Carros elétricos são:
                            </p>

                            <h3 class="subtitle"> Duração da bateria </h3>

                            <p class="conteudo-letra">
                                As melhores tecnologias em termos de capacidade de carga apresentam problemas de durabilidade. Com o tempo, sua capacidade 
                                de carga diminui, tornando-se inviáveis em 4 ou 5 anos. 
                            </p>

                            <h3 class="subtitle"> Uso seguro </h3>

                            <p class="conteudo-letra">
                                Os problemas de segurança trazidos pelas baterias não podem ser ignorados. Assista Baterias de lítio explodindo no Youtube
                                para ver como elas podem ser perigosas em uma colisão forte. É claro que os fabricantes têm trabalhado arduamente nessa 
                                questão para levar a confiabilidade e a segurança a níveis aceitáveis. No entanto, qualquer que seja a solução adotada, 
                                ela inevitavelmente aumentará a complexidade do sistema e aumentará o peso do veículo. 
                            </p>

                            <h3 class="subtitle"> Tempo de carregamento </h3>

                            <p class="conteudo-letra">
                                A tecnologia de bateria atual sempre requer um carregamento lento para otimizar a vida útil. Como resultado, a única maneira 
                                de "reabastecer" o carro rapidamente é substituir a bateria inteira. Esta é uma técnica utilizada em alguns países europeus.
                            </p>

                            
                        </div>
                    </div>

            <!-- -- -- -- Publicidade -- -- -- -->
                    <div id="box-publicidade">
                        <div id="box-publicidade-2">
                            <img src="img/publicidade-summer-party.png" alt="Publicidade 1" class="publicidade" style="margin-top: 153px;">

                            <img src="img/publicidade-odontologia.jpg" alt="Publicidade 2" class="publicidade" style="margin-top: 614px;">

                            <img src="img/publicidade-apartamento.PNG" alt="Publicidade 3" class="publicidade" style="margin-top: 1000px; height: 325px">

                            <img src="img/publicidade-shapiro.PNG" alt="Publicidade 4" class="publicidade" style="margin-top: 1212px; height: 330px">

                            <img src="img/publicidade-coca-cola-viva-positivamente.jpg" alt="Publicidade 3" class="publicidade" style="margin-top: 1400px;">
                        </div>
                    </div>

                </div>

        <!-- -- -- -- Referencias -- -- -- -->    
                <div id="box-referencias">
                    <div id="box-referencias-2">
                        <h2> Referências </h2>
                        <a href="https://www.siemens.com/br/pt/empresa/stories/cidades/carros-eletricos-como-funcionam-vantagens-e-tipos.html" target="_blank" class="box-link-ref">
                            <span class="text-link-ref"> CARROS Eleétricos, como funcionam, vantagens e tipos. Siemens, c2022. </span>
                        </a>
                        <a href="https://inergiae.com.br/2022/02/07/vantagens-e-desvantagens-dos-veiculos-eletricos/" target="_blank" class="box-link-ref">
                            <span class="text-link-ref"> CUSTODIO, Odair José. Vantagens e desvantagens dos veículos elétricos. Inergiae, 2022. </span>
                        </a>
                        <a href="https://media.ford.com/content/fordmedia/fsa/br/pt/news/2022/08/18/-tbt--o-primeiro-carro-eletrico-de-henry-ford-.html" target="_blank" class="box-link-ref">
                            <span class="text-link-ref"> O PRIMEIRO CARRO ELÉTRICO DE HENRY FORD. Media Ford, 2022. </span>
                        </a>
                        <a href="https://www.iberdrola.com/sustentabilidade/historia-carro-eletrico" target="_blank" class="box-link-ref">
                            <span class="text-link-ref"> O veículo elétrico: uma viagem por mais de 200 anos de história. Iberdrola, c2022. </span>
                        </a>
                        <a href="https://mobilidade.estadao.com.br/inovacao/7-vantagens-dos-carros-eletricos/" target="_blank" class="box-link-ref">
                            <span class="text-link-ref"> VENDITTI, Mário Sérgio. 7 vantagens dos carros elétricos. Mobildiade Estadao, 2020. </span>
                        </a>
                        
                    </div>
                </div>

        <!-- -- -- -- Autor / Editor -- -- -- -->
                <div id="box-editor">
                    <div id="box-editor-2">
                        <div id="box-perfil">
                            <img src="../../sobre-nos/img-sobrenos/GustavoFragas.jpg" alt="Foto de Perfil do Editor da Página" id="perfil-imagem">
                        </div>
                        <div id="box-info">
                            <p id="info1"> Escrito por: </p>
                            <p id="info2"> Gustavo F. Cunha </p>
                            <p id="info3"> Cursando Desenvolvimento de Sistemas | São Paulo - SP </p>

                            <div id="box-editor-redes-sociais">
                                <a href="https://www.instagram.com/fragas_gustavo/" target=”_blank”>
                                    <img src="../imagem/instagram-icon.png" alt="Instagram do Editor da Página" class="editor-redes-sociais primeiro-item">
                                </a>
                            </div>
                        </div>
                        <div id="box-texto-editor">
                            <p> Gustavo Fragas Cunha, 18 anos, natural da cidade de São Paulo – SP. Desde jovem trabalha para ajudar no sustento da casa 
                                e começar sua independência financeira, sendo recepcionista de hospital como jovem aprendiz. Aos 15 anos
                                entrou no ensino médio integrado com Desenvolvimento de Sistemas na etec Parque Belém. </p>
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
                                        <img src="../materia-noticias/noticias-lixo-eletronico.png" alt="Capivaras são animais considerados em perigo de extinção" class="imagem-noticia">
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
                    <?php include '../../menu-footer/footer/footer.html';?>
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
    <script src="../../menu-footer/menu/menu.js"></script>
</html>