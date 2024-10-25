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
        <title> Logística Reversa, tudo sobre o assunto </title>

        <style>
            #box-content-geral{
                height: 9050px;
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
                        <h1 class="titulo-principal has-shown"> Logística Reversa, tudo sobre o assunto </h1>
                        <div id="box-titulo-info">
                            
                            <img src="../imagem/pfp.png" alt="Foto de Perfil" class="page-info-icon-invert has-shown">
                            <span class="titulo-info has-shown" style="animation-delay: var(--animation-delay-titulo-info-icon)"> Lucas K. Okokama </span>

                            <img src="../imagem/calendario.png" alt="Data de Publicação" class="page-info-icon-invert has-shown">
                            <span class="titulo-info has-shown" style="animation-delay: var(--animation-delay-titulo-info-icon)"> 03/11/2022 </span>

                            <img src="../imagem/relogio.png" alt="Tempo de Leitura" class="page-info-icon-invert has-shown">
                            <span class="titulo-info has-shown" style="animation-delay: var(--animation-delay-titulo-info-icon)"> 12 Minutos de Leitura</span>
                        </div>

                        <img src="img/img-principal-logistica-reversa.png" id="img-principal-noticia" alt="Simbolo de Reciclagem">

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
                                <a href="#o-que-e-logistica-reversa"> <p class="sumario-item"> <span class="underline"> 2. O que é Logística Reversa? </span> <span class="seta-sumario"> ↴ </span> </p> </a>
                                <a href="#quais-sao-seus-tipos"> <p class="sumario-item"> <span class="underline"> 3. Quais são seus Tipos? </span> <span class="seta-sumario"> ↴ </span> </p> </a>
                                <a href="#como-funciona"> <p class="sumario-item"> <span class="underline"> 4. Como Funciona?  </span> <span class="seta-sumario"> ↴ </span> </p> </a>
                                <a href="#principais-vantagens"> <p class="sumario-item"> <span class="underline"> 5. Principais Vantagens </span> <span class="seta-sumario"> ↴ </span> </p> </a>
                                <a href="#exemplos-na-pratica"> <p class="sumario-item"> <span class="underline"> 6. Exemplos na Prática </span> <span class="seta-sumario"> ↴ </span> </p> </a>
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
                                Nos últimos anos a poluição e o uso irracional das matérias-primas têm gerado grandes problemas para o meio ambiente resultando, 
                                inclusive, no aumento médio da temperatura do planeta Terra em decorrência das grandes quantidades de gás carbônico despejados na 
                                atmosfera. Tudo isso fortalece o tão conhecido <span class="box-destaque-letra"><span class="destaque-letra">Efeito Estufa</span></span>, 
                                do qual, indiretamente afeta os biomas e os milhares de ecossistemas ao redor do globo terrestre.
                            </p>

                            <p class="conteudo-letra"> 
                                Com o crescimento da preocupação acerca da preservação do meio ambiente, muitos governos e ONGs já estão cobrando das empresas posturas 
                                mais responsáveis, dado que o crescimento econômico e a preservação ambiental devem estar alinhados, criando um desenvolvimento sustentável.
                                Visando diminuir os impactos ambientais causados pelas indústrias, as despesas de produção e melhorar as imagens corporativas, muitas 
                                empresas têm adotado a Logística Reversa. Mas o que exatamente seria a “Logística Reversa”? 
                            </p>




                            <h2 id="o-que-e-logistica-reversa" class="archor">
                                O QUE É LOGÍSTICAS REVERSA?
                            </h2>

                            <p class="conteudo-letra">
                                A logística reversa é uma área específica da logística empresarial que controla todo o fluxo de retorno dos produtos 
                                (pós-venda ou pós-consumo), como por exemplo embalagens, ao ciclo produtivo, isto é, a empresa reintroduz esses produtos 
                                descartados na linha de produção para serem utilizados novamente na fabricação de um novo produto ou simplesmente ser devidamente 
                                descartado e reciclado. Portanto, através da logística reversa, os lixos ganham um “descarte” ecologicamente correto e adequado
                                por parte das empresas que passam a se responsabilizar por todo ciclo de vida de um produto e não apenas por sua produção.
                            </p>

                            <div class="box-img-materia">
                                <img src="img/materia-logistica-reversa-o-que-e.png" alt="O que é Logística Reversa" class="img-materia">
                                <p class="img-legenda"> Seteambiental (2022) </p>
                            </div>

                            <p class="conteudo-letra">
                                Diferente do que muitos pensam, o conceito de Logística Reversa já existe há mais de 30 anos, principalmente na Europa. 
                                Aqui no Brasil o conceito ganhou bastante força com a publicação da Política Nacional de Resíduos Sólidos (Lei nº 12.305), 
                                em agosto de 2010. Entre os seus diversos artigos, ficou estabelecido que fabricantes, importadores, distribuidores, e 
                                comerciantes deveriam deter uma responsabilidade compartilhada quanto ao ciclo de vida do produto.
                            </p>

                            <p class="conteudo-letra listagem-title">
                                Vale lembrar que algo parecido já era feito antes, entretanto, com a instituição da PNRS de 2010, a logística reversa se torna, 
                                consoante a constituição, fundamental e obrigatório para algumas empresas independentemente do porte. São elas fabricantes, 
                                importadores, distribuidores e comerciantes de: 
                            </p>

                            <ul class="listagem">
                                <li> Agrotóxicos </li>
                                <li> Pilhas e baterias </li>
                                <li> Pneus </li>
                                <li> Óleos lubrificantes, seus resíduos e embalagens </li>
                                <li> Lâmpadas fluorescentes, de vapor de sódio e mercúrio e de luz mista </li>
                                <li> Produtos eletroeletrônicos e seus componentes </li>
                            </ul>

                            <p class="conteudo-letra">
                                Um dos artigos mais importantes da PNRS de 2010 é o artigo 33, do qual, na integra, define que as empresas citadas anteriormente: 
                                “São obrigados a estruturar e implementar sistemas de logística reversa, mediante retorno dos produtos após o uso pelo consumidor,
                                de forma independente do serviço público de limpeza urbana e de manejo dos resíduos sólidos”. 
                            </p>




                            <h2 id="quais-sao-seus-tipos" class="archor"> 
                                TIPOS DE LOGÍSTICAS REVERSA
                            </h2>

                            <p class="conteudo-letra">
                                A Logística Reversa pode ser classificada em dois tipos: Pós-Venda e Pós-Consumo. Cada uma possui suas diferenças e devem ser 
                                utilizadas em cenários distintos, como explicaremos a seguir:
                            </p>

                            <h3 class="subtitle"> Pós-Venda </h3>

                            <p class="conteudo-letra">
                                A logística reversa pós-venda entra em ação quando um produto é adquirido, utilizado brevemente e descartado pelo consumidor, 
                                seja por defeito de fabricação ou funcionamento, danos provocados durante o transporte, erros na emissão do pedido, prazo de
                                validade vencido ou recall, tornando inviável a usufruição da mercadoria de forma regular.
                            </p>
                            <p class="conteudo-letra">
                                Em vista dessa demanda, a empresa deve estar preparada para receber a devolução dessas mercadorias defeituosas, estabelecendo 
                                um controle do fluxo físico da comercialização e da logística interna da organização empresarial.
                            </p>


                            <h3 class="subtitle"> Pós-Consumo </h3>

                            <p class="conteudo-letra">
                                Diferentemente da logística reversa pós-venda, aqui o produto em questão já foi adquirido, utilizado por completo e descartado 
                                pelo consumidor. De forma geral, esse descarte ocorre pelo termino da vida útil do produto ou pelo vencimento do seu prazo de
                                validade. Novamente, a empresa necessita estar preparada para receber tais itens e lhes dar o devido encaminhamento.
                            </p>

                            <p class="conteudo-letra">
                                Porém, devemos tomar muito cuidado para onde encaminhamos esses produtos. Se ainda restar condições de uso, os bens podem, com um
                                certo cuidado e após teste de usabilidade, ser reintroduzidos e reutilizados no mercado. Se já chegou ao fim de sua vida útil, o
                                produto pode ser desmontado e ter os seus componentes reutilizados ou remanufaturados. Agora, se há um eminente risco ambiental, 
                                a mercadoria deve ser inteiramente descartada da maneira correta levanto em conta todos os procedimentos de segurança.
                            </p>




                            <h2 id="como-funciona" class="archor"> 
                                COMO FUNCIONA?
                            </h2>

                            <p class="conteudo-letra">
                                Entender o que é logística reversa, como ela funciona e atuar para que seja possível introduzi-la na economia é uma 
                                responsabilidade não só das empresas, mas também dos cidadãos e dos órgãos públicos.
                            </p>

                            <p class="conteudo-letra">
                                Em relação ao cidadão, a sua função enquanto consumidor é entregar as mercadorias defeituosas nas condições solicitadas
                                pela empresa responsável e nos lugares definidos pelo sistema de coleta.
                            </p>

                            <p class="conteudo-letra">
                                Quanto as empresas privadas, sua responsabilidade é gerenciar seus negócios em harmonia com o meio ambiente, e isso pode ser
                                efetuado de algumas maneiras como reincorporar mercadorias na cadeia de produção (reuso ou reciclagem), usar, de forma racional,
                                as matérias primas, o que evita a poluição e o desperdício, e sempre estar se inovando tecnologicamente para desenvolver 
                                produtos mais sustentáveis.
                            </p>

                            <div class="box-img-materia">
                                <img src="img/materia-logistica-reversa-como-funciona.png" alt="Imagem Exemplificando as Etapas da Logística Reversa" class="img-materia">
                                <p class="img-legenda"> Meiosustentavel (2020) </p>
                            </div>

                            <p class="conteudo-letra">
                                Já para o poder público, sua tarefa é definir as obrigações legais que o pais deve seguir e fiscalizar todo o processo ligado a 
                                logística reversa. Além disso, juntamente com as empresas, deve conscientizar e educar os cidadãos sobre essas questões.
                            </p>


                            <p class="conteudo-letra listagem-title">
                                Esse funcionamento completo resume-se em 5 etapas simples da logística reversa: 
                            </p>

                            <ul class="listagem">
                                <li> Os cidadãos são conscientizados quanto a importância do seu papel na logística reversa pelas empresas e órgãos públicos. </li>
                                <li> O consumidor devolve adequadamente a mercadoria avariada ao comerciante / distribuidor. </li>
                                <li> O comerciante / distribuidor remete este produto ao importador / fabricante. </li>
                                <li> O fabricante / importador encaminha-o para reuso, reciclagem ou descarte adequado, como visto anteriormente. </li>
                                <li> Os órgãos públicos fiscalizam o processo e garantem que tudo está sendo feito adequadamente e de forma legal. </li>
                            </ul>




                            <h2 id="principais-vantagens" class="archor"> 
                                PRINCIPAIS VANTAGENS
                            </h2>

                            <p class="conteudo-letra">
                                Agora que você viu como a logística reversa funciona, seguiremos para seus benefícios. Segundo o 
                                <a href="https://www.gov.br/mma/pt-br" target="_blank"><span class="box-destaque-letra"><span class="destaque-letra">Ministério de Meio Ambiente</span></span></a>, 
                                essa atividade se torna indispensável devido as seguintes vantagens:
                            </p>

                            <ul class="listagem">
                                <li> Por mais obvio que seja, ao praticar a logística reversa, sua empresa estará atuando dentro da lei prevista na 
                                    Política Nacional de Resíduos Sólidos; </li>
                                <li> A logística reversa é benéfica para a economia, visto que ela gera mais produtos sustentáveis, do qual, por 
                                    sua vez, incentiva a geração de novos negócios, empregos e rendas; </li>
                                <li> Melhora a qualidade de vida dos moradores locais, dos quais passam a viver em um ambiente mais limpo, saudável 
                                    e responsável; </li>
                                <li> Diminui o uso desnecessário de novas matérias primas e previne o descarte inadequado de resíduos, tudo isso 
                                    aumenta significativamente a eficiência na utilização de recursos naturais pelas indústrias, contribuindo para a 
                                    manutenção do meio ambiente; </li>
                                <li> Ao cumprir a lei e pensar na segurança da natureza, a empresa tem sua imagem pública e profissional moldada 
                                    positivamente, inclusive aumentando as vendas devido aos consumidores de perfis mais conscientes; </li>
                                <li> Minimiza os custos de produção uma vez que os produtos devolvidos podem ser reutilizados para a fabricação de outras
                                    mercadorias ou até mesmo vendidos para uso de segunda mão; </li>
                            </ul>




                            <h2 id="exemplos-na-pratica" class="archor"> 
                                EXEMPLOS NA PRÁTICA
                            </h2>

                            <p class="conteudo-letra">
                                Bons exemplos não faltam e diversas empresas já implantaram a logística reversa, isso porque nos últimos anos esse assunto tem ganhado cada vez 
                                mais força. Empresas sustentáveis e empresas conscientes são títulos que vem agradando o público, que buscam nas marcas e empresas algo além do 
                                produto em si. Por isso, listamos algumas empresas que são exemplos no quesito sustentabilidade e logística reversa:
                            </p>

                            <h3 class="subtitle"> Empresas que praticam a logística reversa no Brasil </h3>

                            <h4 class="subtitle-2" style="margin-top: 16px;"> Natura </h4>

                            <p class="conteudo-letra">
                                Após a compra da Avon no começo de 2020, a Natura se tornou a 4ª maior empresa de beleza do mundo. Visando dar sentido ao seu nome, 
                                Natura, algo bem próximo de natureza e natural, a empresa criou alguns programas para diminuir seus impactos ao meio ambiente.
                            </p>

                            <p class="conteudo-letra">
                                O primeiro deles é o 
                                <a href="https://www.natura.com.br/carbono-neutro" target="_blank"><span class="box-destaque-letra"><span class="destaque-letra">Carbono Neutro</span></span></a>
                                que existe desde 2001 e já evitou a emissão de mais de 1.28 toneladas de CO2. Este programa contribui para a redução de emissão dos gases 
                                emitidos por todo o processo de fabricação de uma mercadoria, ou seja, desde a produção até o transporte. Além disso, este foi o programa 
                                responsável por iniciar o desenvolvimento de embalagens de polietileno verde, material 100% reciclável e produzido com base na cana-de-açúcar.
                            </p>

                            <div class="box-img-materia">
                                <img src="img/materia-natura.png" alt="Logo da Natura" class="img-materia">
                                <p class="img-legenda"> eescjr (2018) </p>
                            </div>

                            <p class="conteudo-letra">
                                Há também o
                                <a href="https://www.natura.com.br/blog/pele/novo-natura-ekos-tudo-sobre-o-relancamento-da-marca" target="_blank"><span class="box-destaque-letra"><span class="destaque-letra">EKOS</span></span></a>,
                                um programa lançado pela empresa que estabelece uma cadeia logística reversa para recolher os resíduos gerados por ela e envia-los para a 
                                reciclagem. Seu objetivo é retirar boa parte das embalagens de circulação e diminuir o impacto no ambiente. Este programa se destaca devido 
                                aos seus estudos e mapeamentos de todo o ciclo de vida das embalagens e dos produtos da marca.
                            </p>

                            <p class="conteudo-letra">
                                Por fim, a Natura opta pela pratica de refil, responsável pela retirada de 2,2 mil embalagens no mercado, além de reduzir em 54% a massa média do produto.
                            </p>


                            <h4 class="subtitle-2"> Pão de Açúcar </h4>

                            <p class="conteudo-letra">
                                A rede de supermercados Pão de Açúcar é referência entre as empresas que praticam a logística reversa. Desde de 2009, todas as suas unidades 
                                são inauguradas seguido os padrões de sustentabilidade impostos pela matriz, vale destacar que um dos seus focos principais é a logística reversa 
                                de equipamentos eletrônicos, da qual faz parte de suas ações permanentes.
                            </p>

                            <p class="conteudo-letra">
                                A Taeq, marca exclusiva do Pão de Açúcar, criou um projeto que visa levar de volta às gôndolas as embalagens que foram deixadas 
                                pelos consumidores nos Caixas Verdes das lojas ou nas Estações de Reciclagem previamente definidas.
                            </p>

                            <p class="conteudo-letra">
                                Em 2020, as lojas premium Minuto Pão de Açúcar, em parceria com a Cervejaria Ambev e a Green Mining, iniciaram um projeto para 
                                fazer logística reversa de vidro.
                            </p>


                            <h4 class="subtitle-2"> O Boticário </h4>

                            <p class="conteudo-letra">
                                O Boticário, principal concorrente da Natura, tem uma das melhores logísticas reversa do Brasil, sendo reconhecido por sua 
                                excelente preocupação com a sustentabilidade.
                            </p>

                            <p class="conteudo-letra">
                                Por exemplo, o programa chamado Boti Recicla permite o descarte adequado de resíduos sólidos por parte dos consumidores, 
                                dos quais são encorajados a levarem itens como frascos, potes e outras embalagens dos produtos da marca até às lojas para 
                                serem recomprados pela empresa. Desse modo, a marca transforma estes objetos em objetos de decoração e luminárias para as 
                                suas lojas, promovendo a conhecida economia circular.
                            </p>

                            <p class="conteudo-letra">
                                Outra coisa que o Boticário faz é tentar reduzir ao máximo a emissão de gases do efeito estufa através da otimização da
                                logística de cargas e rotas, além de priorizar o uso de combustíveis alternativos ao diesel, como a eletricidade, para 
                                reduzir o impacto causados pelas frotas de veículos.
                            </p>


                            <h3 class="subtitle"> Empresas que praticam logística reversa no mundo: </h3>

                            <h4 class="subtitle-2" style="margin-top: 16px;"> McDonald’s </h4>

                            <p class="conteudo-letra">
                                Já estabelecido como a maior rede de fast food do mundo com suas mais de 38 mil filiais, o McDonald’s não poupa esforço 
                                para melhorar a sua imagem pública. A empresa se esforça para diminuir o máximo possível os impactos que ela causa no meio
                                ambiente durante o transporte e processos de distribuição de alimentos.
                            </p>

                            <p class="conteudo-letra">
                                Visto isso, o McDonald’s possui uma ideia interessante quanto a utilização do óleo. Todo o óleo utilizado para fritar 
                                as grandes quantidades de batatas fritas, por intermédio da Martin-Brower, é levado para uma usina por meio de caminhões
                                responsáveis por levar alimentos para as filiais. Em seguida, esse óleo é transformado em biocombustível e utilizado para
                                abastecer os próprios caminhões da empresa.
                            </p>


                            <h4 class="subtitle-2"> FedEx </h4>

                            <p class="conteudo-letra">
                                A FedEx é outra grande multinacional que aposta na logística reversa, sempre que possível reduzindo o desperdício e 
                                aumentando a eficiência do seus negócios. De acordo com o site de sustentabilidade da FedEx, entre 2009 e 2019 houve
                                um aumento de 99,2% na quantidade de entregas, entretanto, nesse mesmo intervalo de tempo a FedEx conseguiu reduzir a
                                emissão de gás carbônico em 40%.
                            </p>

                            <p class="conteudo-letra">
                                A empresa adotou a abordagem “Reduzir. Repor. Revolucionar.” para mostrar que daqui para frente pretende expandir 
                                ainda mais suas ações em busca de reduzir os seus impactos ao meio ambiente. Aliás, a FedEx já opera com centenas 
                                de caminhões elétricos e híbridos.
                            </p>


                            <h4 class="subtitle-2"> Pneus Bridgestone </h4>

                            <p class="conteudo-letra">
                                A empresa, ao receber um pneu no final de sua vida útil, aplica a logística reversa, desse modo os pneus são triturados
                                e picotados, o que torna possível sua reutilização. Essa reutilização não pode ser destinada a produção de pneus dado 
                                que a borracha perde suas propriedades e o processo de fabricação de pneus é bem complexo. É por isso que essa borracha
                                picotada e triturada é utilizada em solas de sapatos, peças de reposição para indústria automobilística, borrachas para 
                                vedação e até em asfaltos.
                            </p>
                        </div>
                    </div>

            <!-- -- -- -- Publicidade -- -- -- -->
                    <div id="box-publicidade">
                        <div id="box-publicidade-2">
                            <img src="img/publicidade-coca.jpg" alt="Publicidade 1" class="publicidade" style="margin-top: 153px;">

                            <img src="img/publicidade-sorvete.jpg" alt="Publicidade 2" class="publicidade" style="margin-top: 614px;">

                            <img src="img/publicidade-danone.jpg" alt="Publicidade 3" class="publicidade" style="margin-top: 1000px;">

                            <img src="img/publicidade-graos.jpg" alt="Publicidade 4" class="publicidade" style="margin-top: 1212px;">
                        </div>
                    </div>

                </div>

        <!-- -- -- -- Referencias -- -- -- -->    
                <div id="box-referencias">
                    <div id="box-referencias-2">
                        <h2> Referências </h2>
                        <a href="https://saclogistica.com.br/3-exemplos-de-logistica-reversa/" target="_blank" class="box-link-ref">
                            <span class="text-link-ref"> BUTTA, Filipe. 3 Exemplos de logística reversa. SacLogística, 2021. </span>
                        </a>
                        <a href="https://eescjr.com.br/blog/5-empresas-exemplos-de-logistica-reversa/" target="_blank" class="box-link-ref">
                            <span class="text-link-ref"> COSTA, Gustavo. 5 empresas que são exemplos de logística reversa. EESCJR, 2018. </span>
                        </a>
                        <a href="https://maplink.global/blog/empresas-que-praticam-logistica-verde/" target="_blank" class="box-link-ref">
                            <span class="text-link-ref"> DORE, Eder. Quais empresas que praticam logística verde? 7 exemplos. Maplink, 2020. </span>
                        </a>
                        <a href="https://blog.contaazul.com/o-que-e-logistica-reversa" target="_blank" class="box-link-ref">
                            <span class="text-link-ref"> Equipe da Conta Azul. O que é logística reversa: do conceito à prática de uma pequena empresa. ContaAzul, 2022. </span>
                        </a>
                        <a href="https://elevesuasvendas.com.br/blog/vendas/logistica-reversa" target="_blank" class="box-link-ref">
                            <span class="text-link-ref"> Equipe TOTVS. Logística reversa: O que é, qual a importância e como aplicar. Eleve, 2021. </span>
                        </a>
                    </div>
                </div>

        <!-- -- -- -- Autor / Editor -- -- -- -->
                <div id="box-editor">
                    <div id="box-editor-2">
                        <div id="box-perfil">
                            <img src="../../sobre-nos/img-sobrenos/LucasKazuhiro.jpg" alt="Foto de Perfil do Editor da Página" id="perfil-imagem">
                        </div>
                        <div id="box-info">
                            <p id="info1"> Escrito por: </p>
                            <p id="info2"> Lucas K. Okokama </p>
                            <p id="info3"> Cursando Desenvolvimento de Sistemas | São Paulo - SP </p>

                            <div id="box-editor-redes-sociais">
                                <a href="https://www.instagram.com/tuahiro/" target=”_blank”>
                                    <img src="../imagem/instagram-icon.png" alt="Instagram do Editor da Página" class="editor-redes-sociais primeiro-item">
                                </a>
                                <a href="https://myanimelist.net/profile/HiroshiLKO" target="_blank">
                                    <img src="../imagem/myanimelist-icon.png" alt="MyAnimeList do Editor da Página" class="editor-redes-sociais segundo-item">
                                </a>
                                <a href="https://www.youtube.com/channel/UCtRREkTLWYNkZuxYDDKikaA" target="_blank">
                                    <img src="../imagem/youtube-icon.png" alt="Canal do Youtube do Editor da Página" class="editor-redes-sociais terceiro-item">
                                </a>
                            </div>
                        </div>
                        <div id="box-texto-editor">
                            <p> Um estudante de DS apaixonado por filmes, séries e animes. Adora tudo relacionado a Tecnologia e Design, especialmente 
                                fotografia, edição de vídeo, decoração de interiores e front-end. Ele ama cachorros e o frio, sua comida favorita é batata! </p>
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
                                        <img src="../materia-noticias/noticias-lixo-eletronico.png" alt="Lixo Eletrônico e seus problemas para o meio ambiente" class="imagem-noticia">
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