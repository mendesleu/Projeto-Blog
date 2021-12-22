-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23-Dez-2021 às 00:10
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `blog_bd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `adm`
--

CREATE TABLE `adm` (
  `id` int(255) NOT NULL,
  `name` text NOT NULL,
  `description` varchar(1000) NOT NULL,
  `user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `adm`
--

INSERT INTO `adm` (`id`, `name`, `description`, `user`, `password`, `level`) VALUES
(5, 'user teste', 'ldd', 'teste', 'teste', 'administrador'),
(7, 'user 2 teste', 'dvdfvn', 'teste2', 'teste2', 'administrador');

-- --------------------------------------------------------

--
-- Estrutura da tabela `category`
--

CREATE TABLE `category` (
  `id` int(255) NOT NULL,
  `category` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `category`
--

INSERT INTO `category` (`id`, `category`) VALUES
(48, 'engenharia de software'),
(49, 'tecnologia'),
(50, 'scrum'),
(51, 'review'),
(52, 'programação'),
(53, 'dicas'),
(54, 'cursos'),
(55, 'youtube');

-- --------------------------------------------------------

--
-- Estrutura da tabela `posts`
--

CREATE TABLE `posts` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` varchar(50) NOT NULL,
  `thumb` varchar(200) NOT NULL,
  `author` varchar(255) NOT NULL,
  `category` varchar(100) NOT NULL,
  `post` varchar(1500) NOT NULL,
  `tags` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `posts`
--

INSERT INTO `posts` (`id`, `title`, `date`, `thumb`, `author`, `category`, `post`, `tags`) VALUES
(47, 'CRYSTIAN E RALF ENCERRAM DUPLA APÓS 40 ANOS E DEIXAM DE SEGUIR NAS REDES SOCIAIS', '18/12/2021 18:37', '7af9b57b074cf9487ab1997ebdd6412f.jpg', 'Marcio Andrade', 'engenharia de software', 'Os irmãos Chrystian e Ralf não formam mais uma dupla sertaneja. Após 40 anos cantando juntos, eles decidiram se separar definitivamente e seguir carreira solo, segundo informam os representantes dos cantores.\r\n\r\nAmbos também deixaram de se seguir nas redes sociais e agora fazem parte de escritórios separados. Chrystian, por exemplo, assinou contrato de seis anos para um projeto solo. Já Ralf fez uma parceria musical com o sertanejo Eduardo Costa.\r\n\r\n\r\nO que se comenta é que os irmãos se desentenderam por conta de objetivos profissionais. Eles se afastaram por quase dois anos por conta da pandemia antes de decidirem encerrar a dupla.\r\n\r\n*Com informações da Extra', 'crystian; ralf; musica; separação;'),
(51, 'sadj', '21/12/2021 13:13', '36d0a4a0293dd96c667c7114fd2163d2.jpg', 'vkdv', 'tecnologia', '<p>vnkvdnvfnknvk</p>', 'vnfk'),
(53, 'POLÍCIA MILITAR DE ARARUNA REALIZA ENTREGA DE CHOCOLATES PARA CRIANÇAS', '21/12/2021 13:42', 'b2befa6f159f39a99ab799f6da164093.jpg', 'asdsa', 'engenharia de software', '<p>Pelo sexto ano consecutivo a Policia Militar (PM) de Araruna realizou a campanha Natal Solid&aacute;rio e entregou caixas de bombons para crian&ccedil;as carentes nos distritos de S&atilde;o Vicente, S&atilde;o Geraldo e Nova Bras&iacute;lia. A entrega aconteceu na manh&atilde; deste domingo (19).</p>\r\n\r\n<p>Neste ano foram arrecadadas cerca de 300 caixas de bombons. As doa&ccedil;&otilde;es foram feitas pela popula&ccedil;&atilde;o, com a ajuda do com&eacute;rcio local.</p>\r\n\r\n<p>Devido a quantidade arrecadada n&atilde;o foi poss&iacute;vel fazer a entrega nos bairros da cidade como ocorreu em outros anos.&nbsp;</p>\r\n', 'sdsa');

-- --------------------------------------------------------

--
-- Estrutura da tabela `publicity`
--

CREATE TABLE `publicity` (
  `id` int(25) NOT NULL,
  `publicity` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `publicity`
--

INSERT INTO `publicity` (`id`, `publicity`) VALUES
(1, 'bf93b7ca852ec7bb43a127dc35a40559.png'),
(2, '5252ed237e142201ad7fd5619b9e6f68.png'),
(3, 'f7b6cda4dc346389f44bc6c7ee026145.png'),
(4, '769e3c018aa39682f78324c2c352bcfd.png'),
(5, '302f43b78be13eabb3a22d496a5bcbc8.png');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `adm`
--
ALTER TABLE `adm`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `publicity`
--
ALTER TABLE `publicity`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `adm`
--
ALTER TABLE `adm`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `category`
--
ALTER TABLE `category`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT de tabela `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT de tabela `publicity`
--
ALTER TABLE `publicity`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
