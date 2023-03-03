<div class="col-lg-12">
<section class="box ">
    <header class="panel_header">
        <h2 class="title pull-left">SPPD</h2>
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
                            <th>Jenis Surat Tugas</th>
                            <th>Tujuan Tugas</th>
                            <th>Tempat Tugas</th>
                            <th width="300px">Kegiatan</th>
                            <th>Tgl. Surat tugas</th>
                            <th>Pegawai yang tugas</th>
                            <th>Nomor SPPD</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tfoot>
                        <tr>
                           <th>No</th>
                            <th>ID SK</th>
                            <th>Jenis Surat Tugas</th>
                            <th>Tujuan Tugas</th>
                            <th>Tempat Tugas</th>
                            <th width="300px">Kegiatan</th>
                            <th>Tgl. Surat tugas</th>
                            <th>Pegawai yang tugas</th>
                            <th>Nomor SPPD</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>

                    <tbody>
                    <?php 
                        include ('sql/sppd/view.php');
						$no = 0;
                        while ($data_sppd = mysql_fetch_assoc($sppd)) {
							$id_sk = $data_sppd['id_sk'];
							$no++;
                    ?>
                        <tr>
                        	<td><?php echo $no; ?></td>
                            <td><?php echo $data_sppd['id_sk']; ?></td>
                            <td><?php echo $data_sppd['jenis_st']; ?></td>
                            <td><?php echo $data_sppd['tujuan_st']; ?></td>
                            <td><?php echo $data_sppd['tempat_st']; ?></td>
                            <td width="300px"><?php echo $data_sppd['kegiatan']; ?></td>
                            <td><?php 
                                    $sql="SELECT * from detail_st_sppd a INNER JOIN surat_tugas b ON a.id_sk=b.id_sk WHERE b.id_sk='$id_sk'"; 
                                    $query = mysql_query($sql);
                                    $data1= mysql_fetch_array($query);
                                    $tgl_st = $data1['tgl_st'];
                                $bulan =  substr ($tgl_st, 0,2);
                                if ($bulan == '1' or $bulan == '01') {
                                $sebut = 'Januari';
                                }elseif ($bulan == '2' or $bulan == '02') {
                                $sebut = 'Februari';
                                }elseif ($bulan == '3' or $bulan == '03') {
                                $sebut = 'Maret';
                                }elseif ($bulan == '4' or $bulan == '04') {
                                $sebut = 'April';
                                }elseif ($bulan == '5' or $bulan == '05') {
                                $sebut = 'Mei';
                                }elseif ($bulan == '6' or $bulan == '06') {
                                $sebut = 'Juni';
                                }elseif ($bulan == '7' or $bulan == '07') {
                                $sebut = 'Juli';
                                }elseif ($bulan == '8' or $bulan == '08') {
                                $sebut = 'Agustus';
                                }elseif ($bulan == '9' or $bulan == '09') {
                                $sebut = 'September';
                                }elseif ($bulan == '10' or $bulan == '10') {
                                $sebut = 'Oktober';
                                }elseif ($bulan == '11' or $bulan == '11') {
                                $sebut = 'November';
                                }elseif ($bulan == '12' or $bulan == '12') {
                                $sebut = 'Desember';
                                };
                                echo substr($tgl_st, 3,2).' '.$sebut.' '.substr($tgl_st, 6,4).''; 
                                ?></td>
                            <td>
                                <?php echo $data_sppd['nama']; ?></td>
                            <td><?php echo $data_sppd['no_sppd']; ?></td>
                            <td>
                                <a href="sppd.php?id=<?php echo $data_sppd['no_sppd']; ?>&petugas_nip_sppd=<?php echo $data_sppd['petugas_nip_sppd'] ?>&id_sk=<?php echo $data_sppd['id_sk'] ?>" class="btn btn-success btn-sm" target="_blank"><i class="fa fa-print"></i> 1</a>
                                <a href="sppd2.php?id=<?php echo $data_sppd['no_sppd']; ?>&petugas_nip_sppd=<?php echo $data_sppd['petugas_nip_sppd'] ?>&id_sk=<?php echo $data_sppd['id_sk'] ?>" class="btn btn-warning btn-sm" target="_blank"><i class="fa fa-print"></i> 2</a>
                                
                                <a href="index.php?mod=sppd&act=hapus&id=<?php echo $data_sppd['no_sppd']; ?>&id_sk=<?php echo $data_sppd['id_sk']; ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                
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
