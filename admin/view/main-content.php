<!-- START CONTENT -->
<?php include('sql/main/view.php'); ?>
<section id="main-content" class=" ">
    <section class="wrapper main-wrapper" style=''>
        <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
            <div class="page-title">
                <div class="pull-left">
                    <h1 class="title"></h1>
                    <h3 class="title">SISTEM INFORMASI SURAT TUGAS & SPPD</h3>                            
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
       <div class="col-lg-12">
            <section class="box nobox">
                <div class="content-body">
                    <div class="row">
                             
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="r4_counter db_box">
                                    <i class='pull-left fa fa-inbox icon-md icon-rounded icon-success'></i>
                                        <div class="stats">
                                            <h4><strong><?php echo $jml_user; ?></strong></h4>
                                            <span>USER</span>
                                        </div>
                                </div>
                            </div>            
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="r4_counter db_box">
                                    <i class='pull-left fa fa-clipboard icon-md icon-rounded icon-purple'></i>
                                        <div class="stats">
                                            <h4><strong><?php echo $jml_pegawai; ?></strong></h4>
                                            <span>PEGAWAI</span>
                                        </div>
                                </div>
                            </div>         
                             <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="r4_counter db_box">
                                    <i class='pull-left fa fa-envelope icon-md icon-rounded icon-warning'></i>
                                        <div class="stats">
                                            <h4><strong><?php echo $jml_surat_tugas; ?></strong></h4>
                                            <span>SURAT TUGAS</span>
                                        </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="r4_counter db_box">
                                    <i class='pull-left fa fa-users icon-md icon-rounded icon-danger'></i>
                                        <div class="stats">
                                            <h4><strong><?php echo $jml_sppd; ?></strong></h4>
                                            <span>SPPD</span>
                                        </div>
                                </div>
                            </div>                    
                    </div> <!-- End .row -->    



                    <div class="row" style="display: none;">



                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="r1_maingraph db_box">
                                <span class='pull-left'>
                                    <i class='icon-purple fa fa-square icon-xs'></i>&nbsp;<small>PAGE VIEWS</small>&nbsp; &nbsp;<i class='fa fa-square icon-xs icon-primary'></i>&nbsp;<small>UNIQUE VISITORS</small>
                                </span>
                                <div id="db_morris_area_graph" style="height:272px;width:100%;"></div>
                            </div>
                        </div>

                    </div> <!-- End .row -->


                    <div class="row" style="display:none;">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="wid-vectormap">
                                <h4>Visitor's Statistics</h4>
                                <div class="row">
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <figure>
                                            <div id="db-world-map-markers" style="width: 100%; height: 300px"></div>        
                                        </figure>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-12 map_progress">
                                        <h4>Unique Visitors</h4>
                                        <span class='text-muted'><small>Last Week Rise by 62%</small></span>
                                        <div class="progress"><div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width: 62%"></div></div>
                                        <br>
                                        <h4>Registrations</h4>
                                        <span class='text-muted'><small>Up by 57% last 7 days</small></span>
                                        <div class="progress"><div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100" style="width: 57%"></div></div>
                                        <br>
                                        <h4>Direct Sales</h4>
                                        <span class='text-muted'><small>Last Month Rise by 22%</small></span>
                                        <div class="progress"><div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100" style="width: 22%"></div></div>
                                    </div>
                                </div>
                            </div>
                        </div>		


                    </div> <!-- End .row -->

                    <div class="row" style="display: none;">
                        <div class="col-md-6 col-sm-12 col-xs-12">

                            <div class="r1_graph1 db_box db_box_large">
                                <span class='bold'>98.95%</span>
                                <span class='pull-right'><small>SERVER UP</small></span>
                                <div class="clearfix"></div>
                                <span class="db_dynamicbar">Loading...</span>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">

                            <div class="r1_graph2 db_box db_box_large">
                                <span class='bold'>2332</span>
                                <span class='pull-right'><small>USERS ONLINE</small></span>
                                <div class="clearfix"></div>
                                <span class="db_linesparkline">Loading...</span>
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="r3_notification db_box">
                                <h4>Surat Tugas</h4>
                                <?php 
                                    $sql = "SELECT * FROM surat_tugas ORDER BY id_sk DESC LIMIT 10";
                                    $query = mysql_query($sql);
                                    while ($data = mysql_fetch_assoc($query)) {
                                        $id_sk = $data['id_sk'];
                                ?>
                                  
                                <ul class="list-unstyled notification-widget ps-container ps-active-y" style="height: 600px;">
                                    <li class="unread status-available">
                                        <a href="javascript:;">
                                            <div>
                                                <span class="name">
                                                    <strong><?php 
                                                            $tgl_st = $data['tgl_st'];
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
                                                            echo substr($tgl_st, 3,2).' '.$sebut.' '.substr($tgl_st, 6,4).''; ?>    
                                                    </strong><br />
                                                    <span class="time small">- Nomor Surat Tugas : <?php echo $data['id_sk'] ?> </span><br />
                                                    <span class="time small">- Asal : <?php echo $data['tujuan_st'] ?> </span>
                                                    <span class="profile-status available pull-right"></span>
                                                </span>
                                                <span class="desc small">
                                                   - Keperluan : <?php echo $data['kegiatan'] ?>
                                                </span>
                                            </div>
                                        </a>
                                    </li>

                                <?php 
                                    }
                                ?>
                                </ul>
                                <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 3px;"><div class="ps-scrollbar-x" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; height: 315px; right: 3px;"><div class="ps-scrollbar-y" style="top: 0px; height: 134px;"></div></div></ul>

                            </div>
                        </div>
                    </div>
                </div>
            </section></div>
    </section>
</section>
<!-- END CONTENT -->
