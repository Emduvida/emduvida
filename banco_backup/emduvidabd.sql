-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 07-Ago-2015 às 06:55
-- Versão do servidor: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `emduvidabd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `COD_CATEGORIA` int(11) NOT NULL,
  `NOME_CATEGORIA` varchar(55) NOT NULL,
  `COR_CATEGORIA` varchar(45) NOT NULL,
  `STATUS_CATEGORIA` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`COD_CATEGORIA`, `NOME_CATEGORIA`, `COR_CATEGORIA`, `STATUS_CATEGORIA`) VALUES
(1, 'TÃ©cnologia', '#3A33FF', 1),
(3, 'Casa', '#F2F2F2', 1),
(4, 'Nova categoria', '#ddd', 2),
(5, 'Eletrodomesticos', '#FF1269', 1),
(6, 'nome da categoria', '#7A124A', 2),
(7, 'cadastro', '#FFFFFF', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentarios`
--

CREATE TABLE IF NOT EXISTS `comentarios` (
  `COD_COMENTARIO` int(11) NOT NULL,
  `TEXTO_COMENTARIO` text NOT NULL,
  `NOTA_COMENTARIO` int(11) NOT NULL,
  `COD_RESENHA` int(11) NOT NULL,
  `COD_USUARIO` int(11) NOT NULL,
  `STATUS_COMENTARIO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `defeitos`
--

CREATE TABLE IF NOT EXISTS `defeitos` (
  `COD_DEFEITO` int(11) NOT NULL,
  `COD_RESENHA` int(11) NOT NULL,
  `DEFEITOS` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `defeitos`
--

INSERT INTO `defeitos` (`COD_DEFEITO`, `COD_RESENHA`, `DEFEITOS`) VALUES
(1, 2, 'PreÃ§o'),
(2, 2, 'pequeno'),
(3, 2, '10 real'),
(4, 3, 'pqeuno'),
(5, 3, 'tela'),
(6, 3, 'aff'),
(7, 3, 'merda'),
(8, 4, 'asd'),
(9, 4, 'as'),
(10, 4, 'asd'),
(11, 5, 'aa'),
(12, 5, 'a'),
(13, 5, 'a'),
(14, 5, 'a'),
(15, 5, 'a'),
(16, 6, 'b'),
(17, 6, 'b'),
(18, 6, 'b'),
(19, 6, 'b'),
(20, 6, 'b'),
(21, 7, 'f'),
(22, 7, 'g'),
(23, 7, 'h'),
(24, 7, 'i'),
(25, 7, 'j'),
(26, 8, 'b');

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagens`
--

CREATE TABLE IF NOT EXISTS `imagens` (
  `COD_IMAGEM` int(11) NOT NULL,
  `COD_RESENHA` int(11) NOT NULL,
  `CAMINHO_IMAGEM` varchar(255) NOT NULL,
  `ALT_IMAGEM` varchar(45) NOT NULL,
  `STATUS_IMAGEM` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `log`
--

CREATE TABLE IF NOT EXISTS `log` (
  `COD_LOG` int(11) NOT NULL,
  `COD_USUARIO` int(11) NOT NULL,
  `IP` varchar(45) NOT NULL,
  `ACAO_LOG` text NOT NULL,
  `DATAHORA_LOG` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE IF NOT EXISTS `produtos` (
  `COD_PRODUTO` int(11) NOT NULL,
  `NOME_PRODUTO` varchar(100) NOT NULL,
  `STATUS_PRODUTO` int(11) NOT NULL,
  `FABRICANTE` varchar(45) NOT NULL,
  `COD_CATEGORIA` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`COD_PRODUTO`, `NOME_PRODUTO`, `STATUS_PRODUTO`, `FABRICANTE`, `COD_CATEGORIA`) VALUES
(1, 'Iphone 5', 1, 'Aple', 0),
(2, 'Samsung galaxy s3', 2, 'Sansumg', 0),
(3, 'Iphone 5c', 1, 'Apple', 0),
(7, 'te3ste ', 0, '', 0),
(8, 'asddd', 1, '', 0),
(11, ' ', 1, 'aa', 1),
(16, 'asdaaaa', 1, 'applssa', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `qualidades`
--

CREATE TABLE IF NOT EXISTS `qualidades` (
  `COD_DEFEITO` int(11) NOT NULL,
  `COD_RESENHA` int(11) NOT NULL,
  `QUALIDADES` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `qualidades`
--

INSERT INTO `qualidades` (`COD_DEFEITO`, `COD_RESENHA`, `QUALIDADES`) VALUES
(1, 2, 'Lindo'),
(2, 2, 'Maracilhoso'),
(3, 3, 'Lindo'),
(4, 3, 'Bonito'),
(5, 3, 'Mara'),
(6, 5, 'a'),
(7, 5, 'a'),
(8, 5, 'a'),
(9, 5, 'a'),
(10, 5, 'a'),
(11, 6, 'a'),
(12, 6, 'a'),
(13, 6, 'a'),
(14, 6, 'a'),
(15, 6, 'a'),
(16, 7, 'a'),
(17, 7, 'b'),
(18, 7, 'c'),
(19, 7, 'd'),
(20, 7, 'e'),
(21, 8, 'a');

-- --------------------------------------------------------

--
-- Estrutura da tabela `resenha`
--

CREATE TABLE IF NOT EXISTS `resenha` (
  `COD_RESENHA` int(11) NOT NULL,
  `CORPO_RESENHA` text NOT NULL,
  `QTDE_DENUNCIAS` int(11) NOT NULL,
  `DATA_RESENHA` datetime NOT NULL,
  `STATUS_RESENHA` int(11) NOT NULL,
  `COD_PRODUTO` int(11) NOT NULL,
  `COD_USUARIO` int(11) NOT NULL,
  `NOTA_PRODUTO` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `resenha`
--

INSERT INTO `resenha` (`COD_RESENHA`, `CORPO_RESENHA`, `QTDE_DENUNCIAS`, `DATA_RESENHA`, `STATUS_RESENHA`, `COD_PRODUTO`, `COD_USUARIO`, `NOTA_PRODUTO`) VALUES
(2, 'asdasda asd asd as das das das das das das das das dasd as das dasd asd as d', 0, '2015-08-07 06:36:31', 1, 3, 15, 3),
(3, 'celular de bosta!', 0, '2015-08-07 06:37:23', 1, 3, 15, 3),
(4, 'asdasd', 0, '2015-08-07 06:39:38', 1, 3, 15, 2),
(5, 'asdasd', 0, '2015-08-07 06:41:39', 1, 2, 15, 3),
(6, 'treste', 0, '2015-08-07 06:45:38', 1, 8, 15, 3),
(7, '123654654', 0, '2015-08-07 06:48:08', 1, 2, 15, 3),
(8, 'asd', 0, '2015-08-07 06:53:02', 1, 16, 15, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `resposta_comentario`
--

CREATE TABLE IF NOT EXISTS `resposta_comentario` (
  `COD_RESPOSTA` int(11) NOT NULL,
  `COD_COMENTARIO` int(11) NOT NULL,
  `RESPOSTA_COMENTARIO` text NOT NULL,
  `STATUS_RESPOSTA` int(11) NOT NULL,
  `COD_USUARIO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_usuario`
--

CREATE TABLE IF NOT EXISTS `tipo_usuario` (
  `COD_TIPO` int(11) NOT NULL,
  `DESCRICAO_TIPO` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`COD_TIPO`, `DESCRICAO_TIPO`) VALUES
(1, 'Administrador'),
(2, 'Comum');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `COD_USUARIO` int(11) NOT NULL,
  `NOME_USUARIO` varchar(55) NOT NULL,
  `SOBRENOME_USUARIO` varchar(45) NOT NULL,
  `IMAGEM_PERFIL` varchar(255) NOT NULL,
  `DATA_NASCIMENTO` date NOT NULL,
  `CPF_USUARIO` varchar(15) NOT NULL,
  `EMAIL_USUARIO` varchar(55) NOT NULL,
  `SENHA_USUARIO` varchar(255) NOT NULL,
  `UF_USUARIO` char(2) NOT NULL,
  `CIDADE_USUARIO` varchar(25) NOT NULL,
  `STATUS_USUARIO` int(11) NOT NULL,
  `COD_TIPO` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`COD_USUARIO`, `NOME_USUARIO`, `SOBRENOME_USUARIO`, `IMAGEM_PERFIL`, `DATA_NASCIMENTO`, `CPF_USUARIO`, `EMAIL_USUARIO`, `SENHA_USUARIO`, `UF_USUARIO`, `CIDADE_USUARIO`, `STATUS_USUARIO`, `COD_TIPO`) VALUES
(2, 'Orienta', 'dor', '', '2015-07-22', '564654', 'orientador@mail.com', '203040A', 'SP', 'barueri', 1, 2),
(3, 'asd', '', 'aham', '1997-10-15', '', 'testelocal@testeloca.com', '123456', 'as', 'asd', 1, 1),
(4, 'Igor Carlos da Silva', '', 'aham', '1997-10-15', '3651651651', 'zz@mail.com', '123', 'SÃ', 'Barueri', 1, 1),
(5, 'Igor Carlos da Silva', '', 'aham', '1997-10-15', '651651651', 'asddd@mail.com', '123', 'SÃ', 'Barueri', 1, 1),
(6, 'Igor Carlos da Silva', '', 'aham', '1997-10-15', '984621651', 'asddddddd@mail.com', '123', 'SÃ', 'Barueri', 1, 1),
(7, 'Igor Carlos da Silva', '', 'aham', '1997-10-15', '8545456', 'asdeaa@mail.com', '123', 'SÃ', 'Barueri', 1, 1),
(8, 'Igor Carlos da Silva', '', 'aham', '1997-10-15', 'asdq11', 'asq1deaa@mail.com', '123', 'SÃ', 'Barueri', 1, 1),
(9, 'Igor Carlos da Silva', '', 'aham', '1997-10-15', 'asdasd', '15151@mail.com', '123', 'SÃ', 'Barueri', 1, 1),
(10, 'Igor Carlos da Silva', '', 'aham', '1997-10-15', '12eqwdas', '56121@mail.com', '123', 'SÃ', 'Barueri', 1, 1),
(11, 'Igor Carlos da Silva', '', 'aham', '1997-10-15', 'as651d651as', 'a54sd1@mail.com', '123', 'SÃ', 'Barueri', 1, 1),
(12, 'Igor Carlos da Silva', '', 'aham', '1997-10-15', 'a531sd651', 'igorcarlos1997@hotmail.com', '123', 'SÃ', 'Barueri', 1, 1),
(13, 'Igor Carlos da Silva', '', 'aham', '1997-10-15', 'asd51651', 'qwe@hotmail.com', 'asd', 'SÃ', 'Barueri', 1, 1),
(14, 'Igor Carlos da Silva', '', 'aham', '1997-10-15', '12a1sd651', 'reee@mail.com', '123', 'SÃ', 'Barueri', 1, 1),
(15, 'Igor Carlos da Silva', '', 'aham', '1997-10-15', '461642138277', 'igor@mail.com', 'ZTEwYWRjMzk0OWJhNTlhYmJlNTZlMDU3ZjIwZjg4M2U=', 'SÃ', 'Barueri', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`COD_CATEGORIA`), ADD UNIQUE KEY `COR_CATEGORIA_UNIQUE` (`COR_CATEGORIA`);

--
-- Indexes for table `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`COD_COMENTARIO`), ADD KEY `FK_COD_RESENHA_COMENTARIO_idx` (`COD_RESENHA`), ADD KEY `FK_COD_USUARIO_COMENTARIO_idx` (`COD_USUARIO`);

--
-- Indexes for table `defeitos`
--
ALTER TABLE `defeitos`
  ADD PRIMARY KEY (`COD_DEFEITO`), ADD KEY `FK_COD_RESENHA_DEFEITO_idx` (`COD_RESENHA`);

--
-- Indexes for table `imagens`
--
ALTER TABLE `imagens`
  ADD PRIMARY KEY (`COD_IMAGEM`), ADD KEY `FK_COD_RESENHA_idx` (`COD_RESENHA`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`COD_LOG`), ADD KEY `FK_COD_USUARIO_LOG_idx` (`COD_USUARIO`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`COD_PRODUTO`), ADD KEY `FK_COD_CATEGORIA_PRODUTO_idx` (`COD_CATEGORIA`);

--
-- Indexes for table `qualidades`
--
ALTER TABLE `qualidades`
  ADD PRIMARY KEY (`COD_DEFEITO`), ADD KEY `FK_COD_RESENHA_DEFEITO_idx` (`COD_RESENHA`);

--
-- Indexes for table `resenha`
--
ALTER TABLE `resenha`
  ADD PRIMARY KEY (`COD_RESENHA`), ADD KEY `FK_COD_USUARIO_idx` (`COD_USUARIO`), ADD KEY `FK_COD_PRODUTO_idx` (`COD_PRODUTO`);

--
-- Indexes for table `resposta_comentario`
--
ALTER TABLE `resposta_comentario`
  ADD PRIMARY KEY (`COD_RESPOSTA`), ADD KEY `FK_COD_COMENTARIO_RESPOSTA_idx` (`COD_COMENTARIO`), ADD KEY `FK_COD_USUARIO_RESPOSTA_idx` (`COD_USUARIO`);

--
-- Indexes for table `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`COD_TIPO`), ADD UNIQUE KEY `DESCRICAO_TIPO_UNIQUE` (`DESCRICAO_TIPO`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`COD_USUARIO`), ADD UNIQUE KEY `CPF_USUARIO_UNIQUE` (`CPF_USUARIO`), ADD UNIQUE KEY `EMAIL_USUARIO_UNIQUE` (`EMAIL_USUARIO`), ADD KEY `FK_COD_TIPO_idx` (`COD_TIPO`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `COD_CATEGORIA` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `COD_COMENTARIO` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `defeitos`
--
ALTER TABLE `defeitos`
  MODIFY `COD_DEFEITO` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `imagens`
--
ALTER TABLE `imagens`
  MODIFY `COD_IMAGEM` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `COD_LOG` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `COD_PRODUTO` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `qualidades`
--
ALTER TABLE `qualidades`
  MODIFY `COD_DEFEITO` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `resenha`
--
ALTER TABLE `resenha`
  MODIFY `COD_RESENHA` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `resposta_comentario`
--
ALTER TABLE `resposta_comentario`
  MODIFY `COD_RESPOSTA` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `COD_TIPO` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `COD_USUARIO` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `comentarios`
--
ALTER TABLE `comentarios`
ADD CONSTRAINT `FK_COD_RESENHA_COMENTARIO` FOREIGN KEY (`COD_RESENHA`) REFERENCES `resenha` (`COD_RESENHA`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `FK_COD_USUARIO_COMENTARIO` FOREIGN KEY (`COD_USUARIO`) REFERENCES `usuario` (`COD_USUARIO`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `defeitos`
--
ALTER TABLE `defeitos`
ADD CONSTRAINT `FK_COD_RESENHA_DEFEITO0` FOREIGN KEY (`COD_RESENHA`) REFERENCES `resenha` (`COD_RESENHA`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `imagens`
--
ALTER TABLE `imagens`
ADD CONSTRAINT `FK_COD_RESENHA` FOREIGN KEY (`COD_RESENHA`) REFERENCES `resenha` (`COD_RESENHA`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `log`
--
ALTER TABLE `log`
ADD CONSTRAINT `FK_COD_USUARIO_LOG` FOREIGN KEY (`COD_USUARIO`) REFERENCES `usuario` (`COD_USUARIO`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `produtos`
--
ALTER TABLE `produtos`
ADD CONSTRAINT `FK_COD_CATEGORIA_PRODUTO` FOREIGN KEY (`COD_CATEGORIA`) REFERENCES `categoria` (`COD_CATEGORIA`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `qualidades`
--
ALTER TABLE `qualidades`
ADD CONSTRAINT `FK_COD_RESENHA_DEFEITO` FOREIGN KEY (`COD_RESENHA`) REFERENCES `resenha` (`COD_RESENHA`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `resenha`
--
ALTER TABLE `resenha`
ADD CONSTRAINT `FK_COD_PRODUTO` FOREIGN KEY (`COD_PRODUTO`) REFERENCES `produtos` (`COD_PRODUTO`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `FK_COD_USUARIO` FOREIGN KEY (`COD_USUARIO`) REFERENCES `usuario` (`COD_USUARIO`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `resposta_comentario`
--
ALTER TABLE `resposta_comentario`
ADD CONSTRAINT `FK_COD_COMENTARIO_RESPOSTA` FOREIGN KEY (`COD_COMENTARIO`) REFERENCES `comentarios` (`COD_COMENTARIO`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `FK_COD_USUARIO_RESPOSTA` FOREIGN KEY (`COD_USUARIO`) REFERENCES `usuario` (`COD_USUARIO`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `usuario`
--
ALTER TABLE `usuario`
ADD CONSTRAINT `FK_COD_TIPO` FOREIGN KEY (`COD_TIPO`) REFERENCES `tipo_usuario` (`COD_TIPO`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
