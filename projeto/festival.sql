-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05-Mar-2021 às 19:17
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `festival`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `artista`
--

CREATE TABLE `artista` (
  `id_artista` int(11) NOT NULL,
  `nome` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_nascimento` date NOT NULL,
  `nacionalidade` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_festival` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `artista`
--

INSERT INTO `artista` (`id_artista`, `nome`, `data_nascimento`, `nacionalidade`, `id_festival`) VALUES
(1, 'David Guetta', '1967-11-07', 'Francês', 1),
(2, 'Marshmello', '1992-05-19', 'Norte-Americano', 0),
(3, 'Martin Garrix', '1996-05-14', 'Holandês', 0),
(4, 'Alan Walker', '1997-08-24', 'Anglo-Norueguês', 0),
(5, 'Alok', '1991-08-26', 'Brasileiro', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `festivais`
--

CREATE TABLE `festivais` (
  `id_festival` int(11) NOT NULL,
  `nome` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tipo` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data` date DEFAULT NULL,
  `local` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descricao` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `festivais`
--

INSERT INTO `festivais` (`id_festival`, `nome`, `tipo`, `data`, `local`, `descricao`) VALUES
(1, 'Tomorrowland', 'Musica', '2021-06-11', 'Belgica', 'Tomorrowland é um festival de música realizado anualmente. Sua edição original é realizada em Boom na Bélgica, cidade com menos de 20 mil habitantes, no distrito de Antuérpia. A edição brasileira foi anunciada em 20 de julho de 2014, e foi realizada na cidade de Itu, São Paulo, até 2016. Nos Estados Unidos, contava com outro nome, TomorrowWorld. Sendo a edição norte-americana realizada, até 2015, na cidade de Atlanta, Geórgia. Em 2019, o festival teve sua primeira edição de Inverno, na França.'),
(2, 'lollapalooza', 'Musica ', '2021-03-26', 'EUA ', 'Lollapalooza é um festival de música alternativa que acontece anualmente, é composto por gêneros como rock alternativo, heavy metal, punk rock, grunge e performances de comédia e danças, além de estandes de artesanato. Também fornece uma plataforma para grupos políticos e sem fins lucrativos. O Lollapalooza tem apresentado uma grande variedade de bandas e ajudou a expor e popularizar artistas como Amy Winehouse, Alice in Chains, Tool, Red Hot Chili Peppers, Pearl Jam, The Cure, Primus, Rage Against the Machine, Soundgarden, Arcade Fire, Nine Inch Nails, Nick Cave, L7, Janes Addiction, X Japan, The Killers, Siouxsie and the Banshees, The Smashing Pumpkins, Muse, Hole, 30 Seconds to Mars, The Strokes, Arctic Monkeys, Foo Fighters, Green Day, Lady Gaga e Fun.'),
(3, 'MEO Sudoeste', 'Musica ', '2021-08-05', 'Portugal', 'O MEO Sudoeste é um festival de verão realizado em solo português. Decorre na Herdade da Casa Branca, em São Teotónio (Odemira) no Alentejo e é organizado pela Música no Coração. Ao longo dos anos recebeu a visita de mais de um milhão de pessoas. Realiza-se no início do mês de Agosto.'),
(4, 'NOS Alive', 'Musica ', '2021-06-18', 'Portugal', 'NOS Alive (anteriormente denominado como Optimus Alive) é um festival de música anual realizado no Passeio Maritimo de Algés, em Oeiras, Portugal. É organizado pela promotora de eventos Everything Is New e patrocinado pela NOS. Teve a sua primeira edição em 2007 e desde então não sofreu qualquer interrupção.'),
(5, 'Rock in Rio', 'Musica ', '2021-07-16', 'Brasil', 'O Rock in Rio é um festival de música idealizado pelo empresário brasileiro Roberto Medina pela primeira vez em 1985, sendo, desde sua criação, reconhecidamente, o maior festival musical do planeta. Foi originalmente organizado no Rio de Janeiro, de onde vem o nome. Tornou-se um evento de repercussão em nível mundial e, em 2004, teve a sua primeira edição fora do Brasil em Lisboa, Portugal.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `utilizadores`
--

CREATE TABLE `utilizadores` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `utilizadores`
--

INSERT INTO `utilizadores` (`id`, `nome`, `user_name`, `email`, `password`) VALUES
(1, 'José Sousa', 'José Sousa', 'sousa20@gmail.com', '$2y$10$nVnSb7HtDlgc8DjayVXCXu/oHmZ2qNnQXrthTBn4QI63MYphwysQi');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `artista`
--
ALTER TABLE `artista`
  ADD PRIMARY KEY (`id_artista`);

--
-- Índices para tabela `festivais`
--
ALTER TABLE `festivais`
  ADD PRIMARY KEY (`id_festival`);

--
-- Índices para tabela `utilizadores`
--
ALTER TABLE `utilizadores`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `artista`
--
ALTER TABLE `artista`
  MODIFY `id_artista` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `festivais`
--
ALTER TABLE `festivais`
  MODIFY `id_festival` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `utilizadores`
--
ALTER TABLE `utilizadores`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
