-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15-Maio-2023 às 13:11
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `fjs`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `brand`
--

CREATE TABLE `brand` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `brand`
--

INSERT INTO `brand` (`ID`, `Name`) VALUES
(1, 'Adidas'),
(2, 'Nike'),
(3, 'Puma'),
(4, 'New Balance'),
(5, 'Hummel'),
(6, 'Kelme'),
(7, 'Lacatoni'),
(8, 'Kappa'),
(9, 'Macron'),
(10, 'Castore'),
(11, 'Joma'),
(12, 'Mizuno'),
(13, 'EA7'),
(14, 'In House');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cart`
--

CREATE TABLE `cart` (
  `ID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `Personalization` varchar(100) DEFAULT NULL,
  `shirtNumber` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `club`
--

CREATE TABLE `club` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `ImagePath` varchar(100) NOT NULL,
  `IDLeague` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `club`
--

INSERT INTO `club` (`ID`, `Name`, `ImagePath`, `IDLeague`) VALUES
(1, 'Benfica', 'images/logoClubs/portugal/benfica.png', 6),
(2, 'Boavista', 'images/logoClubs/portugal/boavista.png', 6),
(3, 'Braga', 'images/logoClubs/portugal/braga.png', 6),
(4, 'Chaves', 'images/logoClubs/portugal/chaves.png', 6),
(5, 'Estoril', 'images/logoClubs/portugal/estoril.png', 6),
(6, 'Gil Vicente', 'images/logoClubs/portugal/gilvicente.png', 6),
(7, 'Vitória de Guimarães', 'images/logoClubs/portugal/guimaraes.png', 6),
(8, 'Porto', 'images/logoClubs/portugal/porto.png', 6),
(9, 'Sporting', 'images/logoClubs/portugal/sporting.png', 6),
(10, 'Arsenal', 'images/logoClubs/england/arsenal.png', 1),
(11, 'Chelsea', 'images/logoClubs/england/chelsea.png', 1),
(12, 'Liverpool', 'images/logoClubs/england/liverpool.png', 1),
(13, 'Manchester City', 'images/logoClubs/england/manchestercity.png', 1),
(14, 'Manchester United', 'images/logoClubs/england/manchesterUnited.png', 1),
(15, 'Tottenham', 'images/logoClubs/england/tottenham.png', 1),
(16, 'Atlético Madrid', 'images/logoClubs/spain/atleticoMadrid.png', 2),
(17, 'Barcelona', 'images\\logoClubs\\spain\\fCBarcelona.png', 2),
(18, 'Real Madrid', 'images\\logoClubs\\spain\\realMadridCF.png', 2),
(19, 'Sevilla FC', 'images/logoClubs/spain/sevillaFC.png', 2),
(20, 'Valência', 'images\\logoClubs\\spain\\valenciacf.png', 2),
(21, 'Villarreal', 'images/logoClubs/spain/villarrealCF.png', 2),
(22, 'Bayer 04 Leverkusen', 'images/logoClubs/germany/bayer04Leverkusen.png', 3),
(23, 'Bayern München ', 'images\\logoClubs\\germany\\bayernMunchen.png', 3),
(24, 'Borussia Dortmund', 'images/logoClubs/germany/dortmund.png', 3),
(25, 'Red Bull Leipzig', 'images/logoClubs/germany/rBLeipzig.png', 3),
(26, 'Schalke 04', 'images/logoClubs/germany/schalke04.png', 3),
(27, 'Union Berlin', 'images/logoClubs/germany/unionBerlin.png', 3),
(28, 'AC Milan', 'images/logoClubs/italy/aCMilan.png', 4),
(29, 'Inter ', 'images/logoClubs/italy/internazionaleMilano.png', 4),
(30, 'Juventus', 'images/logoClubs/italy/juventus.png', 4),
(31, 'Lazio', 'images/logoClubs/italy/lazio.png', 4),
(32, 'Napoli', 'images\\logoClubs\\italy\\napoli.png', 4),
(33, 'Roma', 'images/logoClubs/italy/roma.png', 4),
(34, 'Mónaco', 'images/logoClubs/france/aSMonaco.png', 5),
(35, 'Lille', 'images/logoClubs/france/lille.png', 5),
(36, 'Olympique Lyonnais', 'images/logoClubs/france/olympiqueLyonnais.png', 5),
(37, 'Olympique Marseille', 'images\\logoClubs\\france\\olympiqueMarseille.png', 5),
(38, 'Paris Saint Germain', 'images/logoClubs/france/parisSaintGermain.png', 5),
(39, 'Stade Rennais FC', 'images/logoClubs/france/stadeRennaisFC.png', 5),
(40, 'Argentina', 'images\\logoClubs\\nationalTeams\\argentina.png', 7),
(41, 'Belgium', 'images\\logoClubs\\nationalTeams\\belgium.png', 7),
(42, 'Brazil', 'images\\logoClubs\\nationalTeams\\Brazil.png', 7),
(43, 'England', 'images\\logoClubs\\nationalTeams\\england.png', 7),
(44, 'France', 'images\\logoClubs\\nationalTeams\\france.png', 7),
(45, 'Germany', 'images\\logoClubs\\nationalTeams\\germany.png', 7),
(46, 'Italy', 'images\\logoClubs\\nationalTeams\\italy.png', 7),
(47, 'Netherlands', 'images\\logoClubs\\nationalTeams\\netherlands.png', 7),
(48, 'Portugal', 'images\\logoClubs\\nationalTeams\\portugal.png', 7),
(49, 'Spain', 'images\\logoClubs\\nationalTeams\\spain.png', 7),
(50, 'Ajax', 'images\\logoClubs\\other\\ajaxAmsterdam.png', 8),
(51, 'Al Nassr', 'images\\logoClubs\\other\\AlNassr.png', 8),
(52, 'Boca Juniors', 'images\\logoClubs\\other\\bocaJuniors.png', 8),
(53, 'Celtic', 'images\\logoClubs\\other\\celticFC.png', 8),
(54, 'Club Brugge', 'images\\logoClubs\\other\\clubBrugge.png', 8),
(55, 'Flamengo', 'images\\logoClubs\\other\\Flamengo.png', 8),
(57, 'Palmeiras', 'images\\logoClubs\\other\\Palmeiras.png', 8),
(58, 'Rangers', 'images\\logoClubs\\other\\rangersFC.png', 8),
(59, 'River Plate', 'images\\logoClubs\\other\\riverPlate.png', 8);

-- --------------------------------------------------------

--
-- Estrutura da tabela `league`
--

CREATE TABLE `league` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `ImagePath` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `league`
--

INSERT INTO `league` (`ID`, `Name`, `ImagePath`) VALUES
(1, 'Premier League', 'images/logosLeagues/PremierLeague.png'),
(2, 'La Liga', 'images/logosLeagues/Laliga.png'),
(3, 'Bundesliga', 'images/logosLeagues/Bundesliga.png'),
(4, 'Serie A', 'images/logosLeagues/SerieA.png'),
(5, 'Ligue 1', 'images/logosLeagues/Ligue1.png'),
(6, 'Liga Portugal', 'images/logosLeagues/LigaPortugalBwin.png'),
(7, 'National Teams', NULL),
(8, 'Other Clubs', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `product`
--

CREATE TABLE `product` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `ImagePath` varchar(100) NOT NULL,
  `ImagePath2` varchar(100) DEFAULT NULL,
  `ImagePath3` varchar(100) DEFAULT NULL,
  `ImagePath4` varchar(100) DEFAULT NULL,
  `ImagePath5` varchar(100) DEFAULT NULL,
  `Price` int(11) NOT NULL,
  `Description` varchar(250) NOT NULL,
  `Material` varchar(50) NOT NULL,
  `Year` varchar(9) NOT NULL,
  `History` text NOT NULL,
  `IDBrand` int(11) NOT NULL,
  `IDSeller` int(11) DEFAULT NULL,
  `IDState` int(11) NOT NULL,
  `IDClub` int(11) NOT NULL,
  `IDTypeOfKit` int(11) NOT NULL,
  `Views` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `product`
--

INSERT INTO `product` (`ID`, `Name`, `ImagePath`, `ImagePath2`, `ImagePath3`, `ImagePath4`, `ImagePath5`, `Price`, `Description`, `Material`, `Year`, `History`, `IDBrand`, `IDSeller`, `IDState`, `IDClub`, `IDTypeOfKit`, `Views`) VALUES
(1, 'SL Benfica Home Kit 2022/2023', 'images\\jerseys\\portugal\\benfica\\2022_2023Home\\benfica2223.png', 'images\\jerseys\\portugal\\benfica\\2022_2023Home\\benfica2223_4.jpg', 'images\\jerseys\\portugal\\benfica\\2022_2023Home\\benfica2223_3.jpeg', 'images\\jerseys\\portugal\\benfica\\2022_2023Home\\benfica2223_5.jpg', 'images\\jerseys\\portugal\\benfica\\2022_2023Home\\benfica2223_2.jpg', 50, 'Put on the classic red of Sport Lisboa Benfica. The Benfica home jersey maintains football tradition with a timeless design of thin stripes, inspired by a bridge that stretches across the Lisbon horizon since 1966.', 'Polyester', '2022/2023', 'SL Benfica showcased remarkable performance domestically and internationally in the 2022/2023 season, demonstrating a cohesive, offensive style of play, achieving consistency, and reaching the quarter finals of the UEFA Champions League.\n\nIn the 2022/2023 season, SL Benfica had a remarkable performance in various competitions, both domestically and internationally. Under the leadership of their coach, the team displayed an offensive and cohesive style of play, which garnered much praise. In the Portuguese league, the Primeira Liga, Benfica was involved in a fierce battle for the title with their eternal rivals, FC Porto and Sporting CP. The team demonstrated an impressive consistency, achieving important victories and displaying attractive and efficient football.\n\nIn European competitions, Benfica had a solid campaign in the UEFA Champions League. The team reached the knockout stages and faced tough opponents, but showed determination and fighting spirit. Even though they were eliminated from the competition, Benfica\'s performance was highly praised by experts. In the Portuguese Cup and League Cup, Benfica continued to show their strength and commitment to success, reaching the final stages of both competitions and fighting for every trophy. Overall, the 2022/2023 season for Benfica was marked by a good performance on several fronts. The players and coaching staff demonstrated great teamwork and dedication, which translated into positive results and the consolidation of the club as one of the main forces in Portuguese and European football.\n\n', 1, 11, 1, 1, 1, 13),
(2, 'SL Benfica Away Kit 2022/2023', 'images/jerseys/portugal/benfica/benfica2223Away.png', NULL, NULL, NULL, NULL, 45, 'This Sport Lisboa e Benfica Adidas jersey combines dynamic graphics and bright colors, reflecting views of Portugal\'s capital.\r\nMesh inserts and moisture-wicking AEROREADY provide comfort. Standing proudly on the chest is the embroidered monochrome b', 'Polyester', '2022/2023', 'SL Benfica showcased remarkable performance domestically and internationally in the 2022/2023 season, demonstrating a cohesive, offensive style of play, achieving consistency, and reaching the quarter finals of the UEFA Champions League.\r\n\r\nIn the 2022/2023 season, SL Benfica had a remarkable performance in various competitions, both domestically and internationally. Under the leadership of their coach, the team displayed an offensive and cohesive style of play, which garnered much praise. In the Portuguese league, the Primeira Liga, Benfica was involved in a fierce battle for the title with their eternal rivals, FC Porto and Sporting CP. The team demonstrated an impressive consistency, achieving important victories and displaying attractive and efficient football.\r\n\r\nIn European competitions, Benfica had a solid campaign in the UEFA Champions League. The team reached the knockout stages and faced tough opponents, but showed determination and fighting spirit. Even though they were eliminated from the competition, Benfica\'s performance was highly praised by experts. In the Portuguese Cup and League Cup, Benfica continued to show their strength and commitment to success, reaching the final stages of both competitions and fighting for every trophy. Overall, the 2022/2023 season for Benfica was marked by a good performance on several fronts. The players and coaching staff demonstrated great teamwork and dedication, which translated into positive results and the consolidation of the club as one of the main forces in Portuguese and European football.', 1, NULL, 1, 1, 2, 3),
(3, 'SL Benfica Third Kit 2022/2023', 'images/jerseys/portugal/benfica/benfica2223Third.png', NULL, NULL, NULL, NULL, 40, 'The third SL Benfica jersey for the 2022/23 season is a tribute to the city of Lisbon with the detail of the image of the Portuguese pavement on the back of the jersey, next to the collar.', 'Polyester', '2022/2023', 'SL Benfica showcased remarkable performance domestically and internationally in the 2022/2023 season, demonstrating a cohesive, offensive style of play, achieving consistency, and reaching the quarter finals of the UEFA Champions League.\r\n\r\nIn the 2022/2023 season, SL Benfica had a remarkable performance in various competitions, both domestically and internationally. Under the leadership of their coach, the team displayed an offensive and cohesive style of play, which garnered much praise. In the Portuguese league, the Primeira Liga, Benfica was involved in a fierce battle for the title with their eternal rivals, FC Porto and Sporting CP. The team demonstrated an impressive consistency, achieving important victories and displaying attractive and efficient football.\r\n\r\nIn European competitions, Benfica had a solid campaign in the UEFA Champions League. The team reached the knockout stages and faced tough opponents, but showed determination and fighting spirit. Even though they were eliminated from the competition, Benfica\'s performance was highly praised by experts. In the Portuguese Cup and League Cup, Benfica continued to show their strength and commitment to success, reaching the final stages of both competitions and fighting for every trophy. Overall, the 2022/2023 season for Benfica was marked by a good performance on several fronts. The players and coaching staff demonstrated great teamwork and dedication, which translated into positive results and the consolidation of the club as one of the main forces in Portuguese and European football.', 1, NULL, 1, 1, 3, 3),
(4, 'SL Benfica Home Kit 1960/1961', 'images/jerseys/portugal/benfica/benfica6162jpg.jpg', NULL, NULL, NULL, NULL, 30, 'Historical replica of the Benfica European Champions jersey. Red shirt with vintage logo embroidered on the shirt. White shirt collar and V-neck. The shirt is 100% cotton. History that wears the shirt: Bern (Switzerland). Wankdorf Stadium 05/31/1961!', 'Cotton', '1961/1962', 'In the 1960/1961 season, SL Benfica had a historic campaign that saw them make their mark in both domestic and international competitions. \r\nIn the final, played at the Wankdorf Stadium in Bern, Switzerland, Benfica defeated Barcelona 3-2 in a closely contested match. Benfica\'s goals were scored by José Águas (2) and Mário Coluna, while Evaristo de Macedo and Zoltán Czibor scored for Barcelona. The victory made Benfica the first Portuguese team to win the European Cup, and it marked a historic moment for Portuguese football.\r\n\r\nThe 1960/1961 season was a remarkable one for Benfica, as they not only won the European Cup but also secured the Primeira Liga title with an impressive record of 21 wins, 2 draws, and only 1 loss. Led by the legendary coach Béla Guttmann and star player Eusébio, Benfica showcased an attacking and cohesive style of play, which earned them praise from experts and fans alike.\r\n\r\nThe team\'s success in 1960/1961 was a significant moment in Portuguese football history and helped to establish Benfica as one of the top clubs in Europe. The players and coaching staff demonstrated great teamwork and dedication throughout the season, which translated into their impressive results.', 14, NULL, 1, 1, 1, 2),
(5, 'Boavista Home Kit 2022/2023', 'images/jerseys/portugal/others/boavista2223.jpg', NULL, NULL, NULL, NULL, 30, 'Jersey of Boavista', 'Polyester', '2022/2023', 'NA', 6, NULL, 1, 2, 1, 0),
(6, 'SC Braga Home Kit 2022/2023', 'images/jerseys/portugal/others/braga2223.jpg', NULL, NULL, NULL, NULL, 40, 'Jersey of Braga', 'Polyester', '2022/2023', 'NA', 5, NULL, 1, 3, 1, 1),
(7, 'GD Chaves Home Kit 2022/2023', 'images/jerseys/portugal/others/chaves2223.png', NULL, NULL, NULL, NULL, 30, 'Jersey of Chaves ', 'Polyester', '2022/2023', 'Na', 7, NULL, 1, 4, 1, 2),
(8, 'Estoril Praia Home Kit 2022/2023', 'images/jerseys/portugal/others/estoril2223.png', NULL, NULL, NULL, NULL, 30, 'Jersey of Estoril', 'Polyester', '2022/2023', 'NA', 8, NULL, 1, 5, 1, 0),
(9, 'Gil Vicente FC Home Kit 2022/2023', 'images/jerseys/portugal/others/gilVicente2223.jpg', NULL, NULL, NULL, NULL, 30, 'Gil Vicente home kit', 'Polyester', '2022/2023', 'NA', 7, NULL, 1, 6, 1, 1),
(10, 'Vitória de Guimarães SC Home Kit 2022/2023', 'images/jerseys/portugal/others/vitoriaGuimaraes2223.png', NULL, NULL, NULL, NULL, 40, 'NA', 'Polyester', '2022/2023', 'NA', 9, NULL, 1, 7, 1, 0),
(11, 'FC Porto Home Kit 2022/2023', 'images/jerseys/portugal/porto/porto2223.jpg', NULL, NULL, NULL, NULL, 50, 'Porto Jersey', 'Polyester', '2022/2023', 'NA', 4, NULL, 1, 8, 1, 3),
(12, 'Sporting CP Home Kit 2022/2023', 'images/jerseys/portugal/sporting/sporting2223.jpg', NULL, NULL, NULL, NULL, 50, 'Always bring the Lion to your chest! Whether at the stadium, at home with friends or traveling the world, Sporting is with you.\r\n\r\nThe classic green and white stripes on a lightweight, quick-drying fabric designed to keep fans and players comfortable', 'Polyester', '2022/2023', 'NA', 2, NULL, 1, 9, 1, 1),
(13, 'Arsenal FC Home Kit 2022/2023', 'images/jerseys/england/arsenal2223.png', NULL, NULL, NULL, NULL, 80, 'Get ready for a ‘90s throwback in the Arsenal 22/23 Home Shirt. Striking the perfect balance between vintage class and modern aesthetics, this fan’s version Arsenal home shirt features a lightning trimmed polo collar.', 'polyester', '2022/2023', 'NA', 1, NULL, 1, 10, 1, 4),
(14, 'Chelsea FC Home Kit 2022/2023', 'images/jerseys/england/chelsea2223.jpg', NULL, NULL, NULL, NULL, 80, 'Like other shirts from our Stadium collection, this one pairs replica design details with sweat-wicking technology to give you a game-ready look inspired by your favourite team. This product is made with 100% recycled polyester fibres.', 'Polyester', '2022/2023', 'NA', 2, NULL, 1, 11, 1, 2),
(15, 'Liverpool FC Home Kit 2022/2023', 'images/jerseys/england/liverpool2223.jpg', NULL, NULL, NULL, NULL, 80, 'Nikes sweat-wicking fabric is paired with LFC insignia to give our players and fans state of the art support on the pitch for each individuals game.\r\n\r\nNike Dri-FIT technology moves sweat away from your skin for quicker evaporation.', 'polyester', '2022/2023', 'Na', 2, NULL, 1, 12, 1, 4),
(16, 'Manchester City FC Home Kit 2022/2023', 'images/jerseys/england/manCity2223.jpg', NULL, NULL, NULL, NULL, 80, 'Football is Culture. Our 2022/23 Home kit features the retro jersey elements from the era of Colin Bell, executed in a sophisticated modern silhouette. The club crest is back in the centre, as are burgundy trims on the sleeve cuffs, shorts and socks.', 'Polyester', '2022/2023', 'Na', 3, NULL, 1, 13, 1, 3),
(17, 'Manchester United FC Home Kit 2022/2023', 'images/jerseys/england/manUnited2223.jpg', NULL, NULL, NULL, NULL, 80, 'Turned up or pressed down, the humble polo collar has played a starring role in many of Manchester United\'s biggest moments. Making a comeback on this adidas football jersey, it joins a shield-style badge.', 'polyester', '2022/2023', 'NA', 1, NULL, 1, 14, 1, 0),
(18, 'Totenham Hotspur F.C. Home Kit 2022/2023', 'images/jerseys/england/totenham2223.jpg', NULL, NULL, NULL, NULL, 80, 'The Youth Tottenham Hotspur Home Shirt 2022/23 is the must-have addition to any young Spurs supporter\'s wardrobe this year. A replica of the shirts worn by the players at the Tottenham Hotspur Stadium, young fans can show their club pride.', 'Polyester', '2022/2023', 'NA', 2, NULL, 1, 15, 1, 4),
(19, 'Atlético Madrid Home Kit 2022/2023', 'images/jerseys/spain/atleticoMadrid2223.jpeg', NULL, NULL, NULL, NULL, 70, 'Get kitted out like your favourite players. As worn by the first team on matchdays, this short sleeve shirt is the perfect way to show your pride and passion.', 'polyester', '2022/2023', 'NA', 2, NULL, 1, 16, 1, 0),
(20, 'Barcelona Home Kit 2022/2023', 'images/jerseys/spain/barcelona2223.jpg', NULL, NULL, NULL, NULL, 120, 'Barcelona Jersey', 'polyester', '2022/2023', 'NA', 2, NULL, 1, 17, 1, 3),
(21, 'Sevilla Home Kit 2022/2023', 'images/jerseys/spain/sevilla2223.png', NULL, NULL, NULL, NULL, 50, 'Official Sevilla FC second shirt for adults for the 22/23 season. Get it and dress as Sevilla FC with us.', 'polyester', '2022/2023', 'Na', 10, NULL, 1, 19, 2, 1),
(22, 'Valencia Home Kit 2022/2023', 'images/jerseys/spain/valencia2223.jpeg', NULL, NULL, NULL, NULL, 50, 'Show your colours and support your favourite team with the official Valencia CF Matchwear range', 'Polyester', '2022/2023', '', 3, NULL, 1, 20, 1, 0),
(23, 'Real Madrid Home Kit 2022/2023', 'images/jerseys/spain/realMadrid2223.jpg', NULL, NULL, NULL, NULL, 100, 'Elegant, classic and created to mark a milestone. The timeless look of this official adidas Real Madrid home jersey is embellished with violet details and a repeating club crest incorporated into the white fabric. This version of the jersey is made f', 'polyester', '2022/2023', '', 1, NULL, 1, 18, 1, 5),
(24, 'Villarreal Home Kit 2022/2023', 'images/jerseys/spain/villarreal2223.jpg', NULL, NULL, NULL, NULL, 40, 'Wear the Villarreal CF colors and support your team by wearing the official Joma game shirt for the 22-23 season.', 'Polyester', '2022/2023', '', 11, NULL, 1, 21, 1, 0),
(25, 'Bayer Leverkusen Home Kit 2022/2023', 'images\\jerseys\\germany\\bayer04223.jpg', NULL, NULL, NULL, NULL, 70, 'The new home jersey is here and has some special features: In addition to the new supplier logo of the British premium brand Castore on the right chest, the shirt is adorned with a unique sound wave inspired by the fan chant \"LEVERKUSEN ALLEZ\".', 'polyester', '2022/2023', '', 10, NULL, 1, 22, 1, 0),
(26, 'Bayern München Home Kit 2022/2023', 'images\\jerseys\\germany\\bayern2223.jpg', NULL, NULL, NULL, NULL, 100, 'Bayern München jersey', 'Polyester', '2022/2023', '', 1, NULL, 1, 23, 1, 1),
(27, 'Borussia Dortmund Home Kit 2022/2023', 'images\\jerseys\\germany\\dortmund223.jpg', NULL, NULL, NULL, NULL, 80, 'Borussia Dortmund Jersey', 'polyester', '2022/2023', '', 3, NULL, 1, 24, 1, 7),
(28, 'Red Bull Leipzig Home Kit 2022/2023', 'images\\jerseys\\germany\\redBullLeipzing2223.jpg', NULL, NULL, NULL, NULL, 70, 'Red Bull Leipzig Jersey', 'Polyester', '2022/2023', '', 2, NULL, 1, 25, 1, 0),
(29, 'Schalke 04shal Home Kit 2022/2023', 'images\\jerseys\\germany\\schalke042223.jpg', NULL, NULL, NULL, NULL, 50, 'The new adidas S04 home jersey shines in the royal blue and white color combination for the 2022/2023 Bundesliga season. It impresses with its authentic look with white contrasting stripes running backwards on the upper sides and a fashionable V-neck', 'Polyester', '2022/2023', '', 1, NULL, 1, 26, 1, 1),
(30, 'Union Berlin Home Kit 2022/2023', 'images\\jerseys\\germany\\unionBerlin2223.jpg', NULL, NULL, NULL, NULL, 60, 'In the 2022/23 season, the Union professionals at the Alte Försterei will wear jerseys with vertical red and white stripes. Red and white are also the dominant colors of the jersey. The legendary three stripes in white adorn the red shoulder area and', 'Polyester', '2022/2023', '', 1, NULL, 1, 27, 1, 0),
(31, 'Inter Home Kit 2022/2023', 'images\\jerseys\\italy\\inter2223.jpg', NULL, NULL, NULL, NULL, 70, 'The CNY Home Shirt celebrates Inter\'s historical values by embracing tradition with the return of the classic black and blue stripes. It\'s inspired by the classic design from the 60s, and strengthens the club\'s bond with the city.', 'polyester', '2022/2023', 'na', 2, NULL, 1, 29, 1, 1),
(32, 'Juventus Home Kit 2022/2023', 'images\\jerseys\\italy\\juventus2223.jpg', NULL, NULL, NULL, NULL, 90, 'A tribute to the values that have always distinguished the team. With this goal in mind comes to life the 2022/23 Home Match Jersey, an important symbol of tradition and innovation that, once again, proves the strength of Juventus.', 'Polyester', '2022/2023', '', 1, NULL, 1, 30, 1, 1),
(33, 'Lazio Home Kit 2022/2023', 'images\\jerseys\\italy\\lazio2223.jpg', NULL, NULL, NULL, NULL, 50, 'The classic sky blue Home uniform features the iconic \'Olympia\' eagle printed diagonally across the front of the jersey.\r\n\r\nThe new kits, inspired by the club\'s rich historical tradition and the iconic Olympia eagle.', 'polyester', '2022/2023', '', 12, NULL, 1, 31, 1, 3),
(34, 'AC Milan Home Kit 2022/2023', 'images\\jerseys\\italy\\milan2223.jpg', NULL, NULL, NULL, NULL, 90, 'The Puma design for the 2022/23 season proudly celebrates the team\'s origins. The new graphics take inspiration from the iconic and beloved red and black stripes of the historic 1912 Race Jersey and reinterpret them in a contemporary key.', 'Polyester', '2022/2023', '', 3, NULL, 1, 28, 1, 1),
(35, 'AC Milan Fourth Kit 2022/2023', 'images\\jerseys\\italy\\MilanFourth2223.jpg', NULL, NULL, NULL, NULL, 60, 'Where football meets fashion, Milan meets Paris. AC Milan, PUMA and the Parisian brand KOCHÉ present their new collaboration. This season they combine the club\'s heritage with performance technology and street-inspired high fashion.', 'Polyester', '', '', 3, NULL, 1, 28, 4, 1),
(36, 'Napoli Home Kit 2022/2023', 'images\\jerseys\\italy\\napoli2223.jpeg', NULL, NULL, NULL, NULL, 80, 'Official SSC Napoli 2022/2023 Sky blue home match shirt\r\nBrand EA7 by Giorgio Armani group, an iconic shirt perfect for your collection.\r\nThe EA7/SSC Napoli match shirt features an all-over tone-on-tone Napoli logo.', '97% Polyester & 3% Elastane', '2022/2023', '', 13, NULL, 1, 32, 1, 1),
(37, 'AS Roma Home Kit 2022/2023', 'images\\jerseys\\italy\\roma2223.jpg', NULL, NULL, NULL, NULL, 70, 'In celebrating the meeting of neoclassicism and modernity, the design blends the club\'s renowned red and yellow palette with a texture featuring the circular ASR crest worn in the 1930s and 1950s.', 'Polyester', '2022/2023', '', 4, NULL, 1, 33, 1, 1),
(38, 'Lille Home Kit 2022/2023', 'images\\jerseys\\france\\lille2223.jpg', NULL, NULL, NULL, NULL, 50, 'lille jersey', 'Polyester', '2022/2023', '', 4, NULL, 1, 35, 1, 0),
(39, 'Olympique Lyonnais Away Kit 2022/2023', 'images\\jerseys\\france\\lyon2223Away.jpg', NULL, NULL, NULL, NULL, 60, 'Adidas and Olympique Lyonnais present the new kit that the players will wear throughout the season during their away games. This second jersey symbolizes the bond between the club and its fans, as a revisited version of the Lyonnais fans fervor.', 'Polyester', '2022/2023', '', 1, NULL, 1, 36, 2, 0),
(40, 'Olympique Lyonnais Home Kit 2022/2023', 'images\\jerseys\\france\\lyon2223Home.jpg', NULL, NULL, NULL, NULL, 60, 'Adidas and Olympique Lyonnais present the jersey that will be worn by the players during their home games for the 2022-2023 season. The jersey is a celebration of the club\'s identity and DNA, featuring the three colors worn by the men\'s and women\'s t', 'Polyester', '2022/2023', '', 1, NULL, 1, 36, 1, 10),
(41, 'Olympique Lyonnais Third Kit 2022/2023', 'images\\jerseys\\france\\lyon2223Third.jpg', NULL, NULL, NULL, NULL, 50, 'A true tribute to the people of Lyon, this shirt, designed by adidas in collaboration with the club\'s teams, is a bridge between the city and its inhabitants, whether they are native Lyonnais or Lyonnais at heart.', 'Polyester', '2022/2023', '', 1, NULL, 1, 36, 3, 8),
(42, 'Mónaco Home Kit 2022/2023', 'images\\jerseys\\france\\monaco2223.jpg', NULL, NULL, NULL, NULL, 0, 'This shirt celebrates the message : RISE. RISK. REPEAT. which is repeated diagonally tone on tone. Faithful to the design imagined by Princess Grace, it integrates the elements that make up the DNA of AS Monaco. Identical to the one worn by the playe', '80', '2022/2023', '', 1, NULL, 1, 34, 1, 0),
(43, 'Olympique Marseille Home Kit 2022/2023', 'images\\jerseys\\france\\olymiqueMarseill2223.jpg', NULL, NULL, NULL, NULL, 60, 'Authentic Puma Olympique de Marseille Home 2022/2023 Jersey, color White.\r\nMade from recycled polyester to save the planet\'s resources.\r\nBreathable fabric.', 'Polyester', '2022/2023', '', 3, NULL, 1, 37, 1, 0),
(44, 'Paris Saint Germain Home Kit 2022/2023', 'images\\jerseys\\france\\psg2223.jpg', NULL, NULL, NULL, NULL, 100, 'The Stadium model is inspired by the uniform worn by Paris Saint-Germain players during matches. It is designed in a sweat-wicking fabric and is made entirely from recycled polyester fibers.', 'Polyester', '2022/2023', '', 2, NULL, 1, 38, 1, 3),
(45, 'Stade Rennais FC Home Kit 2022/2023', 'images\\jerseys\\france\\stadeRennais2223.jpg', NULL, NULL, NULL, NULL, 40, 'Jersey of Stade Rennais ', 'Polyester', '2022/2023', '', 3, NULL, 1, 39, 1, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `state`
--

CREATE TABLE `state` (
  `ID` int(50) NOT NULL,
  `Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `state`
--

INSERT INTO `state` (`ID`, `Name`) VALUES
(1, 'New'),
(2, 'Used');

-- --------------------------------------------------------

--
-- Estrutura da tabela `typeofkit`
--

CREATE TABLE `typeofkit` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `typeofkit`
--

INSERT INTO `typeofkit` (`ID`, `Name`) VALUES
(1, 'Home'),
(2, 'Away'),
(3, 'Third'),
(4, 'Fourth');

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `Surname` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Address` varchar(250) NOT NULL,
  `Phone` int(9) NOT NULL,
  `Password` varchar(256) NOT NULL,
  `tmpKey` varchar(11) DEFAULT NULL,
  `keyDate` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`ID`, `FirstName`, `Surname`, `Email`, `Address`, `Phone`, `Password`, `tmpKey`, `keyDate`) VALUES
(7, 'José', 'Lopes', 'joselopes@gmail.com', 'Rua do PHP', 935883636, '$2y$10$9jKD7wH7kqSlM.93GE8SiOPW4TMRD8MGNoXmqW0sgBzDU8rx4Xj6K', NULL, NULL),
(13, 'ana', 'Lopes', 'a@gmail.com', 'Rua do Javascript', 935999636, '$2y$10$vY0XG4Z9ZQL2XXaC0jUeieJebcGON/fq.45cA2xmP66ZqlRPJNEr6', '2835ec', '2023-05-12 13:14:13'),
(17, 'José', 'Lopes', 'joselopes5589@gmail.com', 'Rua do PHP', 935999636, '$2y$10$YC3OVhIHRu/suzNH16d6Ju89qqtn.lyOhQ/Ua5JuZWuqjRu63PX9a', '05fc51', '2023-05-15 10:08:51'),
(19, 'Jorge', 'Martins', 'joselopes5589@gmail.com', 'Rua do PHP', 935999636, '$2y$10$AMWqFwA2hbGy4Hi/qyHoDeJzxq2sfPXz9uZfZSt2UwUudSFTChfFK', NULL, NULL),
(20, 'José', 'Lopes', 'joselopes5589@gmail.com', 'Rua do PHP', 935999636, '$2y$10$6CQwgXyLkvm6PM.rCDJ8JuzbhUzA9QNlInYJ0kLt0VMhf47vorQ0O', NULL, NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`ID`);

--
-- Índices para tabela `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `cart/user` (`UserID`),
  ADD KEY `Product/Cart` (`productID`);

--
-- Índices para tabela `club`
--
ALTER TABLE `club`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Club/League` (`IDLeague`);

--
-- Índices para tabela `league`
--
ALTER TABLE `league`
  ADD PRIMARY KEY (`ID`);

--
-- Índices para tabela `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Product/Club` (`IDClub`),
  ADD KEY `Product/Brand` (`IDBrand`),
  ADD KEY `Product/State` (`IDState`),
  ADD KEY `Product/TypeOfKit` (`IDTypeOfKit`);

--
-- Índices para tabela `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`ID`);

--
-- Índices para tabela `typeofkit`
--
ALTER TABLE `typeofkit`
  ADD PRIMARY KEY (`ID`);

--
-- Índices para tabela `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `brand`
--
ALTER TABLE `brand`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `cart`
--
ALTER TABLE `cart`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT de tabela `club`
--
ALTER TABLE `club`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT de tabela `league`
--
ALTER TABLE `league`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `product`
--
ALTER TABLE `product`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT de tabela `state`
--
ALTER TABLE `state`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `typeofkit`
--
ALTER TABLE `typeofkit`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `Product/Cart` FOREIGN KEY (`productID`) REFERENCES `product` (`ID`),
  ADD CONSTRAINT `cart/user` FOREIGN KEY (`UserID`) REFERENCES `user` (`ID`);

--
-- Limitadores para a tabela `club`
--
ALTER TABLE `club`
  ADD CONSTRAINT `Club/League` FOREIGN KEY (`IDLeague`) REFERENCES `league` (`ID`);

--
-- Limitadores para a tabela `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `Product/Brand` FOREIGN KEY (`IDBrand`) REFERENCES `brand` (`ID`),
  ADD CONSTRAINT `Product/Club` FOREIGN KEY (`IDClub`) REFERENCES `club` (`ID`),
  ADD CONSTRAINT `Product/State` FOREIGN KEY (`IDState`) REFERENCES `state` (`ID`),
  ADD CONSTRAINT `Product/TypeOfKit` FOREIGN KEY (`IDTypeOfKit`) REFERENCES `typeofkit` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
