# DevRamper2019
Desafio DevRamper2019

 PROBLEMA 
        Uma livraria contem 7 livros distintos e possui um esquema de descontos que leva em consideracao se é o mesmo título ou não. O problema consiste em calcular o melhor desconto para o cliente. 
        Preco de um titulo qualquer R$ 42,00

        Descontos: 
          2 livros - 5%
          3 livros - 10%
          4 livros - 15%
          5 livros - 20%

          Quanto custa?
            2 cópias  do primeiro livro
            2 cópias do segundo livro
            2 cópias do terceiro livro
            1 cópia do quarto livro
            1 cópia do quinto livro

          Resposta R$ 268,80 (80% do total)
          Note que o preco deve ser o menor valor obtido combinando os livros. 2 conjuntos de 4 livros é melhor que 1 de 5 livros e 1 de 3 livros.

--------------------------------------------------------------------------------------------------------------------------          
          
>>>> Arquivo principal(index) 'Login.php'.
Utilizado pacote xamp (xampp-windows-x64-7.3.11-0-VC15-installer) Servidor Apache, banco de dados mysql
Arquivo com dados exportados em 'sql' dentro da pasta do projeto, por falta de tempo não foi possível implementar todas as tabelas apenas a tabela usuário para fazer login e iniciar a sessão. Os demais dados da 'compra' dos livros apenas são exibidos na tela. De preferência utilizar navegador Firefox ou opera porque navegador Google Chrome bloqueia algumas funcionalidades '*.css do projeto.
          

Colar o arquivo do projeto depois de instalar o pacote xamp no local: 
C:\xampp\htdocs
De preferência instalar neste local por causa de problemas de permissões do windows.

Local para abrir o sistema após módulo apache e phpmyadmin iniciados: 
http://localhost/DevRamper/Login.php
          
          Nome do banco de dados: devramper
          usuario: root
          senha""
          
          Dados exportados do phpmyadmin do banco de dados mysql:
          -- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 21-Nov-2019 às 15:05
-- Versão do servidor: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `devramper`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `usuarioId` int(3) NOT NULL,
  `nome` varchar(200) CHARACTER SET utf8 NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 NOT NULL,
  `senha` varchar(30) CHARACTER SET utf8 NOT NULL,
  `endereco` varchar(200) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`usuarioId`, `nome`, `email`, `senha`, `endereco`) VALUES
(2, 'Andre', 'andre@redevivo.com', '123456', 'Avenida Rio Branco 530');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuarioId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usuarioId` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;





Qualquer dúvida entrar em contato pelo email: andre_flores2009@hotmail.com
Em breve mais informações.






