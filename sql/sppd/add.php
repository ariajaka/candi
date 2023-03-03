<?php 
include('../../config/config.php');
	//Untuk mengecek apakah ini proses simpan atau update
	if(isset($_POST['save'])){
		// if ($_POST['cmbDasar'] == '' or $_POST['cmbPetugas'] == '' or $_POST['surat_undangan'] =='') {
		// 	$success ="Gagal, Mohon isi Dasar/Undangan dan Petugas";
		// 	$msg = base64_encode($success);
		// 	header('location:../../index.php?mod=surattugas&act=add&s=0&msg='.$msg);			
		// }else{
			//mengmbil variabel yang dikirim oleh formulir
		$no_sppd = $_POST['no_sppd'];
		$provinsi = $_POST['provinsi'];
		$kota = $_POST['kota'];
		$tingkat_perjadin = $_POST['tingkat_perjadin'];
		$alat_angkut = $_POST['alat_angkut'];
		$cmbpenandatanganSPPD = $_POST['cmbpenandatanganSPPD'];
		$cmbpenandatanganbrgkt = $_POST['cmbpenandatanganbrgkt']; 

		if($kota != '')
		{  	
			$jlh = count($kota); 
			for($i=0;$i<$jlh;$i++)		
			{			
				$sql="INSERT INTO detail_st_sppd SET id_sk='$provinsi', petugas_nip_sppd='$kota[$i]', no_sppd='$no_sppd[$i]', tingkat_perjadin='$tingkat_perjadin[$i]', penandatangan_sppd='$cmbpenandatanganSPPD', penandatangan_berangkat='$cmbpenandatanganbrgkt'";
				$query=mysql_query($sql) or die(mysql_error().$sql);
			}
			$sql2="UPDATE surat_tugas SET status='sudah_sppd' WHERE id_sk ='$provinsi'";
			$query2=mysql_query($sql2) or die(mysql_error().$sql2);
				$success ="Sukses membuat SPPD baru";
				$msg = base64_encode($success);
				header('location:../../index.php?mod=sppd&act=add&s=1&msg='.$msg);	

		}
		else
		{
			$failed ="Gagal membuat SPPD Baru";
			$msg = base64_encode($failed);
			header('location:../../index.php?mod=sppd&act=add&s=0&msg='.$msg);	
		}	
	}
	/*
	if(isset($_POST['update_st'])){
		// if ($_POST['cmbDasar'] == '' or $_POST['cmbPetugas'] == '' or $_POST['surat_undangan'] =='') {
		// 	$success ="Gagal, Mohon isi Dasar/Undangan dan Petugas";
		// 	$msg = base64_encode($success);
		// 	header('location:../../index.php?mod=surattugas&act=add&s=0&msg='.$msg);			
		// }else{
			//mengmbil variabel yang dikirim oleh formulir
		$no_sppd = $_POST['no_sppd'];
		$provinsi = $_POST['provinsi'];
		$kota = $_POST['kota'];   
		$tingkat_perjadin = $_POST['tingkat_perjadin'];
		$cmbpenandatanganSPPD = $_POST['cmbpenandatanganSPPD'];
		$cmbpenandatanganbrgkt = $_POST['cmbpenandatanganbrgkt'];	
					
		if($kota != '')
		{
		$sql="INSERT INTO detail_st_sppd SET id_sk='$provinsi', petugas_nip_sppd='$kota', no_sppd='$no_sppd', tingkat_perjadin='$tingkat_perjadin', penandatangan_sppd='$cmbpenandatanganSPPD', penandatangan_berangkat='$cmbpenandatanganbrgkt'";
		$query=mysql_query($sql) or die(mysql_error().$sql);

		$sql2="UPDATE surat_tugas SET status='sudah_sppd' WHERE id_sk ='$provinsi'";
		$query2=mysql_query($sql2) or die(mysql_error().$sql2);

			$success ="Sukses membuat SPPD baru";
			$msg = base64_encode($success);
			header('location:../../index.php?mod=sppd&act=add&s=1&msg='.$msg);	
		}	
		else
		{
			$failed ="Gagal membuat SPPD Baru";
			$msg = base64_encode($failed);
			header('location:../../index.php?mod=sppd&act=add&s=0&msg='.$msg);	
		}	
	}
	*/	
?>