<?php 
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    if ($act == 'view') {
        include ('view/surat_tugas/view-surat_tugas.php');
    }elseif ($act == 'add') {
        include ('view/surat_tugas/add-surat_tugas.php');
    }elseif ($act == 'edit') {
        include ('view/surat_tugas/edit-surat_tugas.php');
    }
    elseif ($act == 'hapus') {
        $hapus = true;
        if ($hapus == true) {
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $query = mysql_query("SELECT id_sk FROM surat_tugas WHERE id_sk = '$id'");
                $data = mysql_fetch_assoc($query);
            }
                echo '<div class="panel panel-danger animated fadeInDownBig" id="notif" style="z-index:9999;position:absolute;margin:auto;background:rgb(42,42,42);color:white;margin-left:10%;margin-top:8%;">
                      <div class="panel-heading"><i class="fa fa-warning"><strong> Warning</strong></i></div>
                      <center><div class="panel-body">
                        <p>Yakin ingin menghapus surat dengan id surat tugas '.$data['id_sk'].' ?</p>
                        <p style="font-style:italic;font-size:12px;color:red"><i class="fa fa-warning"></i> Data yang dihapus tidak dapat dikembalikan lagi</p>
                        <a class="btn btn-danger" href="sql/surat_tugas/delete.php?id='.$id.'" id="ya" id="hapus">YA</a>
                        <button class="btn btn-success" id="tidak" onclick="$("#notif").hide();">TIDAK</button>
                      </div></center>
                    </div>';
            }
            include ('view/surat_tugas/view-surat_tugas.php');
    }else{
        include ('view/surat_tugas/view-surat_tugas.php');
    }
}else{
    include ('view/surat_tugas/view-surat_tugas.php');
}
?>