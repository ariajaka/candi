    <?php //include('part/header.php') ?>
    <?php include('config/config.php') ?>
    <?php 
    	include ('sql/cetak-sppd.php');
     ?>

<?php //include('part/footer.php') ?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Surat Tugas</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="author" href="humans.txt">
        <style type="text/css">
        	body{
        		font-family: times, roman, calibri;
        		font-size: 12pt;
        	}

            table{
                border-collapse:collapse;
            }
        </style>
   
    </head>
    <body>
        <table>
        	<tr>
                <td align="center"><b>BADAN PENGAWAS OBAT DAN MAKANAN RI</b></td>
                <td width="100px"></td>
                <td>Lembar Ke</td>
                <td>:</td>
                <td></td>   
            </tr>
            <tr>
                <td align="center"><b>Balai Pengawas Obat dan Makanan di Jambi</b></td>
                <td width="100px"></td>
                <td>Kode Nomor</td>
                <td>:</td>
                <td>   
                <?php echo $kepala_st;?><?php echo $id_sk; ?></td>
            </tr>
            <tr>
                <td>Jln. RM Nur Atmadibrata No.11 Telanaipura - Jambi</td>
                <td width="100px"></td>
                <td>Nomor</td>
                <td>:</td>
                <td><?php echo $no_sppd; ?></td>
            </tr>
            <tr>
                <td colspan="5" align="center"><h3><u>SURAT PERJALANAN DINAS (SPD)</u></h3></td>
            </tr>
        </table>

        <table border="1px" >
            <tr>
                <td width="25px" height="25px" align="center">1</td>
                <td width="320px">Pejabat Pembuat Komitmen</td>
                
                <td colspan="3" width="200px">
                    <?php echo $penandatangan ?>
                </td>
                
            </tr>
            <tr>
                <td width="25px" height="25px" align="center">2</td>
                <td width="320px">Nama/NIP pegawai yang melaksanakan perjalanan dinas</td>
                <td colspan="3" width="200px"><?php echo $petugas ?><br>NIP. <?php echo $petugas_nip_sppd; ?></td>
                
            </tr>

            <tr>
                <td width="25px" height="25px" align="center">3</td>
                <td width="320px">a. Pangkat dan Golongan</td>
                
                <td colspan="3" width="200px">
                    a. <?php echo $pangkat ?>
                </td>
                
            </tr>
            <tr>
                <td width="25px" height="25px" align="center"></td>
                <td width="320px">b. Jabatan/Instansi</td>
                
                <td colspan="3" width="200px">b. <?php echo $jabatan ?></td>
                
            </tr>

            <tr>
                <td width="25px" height="25px" align="center"></td>
                <td width="320px">c. Tingkat Biaya Perjalanan Dinas</td>
                
                <td colspan="3" width="200px">c. <?php echo $tingkat_perjadin ?></td>
                
            </tr>

            <tr>
                <td width="25px" height="25px" align="center">4</td>
                <td width="320px">Maksud Perjalanan Dinas</td>
                
                <td colspan="3" width="200px"><?php echo $kegiatan ?></td>
                
            </tr>

            <tr>
                <td width="25px" height="25px" align="center">5</td>
                <td width="320px">Alat Angkut yang dipergunakan</td>
                
                <td colspan="3" width="200px"><?php echo $kendaraan ?></td>
                
            </tr>

            <tr>
                <td width="25px" height="25px" align="center">6</td>
                <td width="320px">a. Tempat berangkat</td>
                <td colspan="3">a. Jambi</td>
            </tr>

            <tr>
                <td width="25px" height="25px" align="center"></td>
                <td width="320px">b. Tempat Tujuan</td>
                
                <td colspan="3" width="200px">b. <?php echo $tujuan_st ?></td>
                
            </tr>
            <tr>
                <td width="25px" height="25px" align="center">7</td>
                <td width="320px">a. Lamanya perjalanan dinas</td>
                
                <td colspan="3" width="200px">a. <?php echo $jumlah_hari ?> Hari</td>
                
            </tr>

             <tr>
                <td width="25px" height="25px" align="center"></td>
                <td width="320px">b. Tanggal Berangkat</td>
                
                <td colspan="3" width="200px">
                <?php 
                    $bulan =  substr ($tgl_pergi, 0,2);
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
                    echo 'b. '.substr($tgl_pergi, 3,2).' '.$sebut.' '.substr($tgl_pergi, 6,4).'';
                ?></td>
            </tr>

             <tr>
                <td width="25px" height="25px" align="center"></td>
                <td width="320px">c. Tanggal harus kembali</td>
                
                <td colspan="3" width="200px">
                    <?php 
                    $bulan =  substr ($tgl_pulang, 0,2);
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
                    echo 'c. '.substr($tgl_pulang, 3,2).' '.$sebut.' '.substr($tgl_pulang, 6,4).'';
                ?>
                </td>
                
            </tr>

             <tr>
                <td width="25px" height="25px" align="center">8</td>
                <td width="320px">Pengikut: Nama</td>
                
                <td colspan="2" width="200px">Tanggal Lahir</td>
                <td width="200px">Keterangan</td>
                
            </tr>

            <tr>
                <td width="25px" height="25px" align="center"></td>
                <td width="320px">1.</td>
                
                <td colspan="2" width="200px"></td>
                <td width="200px"></td>
                
            </tr>
            <tr>
                <td width="25px" height="25px" align="center"></td>
                <td width="320px">2.</td>
                
                <td colspan="2" width="200px"></td>
                <td width="200px"></td>
                
            </tr>
            <tr>
                <td width="25px" height="25px" align="center"></td>
                <td width="320px">3.</td>
                
                <td colspan="2" width="200px"></td>
                <td width="200px"></td>
                
            </tr>
            <tr>
                <td width="25px" height="25px" align="center">9</td>
                <td width="320px">Pembebanan Anggaran</td>
                
                <td colspan="3" width="200px"><?php echo $anggaran ?> T.A <?php echo date('Y'); ?></td>
                               
            </tr>

            <tr>
                <td width="25px" height="25px" align="center"></td>
                <td width="320px">a. Intansi</td>
                
                <td colspan="3" width="200px"> Balai Pengawas Obat dan Makanan di Jambi</td>
                
            </tr>

            <tr>
                <td width="25px" height="25px" align="center"></td>
                <td width="320px">b. Mata Anggaran</td>
                <td colspan="3" width="200px">
                    <?php 
                                    $sql="SELECT mak from detail_st_anggaran WHERE id_sk='$id_sk' AND anggaran='DIPA Balai POM di Jambi'"; 
                                    $query = mysql_query($sql);
                                    while ($data1= mysql_fetch_array($query)){
                                        echo $data1['mak']; 
                                    }
                                ?>
                </td>    
            </tr>

            <tr>
                <td width="25px" height="25px" align="center">10</td>
                <td width="320px">Keterangan Lain -lain</td>
                
                <td colspan="3" width="200px"></td>
            </tr>
        </table>
        <br>
        <table>
            <tr>
                <td colspan="5">
                    <div style="margin-left: 430px;">Dikeluarkan di : Jambi</div>
                </td>
            </tr>
            <tr>
                <td>
                    <div style="margin-left: 430px;">
                    <?php 
                    $bulan =  substr ($tanggal_surat, 0,2);
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
                    
                    echo 'Pada Tanggal :'.substr($tanggal_surat, 3,2).' '.$sebut.' '.substr($tanggal_surat, 6,4).'';
                ?>
                    </div>
                </td>
            </tr>
        </table>
        <br>
        <table>
            <tr>
                <td colspan="5">
                    <div style="margin-left: 405px;">a.n KUASA PENGGUNA ANGGARAN</div>
                </td>
            </tr>
            <tr>
                <td colspan="5">
                    <div style="margin-left: 430px;">PEJABAT PEMBUAT KOMITMEN</div>
                </td>
            </tr>
            <tr>
                <td colspan="5">
                    <div style="margin-left: 430px;">BALAI POM DI JAMBI</div>
                </td>
            </tr>
        </table>
        <br><br><br><br>
        <table>
            <tr>
                <td colspan="5">
                    <div style="margin-left: 430px;"><u><b><?php echo $penandatangan; ?></b></u></div>
                </td>
            </tr>
            <tr>
                <td colspan="5">
                    <div style="margin-left: 430px;">NIP. <?php echo $penandatangan_nip; ?></div>
                </td>
            </tr>
        </table>
        
                <!-- CORE JS FRAMEWORK - START --> 
        <script src="assets/js/jquery-1.11.2.min.js" type="text/javascript"></script> 
        <script src="assets/js/jquery.easing.min.js" type="text/javascript"></script> 
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
        <script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>  
        <script src="assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js" type="text/javascript"></script> 
        <script src="assets/plugins/viewport/viewportchecker.js" type="text/javascript"></script>  
        <!-- CORE JS FRAMEWORK - END --> 

        <script type="text/javascript">
         $(document).ready(function(){
            $("#cetak").hide();
            window.print();
            //$("#cetak").show();
        });
        function cetak(){
            $("#cetak").hide();
            window.print();
        }
    </script>




    </body>
</html>