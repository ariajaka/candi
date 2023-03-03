<link href="../../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<?php include('../../config/config.php') ?>
<?php include ('../../sql/cetak-pernyataan_luar.php');?>
<style>
        table {
            border-collapse: collapse;

        }     
</style>
<h3 style="text-align: center;">&nbsp;</h3>
<h3 style="text-align: center;">&nbsp;</h3>
<h3 style="text-align: center;">&nbsp;</h3>
<h3 style="text-align: center;">SURAT PERNYATAAN</h3>

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
    <td style="width: 716px; text-align: left;"><?= $nip_petugas_pl; ?></td>
  </tr>

  <tr>
    <td style="width: 48px; text-align: left;">Pangakat/Golongan</td>
    <td style="width: 48px; text-align: center;">:</td>
    <td style="width: 716px; text-align: left;"><?= $pangkat; ?></td>
  </tr>

  <tr>
    <td style="width: 48px; text-align: left;">Unit Kerja</td>
    <td style="width: 48px; text-align: center;">:</td>
    <td style="width: 716px; text-align: left;">BPOM di Jambi</td>
  </tr>
</tbody>
</table>

<table style="height: 50px; width: 812px;" border="0">
<tbody>
  <tr>
    <td style="width: 812px; text-align: left;">Menyatakan dengan sesungguhnya bahwa :</td>
  </tr>
</tbody>
</table>

<table style="height: 50px; width: 812px;" border="0">
<tbody>
  <tr>
    <td style="width: 48; text-align: left;">1.</td>
    <td style="width: 764px; text-align: left;">Berkas kelengkapan perjalan dinas luar kota:</td>
  </tr>
  <tr>
    <td style="width: 48; text-align: left;">&nbsp;</td>
    <td style="width: 764px; text-align: left;">
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

      if($selama == 1)
      {
       $sehari=substr($tgl_berangkat, 3,2).' '.$sebut.' '.substr($tgl_berangkat, 6,4).'';
      }
      else if($selama > 1)
      {
      $sehari=substr($tgl_berangkat, 3,2).' '.$sebut.' '.substr($tgl_berangkat, 6,4).' s/d '.substr($tgl_kembali, 3,2).' '.$sebut1.' '.substr($tgl_kembali, 6,4).'';
      }
      ?>

    <div style="word-break: break-all;">
      <p style="text-align: justify;">
      <?php
        if ($tempat_st == '' || $tempat_st == '-')
        {
          echo 'Dari Jambi ke '.$tujuan_st.' dalam rangka '.$kegiatan.' selama '.$selama.' ('.terbilang($selama).') hari TMT '.$sehari;
        }
        else
        {
          echo 'Dari Jambi ke '.$tujuan_st.' dalam rangka '.$kegiatan.' di '.$tempat_st.' selama '.$selama.' ('.terbilang($selama).') hari TMT '.$sehari;
        }
      ?>
      </p>
    </div>
  </td>
  </tr>
  <tr>
    <td style="width: 48; text-align: left;">&nbsp;</td>
    <td style="width: 764px; text-align: left;">(biaya uang transportasi, penginapan dan uang harian) sesuai yang sebenarnya.</td>
  </tr>
  
  <tr>
    <td style="width: 48; text-align: left;">&nbsp;</td>
    <td style="width: 764px; text-align: left;">&nbsp;
    </td>
  </tr>
  <tr>
    <td style="width: 48; text-align: left;">2.</td>
    <td style="width: 764px; text-align: left;">Apabila dikemudian hari terdapat ketidak sesuaian dengan Peraturan dan Undang-Undang yang berlaku,
    </td>
  </tr>
  <tr>
    <td style="width: 48; text-align: left;">&nbsp;</td>
    <td style="width: 764px; text-align: left;">saya bersedia menanggung secara pribadi dan menyetorkannya ke Kas Negara jika terdapat kerugian uang negara
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

  <tr>
    <td style="width: 48; text-align: left;">3.</td>
    <td style="width: 764px; text-align: left;">Apabila dikemudian hari, berkas kelengkapan perjalan dinas</td>
  </tr>
  <tr>
    <td style="width: 48; text-align: left;">&nbsp;</td>
    <td style="width: 764px; text-align: left;">
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

      if($selama == 1)
      {
       $sehari=substr($tgl_berangkat, 3,2).' '.$sebut.' '.substr($tgl_berangkat, 6,4).'';
      }
      else if($selama > 1)
      {
      $sehari=substr($tgl_berangkat, 3,2).' '.$sebut.' '.substr($tgl_berangkat, 6,4).' s/d '.substr($tgl_kembali, 3,2).' '.$sebut1.' '.substr($tgl_kembali, 6,4).'';
      }
      ?>
      <div style="word-break: break-all;">
        <p style="text-align: justify;">
        <?php
        if ($tempat_st == '' || $tempat_st == '-')
        {
          echo 'Dari Jambi ke '.$tujuan_st.' dalam rangka '.$kegiatan.' selama '.$selama.' ('.terbilang($selama).') hari TMT '.$sehari;
        }
        else
        {
          echo 'Dari Jambi ke '.$tujuan_st.' dalam rangka '.$kegiatan.' di '.$tempat_st.' selama '.$selama.' ('.terbilang($selama).') hari TMT '.$sehari;
        }
      ?>
        </p>
      </div>
    </td>
  </tr>
  <tr>
    <td style="width: 48; text-align: left;">&nbsp;</td>
    <td style="width: 764px; text-align: left;">tersebut tidak sah/tidak benar, saya bersedia menanggung secara pribadi dan menyetorkannya ke Kas Negara jika terdapat kerugian uang negara</td>
  </tr>
  <tr>
    <td style="width: 48; text-align: left;">&nbsp;</td>
    <td style="width: 764px; text-align: left;">&nbsp;</td>
  </tr>
  <tr>
    <td style="width: 48; text-align: left;">&nbsp;</td>
    <td style="width: 764px; text-align: left;">&nbsp;</td>
  </tr>
</tbody>
</table>



<table style="height: 5px; width: 872px;" border="0" rules="none">
<tbody>
<tr style="height: 22px;">
<td style="width: 209px; height: 22px;">&nbsp;</td>
<td style="width: 122px; height: 22px;">&nbsp;</td>
<td style="width: 159px; height: 22px;">&nbsp;</td>
<td style="width: 123px; height: 22px;">&nbsp;</td>
<td style="width: 209px; height: 22px;">Jambi,</td>
</tr>
<tr style="height: 21px;">
<td style="width: 209px; height: 21px;">&nbsp;</td>
<td style="width: 122px; height: 21px;">&nbsp;</td>
<td style="width: 159px; height: 21px;">&nbsp;</td>
<td style="width: 124px; height: 21px;">&nbsp;</td>
<td style="width: 209px; height: 21px;">Yang membuat pernyataan</td>
</tr>
<tr style="height: 3px;">
<td style="width: 209px; height: 3px;">&nbsp;</td>
<td style="width: 122px; height: 3px;">&nbsp;</td>
<td style="width: 159px; height: 3px;">&nbsp;</td>
<td style="width: 123px; height: 3px;">&nbsp;</td>
<td style="width: 209px; height: 3px;">&nbsp;</td>
</tr>
<tr style="height: 88px;">
<td style="width: 209px; height: 88px;">&nbsp;</td>
<td style="width: 122px; height: 88px;">&nbsp;</td>
<td style="width: 159px; height: 88px;">&nbsp;</td>
<td style="width: 123px; height: 88px;">&nbsp;</td>
<td style="width: 123px; height: 88px;">&nbsp;</td>
</tr>
<tr style="height: 3px;">
<td style="width: 209px; height: 3px;">&nbsp;</td>
<td style="width: 122px; height: 3px;">&nbsp;</td>
<td style="width: 159px; height: 3px;">&nbsp;</td>
<td style="width: 123px; height: 3px;">&nbsp;</td>
<td style="width: 209px; height: 3px;"><?= $nama_petugas_pl; ?></td>
</tr>
<tr style="height: 3px;">
<td style="width: 209px; height: 3px;">&nbsp;</td>
<td style="width: 122px; height: 3px;">&nbsp;</td>
<td style="width: 159px; height: 3px;">&nbsp;</td>
<td style="width: 123px; height: 3px;">&nbsp;</td>
<td style="width: 209px; height: 3px;">NIP. <?= $nip_petugas_pl; ?></td>
</tr>
</tbody>
</table>
<?php
function penyebut($nilai) {
    $nilai = abs($nilai);
    $huruf = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
    $temp = "";
    if ($nilai < 12) {
      $temp = " ". $huruf[$nilai];
    } else if ($nilai <20) {
      $temp = penyebut($nilai - 10). " belas";
    } else if ($nilai < 100) {
      $temp = penyebut($nilai/10)." puluh". penyebut($nilai % 10);
    } else if ($nilai < 200) {
      $temp = " seratus" . penyebut($nilai - 100);
    } else if ($nilai < 1000) {
      $temp = penyebut($nilai/100) . " ratus" . penyebut($nilai % 100);
    } else if ($nilai < 2000) {
      $temp = " seribu" . penyebut($nilai - 1000);
    } else if ($nilai < 1000000) {
      $temp = penyebut($nilai/1000) . " ribu" . penyebut($nilai % 1000);
    } else if ($nilai < 1000000000) {
      $temp = penyebut($nilai/1000000) . " juta" . penyebut($nilai % 1000000);
    } else if ($nilai < 1000000000000) {
      $temp = penyebut($nilai/1000000000) . " milyar" . penyebut(fmod($nilai,1000000000));
    } else if ($nilai < 1000000000000000) {
      $temp = penyebut($nilai/1000000000000) . " trilyun" . penyebut(fmod($nilai,1000000000000));
    }     
    return $temp;
  }
 
  function terbilang($nilai) {
    if($nilai<0) {
      $hasil = "minus ". trim(penyebut($nilai));
    } else {
      $hasil = trim(penyebut($nilai));
    }         
    return $hasil;
  }
 
?>