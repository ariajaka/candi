<div class="col-lg-12">
<section class="box ">
    <header class="panel_header">
        <h2 class="title pull-left">Pertanggungjawaban Luar Kota</h2>
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
                            <th>No SPPD</th>
                            <th>Nama Pegawai</th>
                            <!-- <th>Uraian</th> -->
                            <!-- <th>Detail per Uraian</th> -->
                            <th>Jumlah Kwitansi</th>
                            <!-- <th>Uang Muka</th> -->
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>No SPPD</th>
                            <th>Nama Pegawai</th>
                            <!-- <th>Uraian</th> -->
                            <!-- <th>Detail per Uraian</th> -->
                            <th>Jumlah Kwitansi</th>
                            <!-- <th>Uang Muka</th> -->
                            <th>Action</th>
                        </tr>
                    </tfoot>

                    <tbody>
                    <?php 
                        include ('sql/ptj_luar_kota/view.php');
						$no = 0;
                        while ($data_surtu = mysql_fetch_assoc($surtu)) {
							$no_sppd = $data_surtu['no_sppd'];
                            $id_pl = $data_surtu['id_pl'];
                            $status_ptj_luar_kota = $data_surtu['status_ptj_luar_kota'];
							$no++;
                    ?>
                        <tr>
                        	<td><?php echo $no; ?></td>
                            <td><?php echo $data_surtu['no_sppd']; ?></td>
                            <td><?php 
                                    $sql="SELECT * from ptj_luar_kota a INNER JOIN pegawai b ON a.nip_petugas_pl=b.nip where a.id_pl='$id_pl'"; 
                                    $query = mysql_query($sql);
                                    while ($data1= mysql_fetch_array($query)){
                                        echo $data1['nama']; echo '<br>';
                                    }
                                ?>
                            </td>
                            <!-- <td><?php 
                                    $sql="SELECT * from detail_ptj_luar where id_pl='$id_pl'"; 
                                    $query = mysql_query($sql);
                                    while ($data1= mysql_fetch_array($query)){
                                        if ($data1['uraian'] !=''){
                                        echo $data1['uraian']; echo '<br>';
                                        }
                                    }
                                ?>   
                            </td> -->
                            <!-- <td><?php 
                                    $sql="SELECT * from detail_ptj_luar WHERE id_pl='$id_pl'"; 
                                    $query = mysql_query($sql);
                                    while ($data1= mysql_fetch_array($query)){
                                        if ($data1['detail_kwitansi'] !=0){
                                        echo $data1['detail_kwitansi']; echo '<br>';
                                        }
                                    }
                                ?>      
                            </td> -->
                            <td><?php 
                                $nominal_tarif = number_format($data_surtu['kwitansi'],0,",",".");
                                    if ($nominal_tarif !=0)
                                    {
                                            echo 'Rp. '.$nominal_tarif; 
                                    }
                                ?>       
                            </td>
                            <!-- <td><?php echo $data_surtu['uang_muka']; ?></td> -->
                            <td>
                                <form name="myForm" action="" method="post">
                                
                                <select name="cetak" onchange="window.open(this.options[this.selectedIndex].value, '_blank')" class="btn btn-success btn-sm">
                                
                                    <option disabled="disabled" selected="selected"  value="0">Cetak</option>
                                    <option value="cetak/luar_kota/spby_luar_kota.php?id=<?php echo $data_surtu['id_pl']; ?>">SPBy</option>
                                    <option value="cetak/luar_kota/kwitansi_luar_kota_up.php?id=<?php echo $data_surtu['id_pl']; ?>">Kuitansi</option>
                                    <option value="cetak/luar_kota/rincian_luar.php?id=<?php echo $data_surtu['id_pl']; ?>">Rincian</option>
                                    <option value="cetak/luar_kota/riil_luar.php?id=<?php echo $data_surtu['id_pl']; ?>">Rill</option>
                                    <option value="cetak/luar_kota/pernyataan_luar.php?id=<?php echo $data_surtu['id_pl']; ?>">Pernyataan</option> 
                                
                                </select>
                                
                                </form>
                                <?php if($status_ptj_luar_kota == 1):?>
                                 <?= " ";?>
                                <?php endif ?>    
                                    
                                <?php if($status_ptj_luar_kota == 2):?>
                                <a href="index.php?mod=ptj_luar_kota&act=edit&id=<?php echo $data_surtu['id_pl']; ?>" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>
                                <a href="index.php?mod=ptj_luar_kota&act=hapus&id=<?php echo $data_surtu['id_pl']; ?>&id_pl=<?php echo $data_surtu['id_pl']; ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a> 
                                <?php endif ?>
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
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
        </div>
        <div class="modal-body">
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>

<script src="../../assets/js/jquery-3.2.1.min.js"></script>
  <script language="javascript">
        $('body').on('hidden.bs.modal', '.modal', function () {
            $(this).removeData('bs.modal');
        });
    </script>
<script src="../../assets/js/bootstrap.min.js"></script>
