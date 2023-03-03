<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<?php //include('part/header.php') ?>
<?php include('../config/config.php') ?>
<?php include ('sql/cetak-surat.php');?>

<style>
        table {
            border-collapse: collapse;

        }     
</style>
<!--<div class="form-row">-->
<!--    <div class="col-md-2" style="border:3px solid #000;">-->
        
<!--    </div>-->
    
<!--    <div class="col-md-8">-->
<!--        Surat Tugas-->
<!--    </div>-->
    
<!--    <div class="col-md-2"  style="border:3px solid #000;">-->
        
<!--    </div>-->
<!--</div>-->
<h3 style="text-align: center;">&nbsp;</h3>
<h3 style="text-align: center;">&nbsp;</h3>
<h3 style="text-align: center;">&nbsp;</h3>
<h4 style="text-align: center;">SURAT TUGAS</h4>
<h4 style="text-align: center;">No. <?php echo $kepala_st; echo $nomor_surat;?></h4>
<p style="text-align: center;">&nbsp;</p>
<table style="height: 50px; width: 812px;">
	<tr>
        <td style="width: 812px; text-align: left;">
            <p style="text-align: justify;">Yang bertandatangan di bawah ini Kepala Balai Pengawas Obat dan Makanan di Jambi, menyampaikan kepada nama-nama tersebut dibawah ini :</p>
        </td>
    </tr>
</table>
    <?php 
		$tugas = "SELECT * FROM pegawai, detail_st WHERE `detail_st`.`id_sk` = '$id' and `detail_st`.`petugas_nip` = `pegawai`.`nip` ORDER BY `pegawai`.`level` ASC ";
		$execute = mysql_query($tugas);
	?>

<table style="height: 50px; width: 812px; font-size=100px;" border="#000000">
<tbody>
	<tr>
		<td style="text-align: left; backgrond-color:#1e1e1e">No</td>
		<td style="width: 228px; text-align: center;">Nama</td>
		<td style="width: 194px; text-align: center;">NIP</td>
		<td style="width: 151px; text-align: center;">Pangkat/Golongan</td>
		<td style="width: 157px; text-align: center;">Jabatan</td>
	</tr>
	<?php 
		$no =0;
	    while ($data3 = mysql_fetch_assoc($execute)) 
	    {
	    	$no++;
	?>
	<tr>
		<td style="width: 48px; text-align: center;"><?php echo $no;  ?></td>
		<td style="width: 228px; text-align: left; padding-left: 10px"><?php echo $data3['nama']; ?></td>
		<td style="width: 194px; text-align: left; padding-left: 10px">
			<?php 
				if($data3['jabatan'] != 'PPNPN')
				{
					echo $data3['nip']; 
				}
				else 
				{
					echo '-'; 
				}
			?>	
        </td>
		<td style="width: 151px; text-align: left; padding-left: 10px">
			<?php 
			if($data3['jabatan'] != 'PPNPN')
			{
				echo $data3['pangkat']; 
			}
			else 
			{
				echo '-'; 
			}
			?>
        </td>
		<td style="width: 157px; text-align: left; padding-left: 10px"><?php echo $data3['jabatan']; ?></td>
	</tr>
	<?php 
    	} //penutup while 
    ?>
</tbody>
</table>
<p>&nbsp;</p>
<table style="width: 812px; height: 89px;">
<tbody>
<tr style="height: 39.6375px;">
<td style="width: 190px; height: 39.6375px;" valign="top" align="left">Tugas yang diberikan</td>
<td style="width: 18px; height: 39.6375px;" valign="top">:</td>
<td style="width: 583px; height: 39.6375px;" valign="top" align="left"><?php echo $kegiatan;?></td>
</tr>
<tr style="height: 13px;">
<td style="width: 140px; height: 13px;">Tujuan</td>
<td style="width: 18px; height: 13px;">:</td>
<td style="width: 633px; height: 13px;"><?php echo $tujuan_st.' '.$tempat_st ?></td>
</tr>
<tr style="height: 13px;">
<td style="width: 140px; height: 13px;">Kendaraan</td>
<td style="width: 18px; height: 13px;">:</td>
<td style="width: 633px; height: 13px;"><?php echo $kendaraan ?></td>
</tr>
<tr style="height: 13px;">
<td style="width: 140px; height: 13px;">Waktu</td>
<td style="width: 18px; height: 13px;">:</td>
<td style="width: 633px; height: 13px;">
	<?php 
        			$bulan =  substr ($tgl_berangkat, 0,2);
                    if ($bulan == '1' or $bulan == '01') {
                    $sebut = 'Januari';
                    }elseif ($bulan == '2' or $bulan == '02') {
                    $sebut = 'Februari';
                    }elseif ($bulan == '3' or $bulan == '03') {
                    $sebut = 'Maret';
                    }elseif ($bulan == '4' or $bulan == '04') {
                    $sebut = 'April';
                    }elseif ($bulan == '5' or $bulan == '05') {
                    $sebut = 'Mei';
                    }elseif ($bulan == '6' or $bulan == '06') {
                    $sebut = 'Juni';
                    }elseif ($bulan == '7' or $bulan == '07') {
                    $sebut = 'Juli';
                    }elseif ($bulan == '8' or $bulan == '08') {
                    $sebut = 'Agustus';
                    }elseif ($bulan == '9' or $bulan == '09') {
                    $sebut = 'September';
                    }elseif ($bulan == '10' or $bulan == '10') {
                    $sebut = 'Oktober';
                    }elseif ($bulan == '11' or $bulan == '11') {
                    $sebut = 'November';
                    }elseif ($bulan == '12' or $bulan == '12') {
                    $sebut = 'Desember';
                    };
                    $bulan1 =  substr ($tgl_kembali, 0,2);
                    if ($bulan1 == '1' or $bulan1 == '01') {
                    $sebut1 = 'Januari';
                    }elseif ($bulan1 == '2' or $bulan1 == '02') {
                    $sebut1 = 'Februari';
                    }elseif ($bulan1 == '3' or $bulan1 == '03') {
                    $sebut1 = 'Maret';
                    }elseif ($bulan1 == '4' or $bulan1 == '04') {
                    $sebut1 = 'April';
                    }elseif ($bulan1 == '5' or $bulan1 == '05') {
                    $sebut1 = 'Mei';
                    }elseif ($bulan1 == '6' or $bulan1 == '06') {
                    $sebut1 = 'Juni';
                    }elseif ($bulan1 == '7' or $bulan1 == '07') {
                    $sebut1 = 'Juli';
                    }elseif ($bulan1 == '8' or $bulan1 == '08') {
                    $sebut1 = 'Agustus';
                    }elseif ($bulan1 == '9' or $bulan1 == '09') {
                    $sebut1 = 'September';
                    }elseif ($bulan1 == '10' or $bulan1 == '10') {
                    $sebut1 = 'Oktober';
                    }elseif ($bulan1 == '11' or $bulan1 == '11') {
                    $sebut1 = 'November';
                    }elseif ($bulan1 == '12' or $bulan1 == '12') {
                    $sebut1 = 'Desember';
                    };
                    if($jumlah_hari == 1){
        			echo 'Selama '.$jumlah_hari.' hari tanggal '.substr($tgl_berangkat, 3,2).' '.$sebut.' '.substr($tgl_berangkat, 6,4).'';}
                    else if($jumlah_hari > 1){
                    echo 'Selama '.$jumlah_hari.' hari tanggal '.substr($tgl_berangkat, 3,2).' '.$sebut.' '.substr($tgl_berangkat, 6,4).' s/d '.substr($tgl_kembali, 3,2).' '.$sebut1.' '.substr($tgl_kembali, 6,4).'';}
        		?>
</td>
</tr>
<tr style="height: 13px;">
<td style="width: 140px; height: 13px;">Biaya</td>
<td style="width: 18px; height: 13px;">:</td>
<td style="width: 633px; height: 13px;"><?php 
                        $sql2 = "SELECT * FROM detail_st_anggaran a INNER JOIN surat_tugas b ON b.id_sk=a.id_sk WHERE a.id_sk='$id'";
                        $query2 = mysql_query($sql2);
                        while ($data2 = mysql_fetch_assoc($query2)){
                            if ($data2['anggaran'] == 'DIPA Balai POM di Jambi'){
                            echo ''.$data2['anggaran'].'  '.$data2['mak'].' <br>';
                            }
                            
                            if ($data2['anggaran'] == 'DIPA Pusat'){
                            echo ''.$data2['anggaran'].' <br>';
                            }
                        }    
                    ?>
              </td>
</tr>
</tbody>
</table>
<table style="height: 50px; width: 812px;">
    <tr>
        <td style="width: 812px; text-align: left;">
            <p style="text-align: justify;">Agar dilaksanakan sebaik-baiknya.</p>
        </td>
    </tr>
</table>
<table style="height: 5px; width: 812px; float: left;">
<tbody>
<tr>
<td style="width: 548.2px; text-align: right;">&nbsp;</td>
<td style="width: 249.8px; text-align: left;">Jambi <?php 
        			$bulan =  substr ($tgl_st, 0,2);
                    if ($bulan == '1' or $bulan == '01') {
                    $sebut = 'Januari';
                    }elseif ($bulan == '2' or $bulan == '02') {
                    $sebut = 'Februari';
                    }elseif ($bulan == '3' or $bulan == '03') {
                    $sebut = 'Maret';
                    }elseif ($bulan == '4' or $bulan == '04') {
                    $sebut = 'April';
                    }elseif ($bulan == '5' or $bulan == '05') {
                    $sebut = 'Mei';
                    }elseif ($bulan == '6' or $bulan == '06') {
                    $sebut = 'Juni';
                    }elseif ($bulan == '7' or $bulan == '07') {
                    $sebut = 'Juli';
                    }elseif ($bulan == '8' or $bulan == '08') {
                    $sebut = 'Agustus';
                    }elseif ($bulan == '9' or $bulan == '09') {
                    $sebut = 'September';
                    }elseif ($bulan == '10' or $bulan == '10') {
                    $sebut = 'Oktober';
                    }elseif ($bulan == '11' or $bulan == '11') {
                    $sebut = 'November';
                    }elseif ($bulan == '12' or $bulan == '12') {
                    $sebut = 'Desember';
                    };
        			echo ''.substr($tgl_st, 3,2).' '.$sebut.' '.substr($tgl_st, 6,4).'';
        		?>
</td>
</tr>
<tr>
<td style="width: 548.2px; text-align: right;">&nbsp;</td>
<td style="width: 249.8px; text-align: left;"><?php 
                    if ($level == 1){                

        			echo 'Kepala Balai Pengawas Obat dan Makanan di Jambi';}
                    else if ($level != 1){
                    echo 'Plh. Kepala Balai POM di Jambi'; 
                    }
                    ?></td>
</tr>
<tr>
<td style="width: 548.2px; text-align: right;">&nbsp;</td>
<td style="width: 249.8px; text-align: right;">&nbsp;</td>
</tr>
<tr>
<td style="width: 548.2px; text-align: right;">&nbsp;</td>
<td style="width: 249.8px; text-align: right;">&nbsp;</td>
</tr>
<tr>
<td style="width: 548.2px; text-align: right;">&nbsp;</td>
<td style="width: 249.8px; text-align: right;">&nbsp;</td>
</tr>
<tr>
<td style="width: 548.2px; text-align: right;">&nbsp;</td>
<td style="width: 249.8px; text-align: right;">&nbsp;</td>
</tr>
<tr>
<td style="width: 548.2px; text-align: right;">&nbsp;</td>
<td style="width: 249.8px; text-align: left;"><?php echo $nama; ?></td>
</tr>
<tr>
<td style="width: 548.2px; text-align: right;">&nbsp;</td>
<td style="width: 249.8px; text-align: left;"></td>
</tr>
</tbody>
</table>