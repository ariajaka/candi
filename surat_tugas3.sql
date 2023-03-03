-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2023 at 05:27 AM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `surat_tugas3`
--
CREATE DATABASE IF NOT EXISTS `surat_tugas3` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `surat_tugas3`;

-- --------------------------------------------------------

--
-- Table structure for table `anggaran`
--

CREATE TABLE IF NOT EXISTS `anggaran` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mak` varchar(50) NOT NULL,
  `kegiatan` varchar(256) NOT NULL,
  `pagu` bigint(20) NOT NULL,
  `tanggal_revisi` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=315 ;

--
-- Dumping data for table `anggaran`
--

INSERT INTO `anggaran` (`id`, `mak`, `kegiatan`, `pagu`, `tanggal_revisi`) VALUES
(1, '063.01.DR.3165.AEA.001.052.A.521211 A', 'Perencanaan Penyusunan Analisis', 1180000, '2021-12-16'),
(2, '063.01.DR.3165.AEA.001.052.A.521211 B', 'Pengumpulan Bahan Keterangan dalam rangka Penyusunan Analisis Kejahatan Obat dan Makanan', 1000000, '2021-12-16'),
(3, '063.01.DR.3165.AEA.001.052.A.521219 B', 'Pengumpulan Bahan Keterangan dalam rangka Penyusunan Analisis Kejahatan Obat dan Makanan', 3000000, '2021-12-16'),
(4, '063.01.DR.3165.AEA.001.052.A.522141 B', 'Pengumpulan Bahan Keterangan dalam rangka Penyusunan Analisis Kejahatan Obat dan Makanan', 5064000, '2021-12-16'),
(5, '063.01.DR.3165.AEA.001.052.A.524111 B', 'Pengumpulan Bahan Keterangan dalam rangka Penyusunan Analisis Kejahatan Obat dan Makanan', 18960000, '2021-12-16'),
(6, '063.01.DR.3165.AEA.001.052.A.524113 B', 'Pengumpulan Bahan Keterangan dalam rangka Penyusunan Analisis Kejahatan Obat dan Makanan', 2700000, '2021-12-16'),
(7, '063.01.DR.3165.AEA.001.052.A.521211 C', 'FGD Hasil Analisis Kejahatan Obat dan Makanan', 3360000, '2021-12-16'),
(8, '063.01.DR.3165.AEA.001.052.A.521211 D', 'Rapat Perencanaan Penjejakan Digital Kejahatan Obat dan Makanan', 590000, '2021-12-16'),
(9, '063.01.DR.3165.AEA.001.052.A.521211 E', 'Patroli Siber dan Profiling Kejahatan Obat dan Makanan', 2558000, '2021-12-16'),
(10, '063.01.DR.3165.AEA.001.052.A.521211 F', 'Verifikasi Data Hasil Patroli Siber dan Profiling Kejahatan Obat dan Makanan', 1334000, '2021-12-16'),
(11, '063.01.DR.3165.AEA.001.052.A.521219 F', 'Verifikasi Data Hasil Patroli Siber dan Profiling Kejahatan Obat dan Makanan', 2000000, '2021-12-16'),
(12, '063.01.DR.3165.AEA.001.052.A.522141 F', 'Verifikasi Data Hasil Patroli Siber dan Profiling Kejahatan Obat dan Makanan', 3376000, '2021-12-16'),
(13, '063.01.DR.3165.AEA.001.052.A.524111 F', 'Verifikasi Data Hasil Patroli Siber dan Profiling Kejahatan Obat dan Makanan', 18640000, '2021-12-16'),
(14, '063.01.DR.3165.AEA.001.052.A.524113 F', 'Verifikasi Data Hasil Patroli Siber dan Profiling Kejahatan Obat dan Makanan', 1800000, '2021-12-16'),
(15, '063.01.DR.3165.AEA.001.052.A.521211 G', 'Evaluasi Kegiatan Patroli Siber dan Profiling Kejahatan Obat dan Makanan', 990000, '2021-12-16'),
(16, '063.01.DR.3165.AEA.001.053.A.524119 A', 'Bimtek Aplikasi Dashboard Penindakan (Peta Rawan Kasus)', 5360000, '2021-12-16'),
(17, '063.01.DR.3165.AEA.001.053.A.524119 B', 'Konsultasi Nasional Pencegahan Kejahatan Obat dan Makanan', 5360000, '2021-12-16'),
(18, '063.01.DR.3165.AEA.001.053.A.524119 C', 'Pembentukan Petugas Analis Pencegahan Kejahatan', 5360000, '2021-12-16'),
(19, '063.01.DR.3165.AEA.001.053.A.524119 D', 'Pembentukan Petugas Penggalangan', 10720000, '2021-12-16'),
(20, '063.01.DR.3165.AEA.001.053.A.524119 E', 'Pertemuan Koordinasi Lintas Sektor Pengawasan Siber Obat dan Makanan', 5360000, '2021-12-16'),
(21, '063.01.DR.3165.AEA.001.053.A.524119 F', 'Pertemuan Peningkatan Kinerja Profesionalisme dan  Koordinasi PPNS Badan POM', 5360000, '2021-12-16'),
(22, '063.01.DR.3165.AEA.001.053.A.524119 G', 'Forum Koordinasi Intelijen', 5360000, '2021-12-16'),
(23, '063.01.DR.3165.AEA.001.053.A.524119 H', 'Pertemuan Perkuatan Mekanisme Operasi Penyidikan Obat dan  Makanan', 5360000, '2021-12-16'),
(24, '063.01.DR.3165.AEA.001.053.A.524119 I', 'Pendidikan Pelatihan dan Pembentukan PPNS Badan POM RI', 5360000, '2021-12-16'),
(25, '063.01.DR.3165.AEA.001.053.A.524119 J', 'Pembentukan Petugas Intelijen BPOM', 5360000, '2021-12-16'),
(26, '063.01.DR.3165.AEA.001.053.A.524119 K', 'Workshop Intelijen Strategis', 5360000, '2021-12-16'),
(27, '063.01.DR.3165.AEA.001.053.A.524119 L', 'Bimtek Sistem Monitoring Obat dan Makanan kepada UPT Badan POM', 5360000, '2021-12-16'),
(28, '063.01.DR.3165.AEA.001.053.A.524119 M', 'Perkuatan Petugas Intelijen BPOM', 5360000, '2021-12-16'),
(29, '063.01.DR.3165.AEA.001.053.A.532111 N', 'Belanja Modal Peralatan dan Mesin', 5400000, '2021-12-16'),
(30, '063.01.DR.3165.BAH.001.051.A.524111 A', 'PRE-AUDIT/VERIFIKASI SARANA PRODUKSI  DAN DISTRIBUSI OBAT DAN MAKANAN', 24120000, '2021-12-16'),
(31, '063.01.DR.3165.BAH.001.051.A.524113 A', 'PRE-AUDIT/VERIFIKASI SARANA PRODUKSI  DAN DISTRIBUSI OBAT DAN MAKANAN', 12000000, '2021-12-16'),
(32, '063.01.DR.3165.BAH.001.051.A.524111 B', 'AUDIT SURVEILAN / AUDIT CALON PENERIMA PIAGAM BINTANG  KEAMANAN', 8040000, '2021-12-16'),
(33, '063.01.DR.3165.BAH.001.051.A.524113 B', 'AUDIT SURVEILAN / AUDIT CALON PENERIMA PIAGAM BINTANG  KEAMANAN', 9000000, '2021-12-16'),
(34, '063.01.DR.3165.BAH.001.052.A.524111 A', 'TREACE OMA', 32160000, '2021-12-16'),
(35, '063.01.DR.3165.BAH.001.052.A.524113 A', 'TREACE OMA', 7500000, '2021-12-16'),
(36, '063.01.DR.3165.BAH.001.052.A.521811 B', 'PENGUJIAN LABORATORIUM SAMPEL PIHAK KETIGA', 61180000, '2021-12-16'),
(37, '063.01.DR.3165.BDG.001.051.A.524111 A', ' Pembinaan UMKM', 11184000, '2021-12-16'),
(38, '063.01.DR.3165.BDG.001.051.A.524113 A', ' Pembinaan UMKM', 7500000, '2021-12-16'),
(39, '063.01.DR.3165.BDG.001.051.A.521211 B', 'BIMTEK E-REGISTRASI PANGAN OLAHAN', 12000000, '2021-12-16'),
(40, '063.01.DR.3165.BDG.001.051.A.521213 B', 'BIMTEK E-REGISTRASI PANGAN OLAHAN', 700000, '2021-12-16'),
(41, '063.01.DR.3165.BDG.001.051.A.522151 B', 'BIMTEK E-REGISTRASI PANGAN OLAHAN', 3600000, '2021-12-16'),
(42, '063.01.DR.3165.BDG.001.051.A.524114 B', 'BIMTEK E-REGISTRASI PANGAN OLAHAN', 15130000, '2021-12-16'),
(43, '063.01.DR.3165.BDG.001.051.A.524119 B', 'BIMTEK E-REGISTRASI PANGAN OLAHAN', 13750000, '2021-12-16'),
(44, '063.01.DR.3165.BKB.001.051.A.521115 A', 'Perencanaan/Implementasi/Pengelolaan Sistem Akuntansi Pemerintah', 21600000, '2021-12-16'),
(45, '063.01.DR.3165.BKB.001.051.A.524113 B', 'Pemutakhiran Data dalam rangka Penyusunan Laporan BMN semester 2', 1800000, '2021-12-16'),
(46, '063.01.DR.3165.BKB.001.051.A.524119 B', 'Pemutakhiran Data dalam rangka Penyusunan Laporan BMN semester 2', 9060000, '2021-12-16'),
(47, '063.01.DR.3165.BKB.001.051.A.524119 C', 'Bimtek SAKIP dan Monev Online', 9060000, '2021-12-16'),
(48, '063.01.DR.3165.BKB.001.051.D.521211 D', 'Administrasi Kegiatan', 34653000, '2021-12-16'),
(49, '063.01.DR.3165.BKB.001.051.A.521211 D', 'Administrasi Kegiatan', 41762000, '2021-12-16'),
(50, '063.01.DR.3165.BKB.001.051.A.521219 D', 'Administrasi Kegiatan', 5600000, '2021-12-16'),
(51, '063.01.DR.3165.BKB.001.051.A.521811 D', 'Administrasi Kegiatan', 48000000, '2021-12-16'),
(52, '063.01.DR.3165.BKB.001.051.A.522151 D', 'Administrasi Kegiatan', 1400000, '2021-12-16'),
(53, '063.01.DR.3165.BKB.001.052.A.524119 A', 'Rapat Kerja Nasional Pengawas Obat dan Makanan di Denpasar', 14120000, '2021-12-16'),
(54, '063.01.DR.3165.BKB.001.052.A.524119 B', 'Bimtek Review Renstra', 11560000, '2021-12-16'),
(55, '063.01.DR.3165.BKB.001.052.A.524119 C', 'Rapat Evaluasi Nasional Badan POM di Manado', 26560000, '2021-12-16'),
(56, '063.01.DR.3165.BKB.001.052.A.521211 D', 'AUDIT INTERNAL QMS ISO 9001:2015 ke Batam', 2720000, '2021-12-16'),
(57, '063.01.DR.3165.BKB.001.052.A.524111 D', 'AUDIT INTERNAL QMS ISO 9001:2015 ke Batam', 19290000, '2021-12-16'),
(58, '063.01.DR.3165.BKB.001.052.A.524119 E', 'Sinergisme Efektivitas Tata Kelola Pemerintahan Melalui Implementasi dan Evaluasi RB dan ZI WBK/WBBM dalam Rangka Peningkatan Kualitas Pelayanan Publik', 5060000, '2021-12-16'),
(59, '063.01.DR.3165.BKB.001.052.A.521211 F', 'Surveilan QMS ISO 9001:2015 BPOM', 2880000, '2021-12-16'),
(60, '063.01.DR.3165.BKB.001.052.A.524119 G', 'Diklat untuk Pegawai Teladan / Pemenang Lomba Inovasi / Arsiparis Teladan.', 9110000, '2021-12-16'),
(61, '063.01.DR.3165.BKB.001.052.A.524119 H', 'Pelatihan Agent of Change/ Reformasi Birokrasi', 5560000, '2021-12-16'),
(62, '063.01.DR.3165.BKB.001.052.A.524119 I', 'Pelatihan Pelayanan Publik', 5560000, '2021-12-16'),
(63, '063.01.DR.3165.BKB.001.052.A.524119 J', 'Diklat Fungsional Non PFM', 11120000, '2021-12-16'),
(64, '063.01.DR.3165.BKB.001.052.A.524119 K', 'Asistensi Penyusunan Perencanaan Kinerja UPT BPOM Tahun 2022', 5560000, '2021-12-16'),
(65, '063.01.DR.3165.BKB.001.052.A.521219 L', 'Peningkatan Kompetensi Pegawai (balai)', 4500000, '2021-12-16'),
(66, '063.01.DR.3165.BKB.001.052.A.524111 L', 'Peningkatan Kompetensi Pegawai (balai)', 7570000, '2021-12-16'),
(67, '063.01.DR.3165.BKB.001.052.A.524111 M', 'Pelatihan Dasar CPNS 2022', 66050000, '2021-12-16'),
(68, '063.01.DR.3165.BKB.001.052.A.524119 N', 'Forum Komunikasi Perencana BPOM', 4530000, '2021-12-16'),
(69, '063.01.DR.3165.BKB.001.052.A.524119 O', 'Workshop Pengadaan barang dan Jasa', 16680000, '2021-12-16'),
(70, '063.01.DR.3165.BKB.001.052.A.524119 P', 'Workshop Pengelolaan Kerasipan secara Digital', 5560000, '2021-12-16'),
(71, '063.01.DR.3165.BKB.001.052.A.521211 Q', 'Pengawasan Intern Inspektorat I', 850000, '2021-12-16'),
(72, '063.01.DR.3165.BKB.001.052.A.521211 R', 'Intervensi Pemenuhan Indikator WBK/WBBM', 1190000, '2021-12-16'),
(73, '063.01.DR.3165.BKB.001.052.A.524119 S', 'Pelatihan Kepemimpinan', 5560000, '2021-12-16'),
(74, '063.01.DR.3165.BKB.001.052.A.524119 T', 'Pelatihan Lead Auditor Internal', 5560000, '2021-12-16'),
(75, '063.01.DR.3165.BMB.001.051.A.522191 A', 'KIE Media Cetak/Elektronik/ Medsos/Baleho / media luar ruang', 100000000, '2021-12-16'),
(76, '063.01.DR.3165.BMB.001.051.A.521211 B', 'Operasional Layanan Publik', 24000000, '2021-12-16'),
(77, '063.01.DR.3165.CAB.002.051.A.532111 A', 'Kendaraan ROda 2 Balai', 25000000, '2021-12-16'),
(78, '063.01.DR.3165.CAB.002.053.A.536111 A', 'Pengadaan meublair', 20000000, '2021-12-16'),
(79, '063.01.DR.3165.CAB.002.053.A.536111 B', 'pengadaan Dehumidifier', 7500000, '2021-12-16'),
(80, '063.01.DR.3165.CAB.002.053.A.536111 C', 'Mesin Penghancur Kertas', 11600000, '2021-12-16'),
(81, '063.01.DR.3165.CAB.002.053.A.536111 D', 'Pengadaan CCTV', 27500000, '2021-12-16'),
(82, '063.01.DR.3165.CAB.002.053.A.536111 E', 'Pengadaan Tabung Pemadam Kebakaran', 18750000, '2021-12-16'),
(83, '063.01.DR.3165.CAB.002.053.A.536111 F', 'Pengadaan AC', 51658000, '2021-12-16'),
(84, '063.01.DR.3165.CAN.001.051.A.532111 A', 'Pengadaan Alat Pengolah data', 104400000, '2021-12-16'),
(85, '063.01.DR.3165.EBA.962.051.A.521119 A', 'Pengadaan Pakaian Dinas', 73913000, '2021-12-16'),
(86, '063.01.DR.3165.EBA.962.051.A.522191 B', 'Pemusnahan Limbah Bahan Berbahaya', 31992000, '2021-12-16'),
(87, '063.01.DR.3165.EBA.962.051.A.521113 C', 'Operasional Percepatan Penanganan Pandemi Covid 19', 74160000, '2021-12-16'),
(88, '063.01.DR.3165.EBA.962.051.A.521131 C', 'Operasional Percepatan Penanganan Pandemi Covid 19', 10000000, '2021-12-16'),
(89, '063.01.DR.3165.EBA.962.051.A.522192 C', 'Operasional Percepatan Penanganan Pandemi Covid 19', 5000000, '2021-12-16'),
(90, '063.01.DR.3165.EBA.962.051.D.522191 D', 'Pemeriksaan Kesehatan Resiko Pekerjaan', 116050000, '2021-12-16'),
(91, '063.01.DR.3165.EBA.962.051.A.522141 E', 'sewa rumah dinas', 60000000, '2021-12-16'),
(92, '063.01.DR.3165.PDD.001.051.A.524111 A', ' Bimtek Analisis dengan Instrumen Bidang  OT SK dan Kosmetik', 17220000, '2021-12-16'),
(93, '063.01.DR.3165.PDD.001.051.A.524111 B', 'Bimtek  Analisis dengan Instrumen Bidang Kimia Obat dan NAPZA', 8610000, '2021-12-16'),
(94, '063.01.DR.3165.PDD.001.051.A.524111 C', 'Bimtek Analisis Bidang Mikrobiologi', 8610000, '2021-12-16'),
(95, '063.01.DR.3165.PDD.001.051.A.524111 D', 'Bimtek Analisis dengan Instrumen Bidang Pangan dan air', 8610000, '2021-12-16'),
(96, '063.01.DR.3165.PDD.001.051.A.524111 E', 'Belanja Perjalanan Dinas Biasa', 8610000, '2021-12-16'),
(97, '063.01.DR.3165.PDD.001.051.A.524111 F', 'Magang Kimia Obat dan NAPZA', 17220000, '2021-12-16'),
(98, '063.01.DR.3165.PDD.001.051.A.524111 G', 'Magang Kimia Kosmetik', 8610000, '2021-12-16'),
(99, '063.01.DR.3165.PDD.001.051.A.522191 H', ' Webinar Sistem Mutu Laboratorium', 5000000, '2021-12-16'),
(100, '063.01.DR.3165.PDD.001.052.D.521811 A', 'Pengadaan Glassware dan Suku Cadang', 438898000, '2021-12-16'),
(101, '063.01.DR.3165.PDD.001.052.A.523121 B', 'Perawatan dan Performance Instrument  Laboratorium', 100000000, '2021-12-16'),
(102, '063.01.DR.3165.PDD.001.054.A.521211 A', 'Penilaian Kemampuan Laboratorium BB/BPOM', 918000, '2021-12-16'),
(103, '063.01.DR.3165.PDD.001.054.A.521211 B', 'Kalibrasi Alat Laboratorium', 510000, '2021-12-16'),
(104, '063.01.DR.3165.PDD.001.054.A.522191 B', 'Kalibrasi Alat Laboratorium', 8390000, '2021-12-16'),
(105, '063.01.DR.3165.PDD.001.054.A.524111 B', 'Kalibrasi Alat Laboratorium', 23160000, '2021-12-16'),
(106, '063.01.DR.3165.PDD.001.054.A.521211 C', 'Verifikasi Metode Analisa', 54000000, '2021-12-16'),
(107, '063.01.DR.3165.PDD.001.054.A.521211 D', 'Uji Profisiensi/ Kolaborasi MA/ Uji Banding', 64000000, '2021-12-16'),
(108, '063.01.DR.3165.PDD.001.054.A.522191 D', 'Uji Profisiensi/ Kolaborasi MA/ Uji Banding', 4500000, '2021-12-16'),
(109, '063.01.DR.3165.PDD.001.056.A.521211 A', 'Surveilan Akreditasi Laboratorium oleh BSN -KAN', 1712000, '2021-12-16'),
(110, '063.01.DR.3165.PDD.001.056.A.522191 A', 'Surveilan Akreditasi Laboratorium oleh BSN -KAN', 43500000, '2021-12-16'),
(111, '063.01.DR.3165.PDD.001.056.A.524111 A', 'Surveilan Akreditasi Laboratorium oleh BSN -KAN', 30600000, '2021-12-16'),
(112, '063.01.DR.3165.PDD.001.056.A.524111 B', 'Konsultasi Sistem Mutu Pengujian', 39720000, '2021-12-16'),
(113, '063.01.DR.3165.PDD.001.056.D.521115 C', 'Operasional dan Pengelolaan Laboratorium', 164280000, '2021-12-16'),
(114, '063.01.DR.3165.QCD.U24.051.A.521211 A', 'Perencanaan Operasi Intelijen BIdang Obat dan Makanan', 2360000, '2021-12-16'),
(115, '063.01.DR.3165.QCD.U24.051.A.521119 B', 'Pelaksanaan Operasi Intelijen Bidang Obat dan Makanan', 14400000, '2021-12-16'),
(116, '063.01.DR.3165.QCD.U24.051.A.521211 B', 'Pelaksanaan Operasi Intelijen Bidang Obat dan Makanan', 17760000, '2021-12-16'),
(117, '063.01.DR.3165.QCD.U24.051.A.522141 B', 'Pelaksanaan Operasi Intelijen Bidang Obat dan Makanan', 12000000, '2021-12-16'),
(118, '063.01.DR.3165.QCD.U24.051.A.524111 B', 'Pelaksanaan Operasi Intelijen Bidang Obat dan Makanan', 37920000, '2021-12-16'),
(119, '063.01.DR.3165.QCD.U24.051.A.524113 B', 'Pelaksanaan Operasi Intelijen Bidang Obat dan Makanan', 10800000, '2021-12-16'),
(120, '063.01.DR.3165.QCD.U24.051.A.521211 C', 'Evaluasi Operasi Intelijen Bidang Obat dan Makanan', 1888000, '2021-12-16'),
(121, '063.01.DR.3165.QCD.U24.052.A.521211 A', 'Gelar Kasus dan Pelaporan', 2832000, '2021-12-16'),
(122, '063.01.DR.3165.QCD.U24.053.A.521211 A', 'Rapat Pembahasan Rancana Penyidikan Skenario Penindakan dan Olah TKP', 1888000, '2021-12-16'),
(123, '063.01.DR.3165.QCD.U24.054.A.521211 A', 'Operasi Penindakan', 6000000, '2021-12-16'),
(124, '063.01.DR.3165.QCD.U24.054.A.522141 A', 'Operasi Penindakan', 23600000, '2021-12-16'),
(125, '063.01.DR.3165.QCD.U24.054.A.524111 A', 'Operasi Penindakan', 46600000, '2021-12-16'),
(126, '063.01.DR.3165.QCD.U24.054.A.524113 A', 'Operasi Penindakan', 12000000, '2021-12-16'),
(127, '063.01.DR.3165.QCD.U24.054.A.522151 B', 'Penangkapan dan Penahanan', 2400000, '2021-12-16'),
(128, '063.01.DR.3165.QCD.U24.054.A.524111 B', 'Penangkapan dan Penahanan', 18000000, '2021-12-16'),
(129, '063.01.DR.3165.QCD.U24.054.A.524113 B', 'Penangkapan dan Penahanan', 7200000, '2021-12-16'),
(130, '063.01.DR.3165.QCD.U24.055.A.521211 A', 'Pemberkasan', 6944000, '2021-12-16'),
(131, '063.01.DR.3165.QCD.U24.055.A.522151 A', 'Pemberkasan', 20800000, '2021-12-16'),
(132, '063.01.DR.3165.QCD.U24.055.A.524111 A', 'Pemberkasan', 60000000, '2021-12-16'),
(133, '063.01.DR.3165.QCD.U24.055.A.524113 A', 'Pemberkasan', 21600000, '2021-12-16'),
(134, '063.01.DR.3165.QCD.U24.055.A.521211 B', 'Konsultasi Penyelesaian Berkas Perkara', 1888000, '2021-12-16'),
(135, '063.01.DR.3165.QCD.U24.055.A.522151 B', 'Konsultasi Penyelesaian Berkas Perkara', 8000000, '2021-12-16'),
(136, '063.01.DR.3165.QCD.U24.055.A.521211 C', 'Gelar Perkara', 944000, '2021-12-16'),
(137, '063.01.DR.3165.QCD.U24.055.A.524113 C', 'Gelar Perkara', 2400000, '2021-12-16'),
(138, '063.01.DR.3165.QCD.U24.055.A.521219 D', 'Bantuan Hukum / Penasehat Hukum', 8000000, '2021-12-16'),
(139, '063.01.DR.3165.QCD.U24.055.A.522141 E', 'Penyerahan Tersangka dan Barang Bukti', 12000000, '2021-12-16'),
(140, '063.01.DR.3165.QCD.U24.055.A.524111 E', 'Penyerahan Tersangka dan Barang Bukti', 18000000, '2021-12-16'),
(141, '063.01.DR.3165.QCD.U24.055.A.524113 E', 'Penyerahan Tersangka dan Barang Bukti', 1800000, '2021-12-16'),
(142, '063.01.DR.3165.QDB.001.051.A.524111 A', 'Koordinasi Lintas Sektor', 35360000, '2021-12-16'),
(143, '063.01.DR.3165.QDB.001.052.A.521811 A', 'Pengawalan PJAS', 63830000, '2021-12-16'),
(144, '063.01.DR.3165.QDB.001.052.A.521211 B', 'Sosialisasi Keamanan Pangan Jajanan yang dikonsumsi Anak Usia Sekolah', 19725000, '2021-12-16'),
(145, '063.01.DR.3165.QDB.001.052.A.521213 B', 'Sosialisasi Keamanan Pangan Jajanan yang dikonsumsi Anak Usia Sekolah', 3800000, '2021-12-16'),
(146, '063.01.DR.3165.QDB.001.052.A.522151 B', 'Sosialisasi Keamanan Pangan Jajanan yang dikonsumsi Anak Usia Sekolah', 4400000, '2021-12-16'),
(147, '063.01.DR.3165.QDB.001.052.A.524111 B', 'Sosialisasi Keamanan Pangan Jajanan yang dikonsumsi Anak Usia Sekolah', 8840000, '2021-12-16'),
(148, '063.01.DR.3165.QDB.001.052.A.524114 B', 'Sosialisasi Keamanan Pangan Jajanan yang dikonsumsi Anak Usia Sekolah', 38955000, '2021-12-16'),
(149, '063.01.DR.3165.QDB.001.052.A.521211 C', 'Sertifikasi Sekolah dgn PJAS Aman   / Sertifikasi level 2', 4000000, '2021-12-16'),
(150, '063.01.DR.3165.QDB.001.052.D.521811 C', 'Sertifikasi Sekolah dgn PJAS Aman   / Sertifikasi level 2', 43000000, '2021-12-16'),
(151, '063.01.DR.3165.QDB.001.052.A.524111 C', 'Sertifikasi Sekolah dgn PJAS Aman   / Sertifikasi level 2', 117200000, '2021-12-16'),
(152, '063.01.DR.3165.QDB.001.052.A.524113 C', 'Sertifikasi Sekolah dgn PJAS Aman   / Sertifikasi level 2', 18000000, '2021-12-16'),
(153, '063.01.DR.3165.QDB.001.052.A.521211 D', 'Bimtek  Keamanan Pangan untuk kader KP di Sekolah/ Sertifikasi Level 1', 11800000, '2021-12-16'),
(154, '063.01.DR.3165.QDB.001.052.A.521213 D', 'Bimtek  Keamanan Pangan untuk kader KP di Sekolah/ Sertifikasi Level 1', 79400000, '2021-12-16'),
(155, '063.01.DR.3165.QDB.001.052.A.522151 D', 'Bimtek  Keamanan Pangan untuk kader KP di Sekolah/ Sertifikasi Level 1', 3600000, '2021-12-16'),
(156, '063.01.DR.3165.QDB.001.052.A.524111 D', 'Bimtek  Keamanan Pangan untuk kader KP di Sekolah/ Sertifikasi Level 1', 17280000, '2021-12-16'),
(157, '063.01.DR.3165.QDB.001.052.A.524114 D', 'Bimtek  Keamanan Pangan untuk kader KP di Sekolah/ Sertifikasi Level 1', 23640000, '2021-12-16'),
(158, '063.01.DR.3165.QDB.001.052.A.521211 F', 'Monitoring Pemberdayaan Kader Keamanan Pangan Sekolah', 3450000, '2021-12-16'),
(159, '063.01.DR.3165.QDB.001.052.A.521213 F', 'Monitoring Pemberdayaan Kader Keamanan Pangan Sekolah', 38400000, '2021-12-16'),
(160, '063.01.DR.3165.QDB.001.052.A.524111 F', 'Monitoring Pemberdayaan Kader Keamanan Pangan Sekolah', 17280000, '2021-12-16'),
(161, '063.01.DR.3165.QDB.001.052.A.524113 F', 'Monitoring Pemberdayaan Kader Keamanan Pangan Sekolah', 1200000, '2021-12-16'),
(162, '063.01.DR.3165.QDB.001.052.A.524114 F', 'Monitoring Pemberdayaan Kader Keamanan Pangan Sekolah', 31860000, '2021-12-16'),
(163, '063.01.DR.3165.QDB.001.052.A.521211 G', 'Operasional Mobling  Pangan Takjil Bulan Ramadhan', 10730000, '2021-12-16'),
(164, '063.01.DR.3165.QDB.001.052.A.524111 G', 'Operasional Mobling  Pangan Takjil Bulan Ramadhan', 50250000, '2021-12-16'),
(165, '063.01.DR.3165.QDB.001.052.A.524113 G', 'Operasional Mobling  Pangan Takjil Bulan Ramadhan', 9000000, '2021-12-16'),
(166, '063.01.DR.3165.QDB.002.051.A.521211 A', 'ADVOKASI KELEMBAGAAN DESA', 9140000, '2021-12-16'),
(167, '063.01.DR.3165.QDB.002.051.A.521213 A', 'ADVOKASI KELEMBAGAAN DESA', 2000000, '2021-12-16'),
(168, '063.01.DR.3165.QDB.002.051.A.522151 A', 'ADVOKASI KELEMBAGAAN DESA', 11600000, '2021-12-16'),
(169, '063.01.DR.3165.QDB.002.051.A.524111 A', 'ADVOKASI KELEMBAGAAN DESA', 22100000, '2021-12-16'),
(170, '063.01.DR.3165.QDB.002.051.A.524114 A', 'ADVOKASI KELEMBAGAAN DESA', 31710000, '2021-12-16'),
(171, '063.01.DR.3165.QDB.002.052.A.521211 A', 'PEMBERDAYAAN MASYARAKAT DAN USAHA PANGAN DESA DI BID. KEAMANAN PANGAN-BALAI', 84800000, '2021-12-16'),
(172, '063.01.DR.3165.QDB.002.052.A.521213 A', 'PEMBERDAYAAN MASYARAKAT DAN USAHA PANGAN DESA DI BID. KEAMANAN PANGAN-BALAI', 40400000, '2021-12-16'),
(173, '063.01.DR.3165.QDB.002.052.D.521811 A', 'PEMBERDAYAAN MASYARAKAT DAN USAHA PANGAN DESA DI BID. KEAMANAN PANGAN-BALAI', 148013000, '2021-12-16'),
(174, '063.01.DR.3165.QDB.002.052.A.522141 A', 'PEMBERDAYAAN MASYARAKAT DAN USAHA PANGAN DESA DI BID. KEAMANAN PANGAN-BALAI', 12000000, '2021-12-16'),
(175, '063.01.DR.3165.QDB.002.052.A.522151 A', 'PEMBERDAYAAN MASYARAKAT DAN USAHA PANGAN DESA DI BID. KEAMANAN PANGAN-BALAI', 28400000, '2021-12-16'),
(176, '063.01.DR.3165.QDB.002.052.A.524111 A', 'PEMBERDAYAAN MASYARAKAT DAN USAHA PANGAN DESA DI BID. KEAMANAN PANGAN-BALAI', 94560000, '2021-12-16'),
(177, '063.01.DR.3165.QDB.002.052.A.524113 A', 'PEMBERDAYAAN MASYARAKAT DAN USAHA PANGAN DESA DI BID. KEAMANAN PANGAN-BALAI', 78000000, '2021-12-16'),
(178, '063.01.DR.3165.QDB.002.052.A.524114 A', 'PEMBERDAYAAN MASYARAKAT DAN USAHA PANGAN DESA DI BID. KEAMANAN PANGAN-BALAI', 95344000, '2021-12-16'),
(179, '063.01.DR.3165.QDB.002.053.A.521211 A', 'Pengawasan keamanan pangan desa', 2240000, '2021-12-16'),
(180, '063.01.DR.3165.QDB.002.053.A.524113 A', 'Pengawasan keamanan pangan desa', 40800000, '2021-12-16'),
(181, '063.01.DR.3165.QDB.002.054.A.521211 A', 'Monitoring dan Evaluasi Program Desa  Pangan Aman', 5200000, '2021-12-16'),
(182, '063.01.DR.3165.QDB.002.054.A.521213 A', 'Monitoring dan Evaluasi Program Desa  Pangan Aman', 11400000, '2021-12-16'),
(183, '063.01.DR.3165.QDB.002.054.A.522151 A', 'Monitoring dan Evaluasi Program Desa  Pangan Aman', 8000000, '2021-12-16'),
(184, '063.01.DR.3165.QDB.002.054.A.524111 A', 'Monitoring dan Evaluasi Program Desa  Pangan Aman', 17680000, '2021-12-16'),
(185, '063.01.DR.3165.QDB.002.054.A.524114 A', 'Monitoring dan Evaluasi Program Desa  Pangan Aman', 29100000, '2021-12-16'),
(186, '063.01.DR.3165.QDB.002.054.A.521211 B', 'Lomba Desa Pangan Aman', 9280000, '2021-12-16'),
(187, '063.01.DR.3165.QDB.002.054.A.524111 B', 'Lomba Desa Pangan Aman', 35360000, '2021-12-16'),
(188, '063.01.DR.3165.QDB.002.054.A.524113 B', 'Lomba Desa Pangan Aman', 21600000, '2021-12-16'),
(189, '063.01.DR.3165.QDB.002.054.A.521211 C', 'Pengawalan di Desa yang sudah diintervensi keamanan pangan', 3900000, '2021-12-16'),
(190, '063.01.DR.3165.QDB.002.054.A.521213 C', 'Pengawalan di Desa yang sudah diintervensi keamanan pangan', 2000000, '2021-12-16'),
(191, '063.01.DR.3165.QDB.002.054.A.522151 C', 'Pengawalan di Desa yang sudah diintervensi keamanan pangan', 3600000, '2021-12-16'),
(192, '063.01.DR.3165.QDB.002.054.A.524111 C', 'Pengawalan di Desa yang sudah diintervensi keamanan pangan', 13260000, '2021-12-16'),
(193, '063.01.DR.3165.QDB.002.054.A.524113 C', 'Pengawalan di Desa yang sudah diintervensi keamanan pangan', 5400000, '2021-12-16'),
(194, '063.01.DR.3165.QDB.002.054.A.521211 D', 'Sosialisasi Keamanan Pangan Bagi kader PKK / Organisasi wanita', 2700000, '2021-12-16'),
(195, '063.01.DR.3165.QDB.002.054.A.521213 D', 'Sosialisasi Keamanan Pangan Bagi kader PKK / Organisasi wanita', 1600000, '2021-12-16'),
(196, '063.01.DR.3165.QDB.002.054.A.522151 D', 'Sosialisasi Keamanan Pangan Bagi kader PKK / Organisasi wanita', 4000000, '2021-12-16'),
(197, '063.01.DR.3165.QDB.002.054.A.524113 D', 'Sosialisasi Keamanan Pangan Bagi kader PKK / Organisasi wanita', 1500000, '2021-12-16'),
(198, '063.01.DR.3165.QDB.002.054.A.524114 D', 'Sosialisasi Keamanan Pangan Bagi kader PKK / Organisasi wanita', 23800000, '2021-12-16'),
(199, '063.01.DR.3165.QDB.002.054.A.521211 E', 'Gebyar Keamanan Pangan bersama Pramuka / Generasi Milenial', 7700000, '2021-12-16'),
(200, '063.01.DR.3165.QDB.002.054.A.521213 E', 'Gebyar Keamanan Pangan bersama Pramuka / Generasi Milenial', 1600000, '2021-12-16'),
(201, '063.01.DR.3165.QDB.002.054.A.522151 E', 'Gebyar Keamanan Pangan bersama Pramuka / Generasi Milenial', 4000000, '2021-12-16'),
(202, '063.01.DR.3165.QDB.002.054.A.524113 E', 'Gebyar Keamanan Pangan bersama Pramuka / Generasi Milenial', 1500000, '2021-12-16'),
(203, '063.01.DR.3165.QDB.002.054.A.524114 E', 'Gebyar Keamanan Pangan bersama Pramuka / Generasi Milenial', 23800000, '2021-12-16'),
(204, '063.01.DR.3165.QDB.003.051.A.524111 A', 'Survei Pasar Dalam Rangka Implementasi Pasar Aman dari Bahan Berbahaya', 8840000, '2021-12-16'),
(205, '063.01.DR.3165.QDB.003.051.A.524113 A', 'Survei Pasar Dalam Rangka Implementasi Pasar Aman dari Bahan Berbahaya', 900000, '2021-12-16'),
(206, '063.01.DR.3165.QDB.003.051.A.521811 A', 'Pengadaan peralatan pendukung', 4060000, '2021-12-16'),
(207, '063.01.DR.3165.QDB.003.053.A.521211 A', 'PENYULUHAN KEPADA KOMUNITAS PASAR', 1000000, '2021-12-16'),
(208, '063.01.DR.3165.QDB.003.053.A.521213 A', 'PENYULUHAN KEPADA KOMUNITAS PASAR', 2000000, '2021-12-16'),
(209, '063.01.DR.3165.QDB.003.053.A.522151 A', 'PENYULUHAN KEPADA KOMUNITAS PASAR', 2000000, '2021-12-16'),
(210, '063.01.DR.3165.QDB.003.053.A.524111 A', 'PENYULUHAN KEPADA KOMUNITAS PASAR', 13260000, '2021-12-16'),
(211, '063.01.DR.3165.QDB.003.053.A.524114 A', 'PENYULUHAN KEPADA KOMUNITAS PASAR', 26500000, '2021-12-16'),
(212, '063.01.DR.3165.QDB.003.053.A.521211 B', 'BIMTEK PETUGAS PENGELOLA PASAR', 2500000, '2021-12-16'),
(213, '063.01.DR.3165.QDB.003.053.A.521213 B', 'BIMTEK PETUGAS PENGELOLA PASAR', 1800000, '2021-12-16'),
(214, '063.01.DR.3165.QDB.003.053.A.522151 B', 'BIMTEK PETUGAS PENGELOLA PASAR', 2000000, '2021-12-16'),
(215, '063.01.DR.3165.QDB.003.053.A.524111 B', 'BIMTEK PETUGAS PENGELOLA PASAR', 13260000, '2021-12-16'),
(216, '063.01.DR.3165.QDB.003.053.A.524113 B', 'BIMTEK PETUGAS PENGELOLA PASAR', 1800000, '2021-12-16'),
(217, '063.01.DR.3165.QDB.003.053.A.524114 B', 'BIMTEK PETUGAS PENGELOLA PASAR', 14400000, '2021-12-16'),
(218, '063.01.DR.3165.QDB.003.053.A.521211 C', 'KAMPANYE PASAR AMAN DARI BAHAN BERBAHAYA', 5400000, '2021-12-16'),
(219, '063.01.DR.3165.QDB.003.053.A.524111 C', 'KAMPANYE PASAR AMAN DARI BAHAN BERBAHAYA', 13260000, '2021-12-16'),
(220, '063.01.DR.3165.QDB.003.054.A.524111 A', 'Monev Pasar Aman dari Bahan Berbahaya dalam rangka Lomba', 13260000, '2021-12-16'),
(221, '063.01.DR.3165.QDB.003.054.A.524113 A', 'Monev Pasar Aman dari Bahan Berbahaya dalam rangka Lomba', 600000, '2021-12-16'),
(222, '063.01.DR.3165.QDC.001.051.A.521211 A', 'KIE peningkatan Pemahaman Masyarakat terhadap Keamanan  Produk Obat,  Pangan dan BB serta OT Kosmetik Suplemen Makanan', 12250000, '2021-12-16'),
(223, '063.01.DR.3165.QDC.001.051.A.522151 A', 'KIE peningkatan Pemahaman Masyarakat terhadap Keamanan  Produk Obat,  Pangan dan BB serta OT Kosmetik Suplemen Makanan', 9000000, '2021-12-16'),
(224, '063.01.DR.3165.QDC.001.051.A.524111 A', 'KIE peningkatan Pemahaman Masyarakat terhadap Keamanan  Produk Obat,  Pangan dan BB serta OT Kosmetik Suplemen Makanan', 13260000, '2021-12-16'),
(225, '063.01.DR.3165.QDC.001.051.A.524113 A', 'KIE peningkatan Pemahaman Masyarakat terhadap Keamanan  Produk Obat,  Pangan dan BB serta OT Kosmetik Suplemen Makanan', 1800000, '2021-12-16'),
(226, '063.01.DR.3165.QDC.001.051.A.524114 A', 'KIE peningkatan Pemahaman Masyarakat terhadap Keamanan  Produk Obat,  Pangan dan BB serta OT Kosmetik Suplemen Makanan', 46125000, '2021-12-16'),
(227, '063.01.DR.3165.QDC.001.051.A.521211 B', 'MEDIA INFORMASI PAWAI PEMBANGUNAN', 1655000, '2021-12-16'),
(228, '063.01.DR.3165.QDC.001.051.A.524113 B', 'MEDIA INFORMASI PAWAI PEMBANGUNAN', 4500000, '2021-12-16'),
(229, '063.01.DR.3165.QDC.001.051.A.521211 C', 'PAMERAN PENYEBARAN INFORMASI', 6000000, '2021-12-16'),
(230, '063.01.DR.3165.QDC.001.051.A.522141 C', 'PAMERAN PENYEBARAN INFORMASI', 15075000, '2021-12-16'),
(231, '063.01.DR.3165.QDC.001.051.A.524113 C', 'PAMERAN PENYEBARAN INFORMASI', 6300000, '2021-12-16'),
(232, '063.01.DR.3165.QDC.001.051.A.521211 D', 'Pelaksanaan Sosialisasi Pemberdayaan Masyarakat melalui KIE', 1345635000, '2021-12-16'),
(233, '063.01.DR.3165.QDC.001.051.A.521213 D', 'Pelaksanaan Sosialisasi Pemberdayaan Masyarakat melalui KIE', 165750000, '2021-12-16'),
(234, '063.01.DR.3165.QDC.001.051.A.522141 D', 'Pelaksanaan Sosialisasi Pemberdayaan Masyarakat melalui KIE', 233070000, '2021-12-16'),
(235, '063.01.DR.3165.QDC.001.051.A.522151 D', 'Pelaksanaan Sosialisasi Pemberdayaan Masyarakat melalui KIE', 346800000, '2021-12-16'),
(236, '063.01.DR.3165.QDC.001.051.A.524111 D', 'Pelaksanaan Sosialisasi Pemberdayaan Masyarakat melalui KIE', 647700000, '2021-12-16'),
(237, '063.01.DR.3165.QDC.001.051.A.524114 D', 'Pelaksanaan Sosialisasi Pemberdayaan Masyarakat melalui KIE', 1917300000, '2021-12-16'),
(238, '063.01.DR.3165.QDC.001.051.A.521211 E', 'Forum Konsultasi Publik Pelayanan Publik', 1300000, '2021-12-16'),
(239, '063.01.DR.3165.QDC.001.051.A.521213 E', 'Forum Konsultasi Publik Pelayanan Publik', 1050000, '2021-12-16'),
(240, '063.01.DR.3165.QDC.001.051.A.522151 E', 'Forum Konsultasi Publik Pelayanan Publik', 1800000, '2021-12-16'),
(241, '063.01.DR.3165.QDC.001.051.A.524114 E', 'Forum Konsultasi Publik Pelayanan Publik', 10500000, '2021-12-16'),
(242, '063.01.DR.3165.QDC.001.051.A.521211 F', 'Bimtek Pelayanan Prima Bagi Petugas Layanan  Publik', 1300000, '2021-12-16'),
(243, '063.01.DR.3165.QDC.001.051.A.521213 F', 'Bimtek Pelayanan Prima Bagi Petugas Layanan  Publik', 1050000, '2021-12-16'),
(244, '063.01.DR.3165.QDC.001.051.A.522151 F', 'Bimtek Pelayanan Prima Bagi Petugas Layanan  Publik', 1800000, '2021-12-16'),
(245, '063.01.DR.3165.QDC.001.051.A.524114 F', 'Bimtek Pelayanan Prima Bagi Petugas Layanan  Publik', 10500000, '2021-12-16'),
(246, '063.01.DR.3165.QDC.001.052.A.524119 A', 'WORKSHOP KOMUNIKASI NEGOSIASI DAN DIPLOMASI PENGAWASAN OBAT DAN MAKANAN DI WILAYAH PERBATASAN', 5360000, '2021-12-16'),
(247, '063.01.DR.3165.QDC.001.052.A.524119 B', 'Bimbingan teknis dan pelayanan registration  pangan olahan', 5360000, '2021-12-16'),
(248, '063.01.DR.3165.QDC.001.052.A.524119 C', 'Workshop registrasi pangan olahan untuk fasilitator di Balai Besar / Balai / Loka POM', 5360000, '2021-12-16'),
(249, '063.01.DR.3165.QDC.001.052.A.524111 D', 'Peningkatan Kompetensi Petugas infokom', 23160000, '2021-12-16'),
(250, '063.01.DR.3165.QDC.001.052.A.524119 E', 'Dukungan Pengembangan Inovasi di Bidang Pangan', 5360000, '2021-12-16'),
(251, '063.01.DR.3165.QIA.001.053.A.521811 A', 'Pengujian Laboratorium Sampel Makanan', 386439000, '2021-12-16'),
(252, '063.01.DR.3165.QIA.001.055.A.521211 A', 'Pengadaan sampel makanan', 74360000, '2021-12-16'),
(253, '063.01.DR.3165.QIA.001.055.A.524111 A', 'Pengadaan sampel makanan', 30560000, '2021-12-16'),
(254, '063.01.DR.3165.QIA.001.055.A.524113 A', 'Pengadaan sampel makanan', 10800000, '2021-12-16'),
(255, '063.01.DR.3165.QIA.005.053.A.521211 A', 'Pengadaan Sampel', 222750000, '2021-12-16'),
(256, '063.01.DR.3165.QIA.005.053.A.524111 A', 'Pengadaan Sampel', 30560000, '2021-12-16'),
(257, '063.01.DR.3165.QIA.005.053.A.524113 A', 'Pengadaan Sampel', 7200000, '2021-12-16'),
(258, '063.01.DR.3165.QIA.005.055.D.521811 A', 'Pengujian laboratorium sampel obat obat bahan alam kosmetika suplemen kesehatan', 468918000, '2021-12-16'),
(259, '063.01.DR.3165.QIA.008.051.A.521211 A', 'Pengadaan Sampel', 3135000, '2021-12-16'),
(260, '063.01.DR.3165.QIA.008.051.A.524111 A', 'Pengadaan Sampel', 8040000, '2021-12-16'),
(261, '063.01.DR.3165.QIA.008.052.D.521811 A', 'Pengujian sampel fortifikasi', 17820000, '2021-12-16'),
(262, '063.01.DR.3165.QIC.001.053.A.524119 A', 'Rapat Koordinasi Pusat dan Balai POM dalam Manajemen Sampling Obat', 8260000, '2021-12-16'),
(263, '063.01.DR.3165.QIC.001.053.A.524119 B', 'Pengendalian AMR melalui peningkatan awarenes dan koordinasi Lintas Sektor', 4130000, '2021-12-16'),
(264, '063.01.DR.3165.QIC.001.053.A.524119 C', 'Inspeksi Komprehensif dalam rangka Tindak Lanjut OT dan SK', 8260000, '2021-12-16'),
(265, '063.01.DR.3165.QIC.001.053.A.524119 D', 'Forum Komunikasi Inspektur CPOTB dalam memperkuat Pengawasan', 8260000, '2021-12-16'),
(266, '063.01.DR.3165.QIC.001.053.A.524119 E', 'Rapat Koordinasi Pusat dan Balai dalam Manajemen Sampling', 4066000, '2021-12-16'),
(267, '063.01.DR.3165.QIC.001.055.A.524113 A', 'Pemeriksaan Sarana Produksi Dalam Kota', 13800000, '2021-12-16'),
(268, '063.01.DR.3165.QIC.001.055.A.524111 B', 'Pemeriksaan Sarana Produksi Luar Kota', 60300000, '2021-12-16'),
(269, '063.01.DR.3165.QIC.001.055.A.524111 C', 'Tindak Lanjut Hasil Pengawasan Sarana Produksi', 14799000, '2021-12-16'),
(270, '063.01.DR.3165.QIC.001.055.A.524113 C', 'Tindak Lanjut Hasil Pengawasan Sarana Produksi', 1500000, '2021-12-16'),
(271, '063.01.DR.3165.QIC.004.053.A.524111 A', 'PEMERIKSAAN SARANA DISTRIBUSI OBAT  OBAT TRADISIONAL KOSMETIKA SK PANGAN DAN BAHAN BERBAHAYA', 223200000, '2021-12-16'),
(272, '063.01.DR.3165.QIC.004.053.A.524113 A', 'PEMERIKSAAN SARANA DISTRIBUSI OBAT  OBAT TRADISIONAL KOSMETIKA SK PANGAN DAN BAHAN BERBAHAYA', 65250000, '2021-12-16'),
(273, '063.01.DR.3165.QIC.004.053.A.524111 B', 'TINDAK LANJUT HASIL PENGAWASAN SARANA DISTRIBUSI', 7423000, '2021-12-16'),
(274, '063.01.DR.3165.QIC.004.053.A.524113 B', 'TINDAK LANJUT HASIL PENGAWASAN SARANA DISTRIBUSI', 3600000, '2021-12-16'),
(275, '063.01.DR.3165.QIC.004.053.A.524111 C', 'INTENSIFIKASI PENGAWASAN PANGAN LEBARAN NATAL DAN TAHUN BARU', 7930000, '2021-12-16'),
(276, '063.01.DR.3165.QIC.004.053.A.524113 C', 'INTENSIFIKASI PENGAWASAN PANGAN LEBARAN NATAL DAN TAHUN BARU', 12600000, '2021-12-16'),
(277, '063.01.DR.3165.QIC.004.053.A.521211 D', 'OPERASIONAL MOBIL LABORATORIUM KELILING  DALAM RANGKA PENGAWASAN\nINTENSIFIKASI PANGAN', 2400000, '2021-12-16'),
(278, '063.01.DR.3165.QIC.004.053.A.524113 D', 'OPERASIONAL MOBIL LABORATORIUM KELILING  DALAM RANGKA PENGAWASAN\nINTENSIFIKASI PANGAN', 7200000, '2021-12-16'),
(279, '063.01.DR.3165.QIC.004.053.A.524113 E', 'MONITORING SURAT EDARAN OBAT OBAT TRADISIONAL KOSMETIKA PANGAN\nDAN SUPLEMEN KESEHATAN', 7200000, '2021-12-16'),
(280, '063.01.DR.3165.QIC.004.053.A.521211 F', 'PENGAWASAN PERIKLANAN DAN PHW', 3000000, '2021-12-16'),
(281, '063.01.DR.3165.QIC.004.053.A.524113 F', 'PENGAWASAN PERIKLANAN DAN PHW', 7200000, '2021-12-16'),
(282, '063.01.DR.3165.QIC.004.053.A.524111 G', 'PENERTIBAN PASAR DALAM NEGERI DARI KOSMETIKA TMS', 7840000, '2021-12-16'),
(283, '063.01.DR.3165.QIC.004.053.A.524113 G', 'PENERTIBAN PASAR DALAM NEGERI DARI KOSMETIKA TMS', 4800000, '2021-12-16'),
(284, '063.01.DR.3165.QIC.004.055.A.524119 A', 'Pengawasan Integritas dan Keamanan Serta Pencegahan Diversi Rantai Suplai Obat', 9320000, '2021-12-16'),
(285, '063.01.DR.3165.QIC.004.055.A.524119 B', 'Pengawasan Penerapan CDOB', 10520000, '2021-12-16'),
(286, '063.01.DR.3165.QIC.004.055.A.524119 C', 'Bimtek Inspektur OT dan SK', 10520000, '2021-12-16'),
(287, '063.01.DR.3165.RAB.001.051.A.532111 A', 'Pengadaan Alat Laboratorium', 6982880000, '2021-12-16'),
(288, '063.01.DR.3165.RAB.001.051.A.532111 B', 'Pengadaan penambah nilai alat laboratorium', 17268000, '2021-12-16'),
(289, '063.01.WA .6384.EBA.994.001.A.511111 A', 'Pembayaran gaji dan tunjangan', 2603992000, '2021-12-16'),
(290, '063.01.WA .6384.EBA.994.001.A.511119 A', 'Pembayaran gaji dan tunjangan', 54000, '2021-12-16'),
(291, '063.01.WA .6384.EBA.994.001.A.511121 A', 'Pembayaran gaji dan tunjangan', 357360000, '2021-12-16'),
(292, '063.01.WA .6384.EBA.994.001.A.511122 A', 'Pembayaran gaji dan tunjangan', 60576000, '2021-12-16'),
(293, '063.01.WA .6384.EBA.994.001.A.511123 A', 'Pembayaran gaji dan tunjangan', 53820000, '2021-12-16'),
(294, '063.01.WA .6384.EBA.994.001.A.511124 A', 'Pembayaran gaji dan tunjangan', 298185000, '2021-12-16'),
(295, '063.01.WA .6384.EBA.994.001.A.511125 A', 'Pembayaran gaji dan tunjangan', 3149000, '2021-12-16'),
(296, '063.01.WA .6384.EBA.994.001.A.511126 A', 'Pembayaran gaji dan tunjangan', 181782000, '2021-12-16'),
(297, '063.01.WA .6384.EBA.994.001.A.511129 A', 'Pembayaran gaji dan tunjangan', 300569000, '2021-12-16'),
(298, '063.01.WA .6384.EBA.994.001.A.511151 A', 'Pembayaran gaji dan tunjangan', 87418000, '2021-12-16'),
(299, '063.01.WA .6384.EBA.994.001.A.512211 A', 'Pembayaran gaji dan tunjangan', 91320000, '2021-12-16'),
(300, '063.01.WA .6384.EBA.994.001.A.512411 A', 'Pembayaran gaji dan tunjangan', 4249677000, '2021-12-16'),
(301, '063.01.WA .6384.EBA.994.002.A.521111 A', 'Operasional Perkantoran dan Pimpinan', 1432176000, '2021-12-16'),
(302, '063.01.WA .6384.EBA.994.002.A.521115 A', 'Operasional Perkantoran dan Pimpinan', 198840000, '2021-12-16'),
(303, '063.01.WA .6384.EBA.994.002.A.524111 A', 'Operasional Perkantoran dan Pimpinan', 286650000, '2021-12-16'),
(304, '063.01.WA .6384.EBA.994.002.A.524113 A', 'Operasional Perkantoran dan Pimpinan', 18000000, '2021-12-16'),
(305, '063.01.WA .6384.EBA.994.002.A.523121 B', 'Perawatan Peralatan Alat Laboratorium dan Inventaris Kantor', 118862000, '2021-12-16'),
(306, '063.01.WA .6384.EBA.994.002.A.521113 C', 'Pengadaan Makanan/Minuman Penambah Daya Tubuh', 136800000, '2021-12-16'),
(307, '063.01.WA .6384.EBA.994.002.A.523111 D', 'Perawatan sarana gedung', 211000000, '2021-12-16'),
(308, '063.01.WA .6384.EBA.994.002.A.523121 E', 'Perawatan Kendaraan Roda 4', 136000000, '2021-12-16'),
(309, '063.01.WA .6384.EBA.994.002.A.523121 F', 'Perawatan Kendaraan Roda 2', 7620000, '2021-12-16'),
(310, '063.01.WA .6384.EBA.994.002.A.523121 G', 'Perawatan Sarana Perkantoran', 109650000, '2021-12-16'),
(311, '063.01.WA .6384.EBA.994.002.A.522111 H', 'Langganan Daya dan Jasa', 672000000, '2021-12-16'),
(312, '063.01.WA .6384.EBA.994.002.A.522112 H', 'Langganan Daya dan Jasa', 30000000, '2021-12-16'),
(313, '063.01.WA .6384.EBA.994.002.A.522113 H', 'Langganan Daya dan Jasa', 54000000, '2021-12-16'),
(314, '063.01.WA .6384.EBA.994.002.A.521114 I', 'Jasa Pos/Giro/Setifikat', 36000000, '2021-12-16');

-- --------------------------------------------------------

--
-- Table structure for table `detail_ptj_luar`
--

CREATE TABLE IF NOT EXISTS `detail_ptj_luar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_pl` varchar(25) NOT NULL,
  `uraian` text NOT NULL,
  `detail_kwitansi` int(11) NOT NULL,
  `riil` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Triggers `detail_ptj_luar`
--
DROP TRIGGER IF EXISTS `trg_detail_delete_luar`;
DELIMITER //
CREATE TRIGGER `trg_detail_delete_luar` AFTER DELETE ON `detail_ptj_luar`
 FOR EACH ROW begin
update ptj_luar_kota
set kwitansi = (
select sum(detail_kwitansi)
from detail_ptj_luar where id_pl = old.id_pl )
where id_pl = old.id_pl ;
end
//
DELIMITER ;
DROP TRIGGER IF EXISTS `trg_detail_insert_luar`;
DELIMITER //
CREATE TRIGGER `trg_detail_insert_luar` AFTER INSERT ON `detail_ptj_luar`
 FOR EACH ROW begin
update ptj_luar_kota
set kwitansi = (
select sum(detail_kwitansi)
from detail_ptj_luar where id_pl = new.id_pl )
where id_pl = new.id_pl ;
end
//
DELIMITER ;
DROP TRIGGER IF EXISTS `trg_detail_update_luar`;
DELIMITER //
CREATE TRIGGER `trg_detail_update_luar` AFTER UPDATE ON `detail_ptj_luar`
 FOR EACH ROW begin
update ptj_luar_kota
set kwitansi = (
select sum(detail_kwitansi)
from detail_ptj_luar where id_pl = new.id_pl )
where id_pl = new.id_pl ;
end
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `detail_st`
--

CREATE TABLE IF NOT EXISTS `detail_st` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_sk` varchar(25) DEFAULT NULL,
  `petugas_nip` varchar(25) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_sk` (`id_sk`),
  KEY `id_sk_2` (`id_sk`),
  KEY `id_sk_3` (`id_sk`),
  KEY `id_sk_4` (`id_sk`),
  KEY `id_sk_5` (`id_sk`),
  KEY `id_sk_6` (`id_sk`),
  KEY `id_sk_7` (`id_sk`),
  KEY `id_sk_8` (`id_sk`),
  KEY `petugas_nip` (`petugas_nip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `detail_st_anggaran`
--

CREATE TABLE IF NOT EXISTS `detail_st_anggaran` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_sk` varchar(25) DEFAULT NULL,
  `anggaran` varchar(50) NOT NULL,
  `mak` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_sk` (`id_sk`),
  KEY `id_sk_2` (`id_sk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `detail_st_dasar`
--

CREATE TABLE IF NOT EXISTS `detail_st_dasar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_sk` varchar(25) NOT NULL,
  `dasar` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `detail_st_menimbang`
--

CREATE TABLE IF NOT EXISTS `detail_st_menimbang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_sk` varchar(25) NOT NULL,
  `menimbang` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `detail_st_sppd`
--

CREATE TABLE IF NOT EXISTS `detail_st_sppd` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_sk` varchar(25) NOT NULL,
  `petugas_nip_sppd` varchar(25) NOT NULL,
  `no_sppd` varchar(25) NOT NULL,
  `tingkat_perjadin` varchar(25) NOT NULL,
  `penandatangan_sppd` varchar(25) NOT NULL,
  `penandatangan_berangkat` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_st`
--

CREATE TABLE IF NOT EXISTS `jenis_st` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_st` varchar(25) NOT NULL,
  `status_st` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `jenis_st`
--

INSERT INTO `jenis_st` (`id`, `jenis_st`, `status_st`) VALUES
(1, 'luar_kota_sppd', 'belum_sppd'),
(2, 'dalam_kota_tidak_sppd', 'tidak_sppd'),
(3, 'luar_kota_tidak_sppd', 'tidak_sppd');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE IF NOT EXISTS `pegawai` (
  `id_pegawai` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `nip` varchar(25) NOT NULL,
  `pangkat` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `status` int(10) NOT NULL,
  `level` int(11) NOT NULL,
  PRIMARY KEY (`id_pegawai`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=133 ;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama`, `nip`, `pangkat`, `jabatan`, `status`, `level`) VALUES
(1, 'Alex Sander, S.Farm., Apt., MH', '197912122006041005', 'Pembina Tk.I/IV b', 'Kepala Balai POM di Jambi', 1, 1),
(2, 'Dra. Lenggo Vivirianty, Apt', '196704011998032001', 'Pembina/IV-a', 'Koordinator Fungsi Pemeriksaan', 1, 2),
(3, 'Armeiny Romita, S.Si, Apt', '196810141997032001', 'Pembina/IV-a', 'Koordinator Fungsi Pengujian', 1, 2),
(6, 'Nurizati, SSi, Apt', '197309162000032001', 'Pembina/IV-a', 'PFM Madya', 1, 3),
(7, 'Ratnawita, S.Si, Apt', '197307032000032001', 'Pembina/IV-a', 'Fungsional Umum', 1, 3),
(8, 'Drs. Erhadi Adang M, Apt', '196403171996031001', 'Pembina/IV-a', 'PFM Muda', 1, 3),
(9, 'Marhamah, SE', '196803111989022001', 'Penata Tk.I/III-d', 'Koordinartor Fungsi Infokom', 1, 2),
(11, 'Sarino,S.Farm,Apt', '196805041990121001', 'Penata Tk.I/III-d', 'PFM Muda', 1, 3),
(12, 'Febriany Martiana Nasel, S.Si, Apt', '197902232003122003', 'Pembina / IV-a', 'PFM Muda', 1, 3),
(14, 'Agus Jayadi, S.Si', '197408112000031002', 'Penata Tk.I/III-d', 'PFM Muda', 1, 3),
(15, 'Tutut Rospyanti Citra, S.Farm,Apt', '198103182006042003', 'Penata Tk.I/III-d', 'PFM Muda/PPK', 1, 3),
(16, 'Desmita Adriani Syamsu, S.Farm, Apt', '198112092005012002', 'Penata Tk.I/III-d', 'PFM Muda', 1, 3),
(17, 'Fuani Farid, S.Farm, Apt', '198010272005012002', 'Pembina/IV-a', 'Kepala Sub Bagian Tata Usaha', 1, 2),
(18, 'Riyanti, S.Farm,Apt', '198210222006042002', 'Penata Tk.I/III-d', 'PFM Muda', 1, 3),
(21, 'Novva Reddy Naldo, S.Farm,Apt', '198009072007121001', 'Penata Tk.I/III-d', 'Koordinator Substansi Penindakan/PPK', 1, 2),
(22, 'Linda Prasetyawati, S.Farm,Apt', '198210132007122001', 'Penata/III-c', 'PFM Muda', 1, 3),
(23, 'Maria Lies Purbahabsari Viandana,S.Farm,Apt', '197910012009122002', 'Penata/III-c', 'PFM Muda', 1, 3),
(24, 'Adrafita Hanesty Hadi S.Farm, Apt', '198612312010122002', 'Penata/III-c', 'PFM Muda', 1, 3),
(25, 'Fauziah,SH', '196804281990022001', 'Penata/III-c', 'PFM Muda', 1, 3),
(26, 'Zuriati', '197003311991032001', 'Penata/III-c', 'PFM Penyelia', 1, 3),
(27, 'Malhan Zaldi SH, ', '197506181995031001', 'Penata Tk.I/III-d', 'Pengelola Persediaan', 1, 3),
(28, 'Rahmad Anres D S.Farm, Apt', '198903182012121002', 'Penata/III-c', 'Analis Laboratorium', 1, 3),
(29, 'Lusiana Wijayanti,S.Farm,Apt', '198304092012122001', 'Penata/III-c', 'PFM Muda', 1, 3),
(30, 'Hertanti Trias Febriani, S.Farm, Apt', '198602222012122003', 'Penata/III-c', 'PFM Muda', 1, 3),
(31, 'Mega Ratnasari, S.Si', '198305032006042003', 'Penata/III-c', 'PFM Muda', 1, 3),
(32, 'Mursidah,SH', '196806111994022001', 'Penata/III-c', 'PFM Muda', 1, 3),
(33, 'Fransisca O.W. Nasution,STP', '198308122007121001', 'Penata Muda Tk. I/III-b', 'Perencana Pertama', 1, 3),
(34, 'Yuharidmi', '197002051993032001', 'Penata/III-c', 'PFM Penyelia', 1, 3),
(35, 'Supriyadi SH', '197302011997031001', 'Penata Muda Tk. I/III-b', 'PFM Ahli Pertama', 1, 3),
(36, 'Aswita Br. Pinem SH', '196810161991032001', 'Penata/III-c', 'Fungsional Umum ( Analis pengelola BMN)', 1, 3),
(37, 'Denayu Aidha Nursanti,SH', '197301201993032002', 'Penata Muda Tk. I/III-b', 'PFM Muda', 1, 3),
(40, 'Mariana, S.Farm, Apt', '198310122015022001', 'Penata Muda Tk. I/III-b', 'PFM Pertama', 1, 3),
(42, 'Sumarsono', '196805291991031002', 'Penata/III-c', 'PFM Penyelia', 1, 3),
(43, 'Inneke Koesumawaty,SH', '197207191996032002', 'Penata Muda Tk. I/III-b', 'PFM Pertama', 1, 3),
(44, 'Yostarita Muchtar', '197406081997032001', 'Penata Muda Tk. I/III-b', 'PFM Pelaksana lanjutan', 1, 3),
(45, 'Jenifirst Annisa Mujtahidah,S.Farm,Apt', '199306142018012002', 'Penata Muda Tk. I/III-b', 'Analis Laboratorium', 1, 3),
(46, 'Rasidi', '197512081999031001', 'Penata Muda/III-a', 'PFM Pelaksana Lanjutan', 1, 3),
(47, 'Madalena', '197210121999032001', 'Penata Muda/III-a', 'PFM Pelaksana Lanjutan', 1, 3),
(48, 'Ruhai Lanang Prasojo, S.Si', '198904272015021004', 'Penata Muda/III-a', 'PFM Pertama', 1, 3),
(49, 'Mardiah', '197511182000032001', 'Penata Muda/III-a', 'Arsiparis Pelaksana', 1, 3),
(50, 'Rina Yunita, A.Md', '198406172007122001', 'Penata Muda/III-a', 'PFM Pelaksana Lanjutan', 1, 3),
(51, 'Tri Murnila,SH', '197604072000032001', 'Penata Muda Tk. I/III-b', 'Analis Kepegawaian Pelaksana Lanjutan', 1, 3),
(52, 'M. Fahrul Rahman,A.Md', '198608252008121002', 'Penata Muda/III-a', 'Fungsional Umum(Pengelola Barang Persediaan dan Barang Milik Negara)', 1, 3),
(53, 'Delyuvin Nasution, S. Farm', '198407312007121001', 'Penata Muda Tk. I/III-b', 'PFM Ahli Pertama', 1, 3),
(54, 'Aria Jaka,S.Kom', '198803312009121002', 'Penata Muda Tk. I/III-b', 'Pranata Komputer Pertama', 1, 3),
(55, 'Nova Citra Rose S, AMF', '199111212015022001', 'Pengatur/II-c', 'PFM Pelaksana', 1, 3),
(56, 'Hana Azizah, A. Md', '199704122019032001', 'Pengatur/II-c', 'Pengadministrasi Umum', 1, 3),
(57, 'Eko Hari Sumarno, A. Md', '199504122019031001', 'Pengatur/II-c', 'Bendahara Pengeluaran', 1, 3),
(58, 'Bekti Kusuma Wijayanti, SKM', '199603162019032004', 'Penata Muda/III-a', 'Analis Komunikasi Resiko Obat dan Makanan', 1, 3),
(59, 'Ade Afrilia Ardinda, S. Sos', '199504182019032006', 'Penata Muda/III-a', 'PFM Ahli Pertama', 1, 3),
(60, 'Annida Rani Chairunisah, S. TP', '199603042019032001', 'Penata Muda/III-a', 'Analis Laboraturium', 1, 3),
(61, 'Sinta Anggraini S, S.Si', '199505092019032006', 'Penata Muda / III/a', 'Analis BMN', 1, 3),
(62, 'Arief Setiawan, SKM', '199501082019031003', 'Penata Muda/III-a', 'Analis Pemeriksa Sarana Obat dan Makanan', 1, 3),
(63, 'Siti Silvia Latifah, SE', '199604172019032002', 'Penata Muda/III-a', 'Analis SDM Aparatur', 1, 3),
(64, 'Triwinarni, S. Farm, Apt', '199105082019032004', 'Penata Muda Tk. I/III-b', 'Analis Laboraturium', 1, 3),
(65, 'Stevani Sitorus, S. Far.,  Apt', '199111292019032003', 'Penata Muda Tk. I/III-b', 'Analis Laboraturium', 1, 3),
(66, 'Novti Sucitra, S. TP', '199511232019032005', 'Penata Muda/III-a', 'Analis Laboraturium', 1, 3),
(67, 'Casuarina Rusmawati, S. Farm, Apt', '199311022019032005', 'Penata Muda Tk. I/III-b', 'Analis Laboraturium', 1, 3),
(68, 'Olga Saputra, A. Md', '199303062019031003', 'Pengatur/II-c', 'Pengadministrasi Umum', 1, 3),
(69, 'Bambang Kusnadi, S. Farm', '3001', '-', 'PPNPN', 1, 4),
(70, 'Ema Suryani', '3026', '-', 'PPNPN', 1, 4),
(71, 'Fadrianto, SE', '3022', '-', 'PPNPN', 1, 4),
(72, 'Febby Anggraini, Amd. Farm', '3012', '-', 'PPNPN', 1, 4),
(73, 'Fitri Aprita, S. Kom', '3011', '-', 'PPNPN', 1, 4),
(74, 'Indra Fernando', '3006', '-', 'PPNPN', 1, 4),
(75, 'Intan Idasari', '3007', '-', 'PPNPN', 1, 4),
(76, 'Junaidi ', '3008', '-', 'PPNPN', 1, 4),
(77, 'Nazarudin', '3009', '-', 'PPNPN', 1, 4),
(78, 'Lovera Dwi Safitri', '3010', '-', 'PPNPN', 1, 4),
(79, 'Mahfud Rais', '3005', '-', 'PPNPN', 1, 4),
(80, 'M. Halim Syahir', '3004', '-', 'PPNPN', 1, 4),
(81, 'Nurnadia Al Islamy, S. Kom', '3013', '-', 'PPNPN', 1, 4),
(82, 'Ranti Amelia, Amd. Farm', '3014', '-', 'PPNPN', 1, 4),
(83, 'Ririn Nofrianti, Amd. Farm', '3015', '-', 'PPNPN', 1, 4),
(84, 'Roy Sumardi, S. Kom', '3016', '-', 'PPNPN', 1, 4),
(85, 'Savitri, S. Farm, Apt', '3017', '-', 'PPNPN', 1, 4),
(86, 'Sigit Susanto', '3018', '-', 'PPNPN', 1, 4),
(87, 'Yanti Andriani, ST', '3019', '-', 'PPNPN', 1, 4),
(88, 'Yusmaini', '3020', '-', 'PPNPN', 1, 4),
(89, 'Esy Murvianti', '3021', '-', 'PPNPN', 1, 4),
(90, 'Hari damhuri', '3003', '-', 'PPNPN', 1, 4),
(91, 'Peri amri', '3023', '-', 'PPNPN', 1, 4),
(92, 'Denan', '3024', '-', 'PPNPN', 1, 4),
(93, 'Hartono', '3025', '-', 'PPNPN', 1, 4),
(94, 'Dedi Sukmana, SE', '3002', '-', 'PPNPN', 1, 4),
(95, 'Yunida Yesi, S.Si', '3027', '-', 'PPNPN', 1, 4),
(99, 'Billian Sahiga Jaswatul Ikhsan', '199511212019031003', 'III/a', 'Analis Laboratorium', 1, 3),
(100, 'Novia Liza Rahmawaty, S.Si', '199411022019032006', 'III/a', 'Analis Laboratorium', 1, 3),
(104, 'Desiyuning Fatimatuz Zuhroh, S.Si', '199112042015022004', 'Penata Muda / IIIa', 'PFM Ahli Pertama', 1, 3),
(109, 'Choirunnisah Ambarwati, S.TP', '199407212019032008', 'III/a', 'Analis Laboratorium', 1, 3),
(110, 'Nurul Hidayah, S.TP', '199701282019032002', 'III/a', 'Analis Pemeriksa Sarana dan Penyidik Obat dan Makanan', 1, 3),
(111, 'Edy Syatria, S.Kom', '197008291993031002', 'III/b', 'PFM Pelaksana Lanjutan', 1, 3),
(112, 'Dra. Tessy Mulyani, Apt', '196511191995032001', 'IV/a', 'Kepala Loka POM Sungai Penuh', 1, 3),
(116, 'Ayeni, SH', '196610151986032001', 'penata TK.I/III d', 'PFM Ahli Muda BPOM Jambi', 1, 3),
(117, 'Sri Yulianti, S.Farm, Apt', '198707152014022002', 'III/b', 'PFM Ahli Pertama', 1, 3),
(123, 'Rahel Rekalita Artasasta Marpaung, S.E.', '199609032020122001', 'Penata Muda / III/a', 'Analis Laporan Keuangan', 1, 3),
(124, 'Tri Kulsum, S.Si', '199206132020122001', 'III/a', 'CPNS TA 2019', 1, 3),
(125, 'Dyni Ananda Putri, A.Md', '199607222020122001', 'Pengatur / II/c', 'Pengadministrasi Umum', 1, 3),
(128, 'Andi Saputra, S.Kom,. MTA.', '3028', '-', 'PPNPN', 1, 4),
(131, 'Rizky Nur Qalby Defrin, S.Ikom', '3029', '-', 'PPNPN', 1, 4),
(132, 'Raden Imbang Dedi', '3030', '-', 'PPNPN', 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `ptj_dlm_kota`
--

CREATE TABLE IF NOT EXISTS `ptj_dlm_kota` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_pk` varchar(25) NOT NULL,
  `id_sk` varchar(25) NOT NULL,
  `nip_ppk` varchar(25) NOT NULL,
  `nip_pj` varchar(25) NOT NULL,
  `tarif` int(11) NOT NULL,
  `status_ptj_kota` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ptj_kota`
--

CREATE TABLE IF NOT EXISTS `ptj_kota` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_pk` varchar(25) NOT NULL,
  `id_sk` varchar(25) NOT NULL,
  `nip_ptj_kota` varchar(25) NOT NULL,
  `lama_perjadin` int(11) NOT NULL,
  `tarif_per_hari` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Triggers `ptj_kota`
--
DROP TRIGGER IF EXISTS `trg_detail_delete`;
DELIMITER //
CREATE TRIGGER `trg_detail_delete` AFTER DELETE ON `ptj_kota`
 FOR EACH ROW begin
update ptj_dlm_kota
set tarif = (
select sum(lama_perjadin*tarif_per_hari)
from ptj_kota where id_pk = old.id_pk )
where id_pk = old.id_pk ;
end
//
DELIMITER ;
DROP TRIGGER IF EXISTS `trg_detail_insert`;
DELIMITER //
CREATE TRIGGER `trg_detail_insert` AFTER INSERT ON `ptj_kota`
 FOR EACH ROW begin
update ptj_dlm_kota
set tarif = (
select sum(lama_perjadin*tarif_per_hari)
from ptj_kota where id_pk = new.id_pk )
where id_pk = new.id_pk ;
end
//
DELIMITER ;
DROP TRIGGER IF EXISTS `trg_detail_update`;
DELIMITER //
CREATE TRIGGER `trg_detail_update` AFTER UPDATE ON `ptj_kota`
 FOR EACH ROW begin
update ptj_dlm_kota
set tarif = (
select sum(lama_perjadin*tarif_per_hari)
from ptj_kota where id_pk = new.id_pk )
where id_pk = new.id_pk ;
end
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `ptj_luar_kota`
--

CREATE TABLE IF NOT EXISTS `ptj_luar_kota` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_pl` varchar(25) NOT NULL,
  `id_sk` varchar(25) NOT NULL,
  `no_sppd` varchar(25) NOT NULL,
  `nip_petugas_pl` varchar(25) NOT NULL,
  `kwitansi` int(11) NOT NULL,
  `uang_muka` int(11) NOT NULL,
  `nip_pj_luar` varchar(25) NOT NULL,
  `status_ptj_luar_kota` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `surat_tugas`
--

CREATE TABLE IF NOT EXISTS `surat_tugas` (
  `id_sk` varchar(25) NOT NULL,
  `kepala_st` varchar(50) NOT NULL,
  `jenis_sk` varchar(25) NOT NULL,
  `jenis_st` varchar(25) NOT NULL,
  `tujuan_st` varchar(25) NOT NULL,
  `tempat_st` varchar(50) NOT NULL,
  `kegiatan` varchar(250) NOT NULL,
  `tgl_berangkat` varchar(25) NOT NULL,
  `tgl_kembali` varchar(25) NOT NULL,
  `jumlah_hari` int(10) NOT NULL,
  `kendaraan` varchar(128) NOT NULL,
  `tgl_st` varchar(25) NOT NULL,
  `penandatangan` varchar(25) NOT NULL,
  `status` varchar(25) NOT NULL,
  `pembuat` varchar(25) NOT NULL,
  PRIMARY KEY (`id_sk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` int(5) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=117 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `status`) VALUES
(1, 'admin', 'admin', 'Cobaadmin434', 2),
(2, '', '197512081999031001', 'Cobapegawai434', 1),
(3, '', '198803312009121002', 'Cobapegawai434', 1),
(4, '', '196808191997031001', 'Cobapegawai434', 1),
(5, '', '196704011998032001', 'Cobapegawai434', 1),
(6, '', '196810141997032001', 'Cobapegawai434', 1),
(7, '', '197309162000032001', 'Cobapegawai434', 1),
(8, '', '197307032000032001', 'Cobapegawai434', 1),
(9, '', '196403171996031001', 'Cobapegawai434', 1),
(10, '', '196803111989022001', 'Cobapegawai434', 1),
(11, '', '196210281990021001', 'Cobapegawai434', 1),
(12, '', '196805041990121001', 'Cobapegawai434', 1),
(13, '', '197902232003122003', 'Cobapegawai434', 1),
(14, '', '197904052005012002', 'Cobapegawai434', 1),
(15, '', '197408112000031002', 'Cobapegawai434', 1),
(16, '', '198103182006042003', 'Cobapegawai434', 1),
(17, '', '198112092005012002', 'Cobapegawai434', 1),
(18, '', '198010272005012002', 'Cobapegawai434', 1),
(19, '', '198210222006042002', 'Cobapegawai434', 1),
(21, '', '198009072007121001', 'Cobapegawai434', 1),
(22, '', '198210132007122001', 'Cobapegawai434', 1),
(23, '', '197910012009122002', 'Cobapegawai434', 1),
(24, '', '198612312010122002', 'Cobapegawai434', 1),
(25, '', '196804281990022001', 'Cobapegawai434', 1),
(26, '', '197003311991032001', 'Cobapegawai434', 1),
(27, '', '197506181995031001', 'Cobapegawai434', 1),
(28, '', '198903182012121002', 'Cobapegawai434', 1),
(29, '', '198304092012122001', 'Cobapegawai434', 1),
(30, '', '198602222012122003', 'Cobapegawai434', 1),
(31, '', '198305032006042003', 'Cobapegawai434', 1),
(32, '', '196806111994022001', 'Cobapegawai434', 1),
(33, '', '198308122007121001', 'Cobapegawai434', 1),
(34, '', '197002051993032001', 'Cobapegawai434', 1),
(35, '', '197302011997031001', 'Cobapegawai434', 1),
(36, '', '196810161991032001', 'Cobapegawai434', 1),
(37, '', '197301201993032002', 'Cobapegawai434', 1),
(38, '', '196309241986021001', 'Cobapegawai434', 1),
(39, '', '199004262014022004', 'Cobapegawai434', 1),
(40, '', '198310122015022001', 'Cobapegawai434', 1),
(41, '', '196304101984032001', 'Cobapegawai434', 1),
(42, '', '196805291991031002', 'Cobapegawai434', 1),
(43, '', '197207191996032002', 'Cobapegawai434', 1),
(44, '', '197406081997032001', 'Cobapegawai434', 1),
(45, '', '199306142018012002', 'Cobapegawai434', 1),
(46, '', '197210121999032001', 'Cobapegawai434', 1),
(47, '', '198904272015021004', 'Cobapegawai434', 1),
(48, '', '197511182000032001', 'Cobapegawai434', 1),
(49, '', '198406172007122001', 'Cobapegawai434', 1),
(50, '', '197604072000032001', 'Cobapegawai434', 1),
(51, '', '198608252008121002', 'Cobapegawai434', 1),
(52, '', '198407312007121001', 'Cobapegawai434', 1),
(53, '', '199111212015022001', 'Cobapegawai434', 1),
(54, '', '199704122019032001', 'Cobapegawai434', 1),
(55, '', '199504122019031001', 'Cobapegawai434', 1),
(56, '', '199603162019032004', 'Cobapegawai434', 1),
(57, '', '199504182019032006', 'Cobapegawai434', 1),
(58, '', '199603042019032001', 'Cobapegawai434', 1),
(59, '', '199505092019032006', 'Cobapegawai434', 1),
(60, '', '199501082019031003', 'Cobapegawai434', 1),
(61, '', '199604172019032002', 'Cobapegawai434', 1),
(62, '', '199105082019032004', 'Cobapegawai434', 1),
(63, '', '199111292019032003', 'Cobapegawai434', 1),
(64, '', '199511232019032005', 'Cobapegawai434', 1),
(65, '', '199311022019032005', 'Cobapegawai434', 1),
(66, '', '199303062019031003', 'Cobapegawai434', 1),
(67, '', '3001', 'Cobapegawai434', 1),
(68, '', '3026', 'Cobapegawai434', 1),
(69, '', '3022', 'Cobapegawai434', 1),
(70, '', '3012', 'Cobapegawai434', 1),
(71, '', '3011', 'Cobapegawai434', 1),
(72, '', '3006', 'Cobapegawai434', 1),
(73, '', '3007', 'Cobapegawai434', 1),
(74, '', '3008', 'Cobapegawai434', 1),
(75, '', '3009', 'Cobapegawai434', 1),
(76, '', '3010', 'Cobapegawai434', 1),
(77, '', '3005', 'Cobapegawai434', 1),
(78, '', '3004', 'Cobapegawai434', 1),
(79, '', '3013', 'Cobapegawai434', 1),
(80, '', '3014', 'Cobapegawai434', 1),
(81, '', '3015', 'Cobapegawai434', 1),
(82, '', '3016', 'Cobapegawai434', 1),
(83, '', '3017', 'Cobapegawai434', 1),
(84, '', '3018', 'Cobapegawai434', 1),
(85, '', '3019', 'Cobapegawai434', 1),
(86, '', '3020', 'Cobapegawai434', 1),
(87, '', '3021', 'Cobapegawai434', 1),
(88, '', '3003', 'Cobapegawai434', 1),
(89, '', '3023', 'Cobapegawai434', 1),
(90, '', '3024', 'Cobapegawai434', 1),
(91, '', '3025', 'Cobapegawai434', 1),
(92, '', '3002', 'Cobapegawai434', 1),
(93, '', '3027', 'Cobapegawai434', 1),
(94, '', '197801192005012001', 'Cobapegawai434', 1),
(95, '', '199511212019031003', 'Cobapegawai434', 1),
(96, '', '199411022019032006', 'Cobapegawai434', 1),
(97, '', '199112042015022004', 'Cobapegawai434', 1),
(98, '', '196911251991032004', 'Cobapegawai434', 1),
(99, '', '196609131991032004', 'Cobapegawai434', 1),
(100, '', '196911231989032001', 'Cobapegawai434', 1),
(101, '', '199407212019032008', 'Cobapegawai434', 1),
(102, '', '199701282019032002', 'Cobapegawai434', 1),
(103, '', '197008291993031002', 'Cobapegawai434', 1),
(104, '', '196511191995032001', 'Cobapegawai434', 1),
(105, '', '196209091984022001', 'Cobapegawai434', 1),
(106, '', '196610151986032001', 'Cobapegawai434', 1),
(107, '', '198707152014022002', 'Cobapegawai434', 1),
(108, '', '196703251992032003', 'Cobapegawai434', 1),
(109, '', '197711272002121006', 'Cobapegawai434', 1),
(110, '', '199609032020122001', 'Cobapegawai434', 1),
(111, '', '199206132020122001', 'Cobapegawai434', 1),
(112, '', '199607222020122001', 'Cobapegawai434', 1),
(113, '', '3028', 'Cobapegawai434', 1),
(114, '', '3333', 'Cobapegawai434', 1),
(115, '', '3029', 'Cobapegawai434', 1),
(116, '', '3030', 'Cobapegawai434', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
