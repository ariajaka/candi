<link href="../../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<?php include('../../config/config.php') ?>
<?php include ('../../sql/cetak-riil_luar.php');?>
<style>
        table {
            border-collapse: collapse;

        }   
   td {
        padding: 3px;
    }  
</style>
<h3 style="text-align: center;">&nbsp;</h3>
<h3 style="text-align: center;">&nbsp;</h3>
<h3 style="text-align: center;">&nbsp;</h3>
<h3 style="text-align: center;">DAFTAR PENGELUARAN RIIL</h3>

  <p style="text-align: center;">&nbsp;</p>
  <p style="text-align: justify;">Yang bertanda tangan dibawah ini :</p>
  
<table style="height: 50px; width: 812px;" border="0"><caption>&nbsp;</caption>
<tbody>
  <tr>
    <td style="width: 48px; text-align: left;">Nama</td>
    <td style="width: 48px; text-align: center;">:</td>
    <td style="width: 716px; text-align: left;"><?= $nama_petugas_pl; ?></td>
  </tr>
  
  <tr>
    <td style="width: 48px; text-align: left;">NIP</td>
    <td style="width: 48px; text-align: center;">:</td>
    <td style="width: 716px; text-align: left;"><?= $nip_petugas_pl ?></td>
  </tr>

  <tr>
    <td style="width: 48px; text-align: left;">Jabatan</td>
    <td style="width: 48px; text-align: center;">:</td>
    <td style="width: 716px; text-align: left;"><?= $jabatan_petugas_pl ?></td>
  </tr>
</tbody>
</table>

<table style="height: 50px; width: 812px;" border="0">
<tbody>
  <tr>
    <?php 
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
    ?>
    <td style="width: 812px; text-align: left;">Berdasarkan Surat  Perjalanan Dinas (SPD) tanggal  <?= substr($tgl_st, 3,2).' '.$sebut.' '.substr($tgl_st, 6,4).'';?> Nomor : <?= $no_sppd; ?> dengan ini kami menyatakan dengan sesungguhnya bahwa :</td>
  </tr>
</tbody>
</table>

<table style="height: 50px; width: 812px;" border="0">
<tbody>
  <tr>
    <td style="width: 48; text-align: left;">1.</td>
    <td style="width: 764px; text-align: left;">Biaya transport pegawai di bawah ini yang tidak dapat diperoleh bukti-bukti pengeluarannya, meliputi:</td>
  </tr>
</tbody>
</table>

<table style="height: 50px; width: 812px;" border="1">
<tbody>
  <tr>
    <td style="width: 32px; text-align: center;">No.</td>
    <td style="width: 548px; text-align: center;">Uraian</td>
    <td style="width: 232px; text-align: center;">Jumlah</td>
  </tr>
  <tr>
    <td style="width: 32px; text-align: center;" valign=top>
      <?php 
      $sql="SELECT * from ptj_luar_kota a INNER JOIN detail_ptj_luar b ON a.id_pl=b.id_pl WHERE b.riil = 'Ya' AND a.id_pl='$id'"; 
      $query = mysql_query($sql)or die("Query failed with error: ".mysql_error());;
      $no=0;
      while ($data1= mysql_fetch_array($query))
      {
        $no++;
      echo $no; echo '<br>';
      }
      ?>
    </td>
    <td style="width: 548px; text-align: left;" valign=top>
      <div style="word-break: break-all;">
      <p style="text-align: justify;">
        <?php 
          $sql="SELECT * from ptj_luar_kota a INNER JOIN detail_ptj_luar b ON a.id_pl=b.id_pl WHERE b.riil='Ya' AND a.id_pl='$id'"; 
          $query = mysql_query($sql)or die("Query failed with error: ".mysql_error());;
          while ($data1= mysql_fetch_array($query))
          {
            echo $data1['uraian']; echo '<br>';
          }
        ?>
      </p>
      </div>
    </td>
    <td style="width: 232px; text-align: right;" valign=top>
      <?php 
          $sql="SELECT * from ptj_luar_kota a INNER JOIN detail_ptj_luar b ON a.id_pl=b.id_pl WHERE b.riil='Ya' AND a.id_pl='$id'"; 
          $query = mysql_query($sql)or die("Query failed with error: ".mysql_error());;
          while ($data1= mysql_fetch_array($query))
          {
            echo 'Rp. '.number_format($data1['detail_kwitansi']).',-'; echo '<br>';
          }
      ?></td>
  </tr>
</tbody>
</table>

<table style="height: 50px; width: 812px;" border="0">
<tbody>
  <tr>
    <td style="width: 48; text-align: left;">&nbsp;</td>
    <td style="width: 764px; text-align: left;">&nbsp;
    </td>
  </tr>
  <tr>
    <td style="width: 48; text-align: left;">2.</td>
    <td style="width: 764px; text-align: left;">Jumlah uang tersebut pada angka 1 di atas benar-benar dikeluarkan untuk pelaksanaan perjalanan
    </td>
  </tr>
  <tr>
    <td style="width: 48; text-align: left;">&nbsp;</td>
    <td style="width: 764px; text-align: left;">dinas dimaksud dan apabila di kemudian hari terdapat kelebihan atas pembayaran kami bersedia
    </td>
  </tr>
  <tr>
    <td style="width: 48; text-align: left;">&nbsp;</td>
    <td style="width: 764px; text-align: left;">untuk menyetorkan kelebihan tersebut ke Kas Negara.
    </td>
  </tr>
  <tr>
    <td style="width: 48; text-align: left;">&nbsp;</td>
    <td style="width: 764px; text-align: left;">&nbsp;
    </td>
  </tr>

</tbody>
</table>



<table style="height: 5px; width: 872px;" border="0" rules="none">
<tbody>
<tr style="height: 22px;">
<td style="width: 259px; height: 22px;">Mengetahui/Menyetujui</td>
<td style="width: 122px; height: 22px;">&nbsp;</td>
<td style="width: 109px; height: 22px;">&nbsp;</td>
<td style="width: 73px; height: 22px;">&nbsp;</td>
<td style="width: 259px; height: 22px;">Jambi,</td>
</tr>
<tr style="height: 21px;">
<td style="width: 259px; height: 21px;">Pejabat Pembuat Komitmen</td>
<td style="width: 122px; height: 21px;">&nbsp;</td>
<td style="width: 109px; height: 21px;">&nbsp;</td>
<td style="width: 73px; height: 21px;">&nbsp;</td>
<td style="width: 259px; height: 21px;">Yang Menerima</td>
</tr>
<tr style="height: 3px;">
<td style="width: 259px; height: 3px;">&nbsp;</td>
<td style="width: 122px; height: 3px;">&nbsp;</td>
<td style="width: 109px; height: 3px;">&nbsp;</td>
<td style="width: 73px; height: 3px;">&nbsp;</td>
<td style="width: 259px; height: 3px;">&nbsp;</td>
</tr>
<tr style="height: 88px;">
<td style="width: 259px; height: 88px;">&nbsp;</td>
<td style="width: 122px; height: 88px;">&nbsp;</td>
<td style="width: 109px; height: 88px;">&nbsp;</td>
<td style="width: 73px; height: 88px;">&nbsp;</td>
<td style="width: 259px; height: 88px;">&nbsp;</td>
</tr>
<tr style="height: 3px;">
<td style="width: 259px; height: 3px;"><?= $nama_ppk; ?></td>
<td style="width: 122px; height: 3px;">&nbsp;</td>
<td style="width: 109px; height: 3px;">&nbsp;</td>
<td style="width: 73px; height: 3px;">&nbsp;</td>
<td style="width: 259px; height: 3px;"><?= $nama_petugas_pl; ?></td>
</tr>
<tr style="height: 3px;">
<td style="width: 259px; height: 3px;">NIP. <?= $nip_ppk; ?></td>
<td style="width: 122px; height: 3px;">&nbsp;</td>
<td style="width: 109px; height: 3px;">&nbsp;</td>
<td style="width: 73px; height: 3px;">&nbsp;</td>
<td style="width: 259px; height: 3px;">NIP. <?= $nip_petugas_pl; ?></td>
</tr>
</tbody>
</table>
