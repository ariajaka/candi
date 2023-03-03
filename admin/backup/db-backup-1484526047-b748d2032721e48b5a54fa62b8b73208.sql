DROP TABLE dasartugas;

CREATE TABLE `dasartugas` (
  `id_dasartugas` int(10) NOT NULL AUTO_INCREMENT,
  `dasartugas` text NOT NULL,
  PRIMARY KEY (`id_dasartugas`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO dasartugas VALUES("1","Undang-Undang No. 36 tahun 2009 tentang Kesehatan");
INSERT INTO dasartugas VALUES("2","Undang-undang No. 18 tahun 2012 tentang Pangan");



DROP TABLE dasartugas_st;

CREATE TABLE `dasartugas_st` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `no_st` varchar(100) NOT NULL,
  `id_dasar` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `no_st` (`no_st`,`id_dasar`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

INSERT INTO dasartugas_st VALUES("37","001","1");
INSERT INTO dasartugas_st VALUES("38","001","2");
INSERT INTO dasartugas_st VALUES("39","002","1");
INSERT INTO dasartugas_st VALUES("40","002","2");



DROP TABLE pegawai;

CREATE TABLE `pegawai` (
  `id_pegawai` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `nip` varchar(100) NOT NULL,
  `pangkat` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `status` int(10) NOT NULL,
  PRIMARY KEY (`id_pegawai`)
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=latin1;

INSERT INTO pegawai VALUES("1","Drs. Ujang Supriatna, Apt","19600609 198903 1 001","IV/b","KEPALA BALAI POM JAMBI","1");
INSERT INTO pegawai VALUES("2","Dra. Evi Iriantina, Apt, (MH)","19630306 198903 2 001","IV/a","PFM MADYA","1");
INSERT INTO pegawai VALUES("3","Dra. Tessi Mulyani, Apt.","19651119 199503 2 001","IV/a","KASI. PENGUJIAN PANGAN DAN BAHAN BERBAHAYA","1");
INSERT INTO pegawai VALUES("4","Drs. Erhadi Adang Maria, Apt","19640317 199603 1 001","IV/a","PFM MUDA","1");
INSERT INTO pegawai VALUES("5","Armeiny Romita, S.Si, Apt","19681014 199703 2 001","IV/a","KASI. PENGUJIAN MIKROBIOLOGI","1");
INSERT INTO pegawai VALUES("6","Dra. Emli, Apt","19660813 199603 2 001","IV/a","KASI. PEMERIKSAAN DAN PENYIDIKAN","1");
INSERT INTO pegawai VALUES("7","Dra. Lenggo Vivirianty, Apt","19670401 199803 2 001","IV/a","KASI. PENGUJIAN PRODUK TERAPETIK, NARKOTIKA, OT, KOSMETIK, DAN PRODUK KOMPLEMEN","1");
INSERT INTO pegawai VALUES("8","Erlina Ita Sinulingga, S.Si, Apt","19670517 199803 2 001","IV/a","PFM MUDA","1");
INSERT INTO pegawai VALUES("9","Nurizati, S.Si, Apt","19730916 200003 2 001","IV/a","PFM MADYA","1");
INSERT INTO pegawai VALUES("10","Ratnawita, S.Si, Apt","19730703 200003 2 001","IV/a","PFM MADYA","1");
INSERT INTO pegawai VALUES("11","Drs. Syartoni","19621028 199002 1 001","III/d","KASI. SERTIFIKASI DAN LAYANAN INFORMASI KONSUMEN","1");
INSERT INTO pegawai VALUES("12","Agus Jayadi, S.Si","19740811 200003 1 002","III/d","PFM PERTAMA","1");
INSERT INTO pegawai VALUES("13","Fuani Farid, S.Farm, Apt","19801027 200501 2 002","III/d","PFM PERTAMA","1");
INSERT INTO pegawai VALUES("14","Desmita Adriani Syamsu, S.Farm, Apt","19811209 200501 2 002","III/d","PFM PERTAMA","1");
INSERT INTO pegawai VALUES("15","Westi Novita, S.Si, Apt","19790405 200501 2 002","III/d","PFM MUDA","1");
INSERT INTO pegawai VALUES("16","Misna Delli","19620909 198402 2 001","III/d","PFM TERAMPIL PENYELIA","1");
INSERT INTO pegawai VALUES("17","R. Dawiyah","19600114 198502 2 001","III/d","PFM TERAMPIL PENYELIA","1");
INSERT INTO pegawai VALUES("18","Tutut Rospyanti Citra, S.Farm, Apt","19810318 200604 2 003","III/d","PFM PERTAMA","1");
INSERT INTO pegawai VALUES("19","Rahmawati, S.Farm, Apt","19820224 200604 2 007","III/d","PFM PERTAMA","1");
INSERT INTO pegawai VALUES("20","Riyanti, S.Farm, Apt","19821022 200604 2 002","III/d","PFM PERTAMA","1");
INSERT INTO pegawai VALUES("21","Yuli Fitriani, S.Si, Apt","19800719 200604 2 004","III/d","PFM MUDA","1");
INSERT INTO pegawai VALUES("22","Febriany Martiana Nasel, S.Si, Apt","19790223 200312 2 003","III/d","PFM  AHLI MUDA","1");
INSERT INTO pegawai VALUES("23","Sarino, S.Farm, Apt","19680504 199012 1 001","III/d","PFM  PERTAMA","1");
INSERT INTO pegawai VALUES("24","Ayeni","19661015 198603 2 001","III/c","PFM TERAMPIL PENYELIA","1");
INSERT INTO pegawai VALUES("25","Sri Rahmawati, A.Md","19671228 198803 2 001","III/c","PFM PERTAMA","1");
INSERT INTO pegawai VALUES("26","Marhamah, SE","19680311 198902 2 001","III/d","KEPALA SUB BAGIAN TATA USAHA","1");
INSERT INTO pegawai VALUES("27","Linda Prasetyawati, S.Farm, Apt.","19821013 200712 2 001","III/c","PFM PERTAMA","1");
INSERT INTO pegawai VALUES("28","Novva Reddy Naldo, S.Farm, Apt","19800907 200712 1 001","III/c","PFM PERTAMA","1");
INSERT INTO pegawai VALUES("29","Rahmat Hidayat, S.Farm, Apt","19860507 200812 1 001","III/c","PFM PERTAMA","1");
INSERT INTO pegawai VALUES("30","Fauziah","19680428 199002 2 001","III/c","PFM PENYELIA","1");
INSERT INTO pegawai VALUES("31","Maria Lies Purbahabsari Viandana, S.Farm, Apt","19791001 200912 2 002","III/c","PFM PERTAMA","1");
INSERT INTO pegawai VALUES("32","Adrafita Hanesty Hadi, S.Farm, Apt","19861231 201012 2 002","III/c","PFM PERTAMA","1");
INSERT INTO pegawai VALUES("33","Malhan Zaldi, SH","19750618 199503 1 001","III/c","FUNGSIONAL(Analis pengelola BMN)","1");
INSERT INTO pegawai VALUES("34","Darwil","19590504 198102 1 001","III/b","FUNGSIONAL(Pemelihara Sarana Prasarana)","1");
INSERT INTO pegawai VALUES("35","Kurniati","19630410 198403 2 001","III/b","FUNGSIONAL(Asisten Pemeriksa sarana Obat & Makanan)","1");
INSERT INTO pegawai VALUES("36","Hasniwati Ritonga","19611207 198403 2 001","III/b","FUNGSIONAL(Pengadministrasi Keuangan)","1");
INSERT INTO pegawai VALUES("37","Aswita Br. Pinem","19681016 199103 2 001","III/b","FUNGSIONAL(Bendahara Penerima)","1");
INSERT INTO pegawai VALUES("38","Sumarsono","19680529 199103 1 002","III/b","FUNGSIONAL(Asisten Pemeriksa sarana Obat & Makanan)","1");
INSERT INTO pegawai VALUES("39","Zuriati","19700331 199103 2 001","III/c","PFM TERAMPIL PELAKSANA LANJUTAN","1");
INSERT INTO pegawai VALUES("40","Gustina Yasak","19611217 199203 2 001","III/b","PFM TERAMPIL PELAKSANA LANJUTAN","1");
INSERT INTO pegawai VALUES("41","Fransisca Octanta Wijaya Nasution, STP","19830812 200712 1 001","III/b","FUNGSIONAL(Perencana Pertama)","1");
INSERT INTO pegawai VALUES("42","Rizal Effendi","19630924 198602 1 001","III/b","FUNGSIONAL(Pengadministrasi umum)","1");
INSERT INTO pegawai VALUES("43","Hertanti Trias Febriani, S.Farm, Apt","19860222 201212 2 003","III/b","PFM PERTAMA","1");
INSERT INTO pegawai VALUES("44","Rachmad Anres Dongoran, S.Farm, Apt","19890318 201212 1 002","III/b","Fungsional Umum","1");
INSERT INTO pegawai VALUES("45","Lusiana Wijayanti, S.Farm, Apt","19830409 201212 2 001","III/b","PFM PERTAMA","1");
INSERT INTO pegawai VALUES("46","Bambang","19610624 198402 1 001","III/b","FUNGSIONAL(Pengadministrasi umum)","1");
INSERT INTO pegawai VALUES("47","Denayu Aidha Nursanti","19730120 199303 2 002","III/b","PFM TERAMPIL PELAKSANA LANJUTAN","1");
INSERT INTO pegawai VALUES("48","Mursidah,  SH","19680611 199402 2 001","III/b","PFM PERTAMA","1");
INSERT INTO pegawai VALUES("49","Mega Ratnasari, S.Si.","19830503 200604 2 003","III/b","PFM Pertama","1");
INSERT INTO pegawai VALUES("50","Yuharidmi","19700205 199303 2 001","III/b","PFM PELAKSANA LANJUTAN","1");
INSERT INTO pegawai VALUES("51","Edy Syatria","19700829 199303 1 002","III/b","PFM TERAMPIL PELAKSANA LANJUTAN","1");
INSERT INTO pegawai VALUES("52","Sri Yulianti Putri , S.Farm, Apt","19870715 201402 2 002","III/b","PFM PERTAMA","1");
INSERT INTO pegawai VALUES("53","Fitri Hariani, S.farm, Apt","19900426 201402 2 004","III/b","PFM PERTAMA","1");
INSERT INTO pegawai VALUES("54","Inneke Koesumawaty","19720719 199603 2 002","III/a","PFM PELAKSANA LANJUTAN","1");
INSERT INTO pegawai VALUES("55","Supriyadi, SH","19730201 199703 1 001","III/b","FUNGSIONAL(Pengadministrasi Keuangan)","1");
INSERT INTO pegawai VALUES("56","Yostarita Muchtar","19740608 199703 2 001","III/a","PFM PELAKSANA LANJUTAN","1");
INSERT INTO pegawai VALUES("57","Rasidi","19751208 199903 1 001","III/a","FUNGSIONAL(Pemelihara Sarana Prasarana)","1");
INSERT INTO pegawai VALUES("58","Madalena","19721012 199903 2 001","III/a","FUNGSIONAL(Verifikator Keuangan)","1");
INSERT INTO pegawai VALUES("59","Tri Murnila","19760407 200003 2 001","II/d","Analis Kepegawaian Pelaksana","1");
INSERT INTO pegawai VALUES("60","Mardiah","19751118 200003 2 001","III/a","Arsiparis Pelaksana/ Arsiparis Terampil","1");
INSERT INTO pegawai VALUES("61","Rina Yunita, A.Md","19840617 200712 2 001","II/d","PFM Pelaksana","1");
INSERT INTO pegawai VALUES("62","Delyuvin Nasution, A.Md.","19840731 200712 1 001","II/d","PFM Pelaksana","1");
INSERT INTO pegawai VALUES("63","M.Fahrul Rahman, A.Md","19860825 200812 1 002","II/d","Pengelola layanan pengaduan Konsumen & Informasi Konsumen","1");
INSERT INTO pegawai VALUES("64","Aria Jaka, A.Md","19880331 200912 1 002","II/d","Pranata Komputer Pelaksana","1");
INSERT INTO pegawai VALUES("65","Doddy Radiansyah, A.Md","19871203 201012 1 003","II/d","Bendahara pengeluaran","1");
INSERT INTO pegawai VALUES("66","Mariana Nainggolan","19831012 201502 2 001","III/b","Analis Laboratorium","1");
INSERT INTO pegawai VALUES("67","Desiyuning Fatimatuz Zuhroh","19911204 201502 2 004","III/a"," Analis Laboratorium ","1");
INSERT INTO pegawai VALUES("68","Ruhai Lanang Prasojo","19890427 201502 1 004","III/a"," Analis Laboratorium ","1");
INSERT INTO pegawai VALUES("69","Nova Citra Rose Silitonga","19911121 201502 2 001","II/c","Asisten pengujian Laboratorium","1");



DROP TABLE pegawai_st;

CREATE TABLE `pegawai_st` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `no_st` varchar(100) NOT NULL,
  `nip` varchar(100) NOT NULL,
  `no_sppd` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `no_st` (`no_st`,`nip`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

INSERT INTO pegawai_st VALUES("34","001","19621028 199002 1 001","PR.07.01.885.01.17.001");
INSERT INTO pegawai_st VALUES("35","001","19680504 199012 1 001","PR.07.01.885.01.17.001");
INSERT INTO pegawai_st VALUES("36","001","19860825 200812 1 002","PR.07.01.885.01.17.001");
INSERT INTO pegawai_st VALUES("37","001","19880331 200912 1 002","PR.07.01.885.01.17.001");
INSERT INTO pegawai_st VALUES("38","002","19670401 199803 2 001","PR.07.01.885.01.17.002");
INSERT INTO pegawai_st VALUES("39","002","19651119 199503 2 001","PR.07.01.885.01.17.002");
INSERT INTO pegawai_st VALUES("40","002","19640317 199603 1 001","PR.07.01.885.01.17.002");
INSERT INTO pegawai_st VALUES("41","002","19660813 199603 2 001","PR.07.01.885.01.17.002");



DROP TABLE surattugas;

CREATE TABLE `surattugas` (
  `no_st` varchar(10) NOT NULL,
  `tgl_st` text NOT NULL,
  `menimbang` text NOT NULL,
  `undangan` text NOT NULL,
  `tujuan` text NOT NULL,
  `lokasi` text NOT NULL,
  `tgl_berangkat` text NOT NULL,
  `tgl_kembali` text NOT NULL,
  `jumlah_hari` int(10) NOT NULL,
  `maksud` text NOT NULL,
  `biaya` int(11) NOT NULL,
  `nip` varchar(100) NOT NULL,
  PRIMARY KEY (`no_st`),
  KEY `nip` (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO surattugas VALUES("001","01/17/2017","Perlunya peningkatan pengetahuan masyarakat tentang Obat, Obat Tradisional, Kosmetik, Produk Komplemen dan Bahan Berbahaya dalam melindungi diri terhadap peredaran Obat, Obat Tradisional, Kosmetik, Produk Komplemen dan Bahan Berbahaya yang tidak memenuhi syarat keamanan.","","Kab. Tebo","Tebo Ulu","01/20/2017","01/21/2017","2","Melaksanakan kegiatan penyebaran informasu produk terapetik obat, obat tradisional, kosmetik, produk kompelemen dan bahan berhaya di Kabupaten Bungo","0","19621028 199002 1 001");
INSERT INTO surattugas VALUES("002","01/29/2017","Perlunya peningkatan pengetahuan masyarakat tentang obat, obat tradisional, kosemtik, produk komplemen dan bahan berhaya dalam melindungi diri terhadap peredaran obat, obat tradisional, kosmetik, produk komplemen dan bahan berbahaya yang tidak memenuhi syarat kemanan","","Kota Jambi","Kota Baru","01/30/2017","01/31/2017","2","Melaksanakan kegiatan penyebaran informasi produk terapetik obat, obat tradisional, kosemetik dan produk komplemen dan bahan berbahaya di kota jambi","0","19660813 199603 2 001");



DROP TABLE user;

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` int(5) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO user VALUES("1","admin","admin","admin","1");



