-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2021 at 06:13 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yii2basic`
--

-- --------------------------------------------------------

--
-- Table structure for table `banyak_mahasiswa`
--

CREATE TABLE `banyak_mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nomor_bp` varchar(50) NOT NULL,
  `id_jurusan` int(11) DEFAULT NULL,
  `id_prodi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `banyak_prodi`
--

CREATE TABLE `banyak_prodi` (
  `id` int(11) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banyak_prodi`
--

INSERT INTO `banyak_prodi` (`id`, `id_jurusan`, `prodi`, `keterangan`) VALUES
(1, 1, 'Teknologi Rekayasa Perangkat Lunak', 'D4'),
(2, 2, 'Teknik Sipil', 'D3'),
(3, 3, 'Teknik Mesin', 'D3');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `kode_barang` varchar(10) DEFAULT NULL,
  `nama_barang` varchar(50) DEFAULT NULL,
  `satuan` varchar(20) DEFAULT NULL,
  `id_jenis` int(11) DEFAULT NULL,
  `id_supplier` int(11) DEFAULT NULL,
  `harga` double DEFAULT NULL,
  `stok` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `kode_barang`, `nama_barang`, `satuan`, `id_jenis`, `id_supplier`, `harga`, `stok`) VALUES
(1, 'B0001', 'Coca Cola 150ml', 'Dus', 5, 2, 250000, 100),
(2, 'B0002', 'Fanta 150ml', 'Dus', 5, 2, 250000, 100),
(3, 'B0003', 'Teh Sosro 250ml', 'Dus', 5, 7, 250000, 100),
(4, 'B0004', 'Ekstrak Kurma Arab 600ml', 'Dus', 6, 8, 300000, 50),
(5, 'B0005', 'Buavita Mangga 150ml', 'Dus', 4, 6, 250000, 50),
(6, 'B0006', 'Better Combo', 'Dus', 3, 1, 100000, 100),
(7, 'B0007', 'Gorio Rio', 'Dus', 3, 10, 100000, 100),
(8, 'B0008', 'Chicken Nugget 500gr ', 'Dus', 1, 3, 500000, 50),
(9, 'B0009', 'Mie Lemonilo 200gr', 'Dus', 2, 5, 120000, 100),
(10, 'B0010', 'French Fires 2000', 'Dus', 3, 9, 100000, 100);

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `id_biodata` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `usia` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`id_biodata`, `nama`, `alamat`, `usia`) VALUES
(1, 'Hakkan', 'Duri', '20'),
(2, 'Eri', 'Padang', '20');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `code` char(2) NOT NULL,
  `name` char(52) NOT NULL,
  `population` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`code`, `name`, `population`) VALUES
('AU', 'Australia', 24016400),
('BR', 'Brazil', 205722000),
('CA', 'Canada', 35985751),
('CN', 'China', 1375210000),
('DE', 'Germany', 81459000),
('FR', 'France', 64513242),
('GB', 'United Kingdom', 65097000),
('IN', 'India', 1285400000),
('RU', 'Russia', 146519759),
('US', 'United States', 322976000);

-- --------------------------------------------------------

--
-- Table structure for table `daftar_buku`
--

CREATE TABLE `daftar_buku` (
  `buku_id` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `pengarang` varchar(100) NOT NULL,
  `tahun_terbit` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daftar_buku`
--

INSERT INTO `daftar_buku` (`buku_id`, `kategori_id`, `judul`, `pengarang`, `tahun_terbit`) VALUES
(1, 1, 'Belajar Yii2', 'Hakkan', 2020);

-- --------------------------------------------------------

--
-- Table structure for table `daftar_kategori_buku`
--

CREATE TABLE `daftar_kategori_buku` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daftar_kategori_buku`
--

INSERT INTO `daftar_kategori_buku` (`id`, `nama`) VALUES
(1, 'Ilmiah');

-- --------------------------------------------------------

--
-- Table structure for table `giibarang`
--

CREATE TABLE `giibarang` (
  `id` int(11) NOT NULL,
  `kode_barang` varchar(10) DEFAULT NULL,
  `nama_barang` varchar(50) DEFAULT NULL,
  `satuan` varchar(20) DEFAULT NULL,
  `id_jenis` int(11) DEFAULT NULL,
  `id_supllier` int(11) DEFAULT NULL,
  `harga` double DEFAULT NULL,
  `stok` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `giibarang`
--

INSERT INTO `giibarang` (`id`, `kode_barang`, `nama_barang`, `satuan`, `id_jenis`, `id_supllier`, `harga`, `stok`) VALUES
(1, 'B0001', 'Coca Cola 150ml', 'Dus', 5, 2, 250000, 100),
(2, 'B0002', 'Fanta 150ml', 'Dus', 5, 2, 250000, 100),
(3, 'B0003', 'Teh Sosro 250ml', 'Dus', 5, 7, 250000, 100),
(4, 'B0004', 'Ekstrak Kurma Arab 600ml', 'Dus', 6, 8, 300000, 50),
(5, 'B0005', 'Buavita Mangga 150ml', 'Dus', 4, 6, 250000, 50),
(6, 'B0006', 'Better Combo', 'Dus', 3, 1, 100000, 100),
(7, 'B0007', 'Gorio Rio', 'Dus', 3, 10, 100000, 100),
(8, 'B0008', 'Chicken Nugget 500gr 150ml', 'Dus', 1, 3, 50000, 50),
(9, 'B0009', 'Mie Lemonilo 200gr', 'Dus', 2, 5, 120000, 100),
(10, 'B0010', 'French Fires 2000', 'Dus', 3, 9, 100000, 100);

-- --------------------------------------------------------

--
-- Table structure for table `giijenis`
--

CREATE TABLE `giijenis` (
  `id` int(11) NOT NULL,
  `nama_jenis` varchar(50) DEFAULT NULL,
  `keterangan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `giijenis`
--

INSERT INTO `giijenis` (`id`, `nama_jenis`, `keterangan`) VALUES
(1, 'Makanan Beku', 'Makanan dingin dan beku yang nikmat'),
(2, 'Makanan Sehat', 'Makanan sehat, baik dan nikmat'),
(3, 'Makanan Ringan', 'Makanan ringan yang nikmat'),
(4, 'Minuman Sehat', 'Minuman sehat, segar dan nikmat'),
(5, 'Minuman Ringan', 'Minuman ringan yang nikmat'),
(6, 'Minuman herbal', 'Minuman herbal yang alami dan nikmat');

-- --------------------------------------------------------

--
-- Table structure for table `giisupplier`
--

CREATE TABLE `giisupplier` (
  `id` int(11) NOT NULL,
  `nama_supplier` varchar(50) DEFAULT NULL,
  `notelp` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `alamat` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `giisupplier`
--

INSERT INTO `giisupplier` (`id`, `nama_supplier`, `notelp`, `email`, `alamat`) VALUES
(1, 'PT.Mayora', '(021)111', 'mayora.company@gmail.com', 'Jakarta'),
(2, 'PT.Coca Cola Indonesia', '(021)112', 'cocacola.id.company@gmail.com', 'Jakarta'),
(3, 'PT.Fiesta', '(021)113', 'fiesta.company@gmail.com', 'Jakarta'),
(4, 'PT.Rio Food', '(021)114', 'riofood.company@gmail.com', 'Jakarta'),
(5, 'PT.Nita Karya', '(021)115', 'nita.company@gmail.com', 'Bandung'),
(6, 'PT.Sarifit', '(021)116', 'sarifit.company@gmail.com', 'Jakarta'),
(7, 'PT.Sosro', '(021)117', 'sosro.company@gmail.com', 'Bandung'),
(8, 'PT.HNI', '(021)118', 'hni.company@gmail.com', 'Bandung'),
(9, 'PT.Ahmad Jaya', '(021)119', 'ahmad.company@gmail.com', 'Jakarta'),
(10, 'PT.Siantar Top', '(021)119', 'siantartop.company@gmail.com', 'Bekasi');

-- --------------------------------------------------------

--
-- Table structure for table `informasi_ujian`
--

CREATE TABLE `informasi_ujian` (
  `nomor_pendaftaran` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kota_ujian` varchar(50) NOT NULL,
  `lokasi_ujian` varchar(50) NOT NULL,
  `id_sekolah` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `informasi_ujian`
--

INSERT INTO `informasi_ujian` (`nomor_pendaftaran`, `nama`, `kota_ujian`, `lokasi_ujian`, `id_sekolah`) VALUES
(1, 'Ali Amir', 'Padang', 'SMAN 1 Padang', 'P0001'),
(2, 'Bellina M', 'Padang', 'SMAN 2 Padang', 'P0002'),
(3, 'Cika', 'Bukittinggi', 'SMAN 1 Bukittinggi', 'B0001'),
(4, 'Deni', 'Bukittinggi', 'SMAN 2 Bukittinggi', 'B0002');

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE `jenis` (
  `id` int(11) NOT NULL,
  `nama_jenis` varchar(50) DEFAULT NULL,
  `keterangan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`id`, `nama_jenis`, `keterangan`) VALUES
(1, 'Makanan Beku', 'Makanan dingin dan beku yang nikmat'),
(2, 'Makanan Sehat', 'Makanan sehat, baik dan nikmat'),
(3, 'Makanan Ringan', 'Makanan ringan yang nikmat'),
(4, 'Minuman Sehat', 'Minuman sehat, segar dan nikmat'),
(5, 'Minuman Ringan', 'Minuman ringan yang nikmat'),
(6, 'Minuman herbal', 'Minuman herbal yang alami dan nikmat');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id` int(11) NOT NULL,
  `KodeJurusan` varchar(20) NOT NULL,
  `NamaJurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id`, `KodeJurusan`, `NamaJurusan`) VALUES
(1, 'TI', 'Teknologi Informasi'),
(2, 'TS', 'Teknik Sipil'),
(3, 'TM', 'Teknik Mesin');

-- --------------------------------------------------------

--
-- Table structure for table `kamar_pasien`
--

CREATE TABLE `kamar_pasien` (
  `id_kamar` varchar(10) NOT NULL,
  `lantai` int(11) NOT NULL,
  `tipe_kamar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kamar_pasien`
--

INSERT INTO `kamar_pasien` (`id_kamar`, `lantai`, `tipe_kamar`) VALUES
('A001', 1, 'Reguler'),
('A002', 1, 'Reguler'),
('AS001', 1, 'VIP'),
('AS002', 1, 'VIP'),
('B001', 2, 'Reguler'),
('B002', 2, 'Reguler'),
('BS001', 2, 'VIP'),
('BS002', 2, 'VIP'),
('C001', 3, 'Reguler'),
('C002', 3, 'Reguler'),
('CS001', 3, 'VIP'),
('CS002', 3, 'VIP'),
('D001', 4, 'Reguler');

-- --------------------------------------------------------

--
-- Table structure for table `lokasi_sekolah`
--

CREATE TABLE `lokasi_sekolah` (
  `id_sekolah` varchar(10) NOT NULL,
  `nama_sekolah` varchar(50) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lokasi_sekolah`
--

INSERT INTO `lokasi_sekolah` (`id_sekolah`, `nama_sekolah`, `kota`, `alamat`) VALUES
('B0001', 'SMAN 1 Bukittinggi', 'Bukittinggi', 'Jl.Syekh Jamil Jambek'),
('B0002', 'SMAN 2 Bukittinggi', 'Bukittinggi', 'Jl.Sudirman'),
('P0001', 'SMAN 1 Padang', 'Padang', 'Jl.Belanti Raya'),
('P0002', 'SMAN 2 Padang', 'Padang', 'Jl.Musi');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nim` varchar(18) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `jekel` char(1) DEFAULT NULL,
  `id_prodi` int(11) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nim`, `nama`, `jekel`, `id_prodi`, `email`, `alamat`) VALUES
(1, '1911082001', 'Andi Irham', 'L', 203001, 'andi@gmail.com', 'jl.Paus, No.1'),
(2, '1911082002', 'Bunga Citra', 'P', 203001, 'bunga@gmail.com', 'jl.Suka Damai, No.22'),
(3, '1911082003', 'Cindy Irma', 'P', 203001, 'cindy@gmail.com', 'jl.Sumatra, No.31'),
(4, '1911082004', 'Daru Ilyasa', 'L', 203001, 'daru@gmail.com', 'jl.Jawa, No.21'),
(5, '1911082005', 'Egi Maulana', 'L', 203001, 'egi@gmail.com', 'jl.Mawar, No.111'),
(6, '1911082006', 'Fikri Bani', 'L', 203001, 'fikri@gmail.com', 'jl.Kenanga, No.41'),
(7, '1911082007', 'Golda Kahhfi', 'P', 203001, 'golda@gmail.com', 'jl.Sudirman, No.19'),
(8, '1911082008', 'Hendra Pare', 'L', 203001, 'hendra@gmail.com', 'jl.Ahamad Yani, No.23'),
(9, '1911082009', 'Indah Lyodra', 'P', 203001, 'indah@gmail.com', 'jl.Hangtuah, No.14'),
(10, '1911082010', 'Joko Widona', 'L', 203001, 'joko@gmail.com', 'jl.Mataram, No.20'),
(11, '1911082011', 'Keanu Reeves', 'L', 203003, 'keanu@gmail.com', 'jl. Demak, No.33');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_kamar` varchar(10) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(50) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_kamar`, `id_pasien`, `nama`, `jenis_kelamin`, `tanggal_lahir`, `agama`, `no_hp`, `alamat`) VALUES
('A001', 1, 'Arie Irham', 'Laki-laki', '1999-12-02', 'Islam', '+625288440953', 'Jl. Suka Damai, No.2'),
('AS001', 2, 'Benjamin Sianta', 'Laki-laki', '1990-02-06', 'Kristen', '+625211228822', 'Jl.Mawar, No.1'),
('A002', 3, 'Lin Dan', 'Laki-laki', '1999-12-31', 'Budha', '+625288442123', 'Jl. Asia, No.3'),
('AS002', 4, 'Made Irawan', 'Laki-laki', '1960-02-03', 'Budha', '+6289822782111', 'Jl.Aster, No.5'),
('B001', 5, 'Iriana Nina', 'Perempuan', '1980-01-01', 'Katholik', '+6289811785423', 'Jl.Sakura, No.12'),
('BS001', 6, 'Karina Tjahyani', 'Perempuan', '1971-08-01', 'Konghucu', '+6289819029892', 'Jl.Widuri, No.11');

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `id` int(11) NOT NULL,
  `prodi` varchar(50) DEFAULT NULL,
  `keterangan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`id`, `prodi`, `keterangan`) VALUES
(203001, 'TK', 'D3 Teknik Komputer'),
(203002, 'MI', 'D3 Manajemen Informatika'),
(203003, 'TRPL', 'D4 Teknologi Rekayasa Perangkat Lunak');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id` int(11) NOT NULL,
  `nama_supplier` varchar(50) DEFAULT NULL,
  `notelp` varchar(15) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `alamat` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id`, `nama_supplier`, `notelp`, `email`, `alamat`) VALUES
(1, 'PT. Mayora', '(021)111', 'mayora.company@gmail.com', 'Jakarta'),
(2, 'PT. Coca Cola Indonesia', '(021)112', 'cocacompany@gmail.com', 'Jakarta'),
(3, 'PT. Fiesta', '(021)113', 'fiesta.company@gmail.com', 'Jakarta'),
(4, 'PT. Rio Food', '(021)114', 'riofood.company@gmail.com', 'Jakarta'),
(5, 'PT. Nita Karya', '(021)115', 'nita.company@gmail.com', 'Bandung'),
(6, 'PT. Sarifit', '(021)116', 'sarifit.company@gmail.com', 'Jakarta'),
(7, 'PT. Sosro', '(021)117', 'sosro.company@gmail.com', 'Bandung'),
(8, 'PT. HNI', '(021)118', 'hni.company@gmail.com', 'Bandung'),
(9, 'PT. Ahmad Jaya', '(021)119', 'ahmad.company@gmail.com', 'Jakarta'),
(10, 'PT. Siantar Top', '(021)119', 'siantar.company@gmail.com', 'Bekasi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_benchmark`
--

CREATE TABLE `tb_benchmark` (
  `id` int(11) NOT NULL,
  `framework` varchar(50) NOT NULL,
  `nilai` double NOT NULL,
  `penggunaan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_benchmark`
--

INSERT INTO `tb_benchmark` (`id`, `framework`, `nilai`, `penggunaan`) VALUES
(1, 'HakkanFramework', 100, 2000),
(2, 'AliFramework', 80, 1000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banyak_mahasiswa`
--
ALTER TABLE `banyak_mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idJurusan` (`id_jurusan`),
  ADD KEY `idProdi` (`id_prodi`);

--
-- Indexes for table `banyak_prodi`
--
ALTER TABLE `banyak_prodi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idJurusan` (`id_jurusan`),
  ADD KEY `idJurusan_2` (`id_jurusan`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`id_biodata`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `daftar_buku`
--
ALTER TABLE `daftar_buku`
  ADD PRIMARY KEY (`buku_id`),
  ADD KEY `Buat` (`kategori_id`);

--
-- Indexes for table `daftar_kategori_buku`
--
ALTER TABLE `daftar_kategori_buku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `giibarang`
--
ALTER TABLE `giibarang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `giijenis`
--
ALTER TABLE `giijenis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_jenis_idx` (`id`);

--
-- Indexes for table `giisupplier`
--
ALTER TABLE `giisupplier`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_supllier_idx` (`id`);

--
-- Indexes for table `informasi_ujian`
--
ALTER TABLE `informasi_ujian`
  ADD PRIMARY KEY (`nomor_pendaftaran`),
  ADD KEY `idSekolah` (`id_sekolah`);

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_jenis_idx` (`id`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kamar_pasien`
--
ALTER TABLE `kamar_pasien`
  ADD PRIMARY KEY (`id_kamar`);

--
-- Indexes for table `lokasi_sekolah`
--
ALTER TABLE `lokasi_sekolah`
  ADD PRIMARY KEY (`id_sekolah`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_prodi` (`id_prodi`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`),
  ADD KEY `id_kamar` (`id_kamar`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_supllier_idx` (`id`);

--
-- Indexes for table `tb_benchmark`
--
ALTER TABLE `tb_benchmark`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banyak_mahasiswa`
--
ALTER TABLE `banyak_mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `banyak_prodi`
--
ALTER TABLE `banyak_prodi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `biodata`
--
ALTER TABLE `biodata`
  MODIFY `id_biodata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `daftar_buku`
--
ALTER TABLE `daftar_buku`
  MODIFY `buku_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `daftar_kategori_buku`
--
ALTER TABLE `daftar_kategori_buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `giibarang`
--
ALTER TABLE `giibarang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `giijenis`
--
ALTER TABLE `giijenis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `giisupplier`
--
ALTER TABLE `giisupplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `informasi_ujian`
--
ALTER TABLE `informasi_ujian`
  MODIFY `nomor_pendaftaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=203004;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_benchmark`
--
ALTER TABLE `tb_benchmark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `banyak_mahasiswa`
--
ALTER TABLE `banyak_mahasiswa`
  ADD CONSTRAINT `idJurusan` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id`),
  ADD CONSTRAINT `idProdi` FOREIGN KEY (`id_prodi`) REFERENCES `banyak_prodi` (`id`);

--
-- Constraints for table `banyak_prodi`
--
ALTER TABLE `banyak_prodi`
  ADD CONSTRAINT `prodi_ibfk_1` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id`);

--
-- Constraints for table `daftar_buku`
--
ALTER TABLE `daftar_buku`
  ADD CONSTRAINT `Buat` FOREIGN KEY (`kategori_id`) REFERENCES `daftar_kategori_buku` (`id`);

--
-- Constraints for table `informasi_ujian`
--
ALTER TABLE `informasi_ujian`
  ADD CONSTRAINT `idSekolah` FOREIGN KEY (`id_sekolah`) REFERENCES `lokasi_sekolah` (`id_sekolah`);

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_ibfk_1` FOREIGN KEY (`id_prodi`) REFERENCES `prodi` (`id`);

--
-- Constraints for table `pasien`
--
ALTER TABLE `pasien`
  ADD CONSTRAINT `id_kamar` FOREIGN KEY (`id_kamar`) REFERENCES `kamar_pasien` (`id_kamar`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
