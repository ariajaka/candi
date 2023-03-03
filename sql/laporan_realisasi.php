<?php 
	include('../config/config.php');
	//include('../part/header.php');
 ?>
 <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
 <style type="text/css" media="print">
 	#cetak_laporan{
		display: none;
 	}

 </style>
 <div class="container">
 	<div class="row">
 		<div class="col-md-12">
 		<center>	
 			<h1>LAPORAN REALISASI</h1>
 			<h2>Balai Pengawas Obat dan Makanan di Jambi</h2>
            <h2>Sampai Dengan Tanggal <?= date("d-m-Y");?></h2>
 			</center>
 		</div>
 	</div>
 </div>
 <br>
	<table border="1px" class="table table-striped dt-responsive display" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>No</th>
            <th>MAK</th>
            <th>Pagu</th>
            <th>Realisasi</th>
            <th>Sisa Pagu</th>
        </tr>
    </thead>
    <tbody>
    <?php 
       $no = 0;
        if (isset($_POST['cetak'])) 
        {
            $sql = "SELECT * FROM anggaran ORDER BY id ";
            $laporan = mysql_query($sql);

            if (mysql_num_rows($laporan) == 0) {
                echo '<center><h1>Mohon maaf laporan tidak tersedia untuk tanggal terpilih</h1></center>';
            }
            else
            {
                while ($data_realisasi = mysql_fetch_assoc($laporan)) 
                {
                    $mak = $data_realisasi['mak'];
                    $pagu = $data_realisasi['pagu'];
                    $no++;
    ?>
        <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $data_realisasi['mak']; ?></td>
            <td><?php echo 'Rp. '.number_format($pagu,0,",","."); ?></td>
            <td><?php 
                    $sql="SELECT SUM( `ptj_luar_kota`.`kwitansi`) AS `total`
                    FROM `surat_tugas`
                    INNER JOIN `detail_st_anggaran` ON `surat_tugas`.`id_sk` = `detail_st_anggaran`.`id_sk`
                    INNER JOIN `ptj_luar_kota` ON `ptj_luar_kota`.`id_sk` = `surat_tugas`.`id_sk`
                    WHERE `detail_st_anggaran`.`mak` = '$mak'"; 
                    $query = mysql_query($sql)or die("Query failed with error: ".mysql_error());
                    while ($data1= mysql_fetch_array($query))
                    {
                        $total=$data1['total'];    
                        $total;
                    }
                                    
        
                    $sql2="SELECT SUM( `ptj_dlm_kota`.`tarif`) AS `total_kota`
                    FROM `surat_tugas`
                    INNER JOIN `detail_st_anggaran` ON `surat_tugas`.`id_sk` = `detail_st_anggaran`.`id_sk`
                    INNER JOIN `ptj_dlm_kota` ON `ptj_dlm_kota`.`id_sk` = `surat_tugas`.`id_sk`
                    WHERE `detail_st_anggaran`.`mak` = '$mak'"; 
                    $query2 = mysql_query($sql2)or die("Query failed with error: ".mysql_error());
                    while ($data2= mysql_fetch_array($query2))
                    {
                        $total_kota=$data2['total_kota'];                   
                        $total_kota;
                    }
                    $realisasi2 = $total + $total_kota;
                    echo 'Rp. '.number_format($realisasi2,0,",",".");

                ?>    
                </td>
                <td><?php 
                        $sisa = $pagu - $realisasi2;
                        echo 'Rp. '.number_format($sisa,0,",",".");            
                    ?>  
                </td>   
        </tr>
        <?php
                } //penutup while
            }//penutup else
        }//penutup if
        ?>
    </tbody>
    </table>
       <table width="100%" border="0" align="center">
        <tr align="left" height="30" style="padding:5px 7px 5px 7px;font-size:14px">
    			<td width="70%" >&nbsp;</td>
    			<td width="35%" >Kepala Sub Bag Tata Usaha</td>
			</tr>
            <tr align="left" height="30" style="padding:5px 7px 5px 7px;;font-size:14px">
				
    			<td width="50%" >&nbsp;</td>
    			<td width="45%" >&nbsp;</td>
			</tr>
            <tr align="left" height="30" style="padding:5px 7px 5px 7px;;font-size:14px">
				
    			<td width="50%" >&nbsp;</td>
    			<td width="45%" >&nbsp;</td>
			</tr>
            <tr align="left" height="30" style="padding:5px 7px 5px 7px;font-size:14px">
    			<td width="50%" >&nbsp;</td>
    			<td width="45%" ><?php 
                                    // $sql = "SELECT `pegawai`.`nama`, `pegawai_st`.`nip` WHERE `pegawai`.`nip` = `pegawai_st`.`nip` and `pegawai_st`.`no_st` = '$no_st' ";
                                    $sql="SELECT * from pegawai where jabatan='KEPALA SUB BAGIAN TATA USAHA'";  
                                    $query = mysql_query($sql);
                                    while ($data1= mysql_fetch_array($query)){
                                        echo $data1['nama']; echo '<br>'; echo 'NIP. '; echo $data1['nip'];
                                    }
                                ?></td>
			</tr>
       </table>

<br><br>
<button class="btn btn-primary" onclick="window.print()" id="cetak_laporan">CETAK</button>
<?php include('../part/footer.php') ?>