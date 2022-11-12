-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Creato il: Nov 01, 2022 alle 10:24
-- Versione del server: 8.0.29
-- Versione PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `universita`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `card`
--

CREATE TABLE `card` (
  `numero` int NOT NULL,
  `appartenente_a` int NOT NULL,
  `tipologia` enum('gold','platinum','base') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dump dei dati per la tabella `card`
--

INSERT INTO `card` (`numero`, `appartenente_a`, `tipologia`) VALUES
(1, 1, 'gold');

-- --------------------------------------------------------

--
-- Struttura della tabella `corso`
--

CREATE TABLE `corso` (
  `id` int NOT NULL,
  `denominazione` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `semestre` enum('primo','secondo') NOT NULL,
  `crediti` int NOT NULL,
  `tenuto_da` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dump dei dati per la tabella `corso`
--

INSERT INTO `corso` (`id`, `denominazione`, `semestre`, `crediti`, `tenuto_da`) VALUES
(1, 'Fisica I', 'primo', 12, 3),
(2, 'Fisica II', 'secondo', 12, 3),
(5, 'Psicologia I', 'primo', 6, 4),
(6, 'Psicologia applicata all\'ingegneria', 'secondo', 12, 4);

-- --------------------------------------------------------

--
-- Struttura della tabella `esame`
--

CREATE TABLE `esame` (
  `id` int NOT NULL,
  `esame_di` int NOT NULL,
  `sostenuto_da` int NOT NULL,
  `valutazione` int DEFAULT NULL,
  `data_esame` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dump dei dati per la tabella `esame`
--

INSERT INTO `esame` (`id`, `esame_di`, `sostenuto_da`, `valutazione`, `data_esame`) VALUES
(1, 1, 1, 24, '2022-10-27'),
(2, 2, 2, NULL, '2022-10-27'),
(3, 1, 2, 18, '2021-10-12');

-- --------------------------------------------------------

--
-- Struttura della tabella `frequenza`
--

CREATE TABLE `frequenza` (
  `id` int NOT NULL,
  `studente` int NOT NULL,
  `lezione` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dump dei dati per la tabella `frequenza`
--

INSERT INTO `frequenza` (`id`, `studente`, `lezione`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 3);

-- --------------------------------------------------------

--
-- Struttura della tabella `lezione`
--

CREATE TABLE `lezione` (
  `id` int NOT NULL,
  `data` date NOT NULL,
  `ora_inizio` time NOT NULL,
  `ora_fine` time NOT NULL,
  `corso_appartenenza` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dump dei dati per la tabella `lezione`
--

INSERT INTO `lezione` (`id`, `data`, `ora_inizio`, `ora_fine`, `corso_appartenenza`) VALUES
(1, '2022-10-19', '08:00:00', '10:00:00', 1),
(2, '2022-10-26', '10:00:00', '12:00:00', 1),
(3, '2022-10-18', '09:00:00', '11:00:00', 2),
(4, '2022-10-25', '11:00:00', '13:00:00', 2);

-- --------------------------------------------------------

--
-- Struttura della tabella `parentela`
--

CREATE TABLE `parentela` (
  `id` int NOT NULL,
  `parente1` int NOT NULL,
  `parente2` int NOT NULL,
  `grado` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `persona`
--

CREATE TABLE `persona` (
  `id` int NOT NULL,
  `nome` varchar(32) NOT NULL,
  `cognome` varchar(32) NOT NULL,
  `data_nascita` date NOT NULL,
  `sesso` enum('M','F') NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dump dei dati per la tabella `persona`
--

INSERT INTO `persona` (`id`, `nome`, `cognome`, `data_nascita`, `sesso`, `username`, `password`) VALUES
(1, 'Gino', 'Rossi', '2000-12-08', 'M', 'g', 'r'),
(2, 'Laura', 'Verdi', '1999-02-11', 'F', 'l', 'v'),
(3, 'Albert', 'Einstein', '1965-08-12', 'M', 'a', 'e'),
(4, 'Siegmund', 'Freud', '1961-01-11', 'M', 's', 'f');

-- --------------------------------------------------------

--
-- Struttura della tabella `professore`
--

CREATE TABLE `professore` (
  `id_professore` int NOT NULL,
  `tipologia` enum('ordinario','associato') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dump dei dati per la tabella `professore`
--

INSERT INTO `professore` (`id_professore`, `tipologia`) VALUES
(3, 'ordinario'),
(4, 'associato');

-- --------------------------------------------------------

--
-- Struttura della tabella `studente`
--

CREATE TABLE `studente` (
  `id_studente` int NOT NULL,
  `residenza` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dump dei dati per la tabella `studente`
--

INSERT INTO `studente` (`id_studente`, `residenza`) VALUES
(1, 'Gardone VT'),
(2, 'Sarezzo');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `card`
--
ALTER TABLE `card`
  ADD PRIMARY KEY (`numero`),
  ADD KEY `appartenente_a` (`appartenente_a`);

--
-- Indici per le tabelle `corso`
--
ALTER TABLE `corso`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tenuto_da` (`tenuto_da`);

--
-- Indici per le tabelle `esame`
--
ALTER TABLE `esame`
  ADD PRIMARY KEY (`id`),
  ADD KEY `esame_di` (`esame_di`),
  ADD KEY `sostenuto_da` (`sostenuto_da`);

--
-- Indici per le tabelle `frequenza`
--
ALTER TABLE `frequenza`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lezione` (`lezione`),
  ADD KEY `studente` (`studente`);

--
-- Indici per le tabelle `lezione`
--
ALTER TABLE `lezione`
  ADD PRIMARY KEY (`id`),
  ADD KEY `corso_appartenenza` (`corso_appartenenza`);

--
-- Indici per le tabelle `parentela`
--
ALTER TABLE `parentela`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parente1` (`parente1`),
  ADD KEY `parentela_ibfk_2` (`parente2`);

--
-- Indici per le tabelle `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indici per le tabelle `professore`
--
ALTER TABLE `professore`
  ADD PRIMARY KEY (`id_professore`);

--
-- Indici per le tabelle `studente`
--
ALTER TABLE `studente`
  ADD PRIMARY KEY (`id_studente`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `card`
--
ALTER TABLE `card`
  MODIFY `numero` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT per la tabella `corso`
--
ALTER TABLE `corso`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT per la tabella `esame`
--
ALTER TABLE `esame`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT per la tabella `frequenza`
--
ALTER TABLE `frequenza`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT per la tabella `lezione`
--
ALTER TABLE `lezione`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT per la tabella `parentela`
--
ALTER TABLE `parentela`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `persona`
--
ALTER TABLE `persona`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `card`
--
ALTER TABLE `card`
  ADD CONSTRAINT `card_ibfk_1` FOREIGN KEY (`appartenente_a`) REFERENCES `studente` (`id_studente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limiti per la tabella `corso`
--
ALTER TABLE `corso`
  ADD CONSTRAINT `corso_ibfk_1` FOREIGN KEY (`tenuto_da`) REFERENCES `professore` (`id_professore`) ON DELETE RESTRICT ON UPDATE CASCADE;

--
-- Limiti per la tabella `esame`
--
ALTER TABLE `esame`
  ADD CONSTRAINT `esame_ibfk_1` FOREIGN KEY (`esame_di`) REFERENCES `corso` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE,
  ADD CONSTRAINT `esame_ibfk_2` FOREIGN KEY (`sostenuto_da`) REFERENCES `studente` (`id_studente`) ON DELETE RESTRICT ON UPDATE CASCADE;

--
-- Limiti per la tabella `frequenza`
--
ALTER TABLE `frequenza`
  ADD CONSTRAINT `frequenza_ibfk_1` FOREIGN KEY (`lezione`) REFERENCES `lezione` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `frequenza_ibfk_2` FOREIGN KEY (`studente`) REFERENCES `studente` (`id_studente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limiti per la tabella `lezione`
--
ALTER TABLE `lezione`
  ADD CONSTRAINT `lezione_ibfk_1` FOREIGN KEY (`corso_appartenenza`) REFERENCES `corso` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE;

--
-- Limiti per la tabella `parentela`
--
ALTER TABLE `parentela`
  ADD CONSTRAINT `parentela_ibfk_1` FOREIGN KEY (`parente1`) REFERENCES `persona` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `parentela_ibfk_2` FOREIGN KEY (`parente2`) REFERENCES `persona` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limiti per la tabella `professore`
--
ALTER TABLE `professore`
  ADD CONSTRAINT `professore_ibfk_1` FOREIGN KEY (`id_professore`) REFERENCES `persona` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limiti per la tabella `studente`
--
ALTER TABLE `studente`
  ADD CONSTRAINT `studente_ibfk_1` FOREIGN KEY (`id_studente`) REFERENCES `persona` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
