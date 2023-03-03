<?php 
	if (isset($_GET['mod'])) {
		$mod = $_GET['mod'];

		if ($mod == 'user') {
			include ('view/main-user.php');
		}
		else if ($mod == 'pegawai') {
			include ('view/main-pegawai.php');
		}
		else if ($mod == 'anggaran') {
			include ('view/main-anggaran.php');
		}
		else if ($mod == 'surat_tugas') {
			include ('view/main-surat_tugas.php');
		}
		else if ($mod == 'sppd') {
			include ('view/main-sppd.php');
		}
		else if ($mod == 'ptj_kota') {
			include ('view/main-ptj_kota.php');
		}
		else if ($mod == 'ptj_luar_kota') {
			include ('view/main-ptj_luar_kota.php');
		}
		else if ($mod == 'laporan_realisasi') {
			include ('view/main-laporan_realisasi.php');
		}
	}else{
		include ('view/main-content.php');
	}
 ?>