<?php 
include('../../config/config.php');
	//Untuk mengecek apakah ini proses simpan atau update
	if(isset($_POST['save']))
	{
		// if ($_POST['cmbDasar'] == '' or $_POST['cmbPetugas'] == '' or $_POST['surat_undangan'] =='') {
		// 	$success ="Gagal, Mohon isi Dasar/Undangan dan Petugas";
		// 	$msg = base64_encode($success);
		// 	header('location:../../index.php?mod=surattugas&act=add&s=0&msg='.$msg);			
		// }else{
			//mengmbil variabel yang dikirim oleh formulir
		$id_pl = $_POST['id_pl'];
		$provinsi = $_POST['provinsi'];
		
		$cari = mysql_query("SELECT id_sk FROM detail_st_sppd WHERE no_sppd='$provinsi'");
		$data = mysql_fetch_assoc($cari);
		$id_sk = $data['id_sk'];

		$kota = $_POST['kota'];
		$uang_muka = $_POST['uang_muka'];
		$uraian = $_POST['uraian'];
		$detail_kwitansi = $_POST['detail_kwitansi'];
		$riil = $_POST['riil'];
		if($kota != '')
		{
		$sql="INSERT INTO ptj_luar_kota SET id_pl='$id_pl', id_sk= '$id_sk', no_sppd='$provinsi', nip_petugas_pl='$kota', uang_muka='$uang_muka'";
		$query=mysql_query($sql) or die(mysql_error().$sql);
		
			$jlh = count($uraian); 
			for($i=0;$i<$jlh;$i++)		
			{		
				$sql="INSERT INTO detail_ptj_luar SET id_pl='$id_pl', uraian='$uraian[$i]', detail_kwitansi='$detail_kwitansi[$i]', riil='$riil[$i]'";
				$query=mysql_query($sql) or die(mysql_error());
			}
		$success ="Sukses membuat Pertanggungjawaban Luar Kota baru";
		$msg = base64_encode($success);
		header('location:../../index.php?mod=ptj_luar_kota&act=add&s=1&msg='.$msg);
		}
		else
		{
			$failed ="Gagal membuat Pertanggungjawaban Luar Kota Baru";
			$msg = base64_encode($failed);
			header('location:../../index.php?mod=ptj_luar_kota&act=add&s=0&msg='.$msg);	
		}	
		
	}	
?>