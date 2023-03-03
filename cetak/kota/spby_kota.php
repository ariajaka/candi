<link href="../../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<?php include('../../config/config.php') ?>
<?php include('../../sql/cetak-spby_kota.php'); ?>
<style>
    table {
        border-collapse: collapse;

    }

    td {
        border: 0px solid;
        padding: 3px;
    }
</style>

<table border="black" rules="none" style="height: 5px; width: 872px; border-bottom: 0px;">
    <caption>&nbsp;</caption>
    <tbody>
        <tr style="height: 13px;">
            <td colspan="5" style="width: 872px; text-align: center; height: 13px;"><strong>BADAN POM RI</strong></td>
        </tr>
        <tr style="height: 23px;">
            <td style="width: 872px; text-align: center; height: 23px;" colspan="5"><strong><span style="text-decoration: underline;">BALAI PENGAWAS OBAT DAN MAKANAN DI JAMBI ( 432835 )</span></strong></td>
        </tr>
        <tr style="height: 24px;">
            <td style="width: 872px; text-align: center; height: 24px;" colspan="5"><strong>SURAT PERINTAH BAYAR</strong></td>
        </tr>
        <tr style="height: 26px;">
            <td style="width: 872px; text-align: center; height: 26px;" colspan="5">Tanggal : ........................ Nomor : ...................</td>
        </tr>
    </tbody>
</table>

<table border="black" rules="none" style="height: 5px; width: 872px; border-bottom: 0px;">
    <tbody>
        <tr style="height: 13px;">
            <td style="width: 872px; height: 13px; padding-left: 10px" colspan="5">Saya yang bertanda tangan dibawah ini, selaku Pejabat Pembuat Komitmen memerintahkan Bendahara Pengeluaran agar melakukan pembayaran sejumlah :</td>
        </tr>
    </tbody>
</table>

<table border="black" rules="none" style="height: 5px; width: 872px; border-bottom: 0px;">
    <tbody>
        <tr style="height: 13px;">
            <td style="width: 872px; height: 13px; padding-left: 10px" colspan="5">Rp. <?php echo $tarif; ?></td>
        </tr>
        <tr style="height: 13px;">
            <td style="width: 872px; height: 13px; padding-left: 10px" colspan="5"><?php echo terbilang($tarif2); ?> rupiah</td>
        </tr>
    </tbody>
</table>

<table border="black" rules="none" style="height: 5px; width: 872px; border-bottom: 0px;">
    <tbody>
        <tr style="height: 13px;">
            <td style="width: 175px; height: 13px; padding-left: 10px">Kepada</td>
            <td style="width: 25px; height: 13px;">:</td>
            <td colspan="3" style="width: 672px; height: 13px;">
                <?php
                $sql = "SELECT count(*), b.nama from ptj_kota a INNER JOIN pegawai b ON a.nip_ptj_kota=b.nip where a.id_pk='$id_pk'";
                $query = mysql_query($sql);
                $data1 = mysql_fetch_array($query);
                $jml_pegawai = $data1[0];
                $nama = $data1['nama'];

                if ($jml_pegawai > 1) {
                    echo $nama . ', dkk';
                } else {
                    echo $nama;
                }
                ?>

            </td>
        </tr>
        <tr style="height: 59px;">
            <td style="width: 175px; height: 59px; padding-left: 10px" valign="top" align="left">Untuk Pembayaran</td>
            <td style="width: 25px; height: 59px;" valign="top">:</td>
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
            <td style="width: 672px; height: 59px;" colspan="3" valign="top" align="left">
                <div style="word-break:break-all;"><?= 'Belanja transport dalam ' . $tujuan_st . ' dalam rangka ' . $kegiatan . ' selama ' . $selama . ' (' . terbilang($selama) . ') hari TMT ' . $sehari;




                                                    ?></div>
            </td>
        </tr>
        <tr style="height: 13px;">
            <td style="width: 175px; height: 13px; padding-left: 10px">Atas Dasar</td>
            <td style="width: 25px; height: 13px;">:</td>
            <td style="width: 672px; height: 13px;" colspan="3">&nbsp;</td>
        </tr>
        <tr style="height: 33px;">

            <td style="width: 872px; height: 33px; padding-left: 10px" colspan="5">1. Kwitansi/bukti pembelian an. <?php
                                                                                                                    $sql = "SELECT count(*), b.nama from ptj_kota a INNER JOIN pegawai b ON a.nip_ptj_kota=b.nip where a.id_pk='$id_pk'";
                                                                                                                    $query = mysql_query($sql);
                                                                                                                    $data1 = mysql_fetch_array($query);
                                                                                                                    $jml_pegawai = $data1[0];
                                                                                                                    $nama = $data1['nama'];

                                                                                                                    if ($jml_pegawai > 1) {
                                                                                                                        echo $nama . ', dkk';
                                                                                                                    } else {
                                                                                                                        echo $nama;
                                                                                                                    }
                                                                                                                    ?> senilai Rp. <?= $tarif; ?></td>
        </tr>
    </tbody>
</table>

<table border="black" rules="none" style="height: 5px; width: 872px; border-bottom: 0px;">
    <tbody>
        <tr style="height: 3px;">
            <td style="width: 175px; height: 3px; padding-left: 10px">Dibebankan pada</td>
            <td style="width: 25px; height: 3px;">:</td>
            <td style="width: 672px; height: 3px;" colspan="3">&nbsp;</td>
        </tr>
        <tr style="height: 79px;">
            <td style="width: 175px; height: 79px; padding-left: 10px">Kegiatan, output, MAK</td>
            <td style="width: 25px; height: 79px;">:</td>
            <td style="width: 672px; height: 79px;" colspan="3"><?= $mak; ?></td>
        </tr>
    </tbody>
</table>

<table border="black" rules="none" style="height: 5px; width: 872px;">
    <tbody>
        <tr style="height: 22px;">
            <td style="width: 239px; height: 22px; padding-left: 10px">Setuju/lunas dibayar,&nbsp;</td>
            <td style="width: 62px; height: 22px;">&nbsp;</td>
            <td style="width: 239px; height: 22px;">Diterima tanggal.........</td>
            <td style="width: 73px; height: 22px;">&nbsp;</td>
            <td style="width: 259px; height: 22px;">Jambi,.........</td>
        </tr>
        <tr style="height: 21px;">
            <td style="width: 239px; height: 21px; padding-left: 10px">tanggal...............</td>
            <td style="width: 62px; height: 21px;">&nbsp;</td>
            <td style="width: 239px; height: 21px;">&nbsp;</td>
            <td style="width: 74px; height: 21px;">&nbsp;</td>
            <td style="width: 259px; height: 21px;">An. Kuasa Pengguna Anggaran</td>
        </tr>
        <tr style="height: 3px;">
            <td style="width: 239px; height: 3px; padding-left: 10px">Bendahara Pengeluaran</td>
            <td style="width: 62px; height: 3px;">&nbsp;</td>
            <td style="width: 239px; height: 3px;">Penerima uang&nbsp;</td>
            <td style="width: 73px; height: 3px;">&nbsp;</td>
            <td style="width: 259px; height: 3px;">Pejabat Pembuat Komitmen</td>
        </tr>
        <tr style="height: 88px;">
            <td style="width: 239px; height: 88px;">&nbsp;</td>
            <td style="width: 62px; height: 88px;">&nbsp;</td>
            <td style="width: 239px; height: 88px;">&nbsp;</td>
            <td style="width: 73px; height: 88px;">&nbsp;</td>
            <td style="width: 259px; height: 88px;">&nbsp;</td>
        </tr>
        <tr style="height: 3px;">
            <td style="width: 239px; height: 3px; padding-left: 10px"><?php
                                                    $sql = "SELECT * from pegawai where jabatan='Bendahara Pengeluaran'";
                                                    $query = mysql_query($sql);
                                                    $data1 = mysql_fetch_array($query);
                                                    
                                                    $nama = $data1['nama'];

                                                        echo $nama;
                                                    ?></td>
            <td style="width: 62px; height: 3px;">&nbsp;</td>
            <td style="width: 239px; height: 3px;"><?php
                                                    $sql = "SELECT count(*), b.nama from ptj_kota a INNER JOIN pegawai b ON a.nip_ptj_kota=b.nip where a.id_pk='$id_pk'";
                                                    $query = mysql_query($sql);
                                                    $data1 = mysql_fetch_array($query);
                                                    $jml_pegawai = $data1[0];
                                                    $nama = $data1['nama'];

                                                    if ($jml_pegawai > 1) {
                                                        echo $nama;
                                                    } else {
                                                        echo $nama;
                                                    }
                                                    ?></td>
            <td style="width: 73px; height: 3px;">&nbsp;</td>
            <td style="width: 259px; height: 3px;"><?= $nama_ppk; ?></td>
        </tr>
        <tr style="height: 3px;">
            <td style="width: 239px; height: 3px; padding-left: 10px">NIP. <?php
                                                    $sql = "SELECT * from pegawai where jabatan='Bendahara Pengeluaran'";
                                                    $query = mysql_query($sql);
                                                    $data1 = mysql_fetch_array($query);
                                                    
                                                    $nip = $data1['nip'];

                                                        echo $nip;
                                                    ?></td>
            <td style="width: 62px; height: 3px;">&nbsp;</td>
            <td style="width: 239px; height: 3px;">NIP. <?php
                                                        $sql = "SELECT count(*), a.nip_ptj_kota from ptj_kota a INNER JOIN pegawai b ON a.nip_ptj_kota=b.nip where a.id_pk='$id_pk'";
                                                        $query = mysql_query($sql);
                                                        $data1 = mysql_fetch_array($query);
                                                        $jml_pegawai = $data1[0];
                                                        $nip = $data1['nip_ptj_kota'];

                                                        if ($jml_pegawai > 1) {
                                                            echo $nip;
                                                        } else {
                                                            echo $nip;
                                                        }
                                                        ?></td>
            <td style="width: 73px; height: 3px;">&nbsp;</td>
            <td style="width: 259px; height: 3px;">NIP. <?= $nip_ppk; ?></td>
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