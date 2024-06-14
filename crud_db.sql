-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 14 juin 2024 à 14:13
-- Version du serveur : 8.2.0
-- Version de PHP : 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `crud_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `created_at`) VALUES
(1, 'admin', 'test@test.com', '$2y$10$MqVa2/Zp2VedMFyI7BlRkODqL2ufenoWyIyVLRBoKs204i0e/FxDG', '2024-06-14 07:27:57'),
(2, 'ewenn', 'ewenn.vallois.perso@gmail.com', '$2y$10$2AvH5oPP.AMqaxYPvHdvBOkjlQ/eMnY.bBUc.0AbRGR4lnGimxmFq', '2024-06-14 11:54:18'),
(3, 'mathis', 'mathis.vias@viacesi.fr', '$2y$10$4TDICA5WWHuYBkwuC4O0Au0FOIcYQ4uOEGGyL0sTWO9Q4NCrJBzZy', '2024-06-14 11:54:37'),
(4, 'terry', 'terry.gyselings@viacesi.fr', '$2y$10$d3JJPVGSQf4eJVOxil6jXO8HDCbVWLFgDlbI8Cc7.EQwp88dgYcOC', '2024-06-14 11:55:40'),
(5, 'manuel', 'manuel.tarby@viacesi.fr', '$2y$10$gl7QSAxL078rTRs5TxZxvu.h7kakzGAOqFbsrwzgjIpnMaNkNKbsi', '2024-06-14 11:55:58'),
(6, 'vincent', 'vincent.catherineau@viacesi.fr', '$2y$10$gFC07VLB05JvDuCMgLF3YOWnlEvOspx4Vm88YarqnbQ3FDb1RON3.', '2024-06-14 11:56:25'),
(7, 'barthelemy', 'barthelemy.lebel@viacesi.fr', '$2y$10$cEf7WyevpZzr0jFiJTLUA.NtX8R2rXdfuip1N3nrRH.38PQjH9GIG', '2024-06-14 11:56:42'),
(8, 'noé', 'noe.brognard@viacesi.fr', '$2y$10$Llr97bt6rv5h46wtsapx.eBIDbN8h2WBgYJHEdDpe2vSHIYgvLusy', '2024-06-14 13:48:59'),
(9, 'jean', 'jean@jean.com', '$2y$10$OjWH/yX7.ku4ZBailSsG1OzVPu8FSkSsDYIptoip71YS6XTZMZIOO', '2024-06-14 14:12:15'),
(10, 'mathieu', 'mathieu@mathieu.com', '$2y$10$CXJ5X.HnkU.adisdKJpWbOF/G5rRzf42uB/aU6qzoHAsvEFkS2mLW', '2024-06-14 14:12:34');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
