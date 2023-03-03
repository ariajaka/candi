    <?php //include('part/header.php') ?>
    <?php include('config/config.php') ?>
    <?php 
    	include ('sql/cetak-sppd2.php');
     ?>

<?php //include('part/footer.php') ?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SPPD Lembar ke 2</title>
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
        <table border="1px" width="100%">
        	<tr>
        		<td width="50%"></td>
        		<td width="50%">
        			Berangkat dari : Jambi
        			<br>
        			(Tempat Kedudukan)
        			<br>
        			Ke : <?php echo $tujuan_st; ?>
        			<br>
        			Pada Tanggal : 
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
                    
                    echo substr($tgl_pergi, 3,2).' '.$sebut.' '.substr($tgl_pergi, 6,4).'';
                ?>
                <br><br>
                <?php echo '<center>'.$jabatan.'</center>' ?>
                <center>Balai POM di Jambi</center>
                <br><br>


                <?php echo '<center><u><b>'.$penandatangan_berangkat.'</b></u></center>'; ?>
                <?php echo '<center>NIP. '.$nip.'</center'; ?>
        		</td>
        	</tr>

        	<tr>
        		<td>
        			II. Tiba di 
        			<br>
        			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pada Tanggal
        			<br>
        			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        			<br>
        			<br>
        			<br>
        			<br>
        		</td>
        		<td>
        			Berangkat Dari
        			<br>
        			Ke
        			<br>
        			Pada Tanggal
        			<br>
        			<br>
        			<br>
        			<br>
        			<br>
        		</td>
        	</tr>
        	<tr>
        		<td>
        			III. Tiba di 
        			<br>
        			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pada Tanggal
        			<br>
        			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        			<br>
        			<br>
        			<br>
        			<br>
        		</td>
        		<td>
        			Berangkat Dari
        			<br>
        			Ke
        			<br>
        			Pada Tanggal
        			<br>
        			<br>
        			<br>
        			<br>
        			<br>
        		</td>
        	</tr>

        	<tr>
        		<td>
        			VI. Tiba di 
        			<br>
        			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pada Tanggal
        			<br>
        			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        			<br>
        			<br>
        			<br>
        			<br>
        		</td>
        		<td>
        			Berangkat Dari
        			<br>
                    Ke
        			<br>
        			Pada Tanggal
        			<br>
        			<br>
        			<br>
        			<br>
        			<br>
        		</td>
        	</tr>
        	<tr>
        		<td>
        			V. Tiba di 
        			<br>
        			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pada Tanggal
        			<br>
        			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        			<br>
        			<br>
        			<br>
        			<br>
        		</td>
        		<td>
        			Berangkat Dari
        			<br>
                    Ke
        			<br>
        			Pada Tanggal
        			<br>
        			<br>
        			<br>
        			<br>
        			<br>
        		</td>
        	</tr>

        	<tr>
        		<td>
        			VI. Tiba di: Jambi
        			<br>
        			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Tempat kedudukan)
        			<br>
        			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pada Tanggal :
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
                    
                    echo substr($tgl_pulang, 3,2).' '.$sebut.' '.substr($tgl_pulang, 6,4).'';
                ?>
        			<br>
        			<br>
        				<center>Pejabat Pembuat Komitmen</center>
        				<center>Balai Pengawas Obat dan Makanan di Jambi</center>
        			<br>
        			<br>
        			<br>
        				<center><u><b><?php echo $penandatangan; ?></b></u></center>
        				<center>NIP. <?php echo $penandatangan_nip; ?></center>
        		</td>
        		<td>
        			Telah diperiksa dengan keterangan bahwa perjalanan tersebut diatas benar dilakukan atas perintahnya dan semata-mata untuk kepentingan jabatan dalam waktu yang sesingkat-singkatnya.
        			<br>
        				<center>Pejabat Pembuat Komitmen</center>
        				<center>Balai Pengawas Obat dan Makanan di Jambi</center>
        			<br>
        			<br>
        			<br>
        				<center><u><b><?php echo $penandatangan; ?></b></u></center>
        				<center>NIP. <?php echo $penandatangan_nip; ?></center>
        		</td>
        	</tr>
        	<tr>
        		<td colspan="2">
        			VII. Catatan Lain - lain
        		</td>
        	</tr>
        	<tr>
        		<td colspan="2">
        			VII PERHATIAN :
        			<br>
        			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pejabat yang berwenang menerbitkan SPPD, Pegawai yang melakukan dinas, para pejabat yang mengesyahkan tanggal berangkat/tba serta bendaharawan bertanggun jawab berdasarkan peraturan-peraturan Keuangan Negara apabila Negara menderita tugi akibat kesalahan, kelalaian dan kealpaannya.
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