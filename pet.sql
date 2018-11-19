-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 19-Nov-2018 às 03:09
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pet`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

CREATE TABLE `administrador` (
  `id_administrador` int(11) NOT NULL,
  `Nome` varchar(250) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `Senha` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`id_administrador`, `Nome`, `Email`, `Senha`) VALUES
(1, 'admin', 'adm', '123'),
(2, 'admim', 'adm1', '123456'),
(3, 'Bem vindo', 'Adm2', '123456');

-- --------------------------------------------------------

--
-- Estrutura da tabela `agendamentos`
--

CREATE TABLE `agendamentos` (
  `cod` int(11) NOT NULL,
  `codC` int(11) NOT NULL,
  `codS` int(11) NOT NULL,
  `data` datetime NOT NULL,
  `status` int(11) NOT NULL,
  `codA` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `animal`
--

CREATE TABLE `animal` (
  `id_animal` int(11) NOT NULL,
  `especie` varchar(150) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `raca` varchar(100) NOT NULL,
  `sexo` char(8) NOT NULL,
  `data_nascimento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `animal`
--

INSERT INTO `animal` (`id_animal`, `especie`, `nome`, `id_cliente`, `raca`, `sexo`, `data_nascimento`) VALUES
(5, 'macaco6', 'ken66', 1, 'indefinida', 'm', '2018-10-04'),
(7, 'cachorro', 'Cadu', 1, 'asda', 'm', '2018-10-04'),
(9, 'cachorro', 'pitoco', 5, 'pitbul', 'm', '2018-11-01'),
(10, 'cachorro', 'lito', 5, 'pastor', 'm', '2018-11-02'),
(11, 'cachorro', 'rex', 8, 'pastor', 'm', '2018-11-08');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `bairro` varchar(150) NOT NULL,
  `rua` varchar(100) NOT NULL,
  `num_casa` int(11) NOT NULL,
  `telefone` varchar(13) NOT NULL,
  `email` varchar(260) NOT NULL,
  `senha` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nome`, `cpf`, `bairro`, `rua`, `num_casa`, `telefone`, `email`, `senha`) VALUES
(1, 'usuario', '5548215454-55', 'floresta', 'matagal ', 234, '35984115010', 'usuario@hotmail.com', '123456'),
(5, 'marcos', '234234', 'asdasd', 'ssdsfd', 234, '234234', 'marcos@gmail.com', '1234565'),
(6, 'alisson francisco de paula8', '9182828282', 'Anhumas', 'brazopolis-mg', 56, '35984115010', 'alisson.francisco@live.com', '123456'),
(8, 'rosa mariana de paula', '123123', 'sdfsdf', 'rua rio jaguari, 634', 345, '3536411881', 'rosamarianadepaula@yahoo.com.br', 'alinho'),
(10, 'osmar candido', '154541515-11', 'Brasilia', 'cachoeirinha ', 17, '35991815252', 'osmarvado@gmail.com', '123456'),
(11, 'Flavio mota', '292929292-92', 'motoqueiros ', 'Rua dos empinantes', 299, '352993-9993', 'cortagiro@gmail.com', '299'),
(12, 'Flavio xt666 ', '115151651-65', 'motoqueiros ', 'Rua dos empinantes', 666, '2533336-5261', 'flavinhodaxt@gmail.com', '666xt');

-- --------------------------------------------------------

--
-- Estrutura da tabela `consulta`
--

CREATE TABLE `consulta` (
  `id_consulta` int(11) NOT NULL,
  `id_animal` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_vet` int(11) NOT NULL,
  `requerimento` varchar(290) NOT NULL,
  `relatorio` text NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `consulta`
--

INSERT INTO `consulta` (`id_consulta`, `id_animal`, `id_cliente`, `id_vet`, `requerimento`, `relatorio`, `data`) VALUES
(1, 5, 1, 4, 'uuu', 'fgdfg', '2018-11-14');

-- --------------------------------------------------------

--
-- Estrutura da tabela `servicos`
--

CREATE TABLE `servicos` (
  `cod` int(11) NOT NULL,
  `tipo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `veterinario`
--

CREATE TABLE `veterinario` (
  `id_veterinario` int(11) NOT NULL,
  `crmv` varchar(30) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `rua` varchar(150) NOT NULL,
  `num_casa` int(11) NOT NULL,
  `telefone` varchar(13) NOT NULL,
  `especializacao` varchar(150) DEFAULT NULL,
  `email` varchar(250) NOT NULL,
  `senha` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `veterinario`
--

INSERT INTO `veterinario` (`id_veterinario`, `crmv`, `nome`, `bairro`, `rua`, `num_casa`, `telefone`, `especializacao`, `email`, `senha`) VALUES
(4, '', 'adm', 'anhumas', 'centro', 34, '3536411881', 'medico', 'admver@gmail.com', '123456'),
(22, '432', 'pedrinho6', 'asdasd', 'gggg', 556, '3598411-5010', 'medico', 'pedrinho@gmail.com', '123a'),
(23, '15225521552', 'Paulinho o loko', 'dos dogs', 'Rua dos cÃ£es', 111111, '1651651-6165', 'Gatos', 'paulinholoko@gmail.com', '123456'),
(24, '2156165165', 'Ana julia', 'das musicas', 'das letras', 215, '3546526-2126', 'vacinas', 'ana@gmail.com', '123ana'),
(25, '16165165', 'Deborah secco', 'Globo', 'dos bandeirantes', 666, '3561615-6165', 'Global', 'debrinha@gmail.com', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id_administrador`);

--
-- Indexes for table `agendamentos`
--
ALTER TABLE `agendamentos`
  ADD PRIMARY KEY (`cod`),
  ADD KEY `codC` (`codC`),
  ADD KEY `codS` (`codS`),
  ADD KEY `codA` (`codA`);

--
-- Indexes for table `animal`
--
ALTER TABLE `animal`
  ADD PRIMARY KEY (`id_animal`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`),
  ADD UNIQUE KEY `cpf` (`cpf`);

--
-- Indexes for table `consulta`
--
ALTER TABLE `consulta`
  ADD PRIMARY KEY (`id_consulta`),
  ADD KEY `id_animal` (`id_animal`),
  ADD KEY `id_cliente` (`id_cliente`),
  ADD KEY `id_vet` (`id_vet`);

--
-- Indexes for table `servicos`
--
ALTER TABLE `servicos`
  ADD PRIMARY KEY (`cod`);

--
-- Indexes for table `veterinario`
--
ALTER TABLE `veterinario`
  ADD PRIMARY KEY (`id_veterinario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id_administrador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `agendamentos`
--
ALTER TABLE `agendamentos`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `animal`
--
ALTER TABLE `animal`
  MODIFY `id_animal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `consulta`
--
ALTER TABLE `consulta`
  MODIFY `id_consulta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `servicos`
--
ALTER TABLE `servicos`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `veterinario`
--
ALTER TABLE `veterinario`
  MODIFY `id_veterinario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `agendamentos`
--
ALTER TABLE `agendamentos`
  ADD CONSTRAINT `agendamentos_ibfk_1` FOREIGN KEY (`codA`) REFERENCES `animal` (`id_animal`) ON UPDATE CASCADE,
  ADD CONSTRAINT `agendamentos_ibfk_2` FOREIGN KEY (`codC`) REFERENCES `cliente` (`id_cliente`) ON UPDATE CASCADE,
  ADD CONSTRAINT `agendamentos_ibfk_3` FOREIGN KEY (`codS`) REFERENCES `servicos` (`cod`);

--
-- Limitadores para a tabela `animal`
--
ALTER TABLE `animal`
  ADD CONSTRAINT `animal_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`) ON UPDATE CASCADE;

--
-- Limitadores para a tabela `consulta`
--
ALTER TABLE `consulta`
  ADD CONSTRAINT `consulta_ibfk_1` FOREIGN KEY (`id_animal`) REFERENCES `animal` (`id_animal`) ON UPDATE CASCADE,
  ADD CONSTRAINT `consulta_ibfk_2` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`) ON UPDATE CASCADE,
  ADD CONSTRAINT `consulta_ibfk_3` FOREIGN KEY (`id_vet`) REFERENCES `veterinario` (`id_veterinario`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
