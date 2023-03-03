<div class="col-lg-12">
<section class="box ">
    <header class="panel_header">
        <h2 class="title pull-left">Pertanggungjawaban Dalam Kota</h2>
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
                            <th>ID SK</th>
                            <th>Nama Pegawai</th>
                            <th>Lama Perjadin</th>
                            <th>Tarif Perhari</th>
                            <th>Jumlah Kwitansi</th>
                            <th>PPK</th>
                            <th>PJ Kegiatan</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>ID SK</th>
                            <th>Nama Pegawai</th>
                            <th>Lama Perjadin</th>
                            <th>Tarif Perhari</th>
                            <th>Jumlah Kwitansi</th>
                            <th>PPK</th>
                            <th>PJ Kegiatan</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>

                    <tbody>
                    <?php 
                        include ('sql/ptj_kota/view.php');
						$no = 0;
                        while ($data_surtu = mysql_fetch_assoc($surtu)) {
							$id_sk = $data_surtu['id_sk'];
                            $id_pk = $data_surtu['id_pk'];
                            $tarif = number_format($data_surtu['tarif'],0,",",".");
                            $status_ptj_kota = $data_surtu['status_ptj_kota'];
							$no++;
                    ?>
                        <tr>
                        	<td><?php echo $no; ?></td>
                            <td><?php echo $data_surtu['id_sk']; ?></td>
                            <td><?php 
                                    $sql="SELECT * from ptj_kota a INNER JOIN pegawai b ON a.nip_ptj_kota=b.nip where a.id_pk='$id_pk'"; 
                                    $query = mysql_query($sql);
                                    while ($data1= mysql_fetch_array($query)){
                                        echo $data1['nama']; echo '<br>';
                                    }
                                ?>
                            </td>
                            <td><?php 
                                    $sql="SELECT * from ptj_kota where id_pk='$id_pk'"; 
                                    $query = mysql_query($sql);
                                    while ($data1= mysql_fetch_array($query)){
                                        if ($data1['lama_perjadin'] !=0){
                                        echo $data1['lama_perjadin']; echo '<br>';
                                        }
                                    }
                                ?>   
                            </td>
                            <td><?php 
                                    $sql="SELECT * from ptj_kota WHERE id_pk='$id_pk'"; 
                                    $query = mysql_query($sql);
                                    while ($data1= mysql_fetch_array($query)){
                                        $nominal_tarif = number_format($data1['tarif_per_hari'],0,",",".");
                                        if ($nominal_tarif !=0){
                                        echo 'Rp. '.$nominal_tarif; echo '<br>';
                                        }
                                    }
                                ?>      
                            </td>
                            <td>
                               <?php echo 'Rp. '.$tarif;?>     
                            </td>
                             <td>
                               <?php 
                                    $sql="SELECT * FROM ptj_dlm_kota a INNER JOIN pegawai b ON a.nip_ppk=b.nip WHERE id_pk='$id_pk'"; 
                                    $query = mysql_query($sql);
                                    while ($data1= mysql_fetch_array($query)){ 
                                        echo $data1['nama']; echo '<br>';
                                    }
                                ?>     
                            </td>
                            <td>
                               <?php 
                                    $sql="SELECT * FROM ptj_dlm_kota a INNER JOIN pegawai b ON a.nip_pj=b.nip WHERE id_pk='$id_pk'"; 
                                    $query = mysql_query($sql);
                                    while ($data1= mysql_fetch_array($query)){ 
                                        echo $data1['nama']; echo '<br>';
                                    }
                                ?>     
                            </td>
                            <td>
                                <div class="btn-group-vertical" role="group" aria-label="Button group with nested dropdown"> 
                                    <div class="btn-group-vertical" role="group">
                                        <button id="btnGroupDrop1" type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cetak</button>
                                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                            <a class="dropdown-item" href="spby_kota.php?id=<?php echo $data_surtu['id_pk']; ?>" target="_blank">SPBy</a><br>
                                            <a class="dropdown-item" href="kuitansi_kota.php?id=<?php echo $data_surtu['id_pk']; ?>" target="_blank">Kwitansi</a><br>
                                            <a class="dropdown-item" href="nominatif_kota.php?id=<?php echo $data_surtu['id_pk']; ?>" class="dropdown-item" target="_blank"> Nominatif</a><br>
                                            <a class="dropdown-item" href="riil_kota.php?id=<?php echo $data_surtu['id_pk']; ?>" class="dropdown-item" target="_blank">Riil</a> 
                                        </div>
                                    </div>
                                </div>
                                <!--
                                <form name="myForm" action="" method="post">
                                
                                <select name="cetak" onchange="window.open(this.options[this.selectedIndex].value, '_blank')" class="btn btn-success btn-sm">
                                
                                    <option disabled="disabled" selected="selected"  value="0">Cetak</option>
                                    <option value="spby_kota.php?id=<?php echo $data_surtu['id_pk']; ?>">SPBy</option>
                                    <option value="kuitansi_kota.php?id=<?php echo $data_surtu['id_pk']; ?>">Kuitansi</option>
                                    <option value="nominatif_kota.php?id=<?php echo $data_surtu['id_pk']; ?>">Nominatif</option>
                                    <option value="riil_kota.php?id=<?php echo $data_surtu['id_pk']; ?>">Rill</option> 
                                
                                </select>
                                
                                </form>
                                <a href="spby_kota.php?id=<?php echo $data_surtu['id_pk']; ?>" class="btn btn-success btn-sm" target="_blank"><i class="fa fa-print"></i> SPBy</a>
                                <a href="kuitansi_kota.php?id=<?php echo $data_surtu['id_pk']; ?>" class="btn btn-warning btn-sm" target="_blank"><i class="fa fa-print"></i> Kwitansi</a>
                                <a href="nominatif_kota.php?id=<?php echo $data_surtu['id_pk']; ?>" class="btn btn-success btn-sm" target="_blank"><i class="fa fa-print"></i> Nominatif</a>
                                <a href="riil_kota.php?id=<?php echo $data_surtu['id_pk']; ?>" class="btn btn-warning btn-sm" target="_blank"><i class="fa fa-print"></i> Riil</a>
                                -->
                                <?php if($status_ptj_kota == 1):?>
                                <a href="index.php?mod=ptj_kota&act=akses&id=<?php echo $data_surtu['id_pk']; ?>&id_pk=<?php echo $data_surtu['id_pk']; ?>" class="btn btn-primary btn-sm">Beri Akses Edit</a>                                
                                <?php endif ?>  

                                <?php if($status_ptj_kota == 2):?>
                                <a href="#" class="btn btn-secondary btn-sm">Sedang diberi Akses Edit</a>
                                <?php endif ?>
                                <!--
                                <a href="index.php?mod=ptj_kota&act=edit&id=<?php echo $data_surtu['id_pk']; ?>" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
                                -->

                                <a href="index.php?mod=ptj_kota&act=hapus&id=<?php echo $data_surtu['id_pk']; ?>&id_pk=<?php echo $data_surtu['id_pk']; ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a> 
                                                            </td>
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
