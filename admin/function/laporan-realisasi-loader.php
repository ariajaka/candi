<?php 
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    if ($act == 'view') {
        include ('view/laporan_realisasi/view-realisasi.php');
    }
}else{
    include ('view/laporan_realisasi/view-realisasi.php');
}
?>