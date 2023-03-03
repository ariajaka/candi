<?php 
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql_surtu = "SELECT * FROM detail_ptj_luar a INNER JOIN  ptj_luar_kota b ON a.id_pl=b.id_pl INNER JOIN pegawai c ON b.nip_petugas_pl=c.nip WHERE a.id_pl='$id'";
    $surtu= mysql_query($sql_surtu)or die("Query failed with error: ".mysql_error());
    $data1 = mysql_fetch_assoc($surtu);

    $id_pl = $data1['id_pl'];
    $no_sppd = $data1['no_sppd'];
    $nama_petugas_pl = $data1['nama'];
    $nip_petugas_pl = $data1['nip_petugas_pl'];
    $kwitansi = number_format($data1['kwitansi'],0,",",".");
    $kwitansi2 = $data1['kwitansi'];
    $uang_muka = number_format($data1['uang_muka'],0,",",".");
    $uang_muka2 = $data1['uang_muka'];
    $selisih_kurang1 = $uang_muka2 - $kwitansi2;
    $selisih_kurang2 = number_format($selisih_kurang1,0,",",".");


    $sql2 = "SELECT * FROM ptj_luar_kota a INNER JOIN detail_st_sppd b ON a.no_sppd=b.no_sppd INNER JOIN surat_tugas c ON b.id_sk=c.id_sk WHERE a.id_pl='$id'";
    $query2= mysql_query($sql2)or die("Query failed with error: ".mysql_error());
    $data2 = mysql_fetch_assoc($query2);

    $kegiatan = $data2['kegiatan'];
    $tgl_st = $data2['tgl_st'];
    $selama = $data2['jumlah_hari'];
    $tgl_berangkat = $data2['tgl_berangkat'];
    $tgl_kembali = $data2['tgl_kembali'];
    $tujuan_st = $data2['tujuan_st'];
    $tempat_st = $data2['tempat_st'];

    $sql3 = "SELECT * FROM ptj_luar_kota a INNER JOIN detail_st_sppd b ON a.no_sppd=b.no_sppd INNER JOIN detail_st_anggaran c ON b.id_sk=c.id_sk WHERE a.id_pl='$id' AND c.anggaran='DIPA Balai POM di Jambi'";
    $query3= mysql_query($sql3)or die("Query failed with error: ".mysql_error());
    $data3 = mysql_fetch_assoc($query3);

    $mak = $data3['mak'];

    $sql3 = "SELECT * FROM ptj_luar_kota a INNER JOIN detail_st_sppd b ON a.no_sppd=b.no_sppd INNER JOIN pegawai c ON b.penandatangan_sppd=c.nip WHERE a.id_pl='$id'";
    $query3= mysql_query($sql3)or die("Query failed with error: ".mysql_error());
    $data3 = mysql_fetch_assoc($query3);

    $nama_ppk = $data3['nama'];
    $nip_ppk = $data3['penandatangan_sppd'];

    $sql4 = "SELECT * FROM ptj_luar_kota a INNER JOIN detail_st_sppd b ON a.no_sppd=b.no_sppd INNER JOIN pegawai c ON b.penandatangan_berangkat=c.nip WHERE a.id_pl='$id'";
    $query4= mysql_query($sql4)or die("Query failed with error: ".mysql_error());
    $data4 = mysql_fetch_assoc($query4);

    $nama_pj = $data4['nama'];
    $nip_pj = $data4['penandatangan_berangkat'];
    
}
 ?>