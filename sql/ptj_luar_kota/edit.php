<?php 
include('../../config/config.php');
    //Untuk mengecek apakah ini proses simpan atau update
    if(isset($_POST['save']))
    {
        $id = $_POST['id'];
        //mengmbil variabel yang dikirim oleh formulir
        include('validation.php');

        if($realisasi3  > $pagu)
        {
            $oops ="Gagal membuat Pertanggungjawaban Luar Kota Baru karena pagu minus";
            $msg = base64_encode($oops);
            header('location:../../index.php?mod=ptj_luar_kota&act=add&s=2&msg='.$msg);
        }
        else
        {
            $id_pl = $_POST['id_pl'];
            $id_sk = $_POST['id_sk'];
            $provinsi = $_POST['provinsi'];
            $kota = $_POST['kota'];
            $uang_muka = $_POST['uang_muka'];
            $detail_kwitansi = $_POST['detail_kwitansi'];
            $riil = $_POST['riil'];
            $cmb_pj_kegiatan = $_POST['cmb_pj_kegiatan'];

           
            $sql="UPDATE ptj_luar_kota SET id_pl='$id_pl', id_sk='$id_sk', no_sppd='$provinsi', nip_petugas_pl='$kota', uang_muka='$uang_muka', nip_pj_luar='$cmb_pj_kegiatan', status_ptj_luar_kota=1 WHERE id_pl ='$id'";
            $query=mysql_query($sql) or die(mysql_error().$sql);


        
            $uraian1 = count($_POST['uraian']);
            for($i=0;$i<$uraian1;$i++)
            {
                $jlh_uraian = $_POST['uraian'][$i];
                if ($jlh_uraian !== '')
                {

                    $sql2="INSERT INTO detail_ptj_luar SET id_pl='$id_pl', uraian='$jlh_uraian', detail_kwitansi='$detail_kwitansi[$i]', riil='$riil[$i]'";
                    $query2=mysql_query($sql2) or die(mysql_error());
                }
            }
        
        $success ="Sukses mengubah Pertanggungjawaban Luar Kota";
        $msg = base64_encode($success);
        header('location:../../index.php?mod=ptj_luar_kota&act=view&s=1&msg='.$msg);
        }
    }
?>