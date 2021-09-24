-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.21-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.1.0.6116
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para todo_list
CREATE DATABASE IF NOT EXISTS `todo_list` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `todo_list`;

-- Copiando estrutura para tabela todo_list.jobs
CREATE TABLE IF NOT EXISTS `jobs` (
  `id_job` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `job` varchar(200) NOT NULL,
  `datetime_created` datetime NOT NULL,
  `datetime_update` datetime NOT NULL,
  `datetime_finished` datetime DEFAULT NULL,
  PRIMARY KEY (`id_job`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela todo_list.jobs: ~0 rows (aproximadamente)
DELETE FROM `jobs`;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
INSERT INTO `jobs` (`id_job`, `job`, `datetime_created`, `datetime_update`, `datetime_finished`) VALUES
	(2, 'Primeira tarefa', '2021-09-16 16:37:48', '0000-00-00 00:00:00', NULL);
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
