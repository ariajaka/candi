<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<?php include('../config/config.php') ?>
<?php include('sql/cetak-rincian_luar.php'); ?>
<style>
  table {
    border-collapse: collapse;

  }
</style>
<table style="height: 5px; width: 872px;" border="black" rules="none">
  <caption>&nbsp;</caption>
  <tbody>
    <tr style="height: 13px;">
      <td style="width: 872px; text-align: center; height: 13px;" colspan="5"><strong>DAFTAR RINCIAN BIAYA PERJALANAN DINAS</strong></td>
    </tr>
    <tr style="height: 13px;">
      <td style="width: 872px; text-align: center; height: 13px;" colspan="5">&nbsp;</td>
    </tr>
    <tr style="height: 13px;">
      <td style="width: 872px; text-align: center; height: 13px;" colspan="5">&nbsp;</td>
    </tr>
    <tr style="height: 13px;">
      <td style="width: 872px; text-align: center; height: 13px;" colspan="5">&nbsp;</td>
    </tr>
  </tbody>
</table>

<table style="height: 5px; width: 872px;" border="black" rules="none">
  <tbody>
    <tr style="height: 13px;">
      <td style="width: 175px; height: 13px;">Lampiran SPPD Nomor</td>
      <td style="width: 25px; height: 13px;">:</td>
      <td style="width: 672px; height: 13px;" colspan="3"><?= $no_sppd; ?></td>
    </tr>
    <tr style="height: 13px;">
      <td style="width: 175px; height: 13px;">Tanggal</td>
      <td style="width: 25px; height: 13px;">:</td>
      <?php
      $bulan =  substr($tgl_st, 0, 2);
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
      ?>
      <td style="width: 672px; height: 13px;" colspan="3"><?= substr($tgl_st, 3, 2) . ' ' . $sebut . ' ' . substr($tgl_st, 6, 4) . ''; ?></td>
    </tr>
    <tr style="height: 13px;">
      <td style="width: 175px; height: 13px;">&nbsp;</td>
      <td style="width: 25px; height: 13px;">&nbsp;</td>
      <td style="width: 672px; height: 13px;" colspan="3">&nbsp;</td>
    </tr>

  </tbody>
</table>

<table style="height: 50px; width: 872px;" border="#000000">
  <tbody>
    <tr>
      <td style="width: 48px; text-align: center;">No</td>
      <td style="width: 491px; text-align: center;">Rincian Biaya</td>
      <td style="width: 157px; text-align: center;">Jumlah</td>
      <td style="width: 176px; text-align: center;">Keterangan</td>
    </tr>

    <tr>
      <td style="width: 48px; text-align: center;" valign=top>
        <?php
        $sql = "SELECT * from ptj_luar_kota a INNER JOIN detail_ptj_luar b ON a.id_pl=b.id_pl where a.id_pl='$id'";
        $query = mysql_query($sql);
        $no = 0;
        while ($data1 = mysql_fetch_array($query)) {
          $no++;
          echo $no;
          echo '<br>';
        }
        ?>
      </td>
      <td style="width: 291px; text-align: left;" valign=top>
        <?php
        $sql = "SELECT * from ptj_luar_kota a INNER JOIN detail_ptj_luar b ON a.id_pl=b.id_pl where a.id_pl='$id'";
        $query = mysql_query($sql);
        while ($data1 = mysql_fetch_array($query)) {
          echo $data1['uraian'];
          echo '<br>';
        }
        ?>
      </td>
      <td style="width: 157px; text-align: right;" valign=top>
        <?php
        $sql = "SELECT * from ptj_luar_kota a INNER JOIN detail_ptj_luar b ON a.id_pl=b.id_pl where a.id_pl='$id'";
        $query = mysql_query($sql);
        while ($data1 = mysql_fetch_array($query)) {
          echo 'Rp. ' . number_format($data1['detail_kwitansi']) . ',-';
          echo '<br>';
        }
        ?>
      </td>
      <td style="width: 376px; text-align: left;">
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
        <div style="word-break: break-all;">
          <p style="text-align: justify;">
            <?php
            if ($tempat_st == '' || $tempat_st == '-') {
              echo 'Perjalanan Dinas dari Jambi ke ' . $tujuan_st . ' dalam rangka ' . $kegiatan . ' selama ' . $selama . ' (' . terbilang($selama) . ') hari TMT ' . $sehari;
            } else {
              echo 'Perjalanan Dinas dari Jambi ke ' . $tujuan_st . ' dalam rangka ' . $kegiatan . ' di ' . $tempat_st . ' selama ' . $selama . ' (' . terbilang($selama) . ') hari TMT ' . $sehari;
            }
            ?>
          </p>
        </div>
      </td>
    </tr>

    <tr>
      <td style="width: 48px; text-align: center;"></td>
      <td style="width: 491px; text-align: left;">Jumlah</td>
      <td style="width: 157px; text-align: center;">Rp. <?php echo $kwitansi; ?></td>
      <td style="width: 176px; text-align: left;">
        <div style="word-break: break-all;">
          <p style="text-align: justify;"></p>
        </div>
      </td>
    </tr>
    <tr>
      <td style="width: 48px; text-align: center;"></td>
      <td style="width: 824px; text-align: left;" colspan="3">
        <div style="word-break: break-all;">
          <p style="text-align: justify;">Terbilang : <?php echo terbilang($kwitansi2); ?> rupiah</p>
        </div>
      </td>

    </tr>

  </tbody>
</table>



<table style="height: 5px; width: 872px;" border="black" rules="none">
  <tbody>
    <tr style="height: 22px;">
      <td style="width: 309px; height: 22px;">&nbsp;</td>
      <td style="width: 22px; height: 22px;">&nbsp;</td>
      <td style="width: 209px; height: 22px;">&nbsp;</td>
      <td style="width: 23px; height: 22px;">&nbsp;</td>
      <td style="width: 309px; height: 22px;">Jambi, </td>
    </tr>

    <tr style="height: 22px;">
      <td style="width: 309px; height: 22px;">Telah dibayar sejumlah Rp. <?php echo $kwitansi; ?>,-</td>
      <td style="width: 22px; height: 22px;">&nbsp;</td>
      <td style="width: 209px; height: 22px;">&nbsp;</td>
      <td style="width: 23px; height: 22px;">&nbsp;</td>
      <td style="width: 309px; height: 22px;">Telah dibayar sejumlah Rp. <?php echo $kwitansi; ?>,-</td>
    </tr>
    <tr style="height: 22px;">
      <td style="width: 209px; height: 22px;">&nbsp;</td>
      <td style="width: 22px; height: 22px;">&nbsp;</td>
      <td style="width: 309px; height: 22px;">&nbsp;</td>
      <td style="width: 23px; height: 22px;">&nbsp;</td>
      <td style="width: 309px; height: 22px;">
        <div style="word-break: break-all;">
          <p style="text-align: justify;">Dengan catatan bahwa untuk tarif satuan<br>biaya seperti di atas, saya tidak akan<br>mengajukan klaim</p>
        </div>
      </td>
    </tr>
    <tr style="height: 21px;">
      <td style="width: 309px; height: 21px;">Jambi, </td>
      <td style="width: 22px; height: 21px;">&nbsp;</td>
      <td style="width: 209px; height: 21px;">&nbsp;</td>
      <td style="width: 23px; height: 21px;">&nbsp;</td>
      <td style="width: 309px; height: 21px;">Yang Menerima</td>
    </tr>
    <tr style="height: 3px;">
      <td style="width: 309px; height: 3px;">Bendahara Pengeluaran</td>
      <td style="width: 22px; height: 3px;">&nbsp;</td>
      <td style="width: 209px; height: 3px;">&nbsp;</td>
      <td style="width: 23px; height: 3px;">&nbsp;</td>
      <td style="width: 309px; height: 3px;">&nbsp;</td>
    </tr>
    <tr style="height: 88px;">
      <td style="width: 309px; height: 88px;">&nbsp;</td>
      <td style="width: 22px; height: 88px;">&nbsp;</td>
      <td style="width: 209px; height: 88px;">&nbsp;</td>
      <td style="width: 23px; height: 88px;">&nbsp;</td>
      <td style="width: 309px; height: 88px;">&nbsp;</td>
    </tr>
    <tr style="height: 3px;">
      <td style="width: 309px; height: 3px;"><?= $nama_bendahara; ?></td>
      <td style="width: 22px; height: 3px;">&nbsp;</td>
      <td style="width: 209px; height: 3px;">&nbsp;</td>
      <td style="width: 23px; height: 3px;">&nbsp;</td>
      <td style="width: 309px; height: 3px;"><?= $nama_petugas_pl; ?></td>
    </tr>
    <tr style="height: 3px;">
      <td style="width: 309px; height: 3px;">NIP. <?= $nip_bendahara; ?></td>
      <td style="width: 22px; height: 3px;">&nbsp;</td>
      <td style="width: 209px; height: 3px;">&nbsp;</td>
      <td style="width: 23px; height: 3px;">&nbsp;</td>
      <td style="width: 309px; height: 3px;">NIP. <?= $nip_petugas_pl; ?></td>
    </tr>
  </tbody>
</table>

<table style="height: 5px; width: 872px;" border="black" rules="none">
  <tbody>
    <tr style="height: 22px;">
      <td style="width: 872px; height: 22px;" colspan="3">
        <center>PERHITUNGAN SPPD RAMPUNG</center>
      </td>
    </tr>
    <tr style="height: 22px;">
      <td style="width: 872px; height: 22px;" colspan="3">&nbsp;</td>
    </tr>
    <tr style="height: 22px;">
      <td style="width: 872px; height: 22px;" colspan="3">&nbsp;</td>
    </tr>
    <tr style="height: 22px;">
      <td style="width: 290px; height: 22px;">Ditetapkan sejumlah</td>
      <td style="width: 291; height: 22px;">Rp. <?php echo $kwitansi; ?>,-</td>
      <td style="width: 291; height: 22px;">&nbsp;</td>
    </tr>
    <tr style="height: 22px;">
      <td style="width: 290px; height: 22px;">Yang telah dibayarkan semula</td>
      <td style="width: 291; height: 22px;">Rp. <?php echo $uang_muka; ?>,-</td>
      <td style="width: 291; height: 22px;">&nbsp;</td>
    </tr>
    <tr style="height: 22px;">
      <td style="width: 290px; height: 22px;">Selisih kurang</td>
      <td style="width: 291; height: 22px;"><b>Rp. <?php echo $selisih_kurang2; ?>,-</b></td>
      <td style="width: 291; height: 22px;">&nbsp;</td>
    </tr>
    <tr style="height: 22px;">
      <td style="width: 872px; height: 22px;" colspan="3">&nbsp;</td>
    </tr>
    <tr style="height: 22px;">
      <td style="width: 872px; height: 22px;" colspan="3">&nbsp;</td>
    </tr>
    <tr style="height: 22px;">
      <td style="width: 290px; height: 22px;">&nbsp;</td>
      <td style="width: 291; height: 22px;">&nbsp;</td>
      <td style="width: 291; height: 22px;">an. Kuasa Pengguna Anggaraan</td>
    </tr>
    <tr style="height: 22px;">
      <td style="width: 290px; height: 22px;">&nbsp;</td>
      <td style="width: 291; height: 22px;">&nbsp;</td>
      <td style="width: 291; height: 22px;">Pejabat Pembuat Komitmen</td>
    </tr>
    <tr style="height: 22px;">
      <td style="width: 872px; height: 22px;" colspan="3">&nbsp;</td>
    </tr>
    <tr style="height: 22px;">
      <td style="width: 872px; height: 22px;" colspan="3">&nbsp;</td>
    </tr>
    <tr style="height: 22px;">
      <td style="width: 872px; height: 22px;" colspan="3">&nbsp;</td>
    </tr>
    <tr style="height: 22px;">
      <td style="width: 290px; height: 22px;">&nbsp;</td>
      <td style="width: 291; height: 22px;">&nbsp;</td>
      <td style="width: 291; height: 22px;"><?= $nama_ppk; ?></td>
    </tr>
    <tr style="height: 22px;">
      <td style="width: 290px; height: 22px;">&nbsp;</td>
      <td style="width: 291; height: 22px;">&nbsp;</td>
      <td style="width: 291; height: 22px;">NIP. <?= $nip_ppk; ?></td>
    </tr>

  </tbody>
</table>
<?php
function penyebut($nilai)
{
  $nilai = abs($nilai);
  $huruf = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
  $temp = "";
  if ($nilai < 12) {
    $temp = " " . $huruf[$nilai];
  } else if ($nilai < 20) {
    $temp = penyebut($nilai - 10) . " belas";
  } else if ($nilai < 100) {
    $temp = penyebut($nilai / 10) . " puluh" . penyebut($nilai % 10);
  } else if ($nilai < 200) {
    $temp = " seratus" . penyebut($nilai - 100);
  } else if ($nilai < 1000) {
    $temp = penyebut($nilai / 100) . " ratus" . penyebut($nilai % 100);
  } else if ($nilai < 2000) {
    $temp = " seribu" . penyebut($nilai - 1000);
  } else if ($nilai < 1000000) {
    $temp = penyebut($nilai / 1000) . " ribu" . penyebut($nilai % 1000);
  } else if ($nilai < 1000000000) {
    $temp = penyebut($nilai / 1000000) . " juta" . penyebut($nilai % 1000000);
  } else if ($nilai < 1000000000000) {
    $temp = penyebut($nilai / 1000000000) . " milyar" . penyebut(fmod($nilai, 1000000000));
  } else if ($nilai < 1000000000000000) {
    $temp = penyebut($nilai / 1000000000000) . " trilyun" . penyebut(fmod($nilai, 1000000000000));
  }
  return $temp;
}

function terbilang($nilai)
{
  if ($nilai < 0) {
    $hasil = "minus " . trim(penyebut($nilai));
  } else {
    $hasil = trim(penyebut($nilai));
  }
  return $hasil;
}

?>