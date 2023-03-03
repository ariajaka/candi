<?php 
if (isset($_GET['act'])) 
{
    $act = $_GET['act'];
    if ($act == 'view') 
    {
        include ('view/anggaran/view-anggaran.php');
    }
    elseif ($act == 'import') 
    {
        include ('view/anggaran/form_import-anggaran.php');
    }
    elseif ($act == 'hapus') 
    {
        $hapus = true;
        if ($hapus == true) 
        {
            
                echo '<div class="panel panel-danger animated fadeInDownBig" id="notif" style="z-index:9999;position:absolute;margin:auto;background:rgb(42,42,42);color:white;margin-left:10%;margin-top:8%;">
                      <div class="panel-heading"><i class="fa fa-warning"><strong> Warning</strong></i></div>
                      <center><div class="panel-body">
                        <p>Yakin ingin mengosongkan anggaran ?</p>
                        <p style="font-style:italic;font-size:12px;color:red"><i class="fa fa-warning"></i> Data yang dihapus tidak dapat dikembalikan lagi</p>
                        <a class="btn btn-danger" href="sql/anggaran/delete.php" id="ya" id="hapus">YA</a>
                        <button class="btn btn-success" id="tidak" onclick="$("#notif").hide();">TIDAK</button>
                      </div></center>
                    </div>';
        }
            include ('view/anggaran/view-anggaran.php');
    }  
    else
    {
        include ('view/anggaran/view-anggaran.php');
    }
}
else
{
    include ('view/anggaran/view-anggaran.php');
}
?>