<div class="col-lg-12">
<section class="box ">
    <header class="panel_header">
        <h2 class="title pull-left">Realisasi</h2>
        <div class="actions panel_actions pull-right">
            <i class="box_toggle fa fa-chevron-down"></i>
            <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
            <i class="box_close fa fa-times"></i>
        </div>
    </header>
    <div class="content-body">    
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
            <?php 
                if (isset($_GET['msg'])) {
                    $msg = base64_decode($_GET['msg']);
                    $s = $_GET['s'];
                    if ($s == 1) {
                        echo '<div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <strong>Success! </strong>'.$msg.'
                        </div>';   
                    }elseif ($s == 0) {
                        echo '<div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <strong>Failed! </strong>'.$msg.'
                        </div>'; 
                    }elseif ($s == 2) {
                        echo '<div class="alert alert-warning">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <strong>Oops! </strong>'.$msg.'
                        </div>'; 
                    }
                }
             ?>
            <table id="example-1" class="table table-striped dt-responsive display" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>MAK</th>
                            <th>Pagu</th>
                            <th>Realisasi</th>
                            <th>Sisa Pagu</th>
                        </tr>
                    </thead>

                    <tfoot>
                        <tr>
                           <th>No</th>
                            <th>MAK</th>
                            <th>Pagu</th>
                            <th>Realisasi</th>
                            <th>Sisa Pagu</th>
                        </tr>
                    </tfoot>

                    <tbody>
                    <?php 
                        include ('sql/realisasi/view.php');
						$no = 0;
                        while ($data_realisasi = mysql_fetch_assoc($realisasi)) {
							$mak = $data_realisasi['mak'];
                            $pagu = $data_realisasi['pagu'];
							$no++;
                    ?>
                        <tr>
                        	<td><?php echo $no; ?></td>
                            <td><?php echo $data_realisasi['mak']; ?></td>
                            <td><?php echo 'Rp. '.number_format($pagu,0,",","."); ?></td>
                            <td><?php 
                                    $sql="SELECT SUM( `ptj_luar_kota`.`kwitansi`) AS `total`
                                    FROM `surat_tugas`
                                    INNER JOIN `detail_st_anggaran` ON `surat_tugas`.`id_sk` = `detail_st_anggaran`.`id_sk`
                                    INNER JOIN `ptj_luar_kota` ON `ptj_luar_kota`.`id_sk` = `surat_tugas`.`id_sk`
                                    WHERE `detail_st_anggaran`.`mak` = '$mak'"; 
                                    $query = mysql_query($sql)or die("Query failed with error: ".mysql_error());
                                    while ($data1= mysql_fetch_array($query)){
                                        $total=$data1['total'];
                                        
                                        $total;
                                    }
                                    
        
                                    $sql2="SELECT SUM( `ptj_dlm_kota`.`tarif`) AS `total_kota`
                                    FROM `surat_tugas`
                                    INNER JOIN `detail_st_anggaran` ON `surat_tugas`.`id_sk` = `detail_st_anggaran`.`id_sk`
                                    INNER JOIN `ptj_dlm_kota` ON `ptj_dlm_kota`.`id_sk` = `surat_tugas`.`id_sk`
                                    WHERE `detail_st_anggaran`.`mak` = '$mak'"; 
                                    $query2 = mysql_query($sql2)or die("Query failed with error: ".mysql_error());
                                    while ($data2= mysql_fetch_array($query2)){
                                        $total_kota=$data2['total_kota'];
                                        
                                        $total_kota;
                                    }
                                    $realisasi2 = $total + $total_kota;
                                    echo 'Rp. '.number_format($realisasi2,0,",",".");

                                ?></td>
                            <td><?php 
                                $sisa = $pagu - $realisasi2;
                                echo 'Rp. '.number_format($sisa,0,",",".");
                                    

                                ?></td>                            
                        </tr>
                        
                        <?php
                            }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section></div>
