drop schema if exists meutcc;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de Dados: `academico`
--

CREATE DATABASE IF NOT EXISTS `meutcc` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

/* DROP USER `sistemaweb`@`localhost`; */

CREATE USER if not exists `sistemaweb_tcc`@`localhost` identified by "123456";
GRANT ALL PRIVILEGES ON meutcc.* TO `sistemaweb_tcc`@`localhost`;

USE meutcc;

COMMIT;

