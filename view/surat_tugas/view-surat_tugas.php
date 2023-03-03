<div class="col-lg-12">
<section class="box ">
    <header class="panel_header">
        <h2 class="title pull-left">Surat Tugas</h2>
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
                            <th>Nomor Awal Surat</th>
                            <th>ID SK</th>
                            <th>Jenis Surat Tugas</th>
                            <th>Tujuan Tugas</th>
                            <th>Tempat Tugas</th>
                            <th>Kegiatan</th>
                            <th>Tgl. Surat tugas</th>
                            <th>Pegawai yang tugas</th>
                            <th>Nomor SPPD</th>
                            <th>Penandatangan</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nomor Awal Surat</th>
                            <th>ID SK</th>
                            <th>Jenis Surat Tugas</th>
                            <th>Tujuan Tugas</th>
                            <th>Tempat Tugas</th>
                            <th>Kegiatan</th>
                            <th>Tgl. Surat tugas</th>
                            <th>Pegawai yang tugas</th>
                            <th>Nomor SPPD</th>
                            <th>Penandatangan</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>

                    <tbody>
                    <?php 
                        include ('sql/surat_tugas/view.php');
						$no = 0;
                        while ($data_surat_tugas = mysql_fetch_assoc($surat_tugas)) {
							$id_sk = $data_surat_tugas['id_sk'];
                            $jenis_sk= $data_surat_tugas['jenis_sk'];
							$no++;
                    ?>
                        <tr>
                        	<td><?php echo $no; ?></td>
                            <td><?php echo $data_surat_tugas['kepala_st']; ?></td>
                            <td><?php echo $data_surat_tugas['id_sk']; ?></td>
                            <td><?php echo $data_surat_tugas['jenis_st']; ?></td>
                            <td><?php echo $data_surat_tugas['tujuan_st']; ?></td>
                            <td><?php echo $data_surat_tugas['tempat_st']; ?></td>
                            <td><?php echo $data_surat_tugas['kegiatan']; ?></td>
                            <td><?php $tgl_st = $data_surat_tugas['tgl_st'];
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
                                echo substr($tgl_st, 3,2).' '.$sebut.' '.substr($tgl_st, 6,4).''; ?></td>
                            <td><?php 
                                    $sql="SELECT * from surat_tugas a INNER JOIN detail_st b ON a.id_sk=b.id_sk INNER JOIN pegawai c ON b.petugas_nip=c.nip where a.id_sk='$id_sk'"; 
                                    $query = mysql_query($sql);
                                    while ($data1= mysql_fetch_array($query)){
                                        echo $data1['nama']; echo '<br>';
                                    }
                                ?></td>
                            <td><?php 
                                    $sql="SELECT * from surat_tugas a INNER JOIN detail_st_sppd b ON a.id_sk=b.id_sk INNER JOIN pegawai c ON b.petugas_nip_sppd=c.nip where a.id_sk='$id_sk'"; 
                                    $query = mysql_query($sql);
                                    while ($data1= mysql_fetch_array($query)){
                                        echo $data1['no_sppd']; echo '<br>';
                                    }
                                ?></td>
                            <td><?php 
                                    $sql="SELECT * from surat_tugas a INNER JOIN pegawai b ON b.nip=a.penandatangan where a.id_sk='$id_sk'"; 
                                    $query = mysql_query($sql);
                                    while ($data1= mysql_fetch_array($query)){
                                        echo $data1['nama']; 
                                    }
                                ?></td>
                            <td><?php echo $data_surat_tugas['status']; ?></td>

                            <td>
                                <?php
                                $cari = "SELECT * FROM ptj_dlm_kota where id_sk='$id_sk'";
                                $query = mysql_query($cari);
                                $data1= mysql_fetch_array($query);
                                $id_sk_kota = $data1['id_sk'];

                                $cari_dalam = mysql_num_rows($query);
                               

                                $cari2 = "SELECT * FROM ptj_luar_kota where id_sk='$id_sk'";
                                $query2 = mysql_query($cari2);
                                $data2= mysql_fetch_array($query2);
                                $id_sk_luar = $data2['id_sk'];


                                $cari_luar = mysql_num_rows($query2);

                                ?>
                                <a href="surat-tugas.php?id=<?php echo $data_surat_tugas['id_sk']; ?>" class="btn btn-success btn-sm" target="_blank"><i class="fa fa-print"></i> </a>
                                <a href="pdf/surat-tugas.php?id=<?php echo $data_surat_tugas['id_sk']; ?>" class="btn btn-success btn-sm" target="_blank"><i class="fa fa-print"> Format Baru</i> </a>
                                <a href="pdf/surat-tugas1.php?id=<?php echo $data_surat_tugas['id_sk']; ?>" class="btn btn-success btn-sm" target="_blank"><i class="fa fa-print"> Format Baru dengan Kop</i> </a>
                                <?php if($cari_dalam == 0 && $cari_luar == 0):?>
                                
                                <a href="index.php?mod=surat_tugas&act=edit&id=<?php echo $data_surat_tugas['id_sk']; ?>" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>
                                <?php endif ?>
                                <a href="index.php?mod=surat_tugas&act=hapus&id=<?php echo $data_surat_tugas['id_sk']; ?>&idsk=<?php echo $data_surat_tugas['id_sk']; ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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
