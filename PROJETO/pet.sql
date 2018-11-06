-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 01-Nov-2018 às 03:49
-- Versão do servidor: 10.1.24-MariaDB
-- PHP Version: 7.1.6

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
(5, 'asd', 'Pacugj', 1, 'asd', 'asd', '2018-10-04');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `cpf` varchar(11) NOT NULL,
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
(1, 'Piriquitosaurorex121', '5548', 'fddfxdfx', 'fdxdxd', 234, '40028922', 'elias@gmail.com', '123456'),
(5, 'Asdasd', '234234', 'asdasd', 'ssdsfd', 234, '234234', 'sdfsd@gmail.com', '1234565');

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
(1, 5, 1, 4, 'asd', 'asd', '2018-10-02');

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
(4, 'dads', 'marcos', 'anhumas', 'centro', 34, '3536411881', 'medico', 'marcos@hotmail.com', '123456'),
(15, '234', 'alisson francisco de paula', 'ssdf', 'brazopolis', 2345, '345345', 'dfgdfg', 'alisson.francisco@live.com', '567567'),
(16, '234', 'alisson francisco de paula', 'dsdfsdf', 'brazopolis', 2345, '2345345', 'sfsd', 'alisson.francisco@live.com', '3245345'),
(18, 'asd', 'maraa', 'asdasd', 'asdasd', 234, '234234', 'fgdfg', 'ama@asd.com', '4234'),
(21, '1234', 'Matheusinho', 'asdasd', 'ASDasd', 123, '123123123', 'sfdsfd', 'asd@gmail.com', '234234'),
(22, '123123', 'paulo', 'sdfsdf', 'sdfsdf', 234, '23234', 'sdfsdf', 'sdfsf@g.com', '234234'),
(23, '123123', 'Seu DLC ( Í¡Â° ÍœÊ– Í¡Â°)', 'sdfsdf', 'sdfsdf', 234, '23234', 'sdfsdf', 'adm', '123'),
(24, '234', 'pauloasasas', 'sdfsdf', 'dgdfg', 345, '345345', 'asdasd', 'adas@gmail.com', '123456'),
(25, '325345', 'ADM', 'adm', 'adm', 626, '165161', 'adm', 'adm@gmail.com', '123');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `agendamentos`
--
ALTER TABLE `agendamentos`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `animal`
--
ALTER TABLE `animal`
  MODIFY `id_animal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
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
