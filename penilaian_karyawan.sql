-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2019 at 07:16 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penilaian_karyawan`
--

-- --------------------------------------------------------

--
-- Table structure for table `akumulasi_akhir`
--

CREATE TABLE `akumulasi_akhir` (
  `Nip_Peserta` int(11) DEFAULT NULL,
  `Periode` date DEFAULT NULL,
  `Akumulasi_Nilai` varchar(15) DEFAULT NULL,
  `Perpanjangan` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cat_login`
--

CREATE TABLE `cat_login` (
  `Cat_Login_Id` int(11) NOT NULL,
  `Cat_Login_Name` varchar(20) NOT NULL,
  `Cat_Login_Hash` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cat_login`
--

INSERT INTO `cat_login` (`Cat_Login_Id`, `Cat_Login_Name`, `Cat_Login_Hash`) VALUES
(1, 'HR', '#HR#'),
(2, 'Admin', '#Admin#');

-- --------------------------------------------------------

--
-- Table structure for table `departement`
--

CREATE TABLE `departement` (
  `Id_Departement` int(11) NOT NULL,
  `Nama_Dept` varchar(20) DEFAULT NULL,
  `Keterangan` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departement`
--

INSERT INTO `departement` (`Id_Departement`, `Nama_Dept`, `Keterangan`) VALUES
(1, 'HouseKeeping', NULL),
(2, 'Front Office', NULL),
(3, 'Finance/Accounting', NULL),
(4, 'Marketing', NULL),
(5, 'Engineering', NULL),
(6, 'Securty', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `Id_Jabatan` int(11) NOT NULL,
  `Id_Dept` int(11) DEFAULT NULL,
  `Nama_Jabatan` varchar(50) DEFAULT NULL,
  `Keterangan` varchar(200) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`Id_Jabatan`, `Id_Dept`, `Nama_Jabatan`, `Keterangan`, `status`) VALUES
(1, 1, 'Manager HouseKeeping', NULL, 1),
(2, 1, 'Spv HouseKeeping', NULL, 1),
(3, 1, 'Admin HouseKeeping', NULL, 1),
(4, 1, 'Leader HouseKeeping', NULL, 0),
(5, 1, 'Attendant HouseKeeping', NULL, 0),
(6, 2, 'CPM Cashier', NULL, 1),
(7, 2, 'Spv Cashier', NULL, 1),
(8, 2, 'Admin Cashier', NULL, 1),
(9, 2, 'Leader Cashier', NULL, 1),
(10, 2, 'App Cashier', NULL, 0),
(11, 6, 'Chief Sec', NULL, NULL),
(12, 6, 'AsChief Sec', NULL, NULL),
(13, 6, 'Dandru', NULL, NULL),
(14, 6, 'Admin Sec', NULL, NULL),
(16, NULL, 'ww', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `Nip` int(11) NOT NULL,
  `Nama` varchar(70) DEFAULT NULL,
  `Jenis_Kelamin` varchar(10) DEFAULT NULL,
  `Agama` varchar(70) DEFAULT NULL,
  `Tgl_Lahir` date DEFAULT NULL,
  `Id_Jabatan` int(11) DEFAULT NULL,
  `Id_Kontrak` int(11) DEFAULT NULL,
  `No_Hp` varchar(11) DEFAULT NULL,
  `Alamat` varchar(100) DEFAULT NULL,
  `Active_Kerja` date DEFAULT NULL,
  `foto` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`Nip`, `Nama`, `Jenis_Kelamin`, `Agama`, `Tgl_Lahir`, `Id_Jabatan`, `Id_Kontrak`, `No_Hp`, `Alamat`, `Active_Kerja`, `foto`) VALUES
(11150812, 'Asep', 'Laki-Laki', 'Islam', '1996-07-06', 2, 1, '0787778232', 'Pedongkelan', '2018-07-06', NULL),
(11150813, 'Adit', 'Laki-Laki', 'Islam', '1996-07-06', 3, 2, '0787778232', 'Pedongkelan', '2018-07-06', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `Id_Kriteria` int(11) NOT NULL,
  `Kriteria` varchar(100) DEFAULT NULL,
  `Bobot_Nilai` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`Id_Kriteria`, `Kriteria`, `Bobot_Nilai`) VALUES
(1, 'Kehadiran', NULL),
(2, 'Kerapihan', NULL),
(3, 'Sikap', NULL),
(4, 'Tanggung Jawab', NULL),
(5, 'Team Work', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `list_kontrak`
--

CREATE TABLE `list_kontrak` (
  `Kd_Kontrak` int(11) NOT NULL,
  `Masa_Kontrak` varchar(15) DEFAULT NULL,
  `Keterangan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list_kontrak`
--

INSERT INTO `list_kontrak` (`Kd_Kontrak`, `Masa_Kontrak`, `Keterangan`) VALUES
(1, '3 Hari', NULL),
(2, '3 Bulan', NULL),
(3, '6 Bulan', NULL),
(4, '1 Tahun', NULL),
(5, '3 Tahun', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `cat_login_id` int(11) DEFAULT NULL,
  `Log_Nip` int(11) NOT NULL,
  `Username` varchar(50) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL,
  `Recent_Log` date DEFAULT NULL,
  `Status` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`cat_login_id`, `Log_Nip`, `Username`, `Password`, `Recent_Log`, `Status`) VALUES
(1, 11150812, 'asep', 'dc855efb0dc7476760afaa1b281665f1', NULL, NULL),
(2, 11150813, 'adit', '486b6c6b267bc61677367eb6b6458764', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `Id_News` int(11) NOT NULL,
  `Info` varchar(20) NOT NULL,
  `Keterangan` varchar(100) NOT NULL,
  `Tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`Id_News`, `Info`, `Keterangan`, `Tanggal`) VALUES
(1, 'Penilaian', 'Periode 2018-2019', '2019-03-26'),
(2, 'Karyawan', 'Penerimaan Karyawan Divisi Accounting', '2019-03-25'),
(3, 'Libur Nasional', 'Hari Libur Nasional Seluruh Karyawan', '2019-03-27'),
(4, 'Gathering', 'Acara Gathering Bagian Divisi Parking', '2019-03-30'),
(5, 'Cuti', 'Batas Pengambilan Cuti Periode 2019', '2019-03-29'),
(6, 'Penggajian', 'Tutup Buku Operasional Periode Maret 2019', '2019-03-26'),
(7, 'Penggajian', 'Penggajian Periode Februari', '2019-02-28'),
(8, 'Libur Nasional', 'Libur Nasioan Seluruh Karyawan Periode Februari', '2019-02-20'),
(9, 'Penilaian', 'Penilaian Karyawan Periode Februari', '2019-02-26'),
(10, 'Buka Bersama', 'Acara BukBer Seluruh Divisi', '2019-04-25'),
(11, 'Libur Nasional', 'Libur Nasional Idul Fitri', '2019-05-03');

-- --------------------------------------------------------

--
-- Table structure for table `penilaian`
--

CREATE TABLE `penilaian` (
  `Nip_Penilai` int(11) NOT NULL,
  `Id_Peserta` int(11) NOT NULL,
  `Id_Kriteria` int(11) DEFAULT NULL,
  `Bobot_Peserta` varchar(10) DEFAULT NULL,
  `Waktu_Nilai` date DEFAULT NULL,
  `Keterangan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penilaian`
--

INSERT INTO `penilaian` (`Nip_Penilai`, `Id_Peserta`, `Id_Kriteria`, `Bobot_Peserta`, `Waktu_Nilai`, `Keterangan`) VALUES
(0, 0, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `Auto` int(11) NOT NULL,
  `Id_Pengirim` int(11) DEFAULT NULL,
  `Id_Penerima` int(11) DEFAULT NULL,
  `Waktu` date DEFAULT NULL,
  `Pesan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `peserta_penilaian`
--

CREATE TABLE `peserta_penilaian` (
  `Id` int(11) NOT NULL,
  `Nip_Peserta` int(15) DEFAULT NULL,
  `Periode` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peserta_penilaian`
--

INSERT INTO `peserta_penilaian` (`Id`, `Nip_Peserta`, `Periode`) VALUES
(1, 11150812, '2019-06-00');

-- --------------------------------------------------------

--
-- Table structure for table `set_periode`
--

CREATE TABLE `set_periode` (
  `Id_Periode` int(11) NOT NULL,
  `Id_Dept` int(11) DEFAULT NULL,
  `Periode` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff_penilai`
--

CREATE TABLE `staff_penilai` (
  `Id` int(11) NOT NULL,
  `Staff_Penilai` int(11) DEFAULT NULL,
  `periode` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff_penilai`
--

INSERT INTO `staff_penilai` (`Id`, `Staff_Penilai`, `periode`) VALUES
(1, 11150812, '2018-08-20'),
(2, 11150812, '2018-08-20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akumulasi_akhir`
--
ALTER TABLE `akumulasi_akhir`
  ADD KEY `NewIndex1` (`Nip_Peserta`);

--
-- Indexes for table `cat_login`
--
ALTER TABLE `cat_login`
  ADD PRIMARY KEY (`Cat_Login_Id`);

--
-- Indexes for table `departement`
--
ALTER TABLE `departement`
  ADD PRIMARY KEY (`Id_Departement`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`Id_Jabatan`),
  ADD KEY `FK_jabatan` (`Id_Dept`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`Nip`),
  ADD KEY `Id_Jabatan` (`Id_Jabatan`),
  ADD KEY `Id_Kontrak` (`Id_Kontrak`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`Id_Kriteria`);

--
-- Indexes for table `list_kontrak`
--
ALTER TABLE `list_kontrak`
  ADD PRIMARY KEY (`Kd_Kontrak`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`Log_Nip`),
  ADD KEY `Log_Nip` (`Log_Nip`),
  ADD KEY `cat_login_id` (`cat_login_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`Id_News`);

--
-- Indexes for table `penilaian`
--
ALTER TABLE `penilaian`
  ADD PRIMARY KEY (`Nip_Penilai`,`Id_Peserta`),
  ADD KEY `Id_Peserta` (`Nip_Penilai`,`Id_Peserta`),
  ADD KEY `Id_Peserta_2` (`Id_Peserta`),
  ADD KEY `Id_Kriteria` (`Id_Kriteria`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`Auto`),
  ADD KEY `Id_Pengirim` (`Id_Pengirim`),
  ADD KEY `Id_Penerima` (`Id_Penerima`);

--
-- Indexes for table `peserta_penilaian`
--
ALTER TABLE `peserta_penilaian`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Nip_Peserta` (`Nip_Peserta`);

--
-- Indexes for table `set_periode`
--
ALTER TABLE `set_periode`
  ADD PRIMARY KEY (`Id_Periode`);

--
-- Indexes for table `staff_penilai`
--
ALTER TABLE `staff_penilai`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Staff_Penilai` (`Staff_Penilai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cat_login`
--
ALTER TABLE `cat_login`
  MODIFY `Cat_Login_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `departement`
--
ALTER TABLE `departement`
  MODIFY `Id_Departement` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `Id_Jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `Nip` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11150814;
--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `Id_Kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `list_kontrak`
--
ALTER TABLE `list_kontrak`
  MODIFY `Kd_Kontrak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `Id_News` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `Auto` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `peserta_penilaian`
--
ALTER TABLE `peserta_penilaian`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `set_periode`
--
ALTER TABLE `set_periode`
  MODIFY `Id_Periode` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `staff_penilai`
--
ALTER TABLE `staff_penilai`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `akumulasi_akhir`
--
ALTER TABLE `akumulasi_akhir`
  ADD CONSTRAINT `FK_akumulasi_akhir` FOREIGN KEY (`Nip_Peserta`) REFERENCES `penilaian` (`Id_Peserta`);

--
-- Constraints for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD CONSTRAINT `FK_jabatan` FOREIGN KEY (`Id_Dept`) REFERENCES `departement` (`Id_Departement`);

--
-- Constraints for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD CONSTRAINT `karyawan_ibfk_1` FOREIGN KEY (`Id_Kontrak`) REFERENCES `list_kontrak` (`Kd_Kontrak`),
  ADD CONSTRAINT `karyawan_ibfk_3` FOREIGN KEY (`Id_Jabatan`) REFERENCES `jabatan` (`Id_Jabatan`);

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `FK_login` FOREIGN KEY (`Log_Nip`) REFERENCES `karyawan` (`Nip`),
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`cat_login_id`) REFERENCES `cat_login` (`Cat_Login_Id`);

--
-- Constraints for table `penilaian`
--
ALTER TABLE `penilaian`
  ADD CONSTRAINT `penilaian_ibfk_2` FOREIGN KEY (`Id_Kriteria`) REFERENCES `kriteria` (`Id_Kriteria`);

--
-- Constraints for table `peserta_penilaian`
--
ALTER TABLE `peserta_penilaian`
  ADD CONSTRAINT `peserta_penilaian_ibfk_1` FOREIGN KEY (`Nip_Peserta`) REFERENCES `karyawan` (`Nip`);

--
-- Constraints for table `staff_penilai`
--
ALTER TABLE `staff_penilai`
  ADD CONSTRAINT `FK_staff_penilai` FOREIGN KEY (`Staff_Penilai`) REFERENCES `karyawan` (`Nip`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
