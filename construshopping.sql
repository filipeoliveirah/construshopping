-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Dec 21, 2017 at 05:43 PM
-- Server version: 5.5.49-log
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `construshopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrativo`
--

CREATE TABLE IF NOT EXISTS `administrativo` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `nivel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `administrativo`
--

INSERT INTO `administrativo` (`id`, `nome`, `email`, `usuario`, `senha`, `thumb`, `nivel`) VALUES
(1, 'Filipe Matos de Oliveira', 'filipeoliveirah@gmail.com', 'filipeoliveirah', '12002000', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `cadastrocliente`
--

CREATE TABLE IF NOT EXISTS `cadastrocliente` (
  `id_cliente` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `sobrenome` varchar(255) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `csenha` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cadastrocliente`
--

INSERT INTO `cadastrocliente` (`id_cliente`, `nome`, `sobrenome`, `usuario`, `email`, `senha`, `csenha`) VALUES
(1, 'Filipe', 'Matos de Oliveira', 'filipeoliveirah', 'filipeoliveirah@gmail.com', '2bc19830e623ce015db8d5615e4ac1ca', '2bc19830e623ce015db8d5615e4ac1ca'),
(5, 'Filipe', 'Matos de Oliveira', 'filipe', 'filipeoliveirah@gmail.com', '2bc19830e623ce015db8d5615e4ac1ca', '2bc19830e623ce015db8d5615e4ac1ca');

-- --------------------------------------------------------

--
-- Table structure for table `tb_postagens`
--

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

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE IF NOT EXISTS `ticket` (
  `id` int(11) NOT NULL,
  `fk_id_ticketenviadocliente` int(11) DEFAULT NULL,
  `fk_id_ticketenviadoadmin` int(11) DEFAULT NULL,
  `assunto` varchar(255) NOT NULL,
  `data` datetime NOT NULL,
  `mensagem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ticketenviadoadmin`
--

CREATE TABLE IF NOT EXISTS `ticketrespondidoadmin` (
  `id_ticketenviadoadmin` int(11) NOT NULL,
  `data_envio_admin` datetime NOT NULL,
  `mensagem_admin` varchar(255) DEFAULT NULL,
  `fk_id_administrativo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ticketenviadocliente`
--

CREATE TABLE IF NOT EXISTS `ticketrespondidocliente` (
  `id_ticketenviadocliente` int(11) NOT NULL,
  `data_envio_cliente` datetime NOT NULL,
  `mensagem_cliente` varchar(255) NOT NULL,
  `fk_id_cadastrocliente` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ticketenviadocliente`
--

INSERT INTO `ticketenviadocliente` (`id_ticketenviadocliente`, `data_envio_cliente`, `mensagem_cliente`, `fk_id_cadastrocliente`) VALUES
(1, '0000-00-00 00:00:00', 'dhasudhasuhd', 1);

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(255) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `sobrenome` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  `csenha` varchar(255) DEFAULT NULL,
  `telefone` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `google` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `sobrenome`, `email`, `senha`, `csenha`, `telefone`, `facebook`, `twitter`, `google`) VALUES
(4, 'Filipe', 'Matos de Oliveira', 'filipeoliveirah@gmail.com', 'IB!UD3r7xeAHby&Bo3', 'IB!UD3r7xeAHby&Bo3', '(71)99227-1494', 'http://facebook.com.br', 'http://facebook.com.br', 'http://facebook.com.br'),
(5, 'Filipe', 'Matos de Oliveira', 'filipeoliveirah@gmail.com', 'IB!UD3r7xeAHby&Bo3', 'IB!UD3r7xeAHby&Bo3', '(71)99227-1494', 'http://facebook.com.br', 'http://facebook.com.br', 'http://facebook.com.br'),
(6, 'Filipe', 'Matos de Oliveira', 'filipeoliveirah@gmail.com', 'IB!UD3r7xeAHby&Bo3', 'IB!UD3r7xeAHby&Bo3', '(71)99227-1494', 'http://facebook.com.br', 'http://facebook.com.br', 'http://facebook.com.br'),
(7, 'Filipe', 'Matos de Oliveira', 'filipeoliveirah@gmail.com', 'IB!UD3r7xeAHby&Bo3', 'IB!UD3r7xeAHby&Bo3', '(71)99227-1494', 'http://facebook.com.br', 'http://facebook.com.br', 'http://facebook.com.br'),
(8, 'Filipe', 'Matos de Oliveira', 'filipeoliveirah@gmail.com', 'IB!UD3r7xeAHby&Bo3', 'IB!UD3r7xeAHby&Bo3', '(71)99227-1494', 'http://facebook.com.br', 'http://facebook.com.br', 'http://facebook.com.br'),
(9, 'Filipe', 'Matos de Oliveira', 'filipeoliveirah@gmail.com', 'IB!UD3r7xeAHby&Bo3', 'IB!UD3r7xeAHby&Bo3', '(71)99227-1494', 'http://facebook.com.br', 'http://facebook.com.br', 'http://facebook.com.br'),
(10, 'Filipe', 'Matos de Oliveira', 'filipeoliveirah@gmail.com', 'IB!UD3r7xeAHby&Bo3', 'IB!UD3r7xeAHby&Bo3', '(71)99227-1494', 'http://facebook.com.br', 'http://facebook.com.br', 'http://facebook.com.br'),
(11, 'Filipe', 'Matos de Oliveira', 'filipeoliveirah@gmail.com', 'IB!UD3r7xeAHby&Bo3', 'IB!UD3r7xeAHby&Bo3', '(71)99227-1494', 'http://facebook.com.br', 'http://facebook.com.br', 'http://facebook.com.br'),
(12, 'Filipe', 'Matos de Oliveira', 'filipeoliveirah@gmail.com', 'IB!UD3r7xeAHby&Bo3', 'IB!UD3r7xeAHby&Bo3', '(71)99227-1494', 'http://facebook.com.br', 'http://facebook.com.br', 'http://facebook.com.br'),
(13, 'Filipe', 'Matos de Oliveira', 'filipeoliveirah@gmail.com', 'IB!UD3r7xeAHby&Bo3', 'IB!UD3r7xeAHby&Bo3', '(71)99227-1494', 'http://facebook.com.br', 'http://facebook.com.br', 'http://facebook.com.br'),
(14, 'Filipe', 'Matos de Oliveira', 'filipeoliveirah@gmail.com', 'IB!UD3r7xeAHby&Bo3', 'IB!UD3r7xeAHby&Bo3', '(71)99227-1494', 'http://facebook.com.br', 'http://facebook.com.br', 'http://facebook.com.br'),
(15, 'Filipe', 'Matos de Oliveira', 'filipeoliveirah@gmail.com', 'IB!UD3r7xeAHby&Bo3', 'IB!UD3r7xeAHby&Bo3', '(71)99227-1494', 'http://facebook.com.br', 'http://facebook.com.br', 'http://facebook.com.br'),
(16, 'Filipe', 'Matos de Oliveira', 'filipeoliveirah@gmail.com', 'IB!UD3r7xeAHby&Bo3', 'IB!UD3r7xeAHby&Bo3', '(71)99227-1494', 'http://facebook.com.br', 'http://facebook.com.br', 'http://facebook.com.br'),
(17, 'Filipe', 'Matos de Oliveira', 'filipeoliveirah@gmail.com', 'IB!UD3r7xeAHby&Bo3', 'IB!UD3r7xeAHby&Bo3', '(71)99227-1494', 'http://facebook.com.br', 'http://facebook.com.br', 'http://facebook.com.br'),
(18, 'Filipe Matos de Oliveira', 'Matos de Oliveira', 'filipeoliveirah@gmail.com', 'IB!UD3r7xeAHby&Bo3', 'IB!UD3r7xeAHby&Bo3', '(71)99227-1494', 'http://facebook.com.br', 'http://facebook.com.br', 'http://facebook.com.br'),
(19, 'Filipe', 'Matos de Oliveira', 'filipeoliveirah@gmail.com', 'IB!UD3r7xeAHby&Bo3', 'IB!UD3r7xeAHby&Bo3', '(71)99227-1494', 'http://facebook.com.br', 'http://facebook.com.br', 'http://facebook.com.br');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrativo`
--
ALTER TABLE `administrativo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cadastrocliente`
--
ALTER TABLE `cadastrocliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indexes for table `tb_postagens`
--
ALTER TABLE `tb_postagens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_ticketenviadocliente` (`fk_id_ticketenviadocliente`),
  ADD KEY `fk_id_ticketenviadoadmin` (`fk_id_ticketenviadoadmin`);

--
-- Indexes for table `ticketenviadoadmin`
--
ALTER TABLE `ticketenviadoadmin`
  ADD PRIMARY KEY (`id_ticketenviadoadmin`),
  ADD KEY `fk_id_administrativo` (`fk_id_administrativo`);

--
-- Indexes for table `ticketenviadocliente`
--
ALTER TABLE `ticketenviadocliente`
  ADD PRIMARY KEY (`id_ticketenviadocliente`),
  ADD KEY `fk_id_cadastrocliente` (`fk_id_cadastrocliente`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cadastrocliente`
--
ALTER TABLE `cadastrocliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_postagens`
--
ALTER TABLE `tb_postagens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ticketenviadocliente`
--
ALTER TABLE `ticketenviadocliente`
  MODIFY `id_ticketenviadocliente` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `ticket_ibfk_1` FOREIGN KEY (`fk_id_ticketenviadocliente`) REFERENCES `ticketenviadocliente` (`id_ticketenviadocliente`),
  ADD CONSTRAINT `ticket_ibfk_2` FOREIGN KEY (`fk_id_ticketenviadoadmin`) REFERENCES `ticketenviadoadmin` (`id_ticketenviadoadmin`);

--
-- Constraints for table `ticketenviadoadmin`
--
ALTER TABLE `ticketenviadoadmin`
  ADD CONSTRAINT `ticketenviadoadmin_ibfk_1` FOREIGN KEY (`fk_id_administrativo`) REFERENCES `administrativo` (`id`);

--
-- Constraints for table `ticketenviadocliente`
--
ALTER TABLE `ticketenviadocliente`
  ADD CONSTRAINT `ticketenviadocliente_ibfk_1` FOREIGN KEY (`fk_id_cadastrocliente`) REFERENCES `cadastrocliente` (`id_cliente`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
