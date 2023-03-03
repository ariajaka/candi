<?php 
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    if ($act == 'view') {
        include ('view/ptj_kota/view-ptj_kota.php');
    }elseif ($act == 'add') {
        include ('view/ptj_kota/add-ptj_kota.php');
    }elseif ($act == 'edit') {
        include ('view/ptj_kota/edit-ptj_kota.php');
    }elseif ($act == 'hapus') {
        $hapus = true;
        if ($hapus == true) {
            if (isset($_GET['id'])&&($_GET['id_pk'])) {
                $id = $_GET['id'];
                $id_pk = $_GET['id_pk'];
                $query = mysql_query("SELECT * FROM ptj_dlm_kota a INNER JOIN ptj_kota b ON a.id_pk=b.id_pk WHERE a.id_pk = '$id'");
                $data = mysql_fetch_assoc($query);
            }
                echo '<div class="panel panel-danger animated fadeInDownBig" id="notif" style="z-index:9999;position:absolute;margin:auto;background:rgb(42,42,42);color:white;margin-left:10%;margin-top:8%;">
                      <div class="panel-heading"><i class="fa fa-warning"><strong> Warning</strong></i></div>
                      <center><div class="panel-body">
                        <p>Yakin ingin menghapus Pertanggungjawaban dalam Kota dengan Nomor Surat Tugas '.$data['id_pk'].' ?</p>
                        <p style="font-style:italic;font-size:12px;color:red"><i class="fa fa-warning"></i> Data yang dihapus tidak dapat dikembalikan lagi</p>
                        <a class="btn btn-danger" href="sql/ptj_kota/delete.php?id='.$id.'&id_pk='.$id_pk.'" id="ya" id="hapus">YA</a>
                        <button class="btn btn-success" id="tidak" onclick="$("#notif").hide();">TIDAK</button>
                      </div></center>
                    </div>';
            }
            include ('view/ptj_kota/view-ptj_kota.php');
    }else{
        include ('view/ptj_kota/view-ptj_kota.php');
    }
}else{
    include ('view/ptj_kota/view-ptj_kota.php');
}
?>