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
		$id_sk = $_POST['id_sk'];
		$kepala_st = $_POST['kepala_st'];
		$cmb_jenis_st = $_POST['cmb_jenis_st'];
		$mak = $_POST['mak'];
		$tujuan_tugas = $_POST['tujuan_tugas'];
		$tempat_tugas = $_POST['tempat_tugas'];
		$kegiatan = $_POST['kegiatan'];
		$tanggalberangkat=$_POST['tanggal_berangkat'];
		$tanggalkembali=$_POST['tanggal_kembali'];
		$x_Date_Difference=$_POST['jumlah_hari'];
		$kendaraan=$_POST['kendaraan'];
		$tanggal_surat_tugas = $_POST['tanggal_surat_tugas'];
		$cmbPetugas = $_POST['cmbPetugas'];
		$cmbpenandatangan = $_POST['cmbpenandatangan'];
		$status_sppd = $_POST['status_sppd'];		 
		$dipa_pusat = $_POST['dipa_pusat'];  	
					
		$sql="INSERT INTO surat_tugas SET id_sk='$id_sk', kepala_st='$kepala_st', jenis_sk='st', jenis_st='$cmb_jenis_st', tujuan_st='$tujuan_tugas', tempat_st='$tempat_tugas', kegiatan='$kegiatan', tgl_berangkat='$tanggalberangkat', tgl_kembali='$tanggalkembali', jumlah_hari='$x_Date_Difference', kendaraan='$kendaraan', penandatangan='$cmbpenandatangan', tgl_st='$tanggal_surat_tugas',status='$status_sppd'";
		$query=mysql_query($sql) or die(mysql_error().$sql);

		$jlh = count($cmbPetugas); 
		for($i=0;$i<$jlh;$i++){
			$sql3="INSERT INTO detail_st SET id_sk='$id_sk', petugas_nip='$cmbPetugas[$i]'";
			$query3=mysql_query($sql3) or die(mysql_error());
		}

		if($mak != '')
		{
			$sql3="INSERT INTO detail_st_anggaran SET id_sk='$id_sk', anggaran='DIPA Balai POM di Jambi', mak='$mak'";
			$query3=mysql_query($sql3) or die(mysql_error());
		}		

		if($dipa_pusat =='Ya')
		{
		$sql="INSERT INTO detail_st_anggaran SET id_sk='$id_sk', anggaran='DIPA Pusat', mak=''";
		$query=mysql_query($sql) or die(mysql_error().$sql);
		}

			$success ="Sukses membuat Surat Tugas baru";
			$msg = base64_encode($success);
			header('location:../../index.php?mod=surat_tugas&act=add&s=1&msg='.$msg);		
	}	
?>