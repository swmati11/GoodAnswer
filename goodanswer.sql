-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas generowania: 02 Maj 2016, 16:20
-- Wersja serwera: 10.1.10-MariaDB
-- Wersja PHP: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `goodanswer`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ga_errors`
--

CREATE TABLE `ga_errors` (
  `maintenance_error` longtext COLLATE utf8_polish_ci NOT NULL,
  `maintenance_power` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `ga_errors`
--

INSERT INTO `ga_errors` (`maintenance_error`, `maintenance_power`) VALUES
('Na serwerze prowadzone sa prace techniczne! Przepraszamy za utrudnienia i prosimy o wizyte w innym terminie!', 'false');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ga_head_table`
--

CREATE TABLE `ga_head_table` (
  `ga_id` text COLLATE utf8_polish_ci NOT NULL,
  `ga_title` text COLLATE utf8_polish_ci NOT NULL,
  `ga_theme` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `ga_head_table`
--

INSERT INTO `ga_head_table` (`ga_id`, `ga_title`, `ga_theme`) VALUES
('', 'Forum Demo', '0'),
('', 'Forum Demo', '1'),
('index', 'Demo Forum', 'Default'),
('maintenance', 'Demo Forum - Prace Techniczne', 'Default');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ga_question`
--

CREATE TABLE `ga_question` (
  `ga_id` int(4) NOT NULL,
  `ga_topic` varchar(255) COLLATE utf8_polish_ci NOT NULL DEFAULT '',
  `ga_all` longtext COLLATE utf8_polish_ci NOT NULL,
  `ga_author` varchar(65) COLLATE utf8_polish_ci NOT NULL DEFAULT '',
  `ga_date` datetime NOT NULL,
  `ga_view` int(4) NOT NULL DEFAULT '0',
  `ga_reply` int(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `ga_question`
--

INSERT INTO `ga_question` (`ga_id`, `ga_topic`, `ga_all`, `ga_author`, `ga_date`, `ga_view`, `ga_reply`) VALUES
(1, 'Pierwszy temat na forum!', 'Witajcie! <br />\r\nTo jest pierwszy temat na tym forum!<br />\r\nPozdrawiam!', 'GoodAnswer', '2016-04-30 10:17:05', 0, 0),
(2, 'Hell', 'Hello my friend! xD', 'GoodAnswer', '2016-04-30 12:00:00', 0, 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `id` int(11) NOT NULL,
  `user` text COLLATE utf8_polish_ci NOT NULL,
  `pass` text COLLATE utf8_polish_ci NOT NULL,
  `email` text COLLATE utf8_polish_ci NOT NULL,
  `permission` int(11) NOT NULL,
  `points` bigint(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`id`, `user`, `pass`, `email`, `permission`, `points`) VALUES
(1, 'adam', 'qwerty', 'adam@gmail.com', 0, 0),
(2, 'marek', 'asdfg', 'marek@gmail.com', 0, 0),
(3, 'anna', 'zxcvb', 'anna@gmail.com', 0, 0),
(4, 'andrzej', 'asdfg', 'andrzej@gmail.com', 0, 0),
(5, 'justyna', 'yuiop', 'justyna@gmail.com', 0, 0),
(6, 'kasia', 'hjkkl', 'kasia@gmail.com', 0, 0),
(7, 'beata', 'fgthj', 'beata@gmail.com', 0, 0),
(8, 'jakub', 'ertyu', 'jakub@gmail.com', 0, 0),
(9, 'janusz', 'cvbnm', 'janusz@gmail.com', 0, 0),
(10, 'roman', 'dfghj', 'roman@gmail.com', 0, 0);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `ga_question`
--
ALTER TABLE `ga_question`
  ADD PRIMARY KEY (`ga_id`);

--
-- Indexes for table `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `ga_question`
--
ALTER TABLE `ga_question`
  MODIFY `ga_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
