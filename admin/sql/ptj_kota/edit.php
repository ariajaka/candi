<?php 
include('../../../config/config.php');
    //Untuk mengecek apakah ini proses simpan atau update
    if(isset($_POST['save']))
    {
        $id = $_POST['id'];
        //mengmbil variabel yang dikirim oleh formulir
        
        $id_pk = $_POST['id_pk'];
        $provinsi = $_POST['provinsi'];
        $kota = $_POST['kota'];
        $jumlah_hari = $_POST['jumlah_hari'];
        $tarif_per_hari = $_POST['tarif_per_hari'];     
        $cmbpenandatanganPPK = $_POST['cmbpenandatanganPPK'];
        $cmb_pj_kegiatan = $_POST['cmb_pj_kegiatan'];  
  
        if ($provinsi != '')
        {
            $sql="UPDATE ptj_dlm_kota SET id_pk='$id_pk', id_sk='$provinsi', nip_ppk='$cmbpenandatanganPPK', nip_pj='$cmb_pj_kegiatan' WHERE id_pk ='$id'";
            $query=mysql_query($sql) or die(mysql_error().$sql);
        }
        
        if ($kota != '') 
        {
            $jlh = count($kota); 
            for($i=0;$i<$jlh;$i++)
            {
                $sql2="INSERT INTO ptj_kota SET id_pk='$id_pk', id_sk='$provinsi', nip_ptj_kota='$kota[$i]', lama_perjadin='$jumlah_hari[$i]', tarif_per_hari='$tarif_per_hari[$i]'";
                $query2=mysql_query($sql2) or die(mysql_error());
            }
        }
        $success ="Sukses mengubah Pertanggungjawaban Kota";
        $msg = base64_encode($success);
        header('location:../../index.php?mod=ptj_kota&act=view&s=1&msg='.$msg);
    }
?>