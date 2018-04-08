<?php include_once 'config.php' ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>ConstruShopping | Solicitar Orçamento</title>

    <link href="css/formsteps.css" rel="stylesheet" type="text/css">
    <?php include('incs/head.php');?> 
    
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    
  </head>

  <body>
    <?php include("incs/top-menu.php");?>
    <div class="container meupainel">
      <div class="row col-md-3 col-sm-3 col-xs-12">
        <?php include('incs/meupainel-menu.php');?>
      </div>
      <div class="col-md-9 col-sm-9 col-xs-12">

        <div class="meupainel-titulo">
          <h1 class="text-center">Solicitar Orçamento</h1>
        </div>

        <div class="center-block">          
          <div class="resp">
          </div>
          <form id="formulario" method="post" enctype="multipart/form-data" name="formulario">
            <ul id="progress">
              <li class="ativo">Passo 1</li>
              <li>Passo 2</li>
              <li>Passo 3</li>
            </ul>
            <fieldset>            
              <div class="container">
                <div class="">
                  <h2>O que você precisa?</h2>
                  <h3>Clique no equipamento abaixo</h3>                
                </div>
              </div>  
              <div id="dynamicDiv">
                <div class="panel-group" id="accordion">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <div class="text-center">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" href="#collapse1">Equipamento</a>                         
                        </h4>
                      </div>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse">
                      <div class="panel-body"> 
                        <label for="completar">Selecione o modelo:</label>
                        
                        <input type="hidden" id="incremento" name="incremento" value="1">
                        <input type="hidden" id="cliente_id_logado" name="cliente_id_logado" value="<?php echo $_SESSION['idCliente']; ?>">

                        <div class="col-md-12">                          			
                        <input type="text" class="completar" name="equipamento1" placeholder="Digite o nome de um equipamento">                  
                        </div>
                        <div class="col-md-6">  
                          <label for="sel2">Quantos dias deseja utilizar?</label>
                          <select class="form-control" name="periodo1">                        
                            <option value="">Selecione o dia</option>                    
                            <option value="1">1 dia</option>
                            <option value="7">7 dias</option>
                            <option value="15">15 dias</option>
                            <option value="30">30 dias</option>
                          </select>
                        </div>                              
                        <div class="col-md-6">                                  
                          <label for="sel1">Qual quantidade de equipamentos?</label>
                          <input type="text" name="quantidade1" placeholder="Digite um número"/>
                        </div>
                                                                           
                        <div class="col-md-12">
                          <textarea name="observacoes1" placeholder="Insira suas observações" rows="5" cols="45"></textarea>  
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>                  
              <div class="">
                <a href="javascript:;" id="addInput">
                  <button class="btn btn-primary glyphicon glyphicon-plus" aria-hidden="true">
                  Equipamento
                  </button>
                </a>
              </div>
              <input type="button" name="next1" class="next1 acao" value="Próximo"/>
            </fieldset>

            <fieldset>
              <h2>Onde deseja receber o material?</h2>
              <input type="text" name="cep" placeholder="CEP"/>
              <input type="text" name="rua" placeholder="Rua"/>
              <input type="text" name="bairro" placeholder="Bairro"/>              
              <input type="text" name="cidade" placeholder="Cidade"/>              
              <input type="text" name="estado" placeholder="Estado"/>              
              <input type="text" name="complemento" placeholder="Complemento"/>
              <input type="button" name="prev" class="prev acao" value="Anterior"/>
              <input type="button" name="next2" class="next acao" value="Próximo"/>
            </fieldset>

            <fieldset>
              <h2>Termos de uso</h2>
              <h3>Informações legais</h3>
              <textarea class="form-control" rows="10" name="termos-de-uso" id="comment">                
                CONSTRUSHOPPING ATIVIDADES DE INTERNET (“contrushopping”), sociedade empresária limitada, inscrita no CNPJ/MF sob o nº. 14.127.813/0001-51, é uma pessoa jurídica de direito privado prestadora de serviços de anúncios online, realizados entre promitentes contratantes (“Contratante”) e promitentes Prestadores de serviço (“Prestadores”), por meio do aplicativo e do site CONSTRUSHOP (“Plataforma”). Por intermédio destes Termos e Condições Gerais de Uso (“Termos”), Construshopping apresenta aos usuários em geral, aos Contratantes e aos Prestadores (todos em conjunto denominados “Usuários”) as condições essenciais para o uso dos serviços oferecidos na Plataforma. Ao utilizar a Plataforma ou utilizar os serviços ofertados por Construshopping, os Usuários aceitam e se submetem às condições destes Termos e às Políticas de Privacidade, bem como a todos os documentos anexos a estes.

                1. OBJETO
                1. Os serviços objeto dos presentes Termos consistem em: 1. Permitir aos Contratantes que utilizem a Plataforma para livremente e sem direcionamento ou interferência busquem orçamentos de Prestadores; 2. No Modelo de Utilização de Créditos, anunciar os orçamentos requeridos pelos Contratantes aos Prestadores (“Orçamentos”), que poderão oferecer ou não os seus Serviços ao Contratante. 3. Viabilizar o contato direto entre Prestadores e Contratantes interessados em adquirir os Serviços, por meio da divulgação das informações de contato de uma parte à outra. 4. Desenvolver e disponibilizar páginas da internet com anúncio dos serviços dos prestadores; 5. Viabilizar o retorno de resultados positivos de buscas das páginas dos Prestadores na Internet; 6. Desenvolver e implementar algoritmos de seleção e filtragem de busca. 2. Construshopping , portanto, possibilita que os Usuários contatem-se e negociem entre si diretamente, sem intervir no contato, na negociação ou na efetivação dos negócios, não sendo, nesta qualidade, fornecedor de quaisquer Serviços anunciados por seus Usuários na Plataforma. 3. Na qualidade de classificado de Serviços, Construshopping não impõe ou interfere em qualquer negociação sobre condição, valor, qualidade, forma ou prazo na contratação entre os Contratantes e Prestadores, tampouco garante a qualidade, ou entrega dos Serviços contratados entre os Usuários. 4. Ao se cadastrar, o Usuário poderá utilizar todos os serviços disponibilizados na Plataforma disponíveis para sua região, declarando, para tanto, ter lido, compreendido e aceitado os Termos.

                2. CAPACIDADE PARA CADASTRAR-SE:
                1. Os serviços de Construshopping estão disponíveis para pessoas físicas e pessoas jurídicas regularmente inscritas nos cadastros de contribuintes federal e estaduais que tenham capacidade legal para contratá-los. Não podem utilizá-los, assim, pessoas que não gozem dessa capacidade, inclusive menores de idade ou pessoas que tenham sido inabilitadas do Construshopping , temporária ou definitivamente. Ficam, desde já, os Usuários advertidos das sanções legais cominadas no Código Civil. 2. É vedada a criação de mais de um cadastro por Usuário. Em caso de multiplicidade de cadastros elaborados por um só Usuário, Construshopping reserva-se o direito de, a seu exclusivo critério e sem necessidade de prévia anuência dos ou comunicação aos Usuários, inabilitar todos os cadastros existentes e impedir eventuais cadastros futuros vinculados a estes. 1. Somente será permitida a vinculação de um cadastro a um CPF, um telefone e um e-mail, não podendo haver duplicidade de dados em nenhum caso. 3. Construshopping pode unilateralmente excluir o cadastro dos Usuários.

                3. CADASTRO
                1. É necessário o preenchimento completo de todos os dados pessoais exigidos por Construshopping no momento do cadastramento, para que o Usuário esteja habilitado a utilizar a Plataforma. 2. É de exclusiva responsabilidade dos Usuários fornecer, atualizar e garantir a veracidade dos dados cadastrais, não cabendo a Construshopping qualquer tipo de responsabilidade civil e criminal resultante de dados inverídicos, incorretos ou incompletos fornecidos pelos Usuários. 3. Construshopping se reserva o direito de utilizar todos os meios válidos e possíveis para identificar seus Usuários, bem como de solicitar dados adicionais e documentos que estime serem pertinentes a fim de conferir os dados pessoais informados. 4. Caso Construshopping considere um cadastro, ou as informações nele contidas, suspeito de conter dados errôneos ou inverídicos, Construshopping se reserva o direito de suspender, temporária ou definitivamente, o Usuário responsável pelo cadastramento, assim como impedir e bloquear qualquer publicidade ou cadastro de Serviços e cancelar anúncios publicados por este, sem prejuízo de outras medidas que entenda necessárias e oportunas. No caso de aplicação de quaisquer destas sanções, não assistirá aos Usuários direito a qualquer tipo de indenização ou ressarcimento por perdas e danos, lucros cessantes ou danos morais. 5. O Usuário acessará sua conta por meio de apelido (login) e senha, comprometendo-se a não informar a terceiros esses dados, responsabilizando-se integralmente pelo uso que deles seja feito. 6. O Usuário compromete-se a notificar o Construshopping lmediatamente, por meio dos canais de contato mantidos por Construshopping na Plataforma, a respeito de qualquer uso não autorizado de sua conta. O Usuário será o único responsável pelas operações efetuadas em sua conta, uma vez que o acesso só será possível mediante confirmação de seu telefone celular ou email. 7. Em nenhuma hipótese será permitida a cessão, a venda, o aluguel ou outra forma de transferência da conta. Não se permitirá, ainda, a criação de novos cadastros por pessoas cujos cadastros originais tenham sido cancelados por infrações às políticas de Construshopping . 8. O apelido que o Usuário utiliza em Construshopping não poderá guardar semelhança com o nome Construshopping. Tampouco poderá ser utilizado qualquer apelido que insinue ou sugira que os Serviços serão prestados por Construshopping ou que fazem parte de promoções suas. Também serão eliminados apelidos considerados ofensivos ou que infrinjam a legislação em vigor. 9. Construshopping se reserva o direito de, unilateralmente e sem prévio aviso, recusar qualquer solicitação de cadastro e de cancelar um cadastro previamente aceito.

                4. MODIFICAÇÕES DOS TERMOS E CONDIÇÕES GERAIS
                1. Construshopping poderá alterar, a qualquer tempo e a seu único e exclusivo critério, estes Termos. Os novos Termos entrarão em vigor 10 (dez) dias depois de publicados na Plataforma. No prazo de 5 (cinco) dias contados a partir da publicação das modificações, o Usuário deverá informar, por e-mail, caso não concorde com os termos alterados. Nesse caso, o vínculo contratual deixará de existir, desde que não haja contas ou dívidas em aberto. Não havendo manifestação no prazo estipulado, entender-se-á que o Usuário aceitou tacitamente os novos Termos, e o contrato continuará vinculando as partes. 2. As alterações não vigorarão em relação a negociações e anúncios já iniciados ao tempo em que tais alterações sejam publicadas. Apenas para estes, os Termos valerão com a redação anterior. 3. Os serviços oferecidos por Construshopping poderão ser diferentes para cada região do país. Estes Termos deverão ser interpretados de acordo com a região em que foi efetuado o cadastro do Prestador.

                5. MODELO DE UTILIZAÇÃO DE CRÉDITOS – ACEITE DE ORÇAMENTOS
                1. No Modelo de Utilização de Créditos, os Contratantes prestarão informações básicas sobre os Serviços que pretendem contratar e os Orçamentos serão disponibilizados aos Prestadores que poderão, de livre vontade, escolher se entrarão em contato com o Contratante. 2. Os dados de contato do Contratante somente serão disponibilizados ao Prestador após o desconto de um número pré-determinado de Créditos (“Créditos”), que poderão ser adquiridos pelo Prestador. 3. O Prestador reconhece que, ao dispender Créditos para visualizar os dados de contato do Contratante, ele apenas estará pagando para ter acesso a estes dados, não podendo responsabilizar Construshopping pelo insucesso de uma eventual negociação com o Contratante, qualquer que seja o motivo, incluindo dados cadastrais desatualizados ou incorretos inseridos pelo Contratante.

                6. PRIVACIDADE DA INFORMAÇÃO
                1. Todas as informações ou os dados pessoais prestados pelo Usuário de Construshopping são armazenados em servidores ou meios magnéticos de alta segurança. 2. Construshopping tomará todas as medidas possíveis para manter a confidencialidade e a segurança descritas nesta cláusula, mas não será responsável por prejuízo que possa ser derivado da violação dessas medidas por parte de terceiros que utilizem de meios indevidos, fraudulentos ou ilegais para acessar as informações armazenadas nos servidores ou nos bancos de dados utilizados por Construshopping. 3. Construshopping poderá utilizar e ceder os dados fornecidos pelos Usuários e as informações relativas ao uso da plataforma, para quaisquer finalidades, incluindo, mas não se limitando a, fins comerciais, publicitários, educativos e jornalísticos. 4. Construshopping também poderá utilizar os dados dos Usuários e Parceiras para análises, estudos, elaboração de relatórios, tudo conforme necessário para o bom funcionamento e o desenvolvimento da plataforma e dos serviços oferecidos. 5. Construshopping , por motivos legais, manterá em seu banco de dados todas as informações coletadas dos Usuários que excluírem seus cadastros. 6. O apelido e a senha de cada Usuário servem para garantir a privacidade e a sua segurança. Construshopping recomenda a seus Usuários que não compartilhem essas informações com ninguém. Construshopping não se responsabiliza por danos ou prejuízos causados ao Usuário pelo compartilhamento dessas informações. 7. Toda informação prestada pelos Usuários ao Construshopping é protegida por empresas especializadas. 8. Construshopping segue os padrões de segurança comumente utilizados pelas empresas que trabalham com transmissão e retenção de dados para garantir a segurança de seus Usuários. No entanto, nenhum método de transmissão ou retenção de dados eletrônicos é plenamente seguro e pode estar sujeito a ataques externos. Assim, apesar de utilizar todos os meios possíveis e adequados, Construshopping não pode garantir a absoluta segurança das informações prestadas. 9. Construshopping coleta e guarda todas as informações prestadas por seus usuários durante a utilização de sua plataforma, incluindo no momento do cadastramento, para uso próprio e de seus parceiros comerciais. 10. O nome, e-mail e outros dados dos Usuários poderão ser utilizados para o envio de notificações, informações sobre a conta ou Serviços prestados, avisos sobre violações ao Termo e outras comunicações que Construshopping considerar necessárias. Os Usuários poderão requisitar a Construshopping a sua exclusão de sua lista de envio de mensagens (mailing). Construshopping prestará todas as informações requisitadas por órgãos públicos, desde que devidamente justificadas e compatíveis com a lei em vigor. 11. Construshopping utiliza cookies e softwares de monitoramento de seus Usuários para prover a seus Usuários a melhor navegação possível, baseado em suas necessidades, e para pesquisas internas. Esses cookies não coletam informações pessoais, apenas informam preferências de uso e de navegação de cada Usuário, além de prover a Construshopping estatísticas e dados para aprimorar seus serviços. 12. Os Usuários concordam que as suas informações pessoais serão enviadas para a outra Parte, Prestador ou Contratante, para que seja possível a comunicação entre as Partes em caso de tentativa de contratação do serviço. 13. Construshopping coletará as informações pertinentes às transações ou outros negócios realizados por meio da Construshopping e poderá utilizá-las ou divulgá-las para fins comerciais ou de aperfeiçoamento de suas funcionalidades. 14. Construshopping não tem acesso ao conteúdo das ligações ou comunicações entre os Usuários.

                7. TARIFAS - MODELO DE UTILIZAÇÃO DE CRÉDITOS
                1. No Modelo de Utilização de Créditos, os Prestadores poderão adquirir Créditos resgatáveis que servirão como moeda virtual usada para acionar as funcionalidades da plataforma Construshopping, principalmente o acesso aos contatos dos Contratantes. 2. Os Créditos poderão ser adquiridos no aplicativo do Construshopping. 3. O preço e disponibilidade dos Créditos e dos Orçamentos estão sujeitos a alterações sem aviso prévio. 4. O Prestador é o único responsável por verificar se a quantidade correta de Créditos foi adicionada ou deduzida de sua conta durante qualquer transação. É obrigação do Prestador informar Construshopping sobre qualquer falha ou erro.

                8. POLÍTICA DE CANCELAMENTO - MODELO DE UTILIZAÇÃO DE CRÉDITOS
                1. No Modelo de Utilização de Créditos, os Créditos adquiridos pelo Prestador não serão devolvidos ao Prestador ou convertidos em moeda corrente, caso o Prestador decida parar de usar a plataforma Construshopping. 2. Os Créditos adquiridos terão validade de 1 (um) ano a partir do momento da aquisição. Após esse período, os Créditos vencidos serão descontados da conta do Prestador, que não poderá reclamar nenhum direito sobre eles. 3. O Prestador que não deseje realizar a renovação automática do Modelo de Utilização de Crédito deverá, em até 48h após a renovação automática e apenas caso não tenha utilizado créditos adquiridos em razão da renovação, informar à Construshopping que não deseja efetuar a renovação. Após esse período, será cobrada multa no valor de 20% do valor contratado em razão da rescisão. Caso o Prestador tenha utilizado créditos referente à renovação, não será permitida a rescisão.

                9. SERVIÇOS E ANÚNCIOS E ORÇAMENTOS PROIBIDOS
                1. Construshopping é uma plataforma de classificados online de Locação, estando proibida a veiculação de qualquer anúncio de venda, troca ou qualquer forma de transferência de posse ou propriedade de qualquer bem móvel ou imóvel. 2. Estão proibidas também a veiculação de anúncios de serviços ilegais de acordo com a legislação vigente ou que possam ser considerados ofensivos a terceiros. 3. A lista de produtos e serviços proibidos está disponível na página [página]. 4. Construshopping excluirá, unilateralmente e sem qualquer comunicação prévia, aquele Usuário que desrespeitar as regras contidas nesta Cláusula 10. 1. Construshopping não realiza uma curadoria prévia dos anúncios veiculados na Plataforma. 5. Qualquer Usuário ou pessoa física ou jurídica que se sentir ofendido por qualquer anúncio veiculado na Plataforma poderá requisitar a Construshopping que exclua aquele anúncio de sua Plataforma, pelos seus canais de atendimento.

                10. SISTEMA DE QUALIFICAÇÃO DOS PRESTADORES
                1. Os Prestadores aceitam e se submetem ao sistema de qualificação adotado por Construshopping . 2. Os Prestadores concordam que a Construshopping poderá cancelar, excluir ou suspender por tempo indeterminado cadastros que apresentem qualificações negativas de forma reiterada. 3. Não assistirá aos Prestadores qualquer tipo de indenização ou ressarcimento por perdas e danos, lucros cessantes e danos morais, em razão da qualificação atribuída aos Serviços anunciados. 1. Caso o Prestador excluído tenha contratado um plano, Construshopping devolverá os valores do plano contratado, proporcionalmente ao tempo decorrido desde a contratação até a efetiva exclusão. 2. O Prestador excluído deverá enviar uma cópia do RG, CPF e comprovante de residência para fazer jus à devolução de valores. O Prazo de 60 dias para a devolução dos valores começará a ser contado a partir da data de recebimento de todos os documentos por Construshopping. 4. Tendo em vista que os comentários postados são opiniões pessoais dos Usuários, estes serão responsáveis pelas opiniões publicadas na Plataforma, seja perante Construshopping , perante os Prestadores, terceiros, órgãos governamentais ou demais Usuários do site, isentando Construshopping de qualquer responsabilidade relativa à veiculação dos comentários. 1. Construshopping não excluíra comentários ou qualificações sobre os Prestadores. Somente o Usuário responsável pelo comentário ou qualificação poderá remover ou alterar os comentários ou qualificações. 5. Construshopping se reserva o direito de excluir unilateralmente e a seu exclusivo critério, comentários que contenham: 1. Ofensa à honra, imagem, reputação e dignidade de terceiros; 2. Pornografia, pedofilia, e outras modalidades de satisfação sexual; 3. Racismo ou discriminação de qualquer natureza; 4. Bullying, Stalking ou qualquer outra espécie de constrangimento ilegal ou assédio; 5. Manifesta violação a direito autoral ou direito de imagem; 6. Utilização de marcas, símbolos, logotipos ou emblemas de terceiros; 7. Instigação ou apologia à prática de crimes, como tráfico ou uso de entorpecentes, estupro, homicídio, estelionato, dentre outros; 8. Erros ou suspeita de equívocos.

                11. OBRIGAÇÕES DOS USUÁRIOS
                1. O Prestador deve ter capacidade legal para prestar o Serviço. 2. Em virtude de Construshopping não figurar como parte nas transações de contratação dos Serviços que se realizam entre os Usuários, a responsabilidade por todas as obrigações delas decorrentes, sejam fiscais, trabalhistas, consumeristas ou de qualquer outra natureza, será exclusivamente do Contratante, do Prestador ou de ambos, conforme o caso. Na hipótese de interpelação judicial que tenha como Réu Construshopping, cujos fatos fundem-se em ações do Prestador, este será chamado ao processo, devendo arcar com todos os ônus que daí decorram, incluindo despesas com taxas, emolumentos, acordos, honorários advocatícios entre outros. Por não figurar como parte nas transações que se realizam entre os Usuários, Construshopping também não pode obrigar os Usuários a honrarem suas obrigações ou a efetivarem a negociação. 3. O Prestador deverá ter em mente que, na medida em que atue como um fornecedor de serviços, sua oferta o vincula, nos termos do artigo 30 do Código de Defesa do Consumidor e do artigo 429 do Código Civil, cujo cumprimento poderá ser exigido judicialmente pelo Contratante 4. GetNinjas não se responsabiliza pelas obrigações tributárias que recaiam sobre as atividades dos Usuários. Assim como estabelece a legislação pertinente em vigor, o Contratante deverá exigir nota fiscal do Prestador em suas transações. O Prestador, nos moldes da lei vigente, responsabilizar-se-á pelo cumprimento da integralidade das obrigações oriundas de suas atividades, notadamente aquelas referentes a tributos incidentes.

                12. PRÁTICAS VEDADAS
                1. É terminantemente vedado aos Usuários, entre outras atitudes previstas nestes Termos, manipular, direta ou indiretamente, os preços dos Serviços anunciados. 2. É proibido aos Prestadores divulgar o mesmo anúncio, conteúdo, item ou serviço em mais de uma categoria e/ou de forma repetida. GetNinjas se reserva o direito de excluir anúncios ou serviços repetidos, assim como suspender ou excluir o cadastro do Prestador responsável pela duplicidade. 3. Os Usuários não poderão: (i) Obter, guardar, divulgar, comercializar e/ou utilizar dados pessoais sobre outros Usuários para fins comerciais ou ilícitos; (ii) Usar meios automáticos, incluindo spiders, robôs, crawlers, ferramentas de captação de dados ou similares para baixar dados do site (exceto ferramentas de busca na Internet e arquivos públicos não comerciais); (iii) Burlar, ou tentar burlar, de qualquer forma que seja, o sistema, mecanismo e/ou a plataforma do site; e (iv) incluir meios de contato como telefone, e-mail, endereço e outras formas de comunicação nas ofertas.

                13. VIOLAÇÃO NO SISTEMA OU DA BASE DE DADOS
                1. É vedada a utilização de dispositivo, software ou outro recurso que possa interferir nas atividades e nas operações de Plataforma, bem como nos anúncios, nas descrições, nas contas ou em seus bancos de dados. Qualquer intromissão, tentativa de, ou atividade que viole ou contrarie as leis de direito de propriedade intelectual e as proibições estipuladas nestes Termos tornará o responsável passível de sofrer os efeitos das ações legais pertinentes, bem como das sanções aqui previstas, sendo ainda responsável por indenizar construshopping ou seus Usuários por eventuais danos causados.

                14. SANÇÕES
                1. Sem prejuízo de outras medidas, Construshopping poderá, a seu exclusivo critério e sem necessidade de prévia anuência dos ou comunicação aos Usuários, advertir, suspender ou cancelar, temporária ou permanentemente, o cadastro ou os anúncios do Usuário, podendo aplicar sanção que impacte negativamente em sua reputação, a qualquer tempo, iniciando as ações legais cabíveis e suspendendo a prestação de seus serviços, se: (i) o Usuário não cumprir qualquer dispositivo destes Termos e as demais políticas de Construshopping; (ii) descumprir com seus deveres de Usuário; (iii) praticar atos delituosos ou criminais; (iv) não puder ser verificada a identidade do Usuário, qualquer informação fornecida por ele esteja incorreta ou se as informações prestadas levarem a crer que o cadastro seja falso ou de pessoa diversa; (v) Construshopping entender que os anúncios ou qualquer outra atitude do Usuário tenham causado algum dano a terceiros ou a Construshopping ou tenham a potencialidade de assim o fazer. 2. Nos casos de suspensão, temporária ou permanente, do cadastro do Prestador, todos os anúncios ativos e as ofertas realizadas serão automaticamente canceladas. 1. Em caso de suspensão temporária, o plano contratado pelo Prestador será suspenso até a reabilitação do cadastro do Prestador, quando voltará a viger normalmente. 2. Em caso de suspensão permanente, GetNinjas devolverá os valores do plano contratado, proporcionalmente ao tempo decorrido desde a contratação até a efetiva exclusão. 3. Em caso de suspensão permanente em razão de anúncio de produto ou serviço proibido, Construshopping não devolverá os valores do plano contratado. 3. Construshopping se reserva o direito de, a qualquer momento e a seu exclusivo critério, solicitar o envio de documentação pessoal ou de qualquer documento que comprove a veracidade das informações cadastrais. 1. Em caso de requisição de documentos, quaisquer prazos determinados nestes Termos só serão aplicáveis a partir da data de recebimento dos documentos solicitados ao Prestador por Construshopping.

                15. RESPONSABILIDADES
                1. Construshopping não se responsabiliza por vícios ou defeitos técnicos e/ou operacionais oriundos do sistema do Usuário ou de terceiros. 2. Construshopping não é responsável pela entrega dos Serviços anunciados pelos Prestadores na Plataforma. 3. Construshopping tampouco se responsabiliza pela existência, quantidade, qualidade, estado, integridade ou legitimidade dos Serviços oferecidos ou contratados pelos Usuários, assim como pela capacidade para contratar dos Usuários ou pela veracidade dos dados pessoais por eles fornecidos. Construshopping, por não ser proprietária, depositante ou detentora dos produtos oferecidos, não outorga garantia por vícios ocultos ou aparentes nas negociações entre os Usuários. Cada Usuário conhece e aceita ser o único responsável pelos Serviços que anuncia ou pelas ofertas que realiza. 4. Getninjas não será responsável por ressarcir seus Usuários por quaisquer gastos com ligações telefônicas, pacotes de dados, SMS, mensagens, emails, correspondência ou qualquer outro valor despendido pelo Usuário em razão de contato com Construshopping ou quaisquer outros Usuário, por qualquer motivo que o seja. 5. Construshopping não poderá ser responsabilizada pelo efetivo cumprimento das obrigações assumidas pelos Usuários. Os Usuários reconhecem e aceitam que, ao realizar negociações com outros Usuários, fazem-no por sua conta e risco, reconhecendo o Construshopping como mero fornecedor de serviços de disponibilização de espaço virtual para anúncio dos Serviços ofertados por terceiros. 6. Em nenhum caso Construshopping será responsável pelo lucro cessante ou por qualquer outro dano e/ou prejuízo que o Usuário possa sofrer devido às negociações realizadas ou não realizadas por meio de Plataforma, decorrentes da conduta de outros Usuários. 7. Por se tratar de negociações realizadas por meio eletrônico entre dois Usuários que não se conheciam previamente à negociação, Construshopping recomenda que toda transação seja realizada com cautela e prudência. 8. Caso um ou mais Usuários ou algum terceiro inicie qualquer tipo de reclamação ou ação legal contra outro ou outros Usuários, todos e cada um dos Usuários envolvidos nas reclamações ou ações eximem de toda responsabilidade Construshopping e seus diretores, gerentes, empregados, agentes, operários, representantes e procuradores. 9. Construshopping se reserva o direito de auxiliar e cooperar com qualquer autoridade judicial ou órgão governamental, podendo enviar informações cadastrais ou negociais de seus Usuários, quando considerar que seu auxilio ou cooperação sejam necessários para proteger seus Usuários, funcionários, colaboradores, administradores, sócios ou qualquer pessoa que possa ser prejudicada pela ação ou omissão combatida.

                16. ALCANCE DOS SERVIÇOS
                1. Estes Termos não geram nenhum contrato de sociedade, de mandato, de franquia ou relação de trabalho entre Construshopping e o Usuário. O Usuário manifesta ciência de que Construshopping não é parte de nenhuma transação realizada entre Usuários, nem possui controle algum sobre a qualidade, a segurança ou a legalidade dos Serviços anunciados pelos Usuários, sobre a veracidade ou a exatidão dos anúncios elaborados pelos Usuários, e sobre a capacidade dos Usuários para negociar. 2. Construshopping não pode assegurar o êxito de qualquer transação realizada entre Usuários, tampouco verificar a identidade ou os dados pessoais dos Usuários. Construshopping não garante a veracidade da publicação de terceiros que apareça em sua Plataforma e não será responsável pela correspondência ou por contratos que o Usuário realize com terceiros.

                17. PROBLEMAS DECORRENTES DO USO DO SISTEMA
                1. Construshopping não se responsabiliza por qualquer dano, prejuízo ou perda sofridos pelo Usuário em razão de falhas em sua conexão com a internet, com o seu provedor, no sistema, com o sistema de SMS, com a linha telefônica ou no servidor utilizados pelo Usuário, decorrentes de condutas de terceiros, caso fortuito ou força maior. 2. Construshopping também não será responsável por qualquer vírus, trojan, malware, spyware ou qualquer software que possa danificar, alterar as configurações ou infiltrar o equipamento do Usuário em decorrência do acesso, da utilização ou da navegação na internet, ou como consequência da transferência de dados, informações, arquivos, imagens, textos ou áudio.

                18. PROPRIEDADE INTELECTUAL E LINKS
                1. O uso comercial da expressão "Contrushopping" como marca, nome empresarial ou nome de domínio, bem como os logos, marcas, insígnias, conteúdo das telas relativas aos serviços da Plataforma e o conjunto de programas, bancos de dados, redes e arquivos que permitem que o Usuário acesse e use sua conta, são propriedade de Construshopping e estão protegidos pelas leis e pelos tratados internacionais de direito autoral, de marcas, de patentes, de modelos e de desenhos industriais. O uso indevido e a reprodução total ou parcial dos referidos conteúdos são proibidos, salvo com autorização expressa de Construshopping.

                19. INDENIZAÇÃO
                1. O Usuário indenizará Construshopping, suas filiais, empresas controladas, controladores diretos ou indiretos, diretores, administradores, colaboradores, representantes e empregados, inclusive quanto a honorários advocatícios, por qualquer demanda promovida por outros Usuários ou terceiros, decorrentes das atividades do primeiro na Plataforma, de quaisquer descumprimentos, por aquele, dos Termos e das demais políticas de Construshopping ou, ainda, de qualquer violação, pelo Usuário, de lei ou de direitos de terceiros.

                20. LEGISLAÇÃO APLICÁVEL E FORO DE ELEIÇÃO
                1. Todos os itens destes Termos são regidos pelas leis vigentes na República Federativa do Brasil.
              </textarea>
              <input type="button" name="prev" class="prev acao" value="Anterior"/>
              <input type="submit" name="next" class="acao" value="Enviar"/>
            </fieldset>            
            <script type="text/javascript" src="js/orcamentodinamico.js"></script>            
          </form>
        </div>
      </div>
    </div>
    <?php include("incs/links-uteis.php");?>
    <?php include("incs/footer-menu.php");?>
    <?php include('incs/footer.php');?>
    
    <script type="text/javascript" src="js/cadastroorcamento.js"></script>    
  </body>
</html>