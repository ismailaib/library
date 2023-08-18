-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 13 mars 2023 à 20:44
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `library`
--

-- --------------------------------------------------------

--
-- Structure de la table `approval`
--

CREATE TABLE `approval` (
  `id_request` int(11) NOT NULL,
  `id_student` int(11) NOT NULL,
  `id_book` int(11) NOT NULL,
  `delivery_at` date NOT NULL,
  `returns_at` date NOT NULL,
  `statue` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_id` int(11) DEFAULT NULL,
  `info` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `books`
--

INSERT INTO `books` (`id`, `name`, `type_id`, `info`, `img`, `quantity`, `created_at`, `updated_at`) VALUES
(12, 'Le Petit Nicolat', 1, 'C’est un écolier et il est le héros de l\'histoire. Avec lui tout est « chouette ! ». Fils unique, il admire son père et sa mère dont il est « rien fier ». Il a un tas de copains avec qui il a formé la bande des « Vengeurs ».', 'book-0.jpg', 3, '2023-03-11 12:53:21', '2023-03-12 15:04:57'),
(13, 'Mystery', 4, 'Madame Brisby et le secret de Nimh est un livre pour enfants de 1971 de Robert C. O\'Brien, avec des illustrations de Zena Bernstein. Lauréat de la médaille Newbery de 1972, l\'histoire a été adaptée au cinéma en 1982 sous le titre Brisby et le Secret de NIMH.', 'book-1.jpg', 32, '2023-03-11 12:55:13', '2023-03-12 16:15:24'),
(14, 'Harry Potter', 1, 'Harry et ses amis doivent faire face à une nouvelle menace à Poudlard. La fameuse Chambre des secrets, bâtie plusieurs siècles plus tôt par l\'un des fondateurs de l\'école, Salazar Serpentard, aurait été rouverte par son « héritier ».', 'book-2.jpg', 1, '2023-03-11 12:56:13', '2023-03-11 12:56:13'),
(15, 'Land of Stories', 1, 'Le Pays des contes est un cycle littéraire créé par Chris Colfer dont le premier tome, Le Sortilège perdu, a été publié en 2012. En juin 2017, Chris Colfer annonce sur son compte Twitter l\'adaptation cinématographique du cycle littéraire. Il en écrira le scénario et en sera le producteur.', 'book-3.jpg', 4, '2023-03-11 12:59:54', '2023-03-12 16:09:58'),
(16, 'Steve Jobs', 6, 'Steve Jobs est la biographie autorisée de Steve Jobs, le cofondateur d\'Apple. La biographie a été écrite à la demande de Jobs par Walter Isaacson, qui avait écrit entre autres les biographies de Benjamin Franklin et Albert Einstein.', 'book-4.jpg', 3, '2023-03-11 13:01:04', '2023-03-12 17:01:10'),
(17, 'Copperfield', 6, 'The story follows the life of David Copperfield from childhood to maturity. David was born in Blunderstone, Suffolk, England, six months after the death of his father. David spends his early years in relative happiness with his loving, childish mother and their kindly housekeeper, Clara Peggotty. They call him Davy.', 'book-5.jpg', 2, '2023-03-11 13:03:14', '2023-03-11 13:03:14'),
(18, 'Washington', 6, 'George Washington est né le 22 février 1732 en Virginie. Son jour de naissance est le 22 février 1732 dans le calendrier grégorien, mais ce calendrier n\'était pas adopté par la Grande-Bretagne lorsqu\'il est né. C\'est pourquoi l\'acte de naissance indique le 11 février 1731.', 'book-6.jpg', 4, '2023-03-11 13:04:31', '2023-03-12 16:20:30'),
(19, 'Mrs. Frisby', 7, 'Madame Brisby et le secret de Nimh est un livre pour enfants de 1971 de Robert C. O\'Brien, avec des illustrations de Zena Bernstein. Lauréat de la médaille Newbery de 1972, l\'histoire a été adaptée au cinéma en 1982 sous le titre Brisby et le Secret de NIMH.', 'book-7.jpg', 2, '2023-03-11 13:05:55', '2023-03-11 13:05:55'),
(20, 'Call of the Wild', 2, 'Buck est un chien au grand coeur dont la vie heureuse est bouleversée lorsqu\'il est soudainement arraché de sa maison californienne et envoyé au Yukon dans les années 1890.', 'book-8.jpg', 5, '2023-03-11 13:09:39', '2023-03-12 15:08:55'),
(21, 'Mobydick', 8, 'Moby-Dick1 (titre original en anglais : Moby-Dick; or, The Whale ; « Moby-Dick ; ou, le Cachalot ») est un roman de l\'écrivain américain Herman Melville paru en 1851, dont le titre provient du surnom donné à un grand cachalot au centre de l\'intrigue.', 'book-9.jpg', 2, '2023-03-11 13:10:58', '2023-03-11 13:10:58'),
(22, 'Empire of pain', 3, 'Empire of Pain chronicles the multiple investigations of the Sacklers and their company, and the scorched-earth legal tactics that the family has used to evade accountability.', 'book-10.jpg', 10, '2023-03-11 13:12:18', '2023-03-11 13:12:18'),
(23, 'Bad Blood', 3, 'Bad Blood (2018) is the harrowing inside story of a how a tech start-up rooted in Silicon Valley\'s fake-it-till-you-make-it culture risked the lives of millions with a blood-testing device that proved too good to be true.', 'book-11.jpg', 3, '2023-03-11 13:14:18', '2023-03-11 13:14:18'),
(24, 'The Red Part', 3, 'Bad Blood (2018) is the harrowing inside story of a how a tech start-up rooted in Silicon Valley\'s fake-it-till-you-make-it culture risked the lives of millions with a blood-testing device that proved too good to be true.', 'book-12.jpg', 5, '2023-03-11 13:15:02', '2023-03-12 16:20:38'),
(25, 'Invisible Man', 4, 'The story is a bildungsroman that tells of a naive and idealistic (and, significantly, nameless) Southern Black youth who goes to Harlem, joins the fight against white oppression, and ends up ignored by his fellow Blacks as well as by whites.', 'book-13.jpg', 4, '2023-03-11 13:17:05', '2023-03-11 13:17:05'),
(26, 'Dracula', 4, 'Dracula illustre ni plus ni moins que l\'éternelle lutte entre le Bien et le Mal, entre Dieu et le Diable et ce roman plante en profondeur le mythe d\'une humanité partagée entre les mortels et les immortels.', 'book-14.jpg', 2, '2023-03-11 13:18:03', '2023-03-11 13:18:03'),
(27, 'The Trial', 3, 'One of his best known works, it tells the story of Josef K., a man arrested and prosecuted by a remote, inaccessible authority, with the nature of his crime revealed neither to him nor to the reader.', 'book-15.jpg', 1, '2023-03-11 13:19:12', '2023-03-11 13:19:12'),
(28, 'A.Q.O.T.F', 5, 'All Quiet on the Western Front is straightforward and the story, characters, structure are riveting, but not overly complex. In fact, the straightforwardness of the book reflects its subject matter: real people, real prose, primary colors for primary emotions.', 'book-16.jpg', 4, '2023-03-11 13:21:14', '2023-03-11 13:21:14'),
(29, 'Catch-22', 5, 'Catch-22, satirical novel by American writer Joseph Heller, published in 1961. The work centres on Captain John Yossarian, an American bombardier stationed on a Mediterranean island during World War II, and chronicles his desperate attempts to stay alive.', 'book-17.jpg', 4, '2023-03-11 13:22:08', '2023-03-12 16:20:45'),
(30, 'Le Petit Prince', 1, 'Les aventures du Petit Prince commencent sur son astéroïde, nommé astéroïde B612, où un jour pousse une rose. Le Petit Prince devient l\'ami de cette rose fragile et belle. Il décide ensuite de visiter d\'autres mondes, car il s\'ennuyait sur sa petite planète.', 'book-18.jpg', 5, '2023-03-11 13:23:17', '2023-03-11 18:25:14');

-- --------------------------------------------------------

--
-- Structure de la table `command`
--

CREATE TABLE `command` (
  `id_request` int(11) NOT NULL,
  `id_student` int(11) NOT NULL,
  `id_book` int(11) NOT NULL,
  `Command_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `command`
--

INSERT INTO `command` (`id_request`, `id_student`, `id_book`, `Command_at`) VALUES
(4, 1, 13, '2023-03-12 16:15:25'),
(5, 1, 18, '2023-03-12 16:20:30'),
(6, 1, 24, '2023-03-12 16:20:38'),
(7, 1, 29, '2023-03-12 16:20:45'),
(8, 1, 16, '2023-03-12 17:01:10');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(13, '2014_10_12_000000_create_library_table', 1),
(14, '2014_10_12_000000_create_users_table', 1),
(15, '2014_10_12_100000_create_password_resets_table', 1),
(16, '2019_08_19_000000_create_failed_jobs_table', 1),
(18, '2014_10_12_000000_create_books_table', 2),
(19, '2019_12_14_000001_create_personal_access_tokens_table', 2),
(20, '2023_03_12_170222_add_timestamps_to_command_table', 3),
(21, '2023_03_12_171131_remove_timestamps_from_command_table', 4);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `status`
--

INSERT INTO `status` (`id`, `name`) VALUES
(1, 'Delivered'),
(2, 'waiting'),
(3, 'Exeption'),
(4, 'Decline');

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

CREATE TABLE `type` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `type`
--

INSERT INTO `type` (`id`, `name`) VALUES
(1, 'Adventure stories'),
(2, 'Classics'),
(3, 'Crime'),
(4, 'Horror'),
(5, 'War'),
(6, 'Biography'),
(7, 'Short stories'),
(8, 'Fantasy'),
(9, 'Comedy');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isAdmin` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `isAdmin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ismail', 'ismailaitbouhmad@gmail.com', NULL, '$2y$10$1ejaAOnOyXiqfoi.vqsqbunKowPudeGecLY.RyFRjMCEtgp8x5aea', 0, NULL, '2023-01-24 14:21:10', '2023-03-11 18:15:56'),
(3, 'admin', 'admin@gmail.com', NULL, '$2y$10$fyVhWqL8iKCPaVRzFYWu3.DuX0lzJaED2R8D.kCVi5yqVTNqm7JfC', 1, NULL, '2023-01-24 14:24:34', '2023-01-24 14:24:34'),
(4, 'tester', 'Tester@Gmail.Com', NULL, '$2y$10$bSsBSAWbNrP6qj2ibRkXZO3epywZ2esoxHh1pXfdlQK8hdM8uPOeu', 0, NULL, '2023-01-24 15:33:30', '2023-03-09 13:16:09'),
(7, 'student1', 'Student1@Gmail.Com', NULL, '$2y$10$iqXqjs2LYTwVCVBzAE5wjez6V8tn70QUGBEgL4HbgGo6VhFZOCn6W', 0, NULL, '2023-03-09 12:15:49', '2023-03-09 15:08:42'),
(9, 'student3', 'Student3@Gmail.Com', NULL, '$2y$10$ZQsmmcfuCBSyVaywB2kNoO7JtUDVkFcS9NMJSZtQN0U2fNL6deUFG', 0, NULL, '2023-03-09 15:08:04', '2023-03-11 19:44:55'),
(10, 'student4', 'Student4@Gmail.Com', NULL, '$2y$10$zRkHlyEMSkm70D3TM7yqF.C7sOqcaD/u/8R7P0Bkkbpqfd97P3mwq', 0, NULL, '2023-03-09 15:55:29', '2023-03-10 20:44:53'),
(14, 'student2', 'Student2@Gmail.Com', NULL, '$2y$10$d7G3eaT8QTiMgaVGOCIa4Okyu7f/rfk0uO6hqp1ql8V/MWhhQe1hm', 0, NULL, '2023-03-10 20:46:48', '2023-03-11 19:45:11'),
(16, 'student5', 'Student5@Gmail.Com', NULL, '$2y$10$ntWnQuDbW6FIo1GWepuBpOgblSpzwkoTuAhsSEgQgPB37.fsCTyKm', 0, NULL, '2023-03-10 21:21:23', '2023-03-11 19:45:40');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `command`
--
ALTER TABLE `command`
  ADD PRIMARY KEY (`id_request`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT pour la table `command`
--
ALTER TABLE `command`
  MODIFY `id_request` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `type`
--
ALTER TABLE `type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
