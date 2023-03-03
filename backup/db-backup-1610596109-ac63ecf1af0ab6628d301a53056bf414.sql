DROP TABLE detail_disposisi_diteruskan_pada;

CREATE TABLE `detail_disposisi_diteruskan_pada` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_disposisi` varchar(25) NOT NULL,
  `diteruskan_pada` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

INSERT INTO detail_disposisi_diteruskan_pada VALUES("1","DSP0001","Kasie Pengujian Mikrobiol");
INSERT INTO detail_disposisi_diteruskan_pada VALUES("14","DSP0001","Kasie Pemdik");
INSERT INTO detail_disposisi_diteruskan_pada VALUES("16","DSP0002","Ka. Subbag TU");
INSERT INTO detail_disposisi_diteruskan_pada VALUES("17","DSP0003","Kepala Balai");
INSERT INTO detail_disposisi_diteruskan_pada VALUES("18","DSP0003","Ka. Subbag TU");
INSERT INTO detail_disposisi_diteruskan_pada VALUES("19","DSP0003","kkkkk");



DROP TABLE detail_disposisi_keterangan_disposisi;

CREATE TABLE `detail_disposisi_keterangan_disposisi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_disposisi` varchar(25) NOT NULL,
  `keterangan_disposisi` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

INSERT INTO detail_disposisi_keterangan_disposisi VALUES("22","DSP0001","Untuk dibahas bersama");
INSERT INTO detail_disposisi_keterangan_disposisi VALUES("23","DSP0001","Untuk dibahas bersama");
INSERT INTO detail_disposisi_keterangan_disposisi VALUES("24","DSP0001","ddddd");
INSERT INTO detail_disposisi_keterangan_disposisi VALUES("25","DSP0001","o");
INSERT INTO detail_disposisi_keterangan_disposisi VALUES("26","DSP0002","Untuk ditelaah dan usulan");
INSERT INTO detail_disposisi_keterangan_disposisi VALUES("27","DSP0002","ggg");
INSERT INTO detail_disposisi_keterangan_disposisi VALUES("28","DSP0003","Untuk ditelaah dan usulan");
INSERT INTO detail_disposisi_keterangan_disposisi VALUES("29","DSP0003","Untuk ditindaklanjuti");
INSERT INTO detail_disposisi_keterangan_disposisi VALUES("30","DSP0003","lllllllll");



DROP TABLE detail_disposisi_pegawai_penerima;

CREATE TABLE `detail_disposisi_pegawai_penerima` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_disposisi` varchar(25) NOT NULL,
  `nip_penerima` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

INSERT INTO detail_disposisi_pegawai_penerima VALUES("6","DSP0001","19871203 201012 1 003");
INSERT INTO detail_disposisi_pegawai_penerima VALUES("7","DSP0001","19590504 198102 1 001");
INSERT INTO detail_disposisi_pegawai_penerima VALUES("8","DSP0002","19811209 200501 2 002");
INSERT INTO detail_disposisi_pegawai_penerima VALUES("9","DSP0003","19911204 201502 2 004");
INSERT INTO detail_disposisi_pegawai_penerima VALUES("10","DSP0003","19660813 199603 2 001");



DROP TABLE detail_st;

CREATE TABLE `detail_st` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_sk` varchar(25) NOT NULL,
  `petugas_nip` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

INSERT INTO detail_st VALUES("34","SK0001","19911204 201502 2 004");
INSERT INTO detail_st VALUES("35","SK0001","19740608 199703 2 001");



DROP TABLE detail_st_sppd;

CREATE TABLE `detail_st_sppd` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_sk` varchar(25) NOT NULL,
  `petugas_nip_sppd` varchar(25) NOT NULL,
  `no_sppd` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO detail_st_sppd VALUES("3","SK0001","19740608 199703 2 001","0001");
INSERT INTO detail_st_sppd VALUES("4","SK0001","19911204 201502 2 004","0002");



DROP TABLE disposisi;

CREATE TABLE `disposisi` (
  `id_disposisi` varchar(25) NOT NULL,
  `id_sm` varchar(25) NOT NULL,
  `tgl_disposisi` varchar(25) NOT NULL,
  `catatan` varchar(100) NOT NULL,
  `disposisi_nip` varchar(25) NOT NULL,
  PRIMARY KEY (`id_disposisi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO disposisi VALUES("DSP0001","SRM0002","04/09/2019","ddkkkkkkkkkk","19640317 199603 1 001");
INSERT INTO disposisi VALUES("DSP0002","SRM0001","04/09/2019","aaaaaaabbbkkkllloookkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk","19630306 198903 2 001");
INSERT INTO disposisi VALUES("DSP0003","SRM0003","04/18/2019","aaaaaaabbbkkklllooof","19621028 199002 1 001");



DROP TABLE jenis_st;

CREATE TABLE `jenis_st` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_st` varchar(25) NOT NULL,
  `status_st` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO jenis_st VALUES("1","luar_kota_sppd","belum_sppd");
INSERT INTO jenis_st VALUES("2","dalam_kota_tidak_sppd","tidak_sppd");
INSERT INTO jenis_st VALUES("3","luar_kota_tidak_sppd","tidak_sppd");



DROP TABLE pegawai;

CREATE TABLE `pegawai` (
  `id_pegawai` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `nip` varchar(25) NOT NULL,
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



DROP TABLE surat_keluar;

CREATE TABLE `surat_keluar` (
  `id_sk` varchar(25) NOT NULL,
  `kepala_sk` varchar(25) NOT NULL,
  `jenis` varchar(25) NOT NULL,
  `perihal` varchar(50) NOT NULL,
  `tujuan` varchar(25) NOT NULL,
  `tgl_sk` varchar(25) NOT NULL,
  `penandatangan_nip` varchar(25) NOT NULL,
  PRIMARY KEY (`id_sk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO surat_keluar VALUES("SK0001","KU.04.01.88.04.19.","st","AAAA","AAAABBB","04/05/2019","19660813 199603 2 001");
INSERT INTO surat_keluar VALUES("SK0002","KU.04.01.88.04.19.","umum","dasda","dasdasdas","04/09/2019","19840731 200712 1 001");
INSERT INTO surat_keluar VALUES("SK0002A","KU.04.01.88.04.19.","umum","bbbbbbbbb","bbbbbbb","04/10/2019","19660813 199603 2 001");
INSERT INTO surat_keluar VALUES("SK0003","KP.04.01.88.04.19.","umum","bbbbb","yyyy","04/10/2019","19651119 199503 2 001");



DROP TABLE surat_masuk;

CREATE TABLE `surat_masuk` (
  `id_sm` varchar(25) NOT NULL,
  `tgl_catat_sm` varchar(25) NOT NULL,
  `nomor_sm` varchar(25) NOT NULL,
  `alamat_sm` varchar(50) NOT NULL,
  `tgl_sm` varchar(25) NOT NULL,
  `perihal` varchar(50) NOT NULL,
  `sifat_surat` varchar(25) NOT NULL,
  `status` varchar(25) NOT NULL,
  PRIMARY KEY (`id_sm`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO surat_masuk VALUES("SRM0001","04/10/2019","aaa","aaa","03/18/2019","bbbbbbbb","Rahasia","Sudah di Disposisi");
INSERT INTO surat_masuk VALUES("SRM0002","04/10/2019","PW/01.05.341.03.19.1170","Direktur Pengawasan Distribusi","03/21/2019","aaaaaaa","","Sudah di Disposisi");
INSERT INTO surat_masuk VALUES("SRM0003","04/10/2019","23131","sdad","04/10/2019","bbbbbbbbb","Rahasia","Sudah di Disposisi");



DROP TABLE surat_tugas;

CREATE TABLE `surat_tugas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_sk` varchar(25) NOT NULL,
  `kepala_st` varchar(25) NOT NULL,
  `jenis_sk` varchar(25) NOT NULL,
  `jenis_st` varchar(25) NOT NULL,
  `tujuan_st` varchar(25) NOT NULL,
  `tempat_st` varchar(25) NOT NULL,
  `kegiatan` varchar(50) NOT NULL,
  `tgl_st` varchar(25) NOT NULL,
  `penandatangan` varchar(25) NOT NULL,
  `status` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

INSERT INTO surat_tugas VALUES("15","SK0001","KU.04.01.88.04.19.","st","luar_kota_sppd","AAAABBB","AAAA","AAAA","04/05/2019","19660813 199603 2 001","sudah_sppd");



DROP TABLE user;

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` int(5) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO user VALUES("1","admin","admin","admin","1");
INSERT INTO user VALUES("2","ayuk","ayuk","2e890e7fd9ae64e8c423289e937b8fa3","1");



