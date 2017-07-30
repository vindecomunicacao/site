-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 13-Jul-2017 às 14:53
-- Versão do servidor: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vinde`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `agendas`
--

CREATE TABLE `agendas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `texto` text COLLATE utf8_unicode_ci,
  `imagem` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` date DEFAULT NULL,
  `permanente` tinyint(4) NOT NULL DEFAULT '0',
  `ativo` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `artigos`
--

CREATE TABLE `artigos` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `texto` text COLLATE utf8_unicode_ci,
  `imagem` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` date NOT NULL,
  `ativo` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `banners`
--

CREATE TABLE `banners` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `imagem` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `texto` text COLLATE utf8_unicode_ci,
  `link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `posicao` tinyint(4) NOT NULL,
  `ordem` tinyint(4) DEFAULT NULL,
  `ativo` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria_transacaos`
--

CREATE TABLE `categoria_transacaos` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ordem` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `categoria_transacaos`
--

INSERT INTO `categoria_transacaos` (`id`, `nome`, `ordem`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Grupo de Usuário', NULL, '2017-07-10 18:29:12', '2017-07-10 18:29:12', NULL),
(2, 'Usuário', NULL, '2017-07-10 18:29:12', '2017-07-10 18:29:12', NULL),
(3, 'Permissão', NULL, '2017-07-10 18:29:12', '2017-07-10 18:29:12', NULL),
(4, 'Log', NULL, '2017-07-10 18:29:12', '2017-07-10 18:29:12', NULL),
(5, 'Contato', 1, '2017-07-10 18:29:12', '2017-07-10 18:29:12', NULL),
(6, 'Galeria', 2, '2017-07-10 18:29:12', '2017-07-10 18:29:12', NULL),
(7, 'Banner', 3, '2017-07-10 18:29:12', '2017-07-10 18:29:12', NULL),
(8, 'Celula', 0, '2017-07-10 18:29:12', '2017-07-10 18:29:12', NULL),
(9, 'Rede', 0, '2017-07-10 18:29:12', '2017-07-10 18:29:12', NULL),
(10, 'Noticia', 0, '2017-07-10 18:29:12', '2017-07-10 18:29:12', NULL),
(11, 'Agenda', 0, '2017-07-10 18:29:12', '2017-07-10 18:29:12', NULL),
(13, 'Artigo', 0, '2017-07-10 18:29:12', '2017-07-10 18:29:12', NULL),
(14, 'Cliente', 0, '2017-07-10 18:29:12', '2017-07-10 18:29:12', NULL),
(15, 'Podcast', 0, '2017-07-10 18:29:12', '2017-07-10 18:29:12', NULL),
(16, 'PodcastMidia', 0, '2017-07-10 18:29:12', '2017-07-10 18:29:12', NULL),
(17, 'PodcastCategoria', 0, '2017-07-10 18:29:12', '2017-07-10 18:29:12', NULL),
(18, 'Midia', 0, '2017-07-10 18:29:12', '2017-07-10 18:29:12', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `celulas`
--

CREATE TABLE `celulas` (
  `id` int(10) UNSIGNED NOT NULL,
  `rede_id` int(10) UNSIGNED NOT NULL,
  `lider_id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `imagem` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `texto` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `endereco` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bairro` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `complemento` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cep` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `celular` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `qtd_nucleo` tinyint(4) NOT NULL,
  `ativo` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `celular` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `endereco` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `numero` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `complemento` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cep` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `contatos`
--

CREATE TABLE `contatos` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` char(11) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mensagem` text COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `endereco` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `latitude` double(8,2) NOT NULL,
  `longitude` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `departamentos`
--

CREATE TABLE `departamentos` (
  `id` int(10) UNSIGNED NOT NULL,
  `departamento` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `departamentos`
--

INSERT INTO `departamentos` (`id`, `departamento`, `created_at`, `updated_at`) VALUES
(1, 'Infantil', '2017-07-10 18:29:15', '2017-07-10 18:29:15'),
(2, 'Louvor', '2017-07-10 18:29:16', '2017-07-10 18:29:16'),
(3, 'Diaconato', '2017-07-10 18:29:16', '2017-07-10 18:29:16'),
(4, 'Tecnologia', '2017-07-10 18:29:16', '2017-07-10 18:29:16'),
(5, 'Comunicação', '2017-07-10 18:29:16', '2017-07-10 18:29:16'),
(6, 'Teatro', '2017-07-10 18:29:16', '2017-07-10 18:29:16'),
(7, 'Dança', '2017-07-10 18:29:16', '2017-07-10 18:29:16'),
(8, 'Oração e Intercessao', '2017-07-10 18:29:16', '2017-07-10 18:29:16');

-- --------------------------------------------------------

--
-- Estrutura da tabela `galerias`
--

CREATE TABLE `galerias` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rede_id` tinyint(4) DEFAULT NULL,
  `data` date NOT NULL,
  `ativo` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `grupo_usuarios`
--

CREATE TABLE `grupo_usuarios` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `texto` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `grupo_usuarios`
--

INSERT INTO `grupo_usuarios` (`id`, `nome`, `slug`, `texto`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Desenvolvedor', NULL, 'Todas as permissões do sistemas liberadas', '2017-07-10 18:29:09', '2017-07-10 18:29:09', NULL),
(2, 'Pastor', NULL, 'Permissões de gerência do sistemas liberadas', '2017-07-10 18:29:09', '2017-07-10 18:29:09', NULL),
(3, 'Supervisor', NULL, 'Permissões de gerência da supervisão liberadas', '2017-07-10 18:29:09', '2017-07-10 18:29:09', NULL),
(4, 'Discipulador', NULL, 'Permissões de gerência dos discipuladores liberadas', '2017-07-10 18:29:09', '2017-07-10 18:29:09', NULL),
(5, 'Líder', NULL, 'Permissões de gerência da liderança liberadas', '2017-07-10 18:29:09', '2017-07-10 18:29:09', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagem_galerias`
--

CREATE TABLE `imagem_galerias` (
  `id` int(10) UNSIGNED NOT NULL,
  `galeria_id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `legenda` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `capa` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `logs`
--

CREATE TABLE `logs` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `owner_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `owner_id` int(11) NOT NULL,
  `old_value` text COLLATE utf8_unicode_ci,
  `new_value` text COLLATE utf8_unicode_ci,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `route` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ip` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2015_08_01_104512_create_log_table', 1),
('2016_05_22_190217_add_fields_to_log_table', 1),
('2016_07_17_133557_create_grupo_usuarios_table', 1),
('2016_07_17_133612_create_usuarios_table', 1),
('2016_07_20_221023_create_categoria_transacaos_table', 1),
('2016_07_20_221140_create_transacaos_table', 1),
('2016_08_03_004038_create_banners_table', 1),
('2016_08_16_011116_create_galerias_table', 1),
('2016_08_16_011635_create_imagem_galerias_table', 1),
('2016_09_02_181036_create_permissao_table', 1),
('2016_09_08_162846_create_contatos_table', 1),
('2016_10_24_031738_create_noticias_table', 1),
('2016_10_24_132856_create_agendas_table', 1),
('2017_01_31_175901_create_redes_table', 1),
('2017_01_31_192228_create_celulas_table', 1),
('2017_02_01_151657_create_artigos_table', 1),
('2017_03_25_233226_create_clientes_table', 1),
('2017_04_29_015656_add_posicao_to_banners_table', 1),
('2017_04_29_185742_add_link_to_banners_table', 1),
('2017_05_10_193522_create_departamentos_table', 1),
('2017_05_12_003127_add_foreign_key_departamento_id_to_usuarios_table', 1),
('2017_05_12_003144_add_foreign_key_celula_id_to_usuarios_table', 1),
('2017_05_26_132502_create_podcasts_table', 1),
('2017_05_26_141329_create_podcast_midias_table', 1),
('2017_05_26_144450_create_podcast_categorias_table', 1),
('2017_05_26_145959_add_foreign_key_autor_to_podcasts_table', 1),
('2017_05_26_150051_add_foreign_key_podcast_categoria_id_to_podcasts_table', 1),
('2017_05_26_150715_create_midias_table', 1),
('2017_05_26_151106_add_foreign_key_podcasts_id_to_podcasts_midias_table', 1),
('2017_05_26_151123_add_foreign_key_midias_id_to_podcasts_midias_table', 1),
('2017_07_10_123443_delete_podcasts_midias_table', 1),
('2017_07_10_123508_delete_podcasts_categorias_table', 1),
('2017_07_10_124503_add_soft_deletes_in_podcast_table', 1),
('2017_07_10_124811_delete_midias_table', 1),
('2017_07_10_125016_delete_podcast_categoria_id_to_podcasts_table', 1),
('2017_07_10_125049_add_tags_to_podcasts_table', 1),
('2017_07_10_125111_add_arquivo_to_podcasts_table', 1),
('2017_07_12_181604_add_duration_to_podcasts_table', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias`
--

CREATE TABLE `noticias` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `texto` text COLLATE utf8_unicode_ci,
  `imagem` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` date NOT NULL,
  `ativo` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `permissao`
--

CREATE TABLE `permissao` (
  `id` int(10) UNSIGNED NOT NULL,
  `grupo_usuario_id` int(10) UNSIGNED NOT NULL,
  `transacao_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `permissao`
--

INSERT INTO `permissao` (`id`, `grupo_usuario_id`, `transacao_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, '2017-07-10 18:29:15', '2017-07-10 18:29:15', NULL),
(2, 1, 2, '2017-07-10 18:29:15', '2017-07-10 18:29:15', NULL),
(3, 1, 3, '2017-07-10 18:29:15', '2017-07-10 18:29:15', NULL),
(4, 1, 4, '2017-07-10 18:29:15', '2017-07-10 18:29:15', NULL),
(5, 1, 5, '2017-07-10 18:29:15', '2017-07-10 18:29:15', NULL),
(6, 1, 6, '2017-07-10 18:29:15', '2017-07-10 18:29:15', NULL),
(7, 1, 7, '2017-07-10 18:29:15', '2017-07-10 18:29:15', NULL),
(8, 1, 8, '2017-07-10 18:29:15', '2017-07-10 18:29:15', NULL),
(9, 1, 9, '2017-07-10 18:29:15', '2017-07-10 18:29:15', NULL),
(10, 1, 10, '2017-07-10 18:29:15', '2017-07-10 18:29:15', NULL),
(11, 1, 11, '2017-07-10 18:29:15', '2017-07-10 18:29:15', NULL),
(12, 1, 12, '2017-07-10 18:29:15', '2017-07-10 18:29:15', NULL),
(13, 1, 13, '2017-07-10 18:29:15', '2017-07-10 18:29:15', NULL),
(14, 1, 14, '2017-07-10 18:29:15', '2017-07-10 18:29:15', NULL),
(15, 1, 15, '2017-07-10 18:29:15', '2017-07-10 18:29:15', NULL),
(16, 1, 16, '2017-07-10 18:29:15', '2017-07-10 18:29:15', NULL),
(17, 1, 17, '2017-07-10 18:29:15', '2017-07-10 18:29:15', NULL),
(18, 1, 18, '2017-07-10 18:29:15', '2017-07-10 18:29:15', NULL),
(19, 1, 19, '2017-07-10 18:29:15', '2017-07-10 18:29:15', NULL),
(20, 1, 20, '2017-07-10 18:29:15', '2017-07-10 18:29:15', NULL),
(21, 1, 21, '2017-07-10 18:29:15', '2017-07-10 18:29:15', NULL),
(22, 1, 22, '2017-07-10 18:29:15', '2017-07-10 18:29:15', NULL),
(23, 1, 23, '2017-07-10 18:29:15', '2017-07-10 18:29:15', NULL),
(24, 1, 24, '2017-07-10 18:29:15', '2017-07-10 18:29:15', NULL),
(25, 1, 25, '2017-07-10 18:29:15', '2017-07-10 18:29:15', NULL),
(26, 1, 26, '2017-07-10 18:29:15', '2017-07-10 18:29:15', NULL),
(27, 1, 27, '2017-07-10 18:29:15', '2017-07-10 18:29:15', NULL),
(28, 1, 28, '2017-07-10 18:29:15', '2017-07-10 18:29:15', NULL),
(29, 1, 29, '2017-07-10 18:29:15', '2017-07-10 18:29:15', NULL),
(30, 1, 30, '2017-07-10 18:29:15', '2017-07-10 18:29:15', NULL),
(31, 1, 31, '2017-07-10 18:29:15', '2017-07-10 18:29:15', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `podcasts`
--

CREATE TABLE `podcasts` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subtitulo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descricao` text COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `imagem` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `autor_id` int(10) UNSIGNED NOT NULL,
  `tags` text COLLATE utf8_unicode_ci NOT NULL,
  `arquivo` text COLLATE utf8_unicode_ci NOT NULL,
  `direitos_autorais` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `podcasts`
--

INSERT INTO `podcasts` (`id`, `titulo`, `subtitulo`, `descricao`, `link`, `imagem`, `autor_id`, `tags`, `arquivo`, `direitos_autorais`, `created_at`, `updated_at`, `deleted_at`) VALUES
(18, 'Pra onde iremos', 'Gabriela Rocha - Felippe Valadão', 'Ministração da musica: Pra onde iremos? gravado na...', 'https://www.youtube.com/watch?v=1rLB7FpYL0U', 'logo-vinde-quadrada_5362.jpg', 2, 'felippe valadao,gabriela rocha,vinde celulas,pra onde iremos,lagoinha niteroi', 'gabriela-rocha-felippe-valadao-pra-onde-iremos-lagoinha-niteroi_5734.mp3', 'Vinde Células', '2017-07-11 22:45:20', '2017-07-12 22:35:06', NULL),
(19, 'A Expiação de Cristo', 'Pr Márcio Souza', 'Este vídeo é sobre jejum', 'https://www.youtube.com/watch?v=JKuG9Xfv0Vc', 'logo-vinde-quadrada_2621.jpg', 2, 'culto vinde,pr marcio souza,cristo,vinde celulas,catedral da familia', 'culto-vinde-a-expiacao-de-cristo-pr-marciosouza-jkug9xfv0vc_4407.mp3', 'Vinde Células', '2017-07-11 22:54:30', '2017-07-12 14:45:23', '2017-07-12 14:45:23'),
(20, 'A Expiação de Cristo', 'Pr Márcio Souza', 'Este vídeo é sobre jejum', 'https://www.youtube.com/watch?v=JKuG9Xfv0Vc', 'logo-vinde-quadrada_5599.jpg', 2, 'jejum,pr marcio souza,culto vinde,vinde celulas', 'culto-vinde-a-expiacao-de-cristo-pr-marciosouza-jkug9xfv0vc_7071.mp3', 'Vinde Células', '2017-07-12 22:38:57', '2017-07-12 22:38:57', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `redes`
--

CREATE TABLE `redes` (
  `id` int(10) UNSIGNED NOT NULL,
  `pastor_id` int(10) UNSIGNED DEFAULT NULL,
  `supervisor_id` int(10) UNSIGNED DEFAULT NULL,
  `discipulador_id` int(10) UNSIGNED DEFAULT NULL,
  `nome` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `imagem` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ativo` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `transacaos`
--

CREATE TABLE `transacaos` (
  `id` int(10) UNSIGNED NOT NULL,
  `categoria_id` int(10) UNSIGNED NOT NULL,
  `permissao` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `label` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `transacaos`
--

INSERT INTO `transacaos` (`id`, `categoria_id`, `permissao`, `label`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'grupo-usuario.visualizar', 'Visualizar', '2017-07-10 18:29:12', '2017-07-10 18:29:12', NULL),
(2, 1, 'grupo-usuario.cadastrar', 'Cadastrar', '2017-07-10 18:29:12', '2017-07-10 18:29:12', NULL),
(3, 1, 'grupo-usuario.alterar', 'Alterar', '2017-07-10 18:29:12', '2017-07-10 18:29:12', NULL),
(4, 1, 'grupo-usuario.excluir', 'Excluir', '2017-07-10 18:29:12', '2017-07-10 18:29:12', NULL),
(5, 2, 'usuario.visualizar', 'Visualizar', '2017-07-10 18:29:13', '2017-07-10 18:29:13', NULL),
(6, 2, 'usuario.cadastrar', 'Cadastrar', '2017-07-10 18:29:13', '2017-07-10 18:29:13', NULL),
(7, 2, 'usuario.alterar', 'Alterar', '2017-07-10 18:29:13', '2017-07-10 18:29:13', NULL),
(8, 2, 'usuario.excluir', 'Excluir', '2017-07-10 18:29:13', '2017-07-10 18:29:13', NULL),
(9, 3, 'permissao.visualizar', 'Visualizar', '2017-07-10 18:29:13', '2017-07-10 18:29:13', NULL),
(10, 3, 'permissao.alterar', 'Alterar', '2017-07-10 18:29:13', '2017-07-10 18:29:13', NULL),
(11, 4, 'log.visualizar', 'Visualizar', '2017-07-10 18:29:13', '2017-07-10 18:29:13', NULL),
(12, 14, 'cliente.visualizar', 'Visualizar', '2017-07-10 18:29:13', '2017-07-10 18:29:13', NULL),
(13, 14, 'cliente.cadastrar', 'Cadastrar', '2017-07-10 18:29:13', '2017-07-10 18:29:13', NULL),
(14, 14, 'cliente.alterar', 'Alterar', '2017-07-10 18:29:13', '2017-07-10 18:29:13', NULL),
(15, 14, 'cliente.excluir', 'Excluir', '2017-07-10 18:29:13', '2017-07-10 18:29:13', NULL),
(16, 15, 'podcast.visualizar', 'Visualizar', '2017-07-10 18:29:13', '2017-07-10 18:29:13', NULL),
(17, 15, 'podcast.cadastrar', 'Cadastrar', '2017-07-10 18:29:13', '2017-07-10 18:29:13', NULL),
(18, 15, 'podcast.alterar', 'Alterar', '2017-07-10 18:29:13', '2017-07-10 18:29:13', NULL),
(19, 15, 'podcast.excluir', 'Excluir', '2017-07-10 18:29:13', '2017-07-10 18:29:13', NULL),
(20, 16, 'podcastmidia.visualizar', 'Visualizar', '2017-07-10 18:29:13', '2017-07-10 18:29:13', NULL),
(21, 16, 'podcastmidia.cadastrar', 'Cadastrar', '2017-07-10 18:29:13', '2017-07-10 18:29:13', NULL),
(22, 16, 'podcastmidia.alterar', 'Alterar', '2017-07-10 18:29:13', '2017-07-10 18:29:13', NULL),
(23, 16, 'podcastmidia.excluir', 'Excluir', '2017-07-10 18:29:13', '2017-07-10 18:29:13', NULL),
(24, 17, 'podcastcategoria.visualizar', 'Visualizar', '2017-07-10 18:29:13', '2017-07-10 18:29:13', NULL),
(25, 17, 'podcastcategoria.cadastrar', 'Cadastrar', '2017-07-10 18:29:13', '2017-07-10 18:29:13', NULL),
(26, 17, 'podcastcategoria.alterar', 'Alterar', '2017-07-10 18:29:13', '2017-07-10 18:29:13', NULL),
(27, 17, 'podcastcategoria.excluir', 'Excluir', '2017-07-10 18:29:13', '2017-07-10 18:29:13', NULL),
(28, 18, 'midia.visualizar', 'Visualizar', '2017-07-10 18:29:13', '2017-07-10 18:29:13', NULL),
(29, 18, 'midia.cadastrar', 'Cadastrar', '2017-07-10 18:29:13', '2017-07-10 18:29:13', NULL),
(30, 18, 'midia.alterar', 'Alterar', '2017-07-10 18:29:13', '2017-07-10 18:29:13', NULL),
(31, 18, 'midia.excluir', 'Excluir', '2017-07-10 18:29:13', '2017-07-10 18:29:13', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) UNSIGNED NOT NULL,
  `grupo_usuario_id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `celula_id` int(10) UNSIGNED DEFAULT NULL,
  `dataNascimento` date NOT NULL,
  `celular` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `celularWhatsapp` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `estadoCivil` char(1) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '1: Solteiro (a); 2: Casado (a); 3: Divorciado (a);',
  `numeroFilhos` int(11) DEFAULT NULL,
  `endereco` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `numeroEndereco` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cepEndereco` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `bairroEndereco` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cidadeEndereco` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ufEndereco` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `escolaridade` char(1) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '1: Ensino Fundamental; 2: Ensino Médio; 3: Ensino Profissionalizante; 4: Ensino Superior Incompleto; 5: Ensino Superior Completo; 6: Especialização; 7: Graduação; 8: Mestrado; 9: Doutorado;',
  `cursoEscolaridade` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `profissao` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `desempregado` char(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `anosDesempregado` int(11) DEFAULT NULL,
  `doadorSangue` char(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tipoSanguineo` char(1) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '1: A +; 2: A -; 3: B +; 4: B -; 5: AB +; 6: AB -; 7: O +; 8: O -;',
  `atendimentoEspecial` char(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descrisaoAtendimentoEspecial` text COLLATE utf8_unicode_ci,
  `remedioControlado` char(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descrisaoRemedioControlado` text COLLATE utf8_unicode_ci,
  `saiuOutraIgreja` char(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descrisaoSaiuOutraIgreja` text COLLATE utf8_unicode_ci,
  `filantropico` char(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `grupoFilantropico` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dizimista` char(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `encontroComDeus` char(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `escolaDiscipulos` char(1) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '1: Sim, estou cursando; 2: Não curso; 3: Já sou formado;',
  `descrisaoEscolaDiscipulos` text COLLATE utf8_unicode_ci,
  `conheceMinisteriosPaulo` char(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `papelCorpoCristo` char(1) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '1: Profeta; 2: Mestre; 3: Apóstolo; 4: Evangelista; 5: Pastor; 6: Não Sei;',
  `cristaoComPolitica` char(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descrisaoCristaoComPolitica` text COLLATE utf8_unicode_ci,
  `formacaoProfissionalParteChamado` char(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `formacaoAcademicaAliadoChamado` char(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `estouDispostoServirComMeuTalento` char(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vontadeServirEmDepartamento` char(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `departamento_id` int(10) UNSIGNED DEFAULT NULL,
  `atividadesPreferidasParaTempoLivre` text COLLATE utf8_unicode_ci,
  `jesusParaVoce` text COLLATE utf8_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `grupo_usuario_id`, `nome`, `slug`, `email`, `password`, `celula_id`, `dataNascimento`, `celular`, `celularWhatsapp`, `estadoCivil`, `numeroFilhos`, `endereco`, `numeroEndereco`, `cepEndereco`, `bairroEndereco`, `cidadeEndereco`, `ufEndereco`, `escolaridade`, `cursoEscolaridade`, `profissao`, `desempregado`, `anosDesempregado`, `doadorSangue`, `tipoSanguineo`, `atendimentoEspecial`, `descrisaoAtendimentoEspecial`, `remedioControlado`, `descrisaoRemedioControlado`, `saiuOutraIgreja`, `descrisaoSaiuOutraIgreja`, `filantropico`, `grupoFilantropico`, `dizimista`, `encontroComDeus`, `escolaDiscipulos`, `descrisaoEscolaDiscipulos`, `conheceMinisteriosPaulo`, `papelCorpoCristo`, `cristaoComPolitica`, `descrisaoCristaoComPolitica`, `formacaoProfissionalParteChamado`, `formacaoAcademicaAliadoChamado`, `estouDispostoServirComMeuTalento`, `vontadeServirEmDepartamento`, `departamento_id`, `atividadesPreferidasParaTempoLivre`, `jesusParaVoce`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Denny Augustus', NULL, 'dennysaug@gmail.com', '$2y$10$3lzhvb0b9MQ66dmHOxmGn.kXjq.2u1MISYYoY4oBDePloDhelg.lK', NULL, '0000-00-00', '', NULL, NULL, NULL, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-07-10 18:29:10', '2017-07-10 18:29:10', NULL),
(2, 1, 'Luis Portugal', NULL, 'luisenriquegomesportugal@gmail.com', '$2y$10$Kp6BHmQUCDdrb0IDkU4KXOy3AvQvpmKswRS1z9lkWbIWhfbQOf7wS', NULL, '0000-00-00', '', NULL, NULL, NULL, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-07-10 18:29:10', '2017-07-10 18:29:10', NULL),
(3, 2, 'Pastor', NULL, 'pastor@mail.com', '$2y$10$QnkKL2xyXYsVy0eHrObq1eHDYQyFe31YcKIXPs.DLWUZCM4rHIh6C', NULL, '0000-00-00', '', NULL, NULL, NULL, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-07-10 18:29:11', '2017-07-10 18:29:11', NULL),
(4, 3, 'Supervisor', NULL, 'supervisor@mail.com', '$2y$10$PmArLiJiRWMK8FKSMlW8vugwvQkmf0/0OI4BKB775HoZgczARfOCW', NULL, '0000-00-00', '', NULL, NULL, NULL, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-07-10 18:29:11', '2017-07-10 18:29:11', NULL),
(5, 4, 'Discipulador', NULL, 'discipulador@mail.com', '$2y$10$ZDS4deh3MV/OlkY0DKpayenCEH72E/UuOk8MCD1En1EZ/mhNAQjne', NULL, '0000-00-00', '', NULL, NULL, NULL, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-07-10 18:29:11', '2017-07-10 18:29:11', NULL),
(6, 5, 'Líder', NULL, 'lider@mail.com', '$2y$10$REtuDt1Aa27.IQKxjK4yaO2/lC1XlSOkg8vIAKNh7hu8CPBGN94a.', NULL, '0000-00-00', '', NULL, NULL, NULL, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-07-10 18:29:11', '2017-07-10 18:29:11', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agendas`
--
ALTER TABLE `agendas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artigos`
--
ALTER TABLE `artigos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categoria_transacaos`
--
ALTER TABLE `categoria_transacaos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `celulas`
--
ALTER TABLE `celulas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `celulas_rede_id_foreign` (`rede_id`),
  ADD KEY `celulas_lider_id_foreign` (`lider_id`);

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contatos`
--
ALTER TABLE `contatos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galerias`
--
ALTER TABLE `galerias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grupo_usuarios`
--
ALTER TABLE `grupo_usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `imagem_galerias`
--
ALTER TABLE `imagem_galerias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `imagem_galerias_galeria_id_foreign` (`galeria_id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissao`
--
ALTER TABLE `permissao`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissao_grupo_usuario_id_foreign` (`grupo_usuario_id`),
  ADD KEY `permissao_transacao_id_foreign` (`transacao_id`);

--
-- Indexes for table `podcasts`
--
ALTER TABLE `podcasts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `podcasts_autor_id_foreign` (`autor_id`);

--
-- Indexes for table `redes`
--
ALTER TABLE `redes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `redes_pastor_id_foreign` (`pastor_id`),
  ADD KEY `redes_supervisor_id_foreign` (`supervisor_id`),
  ADD KEY `redes_discipulador_id_foreign` (`discipulador_id`);

--
-- Indexes for table `transacaos`
--
ALTER TABLE `transacaos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transacaos_categoria_id_foreign` (`categoria_id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuarios_email_unique` (`email`),
  ADD KEY `usuarios_grupo_usuario_id_foreign` (`grupo_usuario_id`),
  ADD KEY `usuarios_departamento_id_foreign` (`departamento_id`),
  ADD KEY `usuarios_celula_id_foreign` (`celula_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agendas`
--
ALTER TABLE `agendas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `artigos`
--
ALTER TABLE `artigos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `categoria_transacaos`
--
ALTER TABLE `categoria_transacaos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `celulas`
--
ALTER TABLE `celulas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `contatos`
--
ALTER TABLE `contatos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `departamentos`
--
ALTER TABLE `departamentos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `galerias`
--
ALTER TABLE `galerias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `grupo_usuarios`
--
ALTER TABLE `grupo_usuarios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `imagem_galerias`
--
ALTER TABLE `imagem_galerias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `permissao`
--
ALTER TABLE `permissao`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `podcasts`
--
ALTER TABLE `podcasts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `redes`
--
ALTER TABLE `redes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `transacaos`
--
ALTER TABLE `transacaos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `celulas`
--
ALTER TABLE `celulas`
  ADD CONSTRAINT `celulas_lider_id_foreign` FOREIGN KEY (`lider_id`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `celulas_rede_id_foreign` FOREIGN KEY (`rede_id`) REFERENCES `redes` (`id`);

--
-- Limitadores para a tabela `imagem_galerias`
--
ALTER TABLE `imagem_galerias`
  ADD CONSTRAINT `imagem_galerias_galeria_id_foreign` FOREIGN KEY (`galeria_id`) REFERENCES `galerias` (`id`);

--
-- Limitadores para a tabela `permissao`
--
ALTER TABLE `permissao`
  ADD CONSTRAINT `permissao_grupo_usuario_id_foreign` FOREIGN KEY (`grupo_usuario_id`) REFERENCES `grupo_usuarios` (`id`),
  ADD CONSTRAINT `permissao_transacao_id_foreign` FOREIGN KEY (`transacao_id`) REFERENCES `transacaos` (`id`);

--
-- Limitadores para a tabela `podcasts`
--
ALTER TABLE `podcasts`
  ADD CONSTRAINT `podcasts_autor_id_foreign` FOREIGN KEY (`autor_id`) REFERENCES `usuarios` (`id`);

--
-- Limitadores para a tabela `redes`
--
ALTER TABLE `redes`
  ADD CONSTRAINT `redes_discipulador_id_foreign` FOREIGN KEY (`discipulador_id`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `redes_pastor_id_foreign` FOREIGN KEY (`pastor_id`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `redes_supervisor_id_foreign` FOREIGN KEY (`supervisor_id`) REFERENCES `usuarios` (`id`);

--
-- Limitadores para a tabela `transacaos`
--
ALTER TABLE `transacaos`
  ADD CONSTRAINT `transacaos_categoria_id_foreign` FOREIGN KEY (`categoria_id`) REFERENCES `categoria_transacaos` (`id`);

--
-- Limitadores para a tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_celula_id_foreign` FOREIGN KEY (`celula_id`) REFERENCES `celulas` (`id`),
  ADD CONSTRAINT `usuarios_departamento_id_foreign` FOREIGN KEY (`departamento_id`) REFERENCES `departamentos` (`id`),
  ADD CONSTRAINT `usuarios_grupo_usuario_id_foreign` FOREIGN KEY (`grupo_usuario_id`) REFERENCES `grupo_usuarios` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
