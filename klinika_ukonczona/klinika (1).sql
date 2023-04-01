-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 14 Mar 2023, 08:22
-- Wersja serwera: 10.4.27-MariaDB
-- Wersja PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `klinika`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `opinie`
--

CREATE TABLE `opinie` (
  `id` int(11) NOT NULL,
  `imie` varchar(20) NOT NULL,
  `usluga` varchar(20) NOT NULL,
  `opinia` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Zrzut danych tabeli `opinie`
--

INSERT INTO `opinie` (`id`, `imie`, `usluga`, `opinia`) VALUES
(1, 'Anna', 'Medycyna estetyczna', 'Super! Profesjonalne wykonanie!'),
(2, 'Basia', 'Chirurgia', 'Jestem bardzo zadowolona, lekarze nie dawali mi szans, a tutaj ja dostałam i lekarze ułatwii mi życie!'),
(3, 'Maria', 'Porady specjalistów', 'Lekarze mają ogromne doświadczenie i czuć to na każdej wizycie!'),
(4, 'Małgorzata', 'Badania specjalistyc', 'Dzięki tej klinice zdiagnozowano u mnie chorobe na wczesnym etapie, dzięki temu mogłam ją szybko pokonać!');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `rezerwacje`
--

CREATE TABLE `rezerwacje` (
  `id` int(11) NOT NULL,
  `imie` varchar(20) NOT NULL,
  `nazwisko` varchar(20) NOT NULL,
  `rok` int(4) NOT NULL,
  `telefon` varchar(12) NOT NULL,
  `cel_wizyty` varchar(30) NOT NULL,
  `uwagi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Zrzut danych tabeli `rezerwacje`
--

INSERT INTO `rezerwacje` (`id`, `imie`, `nazwisko`, `rok`, `telefon`, `cel_wizyty`, `uwagi`) VALUES
(1, 'Janek', 'Zaborowicz', 1977, '123456789', 'Badanie specjalistyczne', 'brak'),
(2, 'Janek', 'Zaborowicz', 1977, '123456789', 'Badanie specjalistyczne', 'brak'),
(3, 'Bartek', 'Jakis', 2000, '374528456', '.Medycyna estetyczna.', ''),
(4, 'Janek', 'Inny', 1950, '576946386', '.Porady specjalistów.', ''),
(5, 'Mateusz', 'ABC', 1950, '576946386', '.Chirurgia.', '');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `opinie`
--
ALTER TABLE `opinie`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `rezerwacje`
--
ALTER TABLE `rezerwacje`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `opinie`
--
ALTER TABLE `opinie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT dla tabeli `rezerwacje`
--
ALTER TABLE `rezerwacje`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
