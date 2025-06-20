-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2025 at 06:07 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projekt`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `naslov` varchar(100) NOT NULL,
  `sazetak` varchar(200) NOT NULL,
  `tekst` text DEFAULT NULL,
  `arhiva` tinyint(1) DEFAULT NULL,
  `kategorija` varchar(20) DEFAULT NULL,
  `datumObjave` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `naslov`, `sazetak`, `tekst`, `arhiva`, `kategorija`, `datumObjave`) VALUES
(1, 'Hrvatski sport u ratu', 'Hrvatska je 1992. godine, unatoč ratnim okolnostima, prvi put nastupila na ZOI u Albertvilleu, što je označilo povijesni trenutak za hrvatski sport.', 'U jeku velikosrpske agresije i neposredno nakon međunarodnog priznanja, Hrvatska je uspjela organizirati nastup svojih sportaša na Zimskim olimpijskim igrama u francuskom Albertvilleu 1992. godine. To je bio prvi put da je Hrvatska kao samostalna država sudjelovala na olimpijadi, unatoč teškim ratnim uvjetima i logističkim izazovima.', 0, '0', '2025-06-20'),
(2, 'Povijest nogometa HR', 'Nogomet u Hrvatskoj ima bogatu povijest, s klubovima poput Hajduka i Dinama koji su igrali ključnu ulogu u očuvanju nacionalnog identiteta, posebno tijekom političkih previranja.', 'Nogomet je u Hrvatskoj uvijek bio više od igre; bio je sredstvo izražavanja nacionalnog identiteta i otpora. Tijekom razdoblja socijalističke Jugoslavije, klubovi poput Hajduka i Dinama služili su kao simboli hrvatskog ponosa. Utakmice su često bile ispunjene političkim nabojem, a navijači su koristili stadione kao platformu za izražavanje svojih stavova.', 0, 'sport', '2023-09-25'),
(3, 'Franjo Bučar pionir sporta', 'Franjo Bučar, poznat kao otac hrvatskog sporta, bio je ključna figura u razvoju sportskih aktivnosti i olimpijskog pokreta u Hrvatskoj početkom 20. stoljeća.', 'Franjo Bučar (1866–1946) bio je hrvatski pisac i sportski entuzijast koji je uveo mnoge sportove u Hrvatsku, uključujući nogomet, gimnastiku i skijanje. Osnovao je Hrvatski športski savez 1909. godine i bio prvi predsjednik Jugoslavenskog olimpijskog odbora. Njegov rad postavio je temelje za razvoj sporta u Hrvatskoj.', 1, 'sport', '2024-10-14'),
(4, 'Hrvatski sokol i politika', 'Hrvatski sokol, tjelovježbena organizacija osnovana krajem 19. stoljeća, igrala je značajnu ulogu u promicanju nacionalne svijesti i otporu prema germanizaciji i mađarizaciji.', 'Hrvatski sokol nastao je kao odgovor na pokušaje germanizacije i mađarizacije, promovirajući tjelesnu kulturu i nacionalni ponos. Organizacija je okupljala tisuće članova i organizirala javne manifestacije koje su bile i politički obojene. Nakon uvođenja Šestosiječanjske diktature 1929., djelovanje Hrvatskog sokola je zabranjeno, a članovi su prisilno uključeni u jedinstveni Sokol Kraljevine Jugoslavije.', 1, 'politika', '2025-04-24'),
(5, 'Kačić: Sport i politika', 'Hrvoje Kačić, bivši vaterpolist i političar, simbolizirao je isprepletenost sporta i politike u Hrvatskoj, posebno tijekom i nakon socijalističkog razdoblja.', 'Hrvoje Kačić (1932–2023) bio je istaknuti hrvatski vaterpolist koji je osvojio brojne medalje, uključujući srebro na Olimpijskim igrama. Nakon sportske karijere, aktivno se uključio u politiku, postavši član Hrvatskog sabora i predsjednik Državne komisije za granice. Njegov životni put odražava duboku povezanost sporta i političkog angažmana u Hrvatskoj.', 1, 'politika', '2024-10-12'),
(6, 'Olimpijske igre 2000', 'Hrvatski sportaši zabilježili su značajne uspjehe na Olimpijskim igrama u Sydneyu 2000. godine, osvajajući medalje u nekoliko disciplina.', 'Na Olimpijskim igrama u Sydneyu 2000., hrvatski sportaši ostvarili su zapažene rezultate, posebice u atletici, veslanju i rukometu. Ovi uspjesi doprinijeli su jačanju sportskog ugleda Hrvatske u svijetu.', 0, 'sport', '2024-07-14'),
(7, 'Rukometni uspjeh 2004', 'Hrvatska rukometna reprezentacija osvojila je zlatnu medalju na Olimpijskim igrama u Ateni 2004., što je jedan od najvećih sportskih uspjeha.', 'Hrvatska rukometna reprezentacija dominirala je na Olimpijskim igrama u Ateni 2004., osvojivši zlatnu medalju nakon napetih finalnih utakmica i prikazu vrhunske igre.', 0, 'sport', '2024-11-28'),
(8, 'Dinamo prvak 2020', 'GNK Dinamo Zagreb osvojio je prvenstvo Hrvatske 2020. godine, potvrđujući svoju dominaciju u domaćem nogometu.', 'Dinamo Zagreb dominirao je hrvatskim nogometom i 2020. godine, osvojivši još jedno prvenstvo te osiguravši nastup u europskim natjecanjima.', 0, 'sport', '2023-07-08'),
(9, 'Zlatne godine Hajduka', 'Povijest Hajduka obilježena je brojnim uspjesima i važnim događajima koji su definirali hrvatski nogomet tijekom 20. stoljeća.', 'Hajduk Split, jedan od najpoznatijih hrvatskih nogometnih klubova, imao je zlatne godine tijekom 70-ih i 80-ih godina prošlog stoljeća, osvojivši mnoge trofeje i stvorivši legendu kluba.', 1, 'sport', '2025-06-04'),
(10, 'HDZ i osamostaljenje', 'Hrvatska demokratska zajednica (HDZ) igrala je ključnu ulogu u osamostaljenju Hrvatske početkom 1990-ih.', 'HDZ je osnovan 1989. godine i brzo je postao dominantna politička snaga koja je vodila proces neovisnosti Hrvatske od Jugoslavije, što je rezultiralo stvaranjem samostalne države.', 0, 'politika', '2025-02-24'),
(11, 'Prvi predsjednik Tuđman', 'Franjo Tuđman bio je prvi predsjednik Republike Hrvatske i ključna figura u stvaranju moderne države.', 'Franjo Tuđman vodio je Hrvatsku kroz ključne trenutke osamostaljenja, Domovinskog rata i izgradnje institucija nove države tijekom 1990-ih.', 0, 'politika', '2024-01-20'),
(12, 'Ustav RH 1990', 'Ustav Republike Hrvatske iz 1990. godine bio je temeljni pravni akt u procesu osamostaljenja države.', 'Ustav RH donesen je u vrijeme velikih političkih promjena i osigurao pravni okvir za formiranje samostalne i suverene hrvatske države.', 0, 'politika', '2025-05-19'),
(13, 'Hrvatska u UN-u', 'Hrvatska je postala članica Ujedinjenih naroda 1992. godine, što je označilo priznanje međunarodne zajednice.', 'Članstvo u UN-u bio je važan korak za međunarodno priznavanje Hrvatske kao samostalne države i početak aktivnog sudjelovanja u globalnoj politici.', 1, 'politika', '2025-04-28'),
(14, 'TEST', 'teas', 'test', 1, 'sport', '2025-06-05'),
(15, 'TEST', 'teas', 'test', 1, 'sport', '2025-06-05'),
(16, 'TEST', 'test', 'test', 1, 'sport', '2025-06-05'),
(18, 'NATO je na pragu povijesnog dogovora. Ovo je plan', 'NATO je na korak do dogovora koji bi mogao označiti najveći skok u obrambenom pozicioniranju saveza od kraja Hladnog rata', 'Na sastanku ministara obrane u Bruxellesu usvojeni su tajni popisi ciljeva vojnih sposobnosti koje svaka država mora ostvariti u sklopu obrambenih planova saveza, objavio je Bloomberg. Među najvažnijim ciljevima je pet puta veće ulaganje u sustave protuzračne obrane na europskom tlu.\r\n\r\nRiječ je o zajedničkom cilju koji neće biti ravnomjerno raspodijeljen, ali koji ilustrira razmjere transformacije koja se očekuje od europskih članica.\r\n\r\nKoliko će se trošiti na što?\r\nPritom je dogovorena i okvirna formula novog cilja ulaganja: 3.5 posto BDP-a za čisto vojne izdatke i dodatnih 1.5 posto za obrambeno povezane troškove, uključujući kibernetičku sigurnost, logistiku, infrastrukturu i civilnu spremnost. O toj formuli će se još pregovarati, no okvir je postavljen i u njega bi se trebale uklopiti sve članice do 2032. godine.\r\n\r\n\"Ne radimo ovo zbog jedne osobe\", rekao je glavni tajnik NATO-a Mark Rutte, reagirajući na komentare da savez pokušava umiriti američkog predsjednika Donalda Trumpa. \"Radimo to da bismo zaštitili milijune ljudi.\"', 0, 'politika', '2025-06-05'),
(19, 'Trump je odobrio planove za Iran', 'Predsjednik SAD-a Donald Trump rekao je svojim najbližim suradnicima da podržava američke planove napada na Iran, ali još ne daje konačno odobrenje jer želi vidjeti hoće li Teheran odustati od nuklear', 'PREDSJEDNIK SAD-a Donald Trump rekao je svojim najbližim suradnicima da podržava američke planove napada na Iran, ali još ne daje konačno odobrenje jer želi vidjeti hoće li Teheran odustati od nuklearnog programa, piše Wall Street Journal.\r\n\r\nTri izvora za list su potvrdila da Trump računa na to da će prijetnja američkim uključivanjem u izraelske napade natjerati Iran da prihvati njegove uvjete.\r\n\r\nRanije je sam Trump izjavio: \"Možda ću to učiniti. Možda neću.\"', 0, 'politika', '2025-06-20');

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE `korisnik` (
  `userId` int(11) NOT NULL,
  `ime` varchar(30) NOT NULL,
  `prezime` varchar(30) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(300) NOT NULL,
  `adminStatus` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`userId`, `ime`, `prezime`, `username`, `password`, `adminStatus`) VALUES
(1, 'Admin', 'Admin', 'AdminJedanJedini', '$2y$10$OjIlid.7lVAYLN4prggcfOR7LPzHf4S2Q6UCkmyY471cfRek4spdu', 1),
(2, 'Majmun', 'Bijeli', 'MajmunBijeli123', '$$2y$10$B4UXUjya5LX2id2PA8zlH.51CB0GrMAVXTTi7Eq7NWwugikNGXFlC', 0),
(3, 'Smrdljivko', 'TriMetra', 'AAAAAAAAA', '$$2y$10$u5jHirU4z/KbTT3p/tkCouXxhFIbQ8E5GZME0I27KYVIiA8wryCyS', 0),
(4, 'doslovno ja', 'a', 'adada', '$$2y$10$6ODKKtBp6M3e14SpNvYDw.omwQf3/mkuKSslFT473ErDNMU6tMWh6', 0),
(5, 'Papagaj', 'Papagajevic', 'Smrad114', '$$2y$10$enOua3OGQ949SddR1tlzNOWoPjE.xoMiEl7l/3SJE5x0REapGps8C', 0),
(6, 'a', 'b', 'abc', '$$2y$10$Ba55FDvQy6BkI94/JCWXreMdgol7p3ZKIVs2wsOK9c5pRYLEw15cG', 0);

-- --------------------------------------------------------

--
-- Table structure for table `slika`
--

CREATE TABLE `slika` (
  `slikaID` int(11) NOT NULL,
  `opis` varchar(40) DEFAULT NULL,
  `alt` varchar(20) DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  `clanakId` int(11) DEFAULT NULL,
  `datumObjave` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slika`
--

INSERT INTO `slika` (`slikaID`, `opis`, `alt`, `path`, `clanakId`, `datumObjave`) VALUES
(1, 'test', 'Slikica Tikica Mikic', '../images/', 14, '2025-06-05'),
(2, 'test', 'Slikica Tikica Mikic', '../images/', 15, '2025-06-05'),
(3, 'test', 'Slikica Tikica Mikic', '../images/2024-05-14 10_14_21-Window.png', 16, '2025-06-05'),
(5, 'Jako Stara Lopta', 'loptica', 'loptaHR.jpg', 1, '2024-10-24'),
(6, 'Hrvatska Momčad \'92', 'slika sportasa', 'hrvatskiSport1992.jpg', 2, '2023-09-25'),
(7, 'Portret F. Bučara', 'Franjo bučar', 'franjoBucar.jpg', 3, '2024-10-14'),
(8, 'Grb Hrvatskog Sokola', 'Hrvatski Sokol', 'hrvatskiSokol.png', 4, '2025-04-24'),
(9, 'Hrvoje Kačić', 'Hrvoje Kacic', 'hrvojeKacic.jpg', 5, '2024-10-12'),
(10, 'Olimpijada 2000', 'Olipmijada', 'olimpijada2000.jpg', 6, '2024-07-14'),
(11, 'Rukometasi \'04', 'Rukometasi', 'rukometasi2004.jpg', 7, '2024-11-29'),
(12, 'Momcad Dinama', 'Dinamo', 'dinamo2020.jpg', 8, '2023-07-08'),
(13, 'Momcad Hajduka', 'Hajduk', 'hajdukPovijest.jpg', 9, '2025-06-04'),
(14, 'HDZ', 'HDZ', 'hdz1989.jpg', 10, '2025-02-24'),
(15, 'Franjo Tuđman', 'Predsjednik Tudman', 'tudman.jpg', 11, '2024-01-20'),
(16, 'Ustav RH', 'Knjiga Ustava', 'ustav1990.jpg', 12, '2025-05-19'),
(17, 'Zastava RH u Briselu', 'Zastava', 'hrvatskaUN.jpg', 13, '2025-04-28'),
(18, 'Slika Bojišta', 'Slikica Tikica Mikic', 'nato2025.jpg', 18, '2025-06-05'),
(19, 'Donald Trump', 'Slikica Tikica Mikic', 'trumpSlika.jpg', 19, '2025-06-19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `slika`
--
ALTER TABLE `slika`
  ADD PRIMARY KEY (`slikaID`),
  ADD KEY `slika_ibfk_1` (`clanakId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `korisnik`
--
ALTER TABLE `korisnik`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `slika`
--
ALTER TABLE `slika`
  MODIFY `slikaID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `slika`
--
ALTER TABLE `slika`
  ADD CONSTRAINT `slika_ibfk_1` FOREIGN KEY (`clanakId`) REFERENCES `article` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
