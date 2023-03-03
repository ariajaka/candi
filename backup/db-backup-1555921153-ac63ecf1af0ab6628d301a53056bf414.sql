DROP TABLE detail_disposisi_diteruskan_pada;

CREATE TABLE `detail_disposisi_diteruskan_pada` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_disposisi` varchar(25) NOT NULL,
  `diteruskan_pada` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

INSERT INTO detail_disposisi_diteruskan_pada VALUES("","","");
INSERT INTO detail_disposisi_diteruskan_pada VALUES("","","");
INSERT INTO detail_disposisi_diteruskan_pada VALUES("","","");
INSERT INTO detail_disposisi_diteruskan_pada VALUES("","","");
INSERT INTO detail_disposisi_diteruskan_pada VALUES("","","");
INSERT INTO detail_disposisi_diteruskan_pada VALUES("","","");



DROP TABLE detail_disposisi_keterangan_disposisi;

CREATE TABLE `detail_disposisi_keterangan_disposisi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_disposisi` varchar(25) NOT NULL,
  `keterangan_disposisi` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

INSERT INTO detail_disposisi_keterangan_disposisi VALUES("","","");
INSERT INTO detail_disposisi_keterangan_disposisi VALUES("","","");
INSERT INTO detail_disposisi_keterangan_disposisi VALUES("","","");
INSERT INTO detail_disposisi_keterangan_disposisi VALUES("","","");
INSERT INTO detail_disposisi_keterangan_disposisi VALUES("","","");
INSERT INTO detail_disposisi_keterangan_disposisi VALUES("","","");
INSERT INTO detail_disposisi_keterangan_disposisi VALUES("","","");
INSERT INTO detail_disposisi_keterangan_disposisi VALUES("","","");
INSERT INTO detail_disposisi_keterangan_disposisi VALUES("","","");



DROP TABLE detail_disposisi_pegawai_penerima;

CREATE TABLE `detail_disposisi_pegawai_penerima` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_disposisi` varchar(25) NOT NULL,
  `nip_penerima` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

INSERT INTO detail_disposisi_pegawai_penerima VALUES("","","");
INSERT INTO detail_disposisi_pegawai_penerima VALUES("","","");
INSERT INTO detail_disposisi_pegawai_penerima VALUES("","","");
INSERT INTO detail_disposisi_pegawai_penerima VALUES("","","");
INSERT INTO detail_disposisi_pegawai_penerima VALUES("","","");



DROP TABLE detail_st;

CREATE TABLE `detail_st` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_sk` varchar(25) NOT NULL,
  `petugas_nip` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

INSERT INTO detail_st VALUES("","","");
INSERT INTO detail_st VALUES("","","");



DROP TABLE detail_st_sppd;

CREATE TABLE `detail_st_sppd` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_sk` varchar(25) NOT NULL,
  `petugas_nip_sppd` varchar(25) NOT NULL,
  `no_sppd` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO detail_st_sppd VALUES("","","","");
INSERT INTO detail_st_sppd VALUES("","","","");



DROP TABLE disposisi;

CREATE TABLE `disposisi` (
  `id_disposisi` varchar(25) NOT NULL,
  `id_sm` varchar(25) NOT NULL,
  `tgl_disposisi` varchar(25) NOT NULL,
  `catatan` varchar(100) NOT NULL,
  `disposisi_nip` varchar(25) NOT NULL,
  PRIMARY KEY (`id_disposisi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO disposisi VALUES("","","","","");
INSERT INTO disposisi VALUES("","","","","");
INSERT INTO disposisi VALUES("","","","","");



DROP TABLE jenis_st;

CREATE TABLE `jenis_st` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_st` varchar(25) NOT NULL,
  `status_st` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO jenis_st VALUES("","","");
INSERT INTO jenis_st VALUES("","","");
INSERT INTO jenis_st VALUES("","","");



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

INSERT INTO pegawai VALUES("","","","","","");
INSERT INTO pegawai VALUES("","","","","","");
INSERT INTO pegawai VALUES("","","","","","");
INSERT INTO pegawai VALUES("","","","","","");
INSERT INTO pegawai VALUES("","","","","","");
INSERT INTO pegawai VALUES("","","","","","");
INSERT INTO pegawai VALUES("","","","","","");
INSERT INTO pegawai VALUES("","","","","","");
INSERT INTO pegawai VALUES("","","","","","");
INSERT INTO pegawai VALUES("","","","","","");
INSERT INTO pegawai VALUES("","","","","","");
INSERT INTO pegawai VALUES("","","","","","");
INSERT INTO pegawai VALUES("","","","","","");
INSERT INTO pegawai VALUES("","","","","","");
INSERT INTO pegawai VALUES("","","","","","");
INSERT INTO pegawai VALUES("","","","","","");
INSERT INTO pegawai VALUES("","","","","","");
INSERT INTO pegawai VALUES("","","","","","");
INSERT INTO pegawai VALUES("","","","","","");
INSERT INTO pegawai VALUES("","","","","","");
INSERT INTO pegawai VALUES("","","","","","");
INSERT INTO pegawai VALUES("","","","","","");
INSERT INTO pegawai VALUES("","","","","","");
INSERT INTO pegawai VALUES("","","","","","");
INSERT INTO pegawai VALUES("","","","","","");
INSERT INTO pegawai VALUES("","","","","","");
INSERT INTO pegawai VALUES("","","","","","");
INSERT INTO pegawai VALUES("","","","","","");
INSERT INTO pegawai VALUES("","","","","","");
INSERT INTO pegawai VALUES("","","","","","");
INSERT INTO pegawai VALUES("","","","","","");
INSERT INTO pegawai VALUES("","","","","","");
INSERT INTO pegawai VALUES("","","","","","");
INSERT INTO pegawai VALUES("","","","","","");
INSERT INTO pegawai VALUES("","","","","","");
INSERT INTO pegawai VALUES("","","","","","");
INSERT INTO pegawai VALUES("","","","","","");
INSERT INTO pegawai VALUES("","","","","","");
INSERT INTO pegawai VALUES("","","","","","");
INSERT INTO pegawai VALUES("","","","","","");
INSERT INTO pegawai VALUES("","","","","","");
INSERT INTO pegawai VALUES("","","","","","");
INSERT INTO pegawai VALUES("","","","","","");
INSERT INTO pegawai VALUES("","","","","","");
INSERT INTO pegawai VALUES("","","","","","");
INSERT INTO pegawai VALUES("","","","","","");
INSERT INTO pegawai VALUES("","","","","","");
INSERT INTO pegawai VALUES("","","","","","");
INSERT INTO pegawai VALUES("","","","","","");
INSERT INTO pegawai VALUES("","","","","","");
INSERT INTO pegawai VALUES("","","","","","");
INSERT INTO pegawai VALUES("","","","","","");
INSERT INTO pegawai VALUES("","","","","","");
INSERT INTO pegawai VALUES("","","","","","");
INSERT INTO pegawai VALUES("","","","","","");
INSERT INTO pegawai VALUES("","","","","","");
INSERT INTO pegawai VALUES("","","","","","");
INSERT INTO pegawai VALUES("","","","","","");
INSERT INTO pegawai VALUES("","","","","","");
INSERT INTO pegawai VALUES("","","","","","");
INSERT INTO pegawai VALUES("","","","","","");
INSERT INTO pegawai VALUES("","","","","","");
INSERT INTO pegawai VALUES("","","","","","");
INSERT INTO pegawai VALUES("","","","","","");
INSERT INTO pegawai VALUES("","","","","","");
INSERT INTO pegawai VALUES("","","","","","");
INSERT INTO pegawai VALUES("","","","","","");
INSERT INTO pegawai VALUES("","","","","","");
INSERT INTO pegawai VALUES("","","","","","");



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

INSERT INTO surat_keluar VALUES("","","","","","","");
INSERT INTO surat_keluar VALUES("","","","","","","");
INSERT INTO surat_keluar VALUES("","","","","","","");
INSERT INTO surat_keluar VALUES("","","","","","","");



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

INSERT INTO surat_masuk VALUES("","","","","","","","");
INSERT INTO surat_masuk VALUES("","","","","","","","");
INSERT INTO surat_masuk VALUES("","","","","","","","");



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

INSERT INTO surat_tugas VALUES("","","","","","","","","","","");



DROP TABLE user;

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` int(5) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO user VALUES("","","","","");
INSERT INTO user VALUES("","","","","");



