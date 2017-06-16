-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 05, 2014 at 09:21 AM
-- Server version: 5.1.33
-- PHP Version: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sekolahku`
--

-- --------------------------------------------------------

--
-- Table structure for table `absen`
--

CREATE TABLE IF NOT EXISTS `absen` (
  `ida` int(10) NOT NULL AUTO_INCREMENT,
  `ids` int(10) NOT NULL,
  `tgl` varchar(100) NOT NULL,
  `ket` varchar(3) NOT NULL,
  `jam` int(3) NOT NULL,
  PRIMARY KEY (`ida`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `absen`
--


-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE IF NOT EXISTS `guru` (
  `idg` int(10) NOT NULL AUTO_INCREMENT,
  `nip` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jk` varchar(3) NOT NULL,
  `alamat` text NOT NULL,
  `idk` int(10) NOT NULL,
  `pass` text NOT NULL,
  PRIMARY KEY (`idg`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`idg`, `nip`, `nama`, `jk`, `alamat`, `idk`, `pass`) VALUES
(9, '196105061986032009', 'RETNO UTAMI, M. Pd.', 'P', '-', 10, '77e69c137812518e359196bb2f5e9bb9'),
(10, '195409141979032002', 'Dra. Hj. LATIFAH HANIM', 'P', '-', 10, '77e69c137812518e359196bb2f5e9bb9'),
(11, '195515251977031012', 'Drs. ABDURRAHMAN', 'L', '-', 10, '77e69c137812518e359196bb2f5e9bb9'),
(12, '195703041979031008', 'TJAHJADI HERWANTO, S.Pd', 'L', '-', 11, '77e69c137812518e359196bb2f5e9bb9'),
(13, '196610251998021001		', 'BAMBANG SUPRIYADI, S.Pd', 'L', '-', 11, '77e69c137812518e359196bb2f5e9bb9'),
(14, '5634742645300002', 'M. Rusydi, S.Ag', 'L', '-', 11, '77e69c137812518e359196bb2f5e9bb9'),
(15, '9758760661200012', 'Moh. Basyar, S.Ag', 'L', '-', 11, '77e69c137812518e359196bb2f5e9bb9'),
(16, '9247761662300053', 'Siti Nur Hidayati, M.Ag', 'P', '-', 11, 'd41d8cd98f00b204e9800998ecf8427e'),
(17, '3454756658300033', 'Dani Wahyudi, S.Pd', 'L', '-', 11, '77e69c137812518e359196bb2f5e9bb9'),
(18, '3462742646200013', 'Drs. Masrur', 'L', '-', 11, '77e69c137812518e359196bb2f5e9bb9'),
(19, '7242747649300083', 'Drs. Syarifuddin', 'L', '-', 12, '77e69c137812518e359196bb2f5e9bb9'),
(20, '6546746649200033', 'ENDANG PRISTIAWATY, S.Psi', 'P', '-', 12, '77e69c137812518e359196bb2f5e9bb9'),
(21, '4435735637200023', 'IRMA SURYANI, S.Pd', 'P', '-', 12, '77e69c137812518e359196bb2f5e9bb9'),
(22, '2733762663210162', 'Fathurrofiq, S.Pd', 'L', '-', 12, '77e69c137812518e359196bb2f5e9bb9'),
(23, '1736762663200092', 'Fathurrohman, ST.', 'L', '-', 12, '77e69c137812518e359196bb2f5e9bb9'),
(24, '7054747649300033', 'Drs. Ahmad Wahyudin Effendi', 'L', '-', 12, '77e69c137812518e359196bb2f5e9bb9'),
(25, '7437758661300003', 'Syaifuddin, Msi', 'L', '-', 12, '77e69c137812518e359196bb2f5e9bb9'),
(26, '4061758660300033', 'Yusuf Effendi, S.Ag', 'L', '-', 11, '77e69c137812518e359196bb2f5e9bb9'),
(27, '0655735636200012', 'Moh. Nur Khasan, M.Ag', 'L', '-', 10, '77e69c137812518e359196bb2f5e9bb9'),
(28, '1736762663200098', 'Abdul Fattah, M.Pd', 'L', 'PERUM MSI (Muara Sarana Indah) No 14. Dau Malang', 10, '77e69c137812518e359196bb2f5e9bb9');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
  `idk` int(10) NOT NULL AUTO_INCREMENT,
  `id` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  PRIMARY KEY (`idk`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`idk`, `id`, `nama`) VALUES
(10, 2, 'XII'),
(11, 2, 'XIII'),
(12, 2, 'IX');

-- --------------------------------------------------------

--
-- Table structure for table `sekolah`
--

CREATE TABLE IF NOT EXISTS `sekolah` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `kode` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `sekolah`
--

INSERT INTO `sekolah` (`id`, `kode`, `nama`, `alamat`) VALUES
(2, '2010902872872', 'Madrasah Tsanawiyah Wahid Hasyim', 'Jl. Raya Mulyoagung No 51A Dau Malang.');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `ids` int(10) NOT NULL AUTO_INCREMENT,
  `nis` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jk` varchar(2) NOT NULL,
  `alamat` text NOT NULL,
  `idk` int(5) NOT NULL,
  `tlp` varchar(20) NOT NULL,
  `bapak` varchar(50) NOT NULL,
  `k_bapak` varchar(50) NOT NULL,
  `ibu` varchar(50) NOT NULL,
  `k_ibu` varchar(50) NOT NULL,
  `pass` text NOT NULL,
  PRIMARY KEY (`ids`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`ids`, `nis`, `nama`, `jk`, `alamat`, `idk`, `tlp`, `bapak`, `k_bapak`, `ibu`, `k_ibu`, `pass`) VALUES
(1, '9965340897', 'Agus Prayitno', 'L', '-', 10, '85733743907', '-', '-', '-', '-', 'bcd724d15cde8c47650fda962968f102'),
(2, '9965309258', 'Alfaiz Faroko', 'L', '-', 11, '81332036346', '-', '-', '-', '-', 'bcd724d15cde8c47650fda962968f102'),
(3, '9985108328', 'Ali Sujana	', 'L', '-', 10, '85733743907', '-', '-', '-', '-', 'bcd724d15cde8c47650fda962968f102'),
(5, '9974601836', 'Ari Nur Fajarullah', 'L', '-', 10, '85733743907', '-', '-', '-', '-', 'bcd724d15cde8c47650fda962968f102'),
(6, '9985108364', 'Arifin', 'L', '-', 10, '85733743907', '-', '-', '-', '-', 'bcd724d15cde8c47650fda962968f102'),
(7, '9965309342', 'Bahrul Latif	', 'L', '-', 10, '85954590935', '-', '-', '-', '-', 'bcd724d15cde8c47650fda962968f102'),
(8, '9974601924', 'Dedy', 'L', '-', 10, '85954590935', '-', '-', '-', '-', 'bcd724d15cde8c47650fda962968f102'),
(9, '9974601993', 'Dimas Khozinatul Asrori', 'L', '-', 10, '85733743907', '-', '-', '-', '-', 'bcd724d15cde8c47650fda962968f102'),
(10, '9974602034', 'Eviana', 'P', '-', 10, '85733743907', '-', '-', '-', '-', 'bcd724d15cde8c47650fda962968f102'),
(11, '9974602051', 'Galih Setiawan Susanto', 'L', '-', 10, '85733743907', '-', '-', '-', '-', 'bcd724d15cde8c47650fda962968f102'),
(12, '9974602083', 'Hasna Nur Karimah', 'P', '-', 10, '85733743907', '-', '-', '-', '-', 'bcd724d15cde8c47650fda962968f102'),
(13, '9974602096', 'Herlina Suci Hardianti', 'P', '-', 10, '85733743907', '-', '-', '-', '-', 'bcd724d15cde8c47650fda962968f102'),
(14, '9985108630', 'Ida Wachyuni', 'P', '-', 10, '85733743907', '-', '-', '-', '-', 'bcd724d15cde8c47650fda962968f102'),
(15, '9985108634', 'Iin Maryamah', 'P', '-', 10, '85733743907', '-', '-', '-', '-', 'bcd724d15cde8c47650fda962968f102'),
(16, '9974622339', 'Ina Chintya', 'L', 'Ina Chintya', 10, '85733743907', '-', '-', '-', '-', 'bcd724d15cde8c47650fda962968f102'),
(17, '9974603046', 'Indah Dwi Utami', 'P', '-', 10, '85733743907', '-', '-', '-', '-', 'bcd724d15cde8c47650fda962968f102'),
(18, '9985109207', 'Jamingun Sobri', 'L', '-', 10, '85733743907', '-', '-', '-', '-', 'bcd724d15cde8c47650fda962968f102'),
(19, '9974603238', 'Laelatul Badriyah', 'P', '-', 10, '85733743907', '-', '-', '-', '-', 'bcd724d15cde8c47650fda962968f102'),
(20, '9965320731', 'Lulu Apriliyani', 'P', '-', 10, '85733743907', '-', '-', '-', '-', 'bcd724d15cde8c47650fda962968f102'),
(21, '9965320734', 'Muhamad Usman Nawawi', 'L', '-', 10, '85733743907', '-', '-', '-', '-', 'bcd724d15cde8c47650fda962968f102'),
(23, '9974603377', 'Aji Supriyanto', 'L', '-', 11, '85954590935', '-', '-', '-', '-', 'bcd724d15cde8c47650fda962968f102'),
(24, '9985109537', 'Anisa Safitri', 'P', '-', 11, '85733743907', '-', '-', '-', '-', 'bcd724d15cde8c47650fda962968f102'),
(25, '9985109543', 'Anjar Nur Faozan', 'L', '-', 11, '85733743907', '-', '-', '-', '-', 'bcd724d15cde8c47650fda962968f102'),
(27, '9965320857', 'Bani', 'L', '-', 11, '85733743907', '-', '-', '-', '-', 'bcd724d15cde8c47650fda962968f102'),
(28, '9974603400', 'Catur Fajri Ramadhan', 'L', '-', 11, '85733743907', '-', '-', '-', '-', 'bcd724d15cde8c47650fda962968f102'),
(29, '9965320870', 'Dimas Inggrit Wijanarko', 'L', '-', 11, '85733743907', '-', '-', '-', '-', 'bcd724d15cde8c47650fda962968f102'),
(30, '9965320876', 'Dwi Utomo', 'L', '-', 11, '85733743907', '-', '-', '-', '-', 'bcd724d15cde8c47650fda962968f102'),
(31, '9965320883', 'Efi Nur Cahyani', 'P', '-', 11, '85733743907', '-', '-', '-', '-', 'bcd724d15cde8c47650fda962968f102'),
(32, '9974603414', 'Eka Sutikno', 'L', '-', 11, '85733743907', '-', '-', '-', '-', 'bcd724d15cde8c47650fda962968f102'),
(33, '9965320887', 'Endri Isnanto', 'L', '-', 11, '85733743907', '-', '-', '-', '-', 'bcd724d15cde8c47650fda962968f102'),
(34, '9965320890', 'Evi Nuryanti', 'P', '-', 11, '85733743907', '-', '-', '-', '-', 'bcd724d15cde8c47650fda962968f102'),
(35, '9985109574', 'Fia Rahayu', 'P', '-', 11, '85733743907', '-', '-', '-', '-', 'bcd724d15cde8c47650fda962968f102'),
(36, '9965320905', 'Fika Septiana', 'P', '-', 11, '85733743907', '-', '-', '-', '-', 'bcd724d15cde8c47650fda962968f102'),
(37, '9974603422', 'Herlina Priyatin	', 'P', '-', 11, '85733743907', '-', '-', '-', '-', 'bcd724d15cde8c47650fda962968f102'),
(38, '9965320922', 'Ika Nur Fajriah', 'P', '-', 11, '85733743907', '-', '-', '-', '-', 'bcd724d15cde8c47650fda962968f102'),
(39, '9974603436', 'Iwan Nugroho', 'L', '-', 11, '85733743907', '-', '-', '-', '-', 'bcd724d15cde8c47650fda962968f102'),
(40, '9974603447', 'Kasroh', 'P', '-', 11, '85733743907', '-', '-', '-', '-', 'bcd724d15cde8c47650fda962968f102'),
(41, '9974603560', 'Nining Purwaningsih	', 'P', '-', 11, '85954590935', '-', '-', '-', '-', 'bcd724d15cde8c47650fda962968f102'),
(42, '9974603593', 'Nofiatun', 'P', '-', 11, '85733743907', '-', '-', '-', '-', 'bcd724d15cde8c47650fda962968f102'),
(43, '9965321268', 'Nur Khafidin', 'P', '-', 11, '85954590935', '-', '-', '-', '-', 'bcd724d15cde8c47650fda962968f102'),
(44, '9974603623', 'Nurul Khusnan', 'P', '-', 11, '85733743907', '-', '-', '-', '-', 'bcd724d15cde8c47650fda962968f102'),
(45, '9965309250', 'Moh. Ali Rohim Sihombing', 'L', 'Jl. Raya Jetis No. 08 Dau Malang', 10, '85954590935', 'Mutasim', 'Petani', 'Rahma', 'Wirausaha', 'bcd724d15cde8c47650fda962968f102');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `idu` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `pass` text NOT NULL,
  `level` varchar(50) NOT NULL,
  `id` int(10) NOT NULL,
  PRIMARY KEY (`idu`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`idu`, `nama`, `pass`, `level`, `id`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 0);
