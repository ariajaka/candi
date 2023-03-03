<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<?php include('../config/config.php') ?>
<?php include('sql/cetak-riil_kota.php'); ?>

<style>
  table {
    border-collapse: collapse;
  }
</style>
<h4 style="text-align: center;">&nbsp;</h4>
<h4 style="text-align: center;">&nbsp;</h4>
<h4 style="text-align: center;">&nbsp;</h4>
<h4 style="text-align: center;">DAFTAR PENGELUARAN RIIL</h4>
<p style="text-align: center;">&nbsp;</p>
<p style="text-align: justify;">Yang bertanda tangan dibawah ini :</p>
<?php
$tugas = "SELECT * FROM pegawai a INNER JOIN ptj_kota b ON a.nip=b.nip_ptj_kota WHERE b.id_pk='$id' ORDER BY a.level ASC ";
$execute = mysql_query($tugas);
?>
<table style="height: 50px; width: 812px;" border="#000000">
  <tbody>
    <tr>
      <td style="width: 48px; text-align: center;">No</td>
      <td style="width: 382px; text-align: center;">Nama/NIP</td>
      <td style="width: 382px; text-align: center;">Tanda Tangan</td>
    </tr>
    <?php
    $no = 0;
    while ($data3 = mysql_fetch_assoc($execute)) {
      $no++;
    ?>
      <tr>
        <td style="width: 48px; text-align: center;"><?= $no; ?></td>
        <td style="width: 382px; text-align: left; padding-left: 10px"><?= $data3['nama']; ?><br><?php
                                                                                                  if ($data3['jabatan'] != 'PPNPN') {
                                                                                                    echo $data3['nip'];
                                                                                                  } else {
                                                                                                    echo '-';
                                                                                                  }
                                                                                                  ?></td>
        <td style="width: 157px; text-align: left; padding-left: 10px"><?= $no; ?></td>
      </tr>
    <?php
    } //penutup while 
    ?>
  </tbody>
</table>
<p>&nbsp;</p>
<p style="text-align: justify;">Dengan ini kami menyatakan dengan sesungguhnya bahwa :</p>
<ol type="1">
  <li>Biaya Transport pegawai dan / biaya penginapan di bawah ini yang tidak dapat diperoleh bukti - bukti pengeluarannya, meliputi :<br>
    Transport Lokal <?= $tujuan_st; ?> sebesar <?= $tarif; ?><br>
    Tanggal,
    <?php
    $bulan =  substr($tgl_berangkat, 0, 2);
    if ($bulan == '1' or $bulan == '01') {
      $sebut = 'Januari';
    } elseif ($bulan == '2' or $bulan == '02') {
      $sebut = 'Februari';
    } elseif ($bulan == '3' or $bulan == '03') {
      $sebut = 'Maret';
    } elseif ($bulan == '4' or $bulan == '04') {
      $sebut = 'April';
    } elseif ($bulan == '5' or $bulan == '05') {
      $sebut = 'Mei';
    } elseif ($bulan == '6' or $bulan == '06') {
      $sebut = 'Juni';
    } elseif ($bulan == '7' or $bulan == '07') {
      $sebut = 'Juli';
    } elseif ($bulan == '8' or $bulan == '08') {
      $sebut = 'Agustus';
    } elseif ($bulan == '9' or $bulan == '09') {
      $sebut = 'September';
    } elseif ($bulan == '10' or $bulan == '10') {
      $sebut = 'Oktober';
    } elseif ($bulan == '11' or $bulan == '11') {
      $sebut = 'November';
    } elseif ($bulan == '12' or $bulan == '12') {
      $sebut = 'Desember';
    };
    $bulan1 =  substr($tgl_kembali, 0, 2);
    if ($bulan1 == '1' or $bulan1 == '01') {
      $sebut1 = 'Januari';
    } elseif ($bulan1 == '2' or $bulan1 == '02') {
      $sebut1 = 'Februari';
    } elseif ($bulan1 == '3' or $bulan1 == '03') {
      $sebut1 = 'Maret';
    } elseif ($bulan1 == '4' or $bulan1 == '04') {
      $sebut1 = 'April';
    } elseif ($bulan1 == '5' or $bulan1 == '05') {
      $sebut1 = 'Mei';
    } elseif ($bulan1 == '6' or $bulan1 == '06') {
      $sebut1 = 'Juni';
    } elseif ($bulan1 == '7' or $bulan1 == '07') {
      $sebut1 = 'Juli';
    } elseif ($bulan1 == '8' or $bulan1 == '08') {
      $sebut1 = 'Agustus';
    } elseif ($bulan1 == '9' or $bulan1 == '09') {
      $sebut1 = 'September';
    } elseif ($bulan1 == '10' or $bulan1 == '10') {
      $sebut1 = 'Oktober';
    } elseif ($bulan1 == '11' or $bulan1 == '11') {
      $sebut1 = 'November';
    } elseif ($bulan1 == '12' or $bulan1 == '12') {
      $sebut1 = 'Desember';
    };

    if ($selama == 1) {
      $sehari = substr($tgl_berangkat, 3, 2) . ' ' . $sebut . ' ' . substr($tgl_berangkat, 6, 4) . '';
    } else if ($selama > 1) {
      $sehari = substr($tgl_berangkat, 3, 2) . ' ' . $sebut . ' ' . substr($tgl_berangkat, 6, 4) . ' s/d ' . substr($tgl_kembali, 3, 2) . ' ' . $sebut1 . ' ' . substr($tgl_kembali, 6, 4) . '';
    }


    ?>
    <?= $sehari; ?>
  </li>
  <li>Jumlah Uang tersebut pada angka 1 diatas benar - benar dikeluarkan untuk pelaksaan perjalanan dinas dimaksud dan apabila di kemudian hari terdapat kelebihan atas pembayran kami bersedia untuk menyetorkan kelebihan tersebut ke Kas Negara
  </li>
</ol>
<table style="height: 5px; width: 812px; float: left;">
  <tbody>
    <tr style="height: 22px;">
      <td style="width: 309px; height: 22px;">Mengetahui</td>
      <td style="width: 122px; height: 22px;">&nbsp;</td>
      <td style="width: 209px; height: 22px;">&nbsp;</td>
      <td style="width: 123px; height: 22px;">&nbsp;</td>
      <td style="width: 109px; height: 22px;">&nbsp;</td>
    </tr>
    <tr style="height: 21px;">
      <td style="width: 309px; height: 21px;">Pejabat Pembuat Komitmen</td>
      <td style="width: 122px; height: 21px;">&nbsp;</td>
      <td style="width: 209px; height: 21px;">&nbsp;</td>
      <td style="width: 124px; height: 21px;">&nbsp;</td>
      <td style="width: 109px; height: 21px;">&nbsp;</td>
    </tr>
    <tr style="height: 3px;">
      <td style="width: 309px; height: 3px;">Balai POM di Jambi</td>
      <td style="width: 122px; height: 3px;">&nbsp;</td>
      <td style="width: 209px; height: 3px;">&nbsp;</td>
      <td style="width: 123px; height: 3px;">&nbsp;</td>
      <td style="width: 109px; height: 3px;">&nbsp;</td>
    </tr>
    <tr style="height: 88px;">
      <td style="width: 309px; height: 88px;">&nbsp;</td>
      <td style="width: 122px; height: 88px;">&nbsp;</td>
      <td style="width: 209px; height: 88px;">&nbsp;</td>
      <td style="width: 123px; height: 88px;">&nbsp;</td>
      <td style="width: 109px; height: 88px;">&nbsp;</td>
    </tr>
    <tr style="height: 3px;">
      <td style="width: 309px; height: 3px;"><?= $nama_ppk; ?></td>
      <td style="width: 122px; height: 3px;">&nbsp;</td>
      <td style="width: 209px; height: 3px;">&nbsp;</td>
      <td style="width: 123px; height: 3px;">&nbsp;</td>
      <td style="width: 109px; height: 3px;">&nbsp;</td>
    </tr>
    <tr style="height: 3px;">
      <td style="width: 309px; height: 3px;"><?= $nip_ppk; ?></td>
      <td style="width: 122px; height: 3px;">&nbsp;</td>
      <td style="width: 209px; height: 3px;">&nbsp;</td>
      <td style="width: 123px; height: 3px;">&nbsp;</td>
      <td style="width: 109px; height: 3px;">&nbsp;</td>
    </tr>
  </tbody>
</table>