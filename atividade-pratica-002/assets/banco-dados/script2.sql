-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 17-Jul-2019 às 09:33
-- Versão do servidor: 5.7.26
-- versão do PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atividade02`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `tipo` tinyint(4) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `criado_em` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `atualizado_em` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COMMENT='	';

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `tipo`, `remember_token`, `criado_em`, `atualizado_em`) VALUES
(1, 'giovanna', 'kasdjkasdj@jdksa', 'asdsadasd', 1, 'sdasd', '2019-07-16 19:20:15', '2019-07-16 19:20:15'),
(3, 'Lara', 'lara@contato.com', '123456', 2, 'dsadsadasdsa', '2019-07-16 19:46:50', '2019-07-16 19:46:50'),
(9, 'Joao', 'joao@gmail.com', '1234567890', 3, NULL, '2019-07-17 09:07:28', '2019-07-17 09:07:28'),
(11, 'Lia', 'lia@gmail.com', '7654323456789', 3, NULL, '2019-07-17 09:15:25', '2019-07-17 09:15:25'),
(13, 'Ruan', 'ruan@gmail.com', '67fuftr5u4ytfuy6', 1, NULL, '2019-07-17 09:16:41', '2019-07-17 09:16:41');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
