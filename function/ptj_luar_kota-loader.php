<?php 
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    if ($act == 'view') {
        include ('view/ptj_luar_kota/view-ptj_luar_kota.php');
    }elseif ($act == 'add') {
        include ('view/ptj_luar_kota/add-ptj_luar_kota.php');
    }elseif ($act == 'edit') {
        include ('view/ptj_luar_kota/edit-ptj_luar_kota.php');
    }elseif ($act == 'hapus') {
        $hapus = true;
        if ($hapus == true) {
            if (isset($_GET['id'])&&($_GET['id_pl'])) {
                $id = $_GET['id'];
                $id_pl = $_GET['id_pl'];
                $query = mysql_query("SELECT * FROM ptj_luar_kota a INNER JOIN detail_ptj_luar b ON a.id_pl=b.id_pl WHERE a.id_pl = '$id'");
                $data = mysql_fetch_assoc($query);
            }
                echo '<div class="panel panel-danger animated fadeInDownBig" id="notif" style="z-index:9999;position:absolute;margin:auto;background:rgb(42,42,42);color:white;margin-left:10%;margin-top:8%;">
                      <div class="panel-heading"><i class="fa fa-warning"><strong> Warning</strong></i></div>
                      <center><div class="panel-body">
                        <p>Yakin ingin menghapus Pertanggungjawaban luar Kota dengan Nomor SPPD '.$data['no_sppd'].' ?</p>
                        <p style="font-style:italic;font-size:12px;color:red"><i class="fa fa-warning"></i> Data yang dihapus tidak dapat dikembalikan lagi</p>
                        <a class="btn btn-danger" href="sql/ptj_luar_kota/delete.php?id='.$id.'&id_pl='.$data['no_sppd'].'" id="ya" id="hapus">YA</a>
                        <button class="btn btn-success" id="tidak" onclick="$("#notif").hide();">TIDAK</button>
                      </div></center>
                    </div>';
            }
            include ('view/ptj_luar_kota/view-ptj_luar_kota.php');
    }else{
        include ('view/ptj_luar_kota/view-ptj_luar_kota.php');
    }
}else{
    include ('view/ptj_luar_kota/view-ptj_luar_kota.php');
}
?>