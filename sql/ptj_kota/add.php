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
		include('validation.php');

		if($realisasi3  > $pagu)
		{
			$oops ="Gagal membuat Pertanggungjawaban Dalam Kota Baru karena pagu minus";
			$msg = base64_encode($oops);
			header('location:../../index.php?mod=ptj_kota&act=add&s=2&msg='.$msg);
		}
		else
		{
			$id_pk = $_POST['id_pk'];
			$provinsi = $_POST['provinsi'];
			$kota = $_POST['kota'];
			$jumlah_hari = $_POST['jumlah_hari'];
			$tarif_per_hari = $_POST['tarif_per_hari'];
			$cmbpenandatanganPPK = $_POST['cmbpenandatanganPPK'];
			$cmb_pj_kegiatan = $_POST['cmb_pj_kegiatan'];
		

		
			$sql="INSERT INTO ptj_dlm_kota SET id_pk='$id_pk', id_sk='$provinsi', nip_ppk='$cmbpenandatanganPPK', nip_pj='$cmb_pj_kegiatan', status_ptj_kota=1";
			$query=mysql_query($sql) or die(mysql_error().$sql);
		
			$jlh = count($kota); 
			for($i=0;$i<$jlh;$i++)		
			{		
				$sql="INSERT INTO ptj_kota SET id_pk='$id_pk', id_sk='$provinsi', nip_ptj_kota='$kota[$i]', lama_perjadin='$jumlah_hari[$i]', tarif_per_hari='$tarif_per_hari[$i]'";
				$query=mysql_query($sql) or die(mysql_error());
			}
			$success ="Sukses membuat Pertanggungjawaban Kota baru";
			$msg = base64_encode($success);
			header('location:../../index.php?mod=ptj_kota&act=add&s=1&msg='.$msg);
		}
	}	
?>