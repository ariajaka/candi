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
		$id = $_POST['id'];
		$id_sk = $_POST['id_sk'];
		$kepala_st = $_POST['kepala_st'];
		$cmb_jenis_st = $_POST['cmb_jenis_st'];
		$tujuan_tugas = $_POST['tujuan_tugas'];
		$mak = $_POST['mak'];
		$tempat_tugas = $_POST['tempat_tugas'];
		$kegiatan = $_POST['kegiatan'];
		$tanggalberangkat=$_POST['tanggal_berangkat'];
		$tanggalkembali=$_POST['tanggal_kembali'];
		$x_Date_Difference=$_POST['jumlah_hari'];
		$kendaraan=$_POST['kendaraan'];
		$tanggal_surat_tugas = $_POST['tanggal_surat_tugas'];
		$cmbpenandatangan = $_POST['cmbpenandatangan'];
		$status_sppd = $_POST['status_sppd'];
		$dipa_pusat = $_POST['dipa_pusat'];  
		
		if ($status_sppd !== 'sudah_sppd'){
		$sql="UPDATE surat_tugas SET id_sk='$id_sk', kepala_st='$kepala_st', jenis_sk='st', jenis_st='$cmb_jenis_st',tujuan_st='$tujuan_tugas', tempat_st='$tempat_tugas', kegiatan='$kegiatan', tgl_berangkat='$tanggalberangkat', tgl_kembali='$tanggalkembali', jumlah_hari='$x_Date_Difference', kendaraan='$kendaraan', penandatangan='$cmbpenandatangan', tgl_st='$tanggal_surat_tugas', status='$status_sppd' WHERE id_sk ='$id'";
		$query=mysql_query($sql) or die(mysql_error().$sql);

		}
		elseif ($status_sppd == 'sudah_sppd'){
		$sql="UPDATE surat_tugas SET id_sk='$id_sk', kepala_st='$kepala_st', jenis_sk='st', jenis_st='$cmb_jenis_st', tujuan_st='$tujuan_tugas', tempat_st='$tempat_tugas', kegiatan='$kegiatan', tgl_berangkat='$tanggalberangkat', tgl_kembali='$tanggalkembali', jumlah_hari='$x_Date_Difference', penandatangan='$cmbpenandatangan', tgl_st='$tanggal_surat_tugas', status='belum_sppd' WHERE id_sk ='$id'";
		$query=mysql_query($sql) or die(mysql_error().$sql);

		$sql3="DELETE from detail_st_sppd WHERE id_sk ='$id'";
		$query3=mysql_query($sql3) or die(mysql_error().$sql3);	

        $sql3="DELETE from detail_ptj_luar WHERE id_sk ='$id'";
        $query3=mysql_query($sql3) or die(mysql_error().$sql3); 

        $sql3="DELETE from ptj_luar WHERE id_sk ='$id'";
        $query3=mysql_query($sql3) or die(mysql_error().$sql3); 

		}
        //PETUGAS
		if($_POST['cmbPetugas'] == '')
		{
            //Lakukan Select Nantinya
            //Sementara
            $cmbPetugas = '';
        }
        else
        {
            $cmbPetugas=$_POST['cmbPetugas'];    
        }
		if ($cmbPetugas !== '') 
		{
            $jlh = count($cmbPetugas); 
            for($i=0;$i<$jlh;$i++){
                $sql2="INSERT INTO detail_st SET id_sk='$id_sk', petugas_nip='$cmbPetugas[$i]'";
                $query2=mysql_query($sql2) or die(mysql_error());
            }
        }
        //MENIMBANG
        if($_POST['menimbang'] == '')
        {
            //Lakukan Select Nantinya
            //Sementara
            $menimbang = '';
        }
        else
        {
            $menimbang=$_POST['menimbang'];    
        }
		if ($menimbang !== '') 
		{
            $jlh2 = count($menimbang); 
            for($i=0;$i<$jlh2;$i++){
                $sql3="INSERT INTO detail_st_menimbang SET id_sk='$id_sk', menimbang='$menimbang[$i]'";
                $query3=mysql_query($sql3) or die(mysql_error());
            }
        }
        //DASAR
        if($_POST['dasar'] == ''){
            //Lakukan Select Nantinya
            //Sementara
            $dasar = '';
        }
        else
        {
            $dasar=$_POST['dasar'];    
        }
		 if ($dasar !== '') {
            $jlh3 = count($dasar); 
            for($i=0;$i<$jlh3;$i++){
                $sql4="INSERT INTO detail_st_dasar SET id_sk='$id_sk', dasar='$dasar[$i]'";
                $query4=mysql_query($sql4) or die(mysql_error());
            }
        }

        if($mak != '')
        {
        	$user = "SELECT count(*) FROM detail_st_anggaran WHERE id_sk='$id_sk' AND anggaran = 'DIPA Balai POM di Jambi' ";
            $user_sql = mysql_query($user);
            $data_user = mysql_fetch_array($user_sql);
            $jml_user = $data_user[0];
        	if($jml_user >= 1)
        	{	
         		$sql3="UPDATE detail_st_anggaran SET id_sk='$id_sk', anggaran='DIPA Balai POM di Jambi', mak='$mak' WHERE id_sk ='$id' AND anggaran='DIPA Balai POM di Jambi'";
         		$query3=mysql_query($sql3) or die(mysql_error());
        	}
        	else if($jml_user == 0)
        	{
            	$sql="INSERT INTO detail_st_anggaran SET id_sk='$id_sk', anggaran='DIPA Balai POM di Jambi', mak='$mak'";
				$query=mysql_query($sql) or die(mysql_error().$sql);	
            }
        }
         if($mak == '')
        {
        		$sql3="DELETE  FROM detail_st_anggaran WHERE id_sk ='$id' AND anggaran='DIPA Balai POM di Jambi'";
        		$query3=mysql_query($sql3) or die(mysql_error());	
        }
            
        if($dipa_pusat == "Ya")
        {
        	$user = "SELECT count(*) FROM detail_st_anggaran WHERE id_sk='$id_sk' AND anggaran = 'DIPA Pusat' ";
            $user_sql = mysql_query($user);
            $data_user = mysql_fetch_array($user_sql);
            $jml_user = $data_user[0];

            if($jml_user >= 1)
            {
            	$sql="UPDATE detail_st_anggaran SET id_sk='$id_sk', anggaran='DIPA Pusat', mak='DIPA Pusat' WHERE id_sk ='$id' AND anggaran='DIPA Pusat'";
				$query=mysql_query($sql) or die(mysql_error().$sql);	
            }
            else if($jml_user == 0)
            {
            	$sql="INSERT INTO detail_st_anggaran SET id_sk='$id_sk', anggaran='DIPA Pusat', mak=''";
				$query=mysql_query($sql) or die(mysql_error().$sql);	
            }

        }
        if($dipa_pusat == "Tidak")
        {
        	$user2 = "SELECT count(*) FROM detail_st_anggaran WHERE id_sk='$id_sk' AND anggaran = 'DIPA Pusat' ";
            $user_sql2 = mysql_query($user2);
            $data_user2 = mysql_fetch_array($user_sql2);
            $jml_user2 = $data_user2[0];

            if($jml_user2 >= 1)
            {
            	$sql="DELETE from detail_st_anggaran WHERE id_sk ='$id' AND anggaran='DIPA Pusat'";
				$query=mysql_query($sql) or die(mysql_error().$sql);	
            }
        }	

			$success ="Sukses mengubah surat tugas";
			$msg = base64_encode($success);
			header('location:../../index.php?mod=surat_tugas&act=view&s=1&msg='.$msg);
		
	}	
?>