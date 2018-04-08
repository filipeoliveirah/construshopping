
CREATE TABLE IF NOT EXISTS `tb_postagens` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `data` varchar(12) NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `exibir` varchar(5) NOT NULL,
  `descricao` longtext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_postagens`
--

INSERT INTO `tb_postagens` (`id`, `titulo`, `data`, `imagem`, `exibir`, `descricao`) VALUES
(14, 'Upload pelo admin', '10/10/1010', '421.jpg', 'Sim', '<span style="line-height: 22.1000003814697px;"><b>Lorem </b>Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has <i>been </i>the industry''s standard dummy text <i>ever </i>since the 1500s, <i>when </i>an <b>unknown </b>printer took a <u>galley </u>of type.</span><br><div><span style="line-height: 22.1000003814697px;"><br></span></div><div><b style="line-height: 22.1px;">Lorem&nbsp;</b><span style="line-height: 22.1px;">Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has&nbsp;</span><i style="line-height: 22.1px;">been&nbsp;</i><span style="line-height: 22.1px;">the industry''s standard dummy text&nbsp;</span><i style="line-height: 22.1px;">ever&nbsp;</i><span style="line-height: 22.1px;">since the 1500s,&nbsp;</span><i style="line-height: 22.1px;">when&nbsp;</i><span style="line-height: 22.1px;">an&nbsp;</span><b style="line-height: 22.1px;">unknown&nbsp;</b><span style="line-height: 22.1px;">printer took a&nbsp;</span><u style="line-height: 22.1px;">galley&nbsp;</u><span style="line-height: 22.1px;">of type.</span><span style="line-height: 22.1000003814697px;"><br></span></div><div><span style="line-height: 22.1px;"><br></span></div><div><b style="line-height: 22.1px;">Lorem&nbsp;</b><span style="line-height: 22.1px;">Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has&nbsp;</span><i style="line-height: 22.1px;">been&nbsp;</i><span style="line-height: 22.1px;">the industry''s standard dummy text&nbsp;</span><i style="line-height: 22.1px;">ever&nbsp;</i><span style="line-height: 22.1px;">since the 1500s,&nbsp;</span><i style="line-height: 22.1px;">when&nbsp;</i><span style="line-height: 22.1px;">an&nbsp;</span><b style="line-height: 22.1px;">unknown&nbsp;</b><span style="line-height: 22.1px;">printer took a&nbsp;</span><u style="line-height: 22.1px;">galley&nbsp;</u><span style="line-height: 22.1px;">of type.</span><span style="line-height: 22.1px;"><br></span></div>'),
(16, 'Teste', '12/09/2015', '22673.jpg', 'Sim', '<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi congue velit lacus, sit amet hendrerit augue placerat ut. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean ac dui ut eros euismod convallis at vel libero. Quisque eu leo volutpat, feugiat ante id, ultricies diam. Fusce facilisis id ex semper condimentum. Maecenas dapibus sed urna et consequat. Sed velit lorem, efficitur ac ex volutpat, sagittis facilisis ex. Aliquam eleifend pellentesque nulla at viverra.</div><div><br></div><div>Suspendisse vel dolor ut erat ultrices posuere vel eget odio. Quisque venenatis porttitor venenatis. Maecenas sed arcu sit amet arcu mattis sodales quis vel risus. Nullam sed malesuada felis, ut varius purus. Sed et lorem convallis, ullamcorper purus eget, dictum justo. Nunc tempus ligula nibh, et eleifend erat eleifend nec. Praesent tellus lorem, condimentum fringilla cursus sed, hendrerit sit amet elit. Praesent nisi arcu, pretium non mattis vitae, imperdiet at nisl. Nam vulputate massa ut ante malesuada pretium. Praesent tincidunt mattis lorem vitae lobortis. Nunc at quam eu nunc viverra auctor iaculis sed est.</div><div><br></div><div>Proin dictum ligula ut sapien interdum fringilla. Quisque dignissim dui nec elementum rhoncus. Ut id enim ac justo ullamcorper tincidunt vel ac elit. Suspendisse consectetur nisi gravida odio commodo, et ultricies lorem pretium. Duis ac neque non dolor molestie luctus. Donec ultricies urna augue, sit amet bibendum odio auctor quis. Nam velit magna, pharetra eget nibh id, consectetur congue metus. Vivamus faucibus pharetra dolor, a accumsan tortor maximus dignissim. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque viverra vehicula turpis, ac laoreet magna ullamcorper varius. Fusce pharetra, augue vel maximus lacinia, magna arcu gravida sem, eget efficitur tellus quam eu lacus. Quisque facilisis orci in velit placerat, quis porta lacus porttitor.</div><div><br></div><div>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec faucibus consequat nulla, eget tempor nunc egestas vitae. Pellentesque elementum eget enim scelerisque consectetur. Nulla aliquet placerat odio, vitae blandit tortor dictum id. Proin aliquam erat ipsum, non accumsan sapien porttitor a. Praesent maximus nec magna vitae dignissim. Phasellus vehicula diam in sollicitudin elementum. Duis sed massa id erat imperdiet facilisis nec nec erat. Etiam lacus erat, interdum et elementum in, lobortis a turpis. Donec efficitur non nibh ut tristique. Sed nec pellentesque risus, ac ultricies elit. Etiam elementum pulvinar ligula, a vulputate elit hendrerit in.</div>'),
(17, 'Mais uma aaaa', '00/00/0000', '13863.jpg', 'Sim', '<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi congue velit lacus, sit amet hendrerit augue placerat ut. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean ac dui ut eros euismod convallis at vel libero. Quisque eu leo volutpat, feugiat ante id, ultricies diam. Fusce facilisis id ex semper condimentum. Maecenas dapibus sed urna et consequat. Sed velit lorem, efficitur ac ex volutpat, sagittis facilisis ex. Aliquam eleifend pellentesque nulla at viverra.</div><div><br></div><div>Suspendisse vel dolor ut erat ultrices posuere vel eget odio. Quisque venenatis porttitor venenatis. Maecenas sed arcu sit amet arcu mattis sodales quis vel risus. Nullam sed malesuada felis, ut varius purus. Sed et lorem convallis, ullamcorper purus eget, dictum justo. Nunc tempus ligula nibh, et eleifend erat eleifend nec. Praesent tellus lorem, condimentum fringilla cursus sed, hendrerit sit amet elit. Praesent nisi arcu, pretium non mattis vitae, imperdiet at nisl. Nam vulputate massa ut ante malesuada pretium. Praesent tincidunt mattis lorem vitae lobortis. Nunc at quam eu nunc viverra auctor iaculis sed est.</div>'),
(18, 'Testando envio', '12/12/1212', '9207.jpg', 'Sim', '<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi congue velit lacus, sit amet hendrerit augue placerat ut. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean ac dui ut eros euismod convallis at vel libero. Quisque eu leo volutpat, feugiat ante id, ultricies diam. Fusce facilisis id ex semper condimentum.&nbsp;</div><div><br></div><div>Maecenas dapibus sed urna et consequat. Sed velit lorem, efficitur ac ex volutpat, sagittis facilisis ex. Aliquam eleifend pellentesque nulla at viverra.</div><div><br></div><div>Suspendisse vel dolor ut erat ultrices posuere vel eget odio. Quisque venenatis porttitor venenatis. Maecenas sed arcu sit amet arcu mattis sodales quis vel risus. Nullam sed malesuada felis, ut varius purus. Sed et lorem convallis, ullamcorper purus eget, dictum justo.&nbsp;</div><div><br></div><div>Nunc tempus ligula nibh, et eleifend erat eleifend nec. Praesent tellus lorem, condimentum fringilla cursus sed, hendrerit sit amet elit. Praesent nisi arcu, pretium non mattis vitae, imperdiet at nisl. Nam vulputate massa ut ante malesuada pretium. Praesent tincidunt mattis lorem vitae lobortis. Nunc at quam eu nunc viverra auctor iaculis sed est.</div><div><br></div><div>Proin dictum ligula ut sapien interdum fringilla. Quisque dignissim dui nec elementum rhoncus. Ut id enim ac justo ullamcorper tincidunt vel ac elit. Suspendisse consectetur nisi gravida odio commodo, et ultricies lorem pretium. Duis ac neque non dolor molestie luctus. Donec ultricies urna augue, sit amet bibendum odio auctor quis. Nam velit magna, pharetra eget nibh id, consectetur congue metus.&nbsp;</div><div><br></div><div>Vivamus faucibus pharetra dolor, a accumsan tortor maximus dignissim. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque viverra vehicula turpis, ac laoreet magna ullamcorper varius. Fusce pharetra, augue vel maximus lacinia, magna arcu gravida sem, eget efficitur tellus quam eu lacus. Quisque facilisis orci in velit placerat, quis porta lacus porttitor.</div><div><br></div>'),
(19, 'Titulo do post', '15/21/2121', '16996.jpg', 'Sim', '<div><b>Lorem <span style="background-color: rgb(204, 0, 153);">ipsum</span></b><span style="background-color: rgb(204, 0, 153);"> </span>dolor sit amet, consectetur adipiscing elit. Morbi congue velit lacus, sit amet hendrerit augue placerat ut. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean ac dui ut eros euismod convallis at vel libero. Quisque eu leo volutpat, feugiat ante id, ultricies diam. Fusce facilisis id ex semper condimentum. Maecenas dapibus sed urna et consequat. Sed velit lorem, efficitur ac ex volutpat, sagittis facilisis ex. Aliquam eleifend pellentesque nulla at viverra.</div><div><b><br></b></div><div><b>Suspendisse vel dolor ut erat ultrices posuere vel eget odio. Quisque venenatis porttitor venenatis. Maecenas sed arcu sit amet arcu mattis sodales quis vel risus. Nullam sed malesuada felis, ut varius purus. Sed et lorem convallis, ullamcorper purus eget, dictum justo. Nunc tempus ligula nibh, et eleifend erat eleifend nec. Praesent tellus lorem, condimentum fringilla cursus sed, hendrerit sit amet elit. Praesent nisi arcu, pretium non mattis vitae, imperdiet at nisl. Nam vulputate massa ut ante malesuada pretium. Praesent tincidunt mattis lorem vitae lobortis. Nunc at quam eu nunc viverra auctor iaculis sed est.</b></div><div><br></div><div>Proin dictum ligula ut sapien interdum fringilla. Quisque dignissim dui nec elementum rhoncus. Ut id enim ac justo ullamcorper tincidunt vel ac elit. Suspendisse consectetur nisi gravida odio commodo, et ultricies lorem pretium. Duis ac neque non dolor molestie luctus. Donec ultricies urna augue, sit amet bibendum odio auctor quis.</div><div><br></div><div><br></div><div><font color="#cc9900">&nbsp;<i>Nam velit magna, pharetra eget nibh id, consectetur congue metus. Vivamus faucibus pharetra dolor, a accumsan tortor maximus dignissim. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque viverra vehicula turpis, ac laoreet magna ullamcorper varius. Fusce pharetra, augue vel maximus lacinia, magna arcu gravida sem, eget efficitur tellus quam eu lacus. Quisque facilisis orci in velit placerat, quis porta lacus porttitor.</i></font></div><div><br></div><div><br></div>'),
(20, 'Mais uma aula', '21/21/2121', '28415.jpg', 'Sim', '<div><span style="line-height: 1.7em;">Proin dictum ligula ut sapien interdum fringilla. Quisque dignissim dui nec elementum rhoncus. Ut id enim ac justo ullamcorper tincidunt vel ac elit. Suspendisse consectetur nisi gravida odio commodo, et ultricies lorem pretium. Duis ac neque non dolor molestie luctus. Donec ultricies urna augue, sit amet bibendum odio auctor quis.&nbsp;</span><br></div><div><br></div><div><b><u><i>Nam velit magna, pharetra eget nibh id, consectetur congue metus.</i></u></b></div><div><br></div><div>&nbsp;Vivamus faucibus pharetra dolor, a accumsan tortor maximus dignissim. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque viverra vehicula turpis, ac laoreet magna ullamcorper varius. Fusce pharetra, augue vel maximus lacinia, magna arcu gravida sem, eget efficitur tellus quam eu lacus. Quisque facilisis orci in velit placerat, quis porta lacus porttitor.</div><div><br></div><div>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec faucibus consequat nulla, eget tempor nunc egestas vitae. Pellentesque elementum eget enim scelerisque consectetur. Nulla aliquet placerat odio, vitae blandit tortor dictum id. Proin aliquam erat ipsum, non accumsan sapien porttitor a.&nbsp;</div><div><br></div><div>Praesent maximus nec magna vitae dignissim. Phasellus vehicula diam in sollicitudin elementum. Duis sed massa id erat imperdiet facilisis nec nec erat. Etiam lacus erat, interdum et elementum in, lobortis a turpis. Donec efficitur non nibh ut tristique. Sed nec pellentesque risus, ac ultricies elit. Etiam elementum pulvinar ligula, a vulputate elit hendrerit in.</div><div><br></div><div>web vÃ­deo aulas</div>');


INSERT INTO `administrador` (`id_administrador`, `nome`, `usuario`, `email`, `nivel`, `senha`, `thumb`) VALUES
(1, 'Filipe Matos de Oliveira', 'filipeoliveirah', 'filipeoliveirah@gmail.com', '1', '12002000', '');


INSERT INTO `cadastrocliente` (`id_cadastro_cliente`, `nome`, `sobrenome`, `usuario`, `senha`, `csenha`, `email`) VALUES
(1, 'Filipe', 'Matos de Oliveira', 'filipeoliveirah', '2bc19830e623ce015db8d5615e4ac1ca', '2bc19830e623ce015db8d5615e4ac1ca', 'filipeoliveirah@gmail.com');


INSERT INTO `ticket` (`id_ticket`, `data_criacao_ticket`, `assunto`, `status`) VALUES
(1, '2018-01-21 20:54:49', 'Ticket teste', 'fechado'),
(2, '0000-00-00 00:00:00', 'Ticket teste 2', 'aberto'),
(57999, '2018-01-21 19:18:00', 'Ticket teste 57999', 'aberto'),
(76715, '0000-00-00 00:00:00', 'Ticket teste', 'aberto');


INSERT INTO `ticket_enviado_admin` (`id_ticket_enviado_admin`, `fk_id_administrador`, `fk_id_ticket`, `data_envio_admin`, `mensagem_admin`) VALUES
(1, 1, 57999, '2018-01-21 20:30:29', '<b>Resposta enviada pelo administrador<br></b>'),
(2, 1, 57999, '2018-01-22 12:08:02', 'Resposta da mensagem atual<br>'),
(3, 1, 2, '2018-01-22 12:33:21', 'EstÃ¡ mesmo!<br>');


INSERT INTO `ticket_enviado_cliente` (`id_ticket_enviado_cliente`, `fk_id_cadastro_cliente`, `fk_id_ticket`, `data_envio_cliente`, `mensagem_cliente`) VALUES
(3, 1, 57999, '2018-01-21 19:17:14', 'Lorem ipsum dolor sit amet, nobis munere everti ne sea. Minim animal ea vel, doming dicunt imperdiet id has. Ludus cetero vulputate duo in. Mea at eius nusquam disputando, primis voluptatum id quo, ei decore utroque recteque pri. Choro graeci doming sit cu.\n\nEum case vivendum nominati te, sea et enim tempor civibus, cu nominati explicari repudiandae eum. Ei his probo illud persecuti, sed lucilius assentior referrentur no. Modo solum doctus at ius, vel suas prompta reprehendunt at. Id vel suavitate liberavisse, per vide torquatos et. Ei elit quaeque has. Mei eu diam alia signiferumque, nec audiam recteque vituperatoribus an. Ad nisl congue definitiones nam.'),
(12, 1, 1, '0000-00-00 00:00:00', 'dhausdhuahsdushdhausdhuahsdushdhausdhuahsdush'),
(14, 1, 2, '0000-00-00 00:00:00', 'Estou ficando bom nisso ;D'),
(15, 1, 57999, '2018-01-22 11:52:44', 'Mensagem atual');

INSERT INTO `categoria` (`id_categoria`, `nome_categoria`) VALUES
(1, 'Andaime'),
(2, 'Betoneira'),
(3, 'Concretagem'),
(4, 'Escoras Cimbramento'),
(5, 'Ferramentas'),
(6, 'Máquinas Pesadas');

INSERT INTO orcamento(id_orcamento, status, rua, bairro, cidade, estado, cep, complemento, fk_id_cadastro_cliente)
VALUES(1, 'aberto', 'alberto torres', 'matatu', 'salvador', 'ba', 40255175 ,'casa', 1);

INSERT INTO lista_de_produtos(nome_produto, fk_id_categoria)
VALUES('Andaime Convencional Encaixe 1m', 1);

INSERT INTO lista_de_produtos(nome_produto, fk_id_categoria)
VALUES('Andaime Fachadeiro', 1);

INSERT INTO lista_de_produtos(nome_produto, fk_id_categoria)
VALUES('Andaime Suspenso Balancim', 1);

INSERT INTO lista_de_produtos(nome_produto, fk_id_categoria)
VALUES('Andaime Tubo Equipado', 1);

INSERT INTO orcamento_enviado_cliente(fk_id_orcamento, fk_id_lista_de_produtos, periodo_em_dias, quantidade)
VALUES(1, 5, 30, 2);






