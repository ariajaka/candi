<?php
		include('../../config/config.php');
		$provinsi = $_POST['provinsi'];
		$cari = mysql_query("SELECT id_sk FROM detail_st_sppd WHERE no_sppd='$provinsi'")or die("Query failed with error: ".mysql_error());;
		$data = mysql_fetch_assoc($cari);
		$id_sk = $data['id_sk'];
		echo "Nomor Surat tugas ".$id_sk;


		$cari3 = mysql_query("SELECT mak from detail_st_anggaran where id_sk = '$id_sk' AND mak != 'DIPA Pusat'");
		$data3 = mysql_fetch_assoc($cari3);
		$mak = $data3['mak'];
		echo "</br> MAK ".$mak;


		$cari2 = mysql_query("SELECT pagu from anggaran WHERE mak = '$mak'");
		$data2 = mysql_fetch_assoc($cari2);
		$pagu = $data2['pagu'];
		echo "</br> Pagu ".$pagu;


		$cari4 = mysql_query("SELECT SUM( `ptj_luar_kota`.`kwitansi`) AS `total`
                                    FROM `surat_tugas`
                                    INNER JOIN `detail_st_anggaran` ON `surat_tugas`.`id_sk` = `detail_st_anggaran`.`id_sk`
                                    INNER JOIN `ptj_luar_kota` ON `ptj_luar_kota`.`id_sk` = `surat_tugas`.`id_sk`
                                    WHERE `detail_st_anggaran`.`mak` = '$mak'");
		$data4 = mysql_fetch_assoc($cari4); 
		$total=$data4['total'];                             
        $total;
        echo "</br> Realisasi di DB Luar Kota ".$total;


        $cari5 = mysql_query("SELECT SUM( `ptj_dlm_kota`.`tarif`) AS `total_kota`
                                    FROM `surat_tugas`
                                    INNER JOIN `detail_st_anggaran` ON `surat_tugas`.`id_sk` = `detail_st_anggaran`.`id_sk`
                                    INNER JOIN `ptj_dlm_kota` ON `ptj_dlm_kota`.`id_sk` = `surat_tugas`.`id_sk`
                                    WHERE `detail_st_anggaran`.`mak` = '$mak'");
		$data5 = mysql_fetch_assoc($cari5);
		$total_kota=$data5['total_kota'];                                
        $total_kota;
        echo "</br> Realisasi di DB dalam kota ".$total_kota;
        

        $realisasi2 = $total + $total_kota;

        echo "</br> Realisasi di DB ".$realisasi2;
       
		$detail_kwitansi = $_POST['detail_kwitansi'];
		
			$jumlah = 0;
			$jlh = count($detail_kwitansi); 

			for($i=0;$i<$jlh;$i++)		
			{		
				$jumlah += $detail_kwitansi[$i];
			}
		$realisasi3 = $realisasi2 + $jumlah;
?>