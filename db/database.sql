-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 10, 2017 at 09:35 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bibliography_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `bibliography`
--

CREATE TABLE `bibliography` (
  `id` int(11) NOT NULL,
  `bibliographyName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `textSummary` longtext COLLATE utf8_unicode_ci,
  `status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bibliography`
--

INSERT INTO `bibliography` (`id`, `bibliographyName`, `textSummary`, `status`, `user_id`) VALUES
(1, 'Databases Bibliography', 'Bibliography of Datsbases Books', 'Private', 7),
(2, 'Web Development Bibliography', 'Bibliography of Web Development Books', 'Private', 7),
(3, 'Mechanical Engineering Bibliography', 'Books on Mechanical Engineering', 'private', 9),
(4, 'Electrical Engineering Bibliography', 'Books on Electrical Engineering', 'Public', 8),
(5, 'Java Bibliography', 'Java Books and articles', 'Public', 7),
(6, 'Network and Communications Bibliography', 'Network and Communications Books and Articles', 'Public', 7),
(7, 'Science Bibliography', 'Science Books and Articles', 'Public', 7);

-- --------------------------------------------------------

--
-- Table structure for table `bibliography_reference`
--

CREATE TABLE `bibliography_reference` (
  `bibliography_id` int(11) NOT NULL,
  `reference_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bibliography_reference`
--

INSERT INTO `bibliography_reference` (`bibliography_id`, `reference_id`) VALUES
(1, 2),
(2, 2),
(1, 3),
(2, 3),
(3, 3),
(2, 5),
(1, 6),
(2, 6),
(3, 7),
(4, 7),
(3, 8),
(3, 14),
(1, 16),
(7, 17);

-- --------------------------------------------------------

--
-- Table structure for table `migration_versions`
--

CREATE TABLE `migration_versions` (
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migration_versions`
--

INSERT INTO `migration_versions` (`version`) VALUES
('20170501113651'),
('20170505210946'),
('20170505223532'),
('20170505223924'),
('20170505224018'),
('20170506081736'),
('20170506083541'),
('20170506083845'),
('20170506113541'),
('20170506124509'),
('20170506151100'),
('20170506154623'),
('20170506172513'),
('20170507071940');

-- --------------------------------------------------------

--
-- Table structure for table `reference`
--

CREATE TABLE `reference` (
  `id` int(11) NOT NULL,
  `nameOfAuthor` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `yearPublished` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `titleOfReference` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cityPublished` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `publisher` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pagesUsed` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `textSummary` longtext COLLATE utf8_unicode_ci,
  `status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dateCreated` datetime DEFAULT NULL,
  `dateLastEdited` datetime DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `reference`
--

INSERT INTO `reference` (`id`, `nameOfAuthor`, `yearPublished`, `titleOfReference`, `cityPublished`, `publisher`, `pagesUsed`, `textSummary`, `status`, `dateCreated`, `dateLastEdited`, `user_id`) VALUES
(1, 'J Clarke', '2014', 'Databases & SQL', 'New York', 'Green Publishing', '44-48', 'Book on Databases & SQL', 'accepted', '2017-05-01 12:54:24', '2017-05-01 12:54:24', 7),
(2, 'C McComish', '2015', 'Symfony 3', 'New York', 'Green Publishing', '48-54', 'Book about Symfony 3', 'pending', '2017-05-01 12:57:11', '2017-05-01 12:57:11', 8),
(3, 'Moore, O', '2001', 'Databases', 'Dublin', 'Global Publishing', '201-205', '', 'Pending', NULL, NULL, 7),
(4, 'Daly, H', '2011', 'Java - Software Development', 'New York', 'Global Publishing', '404 - 408', '', 'Accepted', NULL, NULL, 7),
(5, 'Hearty, L', '2014', 'Symfony 3', 'New York', 'Global Publishing', '102 - 201', '', 'Public', NULL, NULL, 7),
(6, 'Lewis, G', '201', '3D CAD', 'New York', 'Jones Publishing', '45', 'fdsjk dsjk', 'Public', NULL, NULL, 9),
(7, 'O\'Hare, B', '2014', 'Civil Engineering', 'Dublin', 'Jones Publishing', '105 - 140', 'djskf', 'Public', NULL, NULL, 9),
(8, 'Kennan, C, Rafferty, L', '2009', 'Mechanical Engineering', 'Rathfriland', 'Global Publishing', '201-205', 'Mostly about Mechanical Engineering', 'Public', NULL, NULL, 9),
(9, 'Lennon, S', '2014', 'Introduction to Software Development', 'Limerick', 'Global Publisher', '12', '12', 'Public', NULL, NULL, 7),
(10, 'Burns, G', '2005', 'Introduction to Mechanical Engineering ', 'Cork', 'Global Publisher', '23', '123', 'Public', NULL, NULL, 7),
(11, 'Donnan, P', '2014', 'Mechanical Engineering', 'New York', 'Global Publisher', '87', '89784', 'Pending', NULL, NULL, 7),
(12, 'Connors, D', '2011', 'Database', 'Newry', 'Global Publisher', '312', '312', 'Pending', NULL, NULL, 7),
(13, 'Murphy, B', '2001', 'Symfony 2', 'Belfast', 'Jones Publishing', '31', '231', 'Public', NULL, NULL, 7),
(14, 'Monaghan, G', '2001', 'Learn HTML, & CSS', 'Newry', 'Jones Publishing', '12', '1', 'Public', NULL, NULL, 7),
(15, 'Green, J', '2013', 'Web Dev with PHP', 'Newry', 'Jones Publishing', '12', '12', 'Public', NULL, NULL, 7),
(16, 'Laffin, J', '2005', 'MySql', 'Newry', 'Global Publishing', '6-9', '7', 'Accepted', NULL, NULL, 7),
(17, 'McComish, K', '2005', 'Science', 'Lisburn', 'Global Publishing', '456-460', 'Book on Science', 'Public', NULL, NULL, 7);

-- --------------------------------------------------------

--
-- Table structure for table `reference_tag`
--

CREATE TABLE `reference_tag` (
  `reference_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `reference_tag`
--

INSERT INTO `reference_tag` (`reference_id`, `tag_id`) VALUES
(1, 1),
(1, 3),
(1, 5),
(2, 1),
(3, 2),
(6, 2),
(6, 3),
(6, 4),
(6, 5),
(7, 9),
(8, 9),
(9, 1),
(9, 2),
(9, 3),
(9, 4),
(9, 5),
(14, 6),
(15, 6),
(16, 1),
(17, 11);

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

CREATE TABLE `tag` (
  `id` int(11) NOT NULL,
  `tagName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noOfVotes` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tag`
--

INSERT INTO `tag` (`id`, `tagName`, `status`, `noOfVotes`, `user_id`) VALUES
(1, 'Web Development', 'Accepted', 5, NULL),
(2, 'Smyfony', 'Accepted', 15, 7),
(3, 'PHP', 'Accepted', 0, NULL),
(4, 'Databases', 'Proposed', 53, 8),
(5, 'Java', 'Accepted', 5, 7),
(6, 'Proposed', 'Proposed', 16, 7),
(7, 'Literature', 'Accepted', 0, NULL),
(8, 'Polymers', 'Proposed', 1, NULL),
(9, 'Mechanical Engineering', 'Accepted', 6, 9),
(10, 'Networks', 'Proposed', 2, NULL),
(11, 'Science', 'Proposed', 0, NULL),
(12, 'Communications', 'Proposed', 1, NULL),
(13, 'Chemical Engineering', 'Accepted', 0, 7),
(14, 'Electrical Engineering', 'Accepted', 0, 7);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:json_array)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `roles`) VALUES
(7, 'lauramccomish@hotmail.com', '$2y$13$e7uaMlT3gB2S1wnVBb5WQeGwv26FpL6br40yhMJbOdrHRZpGukUoe', '["ROLE_ADMIN","ROLE_LECTURER"]'),
(8, 'gemmamccomish@hotmail.com', '$2y$13$9zTnypnh34hzB9UYwmXiieTOOEPB6P4NBkGa.sVqdxAiuavYDI.Cy', '["ROLE_LECTURER"]'),
(9, 'marymccomish@hotmail.com', '$2y$13$CckqhpMqCeabZ0CcMnYbJ.ePfYz3frJkF4YAUWbKwa31JihmtMXUy', '["ROLE_STUDENT"]'),
(10, 'johnnymccomish@hotmail.com', '$2y$13$V4yBel8SqRydUkUJ34kate58KjisVQIPHhWp/IigsRRSV8w4k41m6', '["ROLE_ADMIN"]'),
(12, 'lauramccomish1@hotmail.com', '$2y$13$XfgF3Cmlf5P/mB4tihs4fO1y9YlcMxl7xs4myQ7s4A3gx1OTon9r2', '["ROLE_ADMIN"]'),
(13, 'gemmamccomish2@hotmail.com', '$2y$13$ka60WxK9c2vuCa9Ahqo81OSpN6xXeNik42APO9Zjz4cxUdqboX6y.', '["ROLE_ADMIN","ROLE_LECTURER","ROLE_STUDENT"]'),
(14, 'gemmamccomish4@hotmail.com', '$2y$13$Rofc9PmdwJVnXFJCFiS24eLeP.7N7HKveJ8UeORc2THnvI4P1DvyS', '["ROLE_STUDENT"]'),
(15, 'colummccomish@hotmail.com', '$2y$13$6UlzmgJdykW0d8.kg0Xq/eiIA3Lt0xxDB7.W2EqugG.Vp/QbjM7K6', '{"0":"ROLE_LECTURER","2":"ROLE_ADMIN","3":"ROLE_STUDENT"}');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bibliography`
--
ALTER TABLE `bibliography`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_8C4FE168A76ED395` (`user_id`);

--
-- Indexes for table `bibliography_reference`
--
ALTER TABLE `bibliography_reference`
  ADD PRIMARY KEY (`reference_id`,`bibliography_id`),
  ADD KEY `IDX_B34969E58183C188` (`bibliography_id`),
  ADD KEY `IDX_B34969E51645DEA9` (`reference_id`);

--
-- Indexes for table `migration_versions`
--
ALTER TABLE `migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `reference`
--
ALTER TABLE `reference`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_AEA34913A76ED395` (`user_id`);

--
-- Indexes for table `reference_tag`
--
ALTER TABLE `reference_tag`
  ADD PRIMARY KEY (`reference_id`,`tag_id`),
  ADD KEY `IDX_C74181821645DEA9` (`reference_id`),
  ADD KEY `IDX_C7418182BAD26311` (`tag_id`);

--
-- Indexes for table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_389B783A76ED395` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bibliography`
--
ALTER TABLE `bibliography`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `reference`
--
ALTER TABLE `reference`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `tag`
--
ALTER TABLE `tag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `bibliography`
--
ALTER TABLE `bibliography`
  ADD CONSTRAINT `FK_8C4FE168A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `bibliography_reference`
--
ALTER TABLE `bibliography_reference`
  ADD CONSTRAINT `FK_B34969E51645DEA9` FOREIGN KEY (`reference_id`) REFERENCES `reference` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_B34969E58183C188` FOREIGN KEY (`bibliography_id`) REFERENCES `bibliography` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reference`
--
ALTER TABLE `reference`
  ADD CONSTRAINT `FK_AEA34913A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `reference_tag`
--
ALTER TABLE `reference_tag`
  ADD CONSTRAINT `FK_C74181821645DEA9` FOREIGN KEY (`reference_id`) REFERENCES `reference` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_C7418182BAD26311` FOREIGN KEY (`tag_id`) REFERENCES `tag` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tag`
--
ALTER TABLE `tag`
  ADD CONSTRAINT `FK_389B783A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
