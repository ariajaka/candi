<?php 
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    if ($act == 'view') {
        include ('view/sppd/view-sppd.php');
    }elseif ($act == 'add') {
        include ('view/sppd/add-sppd.php');
    }elseif ($act == 'edit') {
        include ('view/sppd/edit-sppd.php');
    }elseif ($act == 'hapus') {
        $hapus = true;
        if ($hapus == true) {
            if (isset($_GET['id'])&&($_GET['id_sk'])) {
                $id = $_GET['id'];
                $id_sk = $_GET['id_sk'];
                $query = mysql_query("SELECT * FROM detail_st_sppd a INNER JOIN surat_tugas b ON a.id_sk=b.id_sk WHERE a.no_sppd = '$id'");
                $data = mysql_fetch_assoc($query);
            }
                echo '<div class="panel panel-danger animated fadeInDownBig" id="notif" style="z-index:9999;position:absolute;margin:auto;background:rgb(42,42,42);color:white;margin-left:10%;margin-top:8%;">
                      <div class="panel-heading"><i class="fa fa-warning"><strong> Warning</strong></i></div>
                      <center><div class="panel-body">
                        <p>Yakin ingin menghapus SPPD dengan Nomor SPPD '.$data['no_sppd'].' ?</p>
                        <p style="font-style:italic;font-size:12px;color:red"><i class="fa fa-warning"></i> Data yang dihapus tidak dapat dikembalikan lagi</p>
                        <a class="btn btn-danger" href="sql/sppd/delete.php?id='.$id.'&id_sk='.$id_sk.'" id="ya" id="hapus">YA</a>
                        <button class="btn btn-success" id="tidak" onclick="$("#notif").hide();">TIDAK</button>
                      </div></center>
                    </div>';
            }
            include ('view/sppd/view-sppd.php');
    }else{
        include ('view/sppd/view-sppd.php');
    }
}else{
    include ('view/sppd/view-sppd.php');
}
?>