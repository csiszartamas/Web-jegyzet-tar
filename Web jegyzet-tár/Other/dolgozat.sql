-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2022. Ápr 08. 08:53
-- Kiszolgáló verziója: 10.4.22-MariaDB
-- PHP verzió: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `dolgozat`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `j_felhasznalok`
--

CREATE TABLE `j_felhasznalok` (
  `f_id` int(11) NOT NULL,
  `f_nev` varchar(255) NOT NULL,
  `f_jelszo` varchar(255) NOT NULL,
  `f_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `j_felhasznalok`
--

INSERT INTO `j_felhasznalok` (`f_id`, `f_nev`, `f_jelszo`, `f_email`) VALUES
(1, 'thomasz', '12345', 'kistom@gmail.com'),
(2, 'kati', 'qwert', 'bkati@hotmail.com'),
(3, 'ivett', '123qwe', 'tive@freemail.hu'),
(4, 'ferix', 'xferi', 'ferix@windowslive.com'),
(5, 'karesz', 'jelszo', 'karesz@email.com'),
(6, 'dani', 'jelszo', 'dani@email.com');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `j_jegyzet`
--

CREATE TABLE `j_jegyzet` (
  `j_id` int(11) NOT NULL,
  `j_datum` date NOT NULL,
  `j_tema` varchar(255) NOT NULL,
  `j_tartalom` text NOT NULL,
  `f_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `j_jegyzet`
--

INSERT INTO `j_jegyzet` (`j_id`, `j_datum`, `j_tema`, `j_tartalom`, `f_id`) VALUES
(1, '2021-05-24', 'vers', 'El kell olvasnom Petőfi Sándor Ivás közben című versét!', 3),
(2, '2021-05-23', 'hely', 'A Stex nevű kocsmában ismertem meg Bélát', 2),
(3, '2021-05-22', 'kaja', 'só, bors, paprika, csirkemell, tárkony, hagyma, stb..', 3),
(4, '2021-05-22', 'hely', 'Corvin pláza', 1),
(5, '2021-05-24', 'idézet', 'Az igazság sokkal varázslatosabb - a szó jó és felemelő értelmében -, mint bármilyen legenda, kitalált történet vagy csoda. A tudománynak saját varázsa van, és ez a varázslat maga a valóság.', 2),
(6, '2021-04-30', 'proba', 'proba', 4),
(7, '2021-05-01', 'hely', 'Nyugati Pályaudvar, 13:30', 4),
(8, '2021-05-02', 'találkozó', 'Nyugati Pályaudvar, 17:00', 1),
(9, '2021-05-03', 'idézet', 'A valódi szépséghez és a valóság világának varázsához képest a természetfeletti varázsigék és a színpadi trükkök csak olcsó bóvlik. A valóság varázsa nem természetfeletti és nem is trükk, hanem - egészen egyszerűen - csodálatos. Csodálatos és valódi. Azért csodálatos, mert valódi.', 4),
(10, '2022-04-08', 'tema', 'tartalom', 2);

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `j_felhasznalok`
--
ALTER TABLE `j_felhasznalok`
  ADD PRIMARY KEY (`f_id`);

--
-- A tábla indexei `j_jegyzet`
--
ALTER TABLE `j_jegyzet`
  ADD PRIMARY KEY (`j_id`),
  ADD KEY `f_id` (`f_id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `j_felhasznalok`
--
ALTER TABLE `j_felhasznalok`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT a táblához `j_jegyzet`
--
ALTER TABLE `j_jegyzet`
  MODIFY `j_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Megkötések a kiírt táblákhoz
--

--
-- Megkötések a táblához `j_jegyzet`
--
ALTER TABLE `j_jegyzet`
  ADD CONSTRAINT `j_jegyzet_ibfk_1` FOREIGN KEY (`f_id`) REFERENCES `j_felhasznalok` (`f_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
