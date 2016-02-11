-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-02-2016 a las 19:49:24
-- Versión del servidor: 10.1.9-MariaDB
-- Versión de PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `rma`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `user_data` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('d61cc73dea4e30679d66b70e5090e29f', '::1', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/48.0.2564.109 Safari/537.36', 1455202100, 'a:5:{s:9:"user_data";s:0:"";s:4:"nome";s:13:"David Cubides";s:2:"id";s:1:"2";s:9:"permissao";s:1:"6";s:6:"logado";b:1;}'),
('2dea99a51c785dd9e25a6b0a98502cf8', '::1', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/48.0.2564.109 Safari/537.36', 1455209615, 'a:5:{s:9:"user_data";s:0:"";s:4:"nome";s:13:"David Cubides";s:2:"id";s:1:"2";s:9:"permissao";s:1:"6";s:6:"logado";b:1;}'),
('970a8887eb871d704e485ac46b986fba', '::1', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/48.0.2564.109 Safari/537.36', 1455204591, 'a:5:{s:9:"user_data";s:0:"";s:4:"nome";s:13:"David Cubides";s:2:"id";s:1:"2";s:9:"permissao";s:1:"6";s:6:"logado";b:1;}');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `emitente`
--

CREATE TABLE `emitente` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `cnpj` varchar(45) DEFAULT NULL,
  `ie` varchar(50) DEFAULT NULL,
  `rua` varchar(70) DEFAULT NULL,
  `numero` varchar(15) DEFAULT NULL,
  `bairro` varchar(45) DEFAULT NULL,
  `cidade` varchar(45) DEFAULT NULL,
  `uf` varchar(20) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `url_logo` varchar(225) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `emitente`
--

INSERT INTO `emitente` (`id`, `nome`, `cnpj`, `ie`, `rua`, `numero`, `bairro`, `cidade`, `uf`, `telefone`, `email`, `url_logo`) VALUES
(1, 'Nesitelco S.A.', '0000', '000', 'Celta Park', '62', 'Funza', 'Cundinamarca', '057', '1234', 'nesi@nes.com', 'http://localhost/programas/NESBOARD/NESBOARD/assets/uploads/e202dacc033a666f8b8a6d66d4b63c9b.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permissoes`
--

CREATE TABLE `permissoes` (
  `idPermissao` int(11) NOT NULL,
  `nome` varchar(80) NOT NULL,
  `permissoes` text,
  `situacao` tinyint(1) DEFAULT NULL,
  `data` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `permissoes`
--

INSERT INTO `permissoes` (`idPermissao`, `nome`, `permissoes`, `situacao`, `data`) VALUES
(1, 'Administrador', 'a:38:{s:8:"aCliente";s:1:"1";s:8:"eCliente";s:1:"1";s:8:"dCliente";s:1:"1";s:8:"vCliente";s:1:"1";s:8:"aProduto";s:1:"1";s:8:"eProduto";s:1:"1";s:8:"dProduto";s:1:"1";s:8:"vProduto";s:1:"1";s:8:"aServico";s:1:"1";s:8:"eServico";s:1:"1";s:8:"dServico";s:1:"1";s:8:"vServico";s:1:"1";s:3:"aOs";s:1:"1";s:3:"eOs";s:1:"1";s:3:"dOs";s:1:"1";s:3:"vOs";s:1:"1";s:6:"aVenda";s:1:"1";s:6:"eVenda";s:1:"1";s:6:"dVenda";s:1:"1";s:6:"vVenda";s:1:"1";s:8:"aArquivo";s:1:"1";s:8:"eArquivo";s:1:"1";s:8:"dArquivo";s:1:"1";s:8:"vArquivo";s:1:"1";s:11:"aLancamento";s:1:"1";s:11:"eLancamento";s:1:"1";s:11:"dLancamento";s:1:"1";s:11:"vLancamento";s:1:"1";s:8:"cUsuario";s:1:"1";s:9:"cEmitente";s:1:"1";s:10:"cPermissao";s:1:"1";s:7:"cBackup";s:1:"1";s:8:"rCliente";s:1:"1";s:8:"rProduto";s:1:"1";s:8:"rServico";s:1:"1";s:3:"rOs";s:1:"1";s:6:"rVenda";s:1:"1";s:11:"rFinanceiro";s:1:"1";}', 1, '2014-09-03'),
(7, 'administrador3', 'a:38:{s:11:"aInventario";s:1:"1";s:11:"eInventario";s:1:"1";s:11:"dInventario";s:1:"1";s:11:"vInventario";s:1:"1";s:7:"aTicket";s:1:"1";s:7:"eTicket";s:1:"1";s:7:"dTicket";s:1:"1";s:7:"vTicket";s:1:"1";s:8:"aModulo3";s:1:"1";s:8:"eModulo3";s:1:"1";s:8:"dModulo3";s:1:"1";s:8:"vModulo3";s:1:"1";s:8:"aModulo4";s:1:"1";s:8:"eModulo4";s:1:"1";s:8:"dModulo4";s:1:"1";s:8:"vModulo4";s:1:"1";s:8:"aModulo5";s:1:"1";s:8:"eModulo5";s:1:"1";s:8:"dModulo5";s:1:"1";s:8:"vModulo5";s:1:"1";s:8:"aModulo6";s:1:"1";s:8:"eModulo6";s:1:"1";s:8:"dModulo6";s:1:"1";s:8:"vModulo6";s:1:"1";s:8:"aModulo7";s:1:"1";s:8:"eModulo7";s:1:"1";s:8:"dModulo7";s:1:"1";s:8:"vModulo7";s:1:"1";s:8:"cUsuario";s:1:"1";s:9:"cEmitente";s:1:"1";s:10:"cPermissao";s:1:"1";s:7:"cBackup";s:1:"1";s:8:"rTickets";b:0;s:11:"rInventario";s:1:"1";s:10:"rInformes1";b:0;s:10:"rInformes2";b:0;s:9:"rInforme3";s:1:"1";s:9:"rInforme4";s:1:"1";}', 1, '2016-02-10'),
(6, 'administrador2', 'a:38:{s:11:"aInventario";s:1:"1";s:11:"eInventario";s:1:"1";s:11:"dInventario";s:1:"1";s:11:"vInventario";s:1:"1";s:7:"aTicket";s:1:"1";s:7:"eTicket";s:1:"1";s:7:"dTicket";s:1:"1";s:7:"vTicket";s:1:"1";s:8:"aModulo3";s:1:"1";s:8:"eModulo3";s:1:"1";s:8:"dModulo3";s:1:"1";s:8:"vModulo3";s:1:"1";s:8:"aModulo4";s:1:"1";s:8:"eModulo4";s:1:"1";s:8:"dModulo4";s:1:"1";s:8:"vModulo4";s:1:"1";s:8:"aModulo5";s:1:"1";s:8:"eModulo5";s:1:"1";s:8:"dModulo5";s:1:"1";s:8:"vModulo5";s:1:"1";s:8:"aModulo6";s:1:"1";s:8:"eModulo6";s:1:"1";s:8:"dModulo6";s:1:"1";s:8:"vModulo6";s:1:"1";s:8:"aModulo7";s:1:"1";s:8:"eModulo7";s:1:"1";s:8:"dModulo7";s:1:"1";s:8:"vModulo7";s:1:"1";s:8:"cUsuario";s:1:"1";s:9:"cEmitente";s:1:"1";s:10:"cPermissao";s:1:"1";s:7:"cBackup";s:1:"1";s:8:"rTickets";s:1:"1";s:11:"rInventario";s:1:"1";s:10:"rInformes1";s:1:"1";s:10:"rInformes2";s:1:"1";s:9:"rInforme3";s:1:"1";s:9:"rInforme4";s:1:"1";}', 1, '2016-02-10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuarios` int(11) NOT NULL,
  `nome` varchar(80) NOT NULL,
  `rg` varchar(20) DEFAULT NULL,
  `cpf` varchar(20) NOT NULL,
  `rua` varchar(70) DEFAULT NULL,
  `numero` varchar(15) DEFAULT NULL,
  `bairro` varchar(45) DEFAULT NULL,
  `cidade` varchar(45) DEFAULT NULL,
  `estado` varchar(20) DEFAULT NULL,
  `email` varchar(80) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `celular` varchar(20) DEFAULT NULL,
  `situacao` tinyint(1) NOT NULL,
  `dataCadastro` date NOT NULL,
  `nivel` int(11) NOT NULL,
  `permissoes_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuarios`, `nome`, `rg`, `cpf`, `rua`, `numero`, `bairro`, `cidade`, `estado`, `email`, `senha`, `telefone`, `celular`, `situacao`, `dataCadastro`, `nivel`, `permissoes_id`) VALUES
(1, 'admin', '-', '-', '-', '-', '-', '-', '-', 'admin@admin.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '-', '', 1, '2013-11-22', 1, 1),
(2, 'David Cubides', '333', '333', '33', '333', '333', '333', '333', 'dcubides@nesitelco.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '3333', '', 1, '2016-02-09', 0, 6),
(3, 'anderson arias', '444', '444', '44', '44', '4', '4', '4', 'aarias@nesitelco.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '333', '', 1, '2016-02-09', 0, 6);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`session_id`),
  ADD KEY `last_activity_idx` (`last_activity`);

--
-- Indices de la tabla `emitente`
--
ALTER TABLE `emitente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `permissoes`
--
ALTER TABLE `permissoes`
  ADD PRIMARY KEY (`idPermissao`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuarios`),
  ADD KEY `fk_usuarios_permissoes1_idx` (`permissoes_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `emitente`
--
ALTER TABLE `emitente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `permissoes`
--
ALTER TABLE `permissoes`
  MODIFY `idPermissao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
