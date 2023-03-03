<div class="col-lg-12">
<section class="box ">
    <header class="panel_header">
        <h2 class="title pull-left">Pegawai BPOM</h2>
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
                            <th>Nama</th>
                            <th width="300px">NIP</th>
                            <th>Pangkat</th>
                            <th>Jabatan</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>NIP</th>
                            <th>Pangkat</th>
                            <th>Jabatan</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>

                    <tbody>
                    <?php 
                        include ('sql/pegawai/view.php');
                        while ($data_pegawai = mysql_fetch_assoc($pegawai)) {
                    ?>
                        <tr>
                            <td><?php echo $data_pegawai['id_pegawai']; ?></td>
                            <td><?php echo $data_pegawai['nama']; ?></td>
                            <td><?php echo $data_pegawai['nip']; ?></td>
                            <td><?php echo $data_pegawai['pangkat']; ?></td>
                            <td><?php echo $data_pegawai['jabatan']; ?></td>
                            <td>
                                <a href="index.php?mod=pegawai&act=edit&id=<?php echo $data_pegawai['id_pegawai']; ?>" class="btn btn-primary btn-sm btn-block"><i class="fa fa-pencil"> Edit</i></a>

                                <a href="index.php?mod=pegawai&act=hapus&id=<?php echo $data_pegawai['id_pegawai']; ?>" class="btn btn-danger btn-sm btn-block"><i class="fa fa-trash"> Hapus</i></a>
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
