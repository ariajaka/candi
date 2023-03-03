<!-- START CONTENT -->
<section id="main-content" class=" ">
    <section class="wrapper main-wrapper" style=''>
        <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
            <div class="page-title">
                <div class="pull-left">
                    <?php
                    /*cek data user*/
                    $jumlahkan = "SELECT SUM(pagu) AS total FROM anggaran";
                    $hasil = mysql_query($jumlahkan);
                    $t = mysql_fetch_array($hasil);
                    $jml_total_pagu = number_format($t['total'], 0, ",", ".");
                    /*cek data user*/
                    ?>

                    <h1 class="title">Anggaran <div class="btn btn-danger"> Rp.<?= $jml_total_pagu; ?> </div>

                    </h1>
                    <a href="index.php?mod=anggaran&act=hapus" class="btn btn-danger" role="button">Kosongkan Anggaran</a>
                    <!-- <a href="#" class="btn btn-warning active" role="button">Export File Excell</a> -->
                    <a href="index.php?mod=anggaran&act=import" class="btn btn-success" role="button">Import File Excell</a>
                    <div class="btn btn-warning">
                        <?php
                        $anggaran = "SELECT DISTINCT tanggal_revisi FROM anggaran";
                        $anggaran_sql = mysql_query($anggaran);
                        $data_anggaran = mysql_fetch_array($anggaran_sql);

                        $tgl_revisi = $data_anggaran['tanggal_revisi'];
                        $bulan =  substr($tgl_revisi, 5, 2);
                        if ($bulan == '1' or $bulan == '01') {
                            $sebut = 'Januari';
                        } elseif ($bulan == '2' or $bulan == '02') {
                            $sebut = 'Februari';
                        } elseif ($bulan == '3' or $bulan == '03') {
                            $sebut = 'Maret';
                        } elseif ($bulan == '4' or $bulan == '04') {
                            $sebut = 'April';
                        } elseif ($bulan == '5' or $bulan == '05') {
                            $sebut = 'Mei';
                        } elseif ($bulan == '6' or $bulan == '06') {
                            $sebut = 'Juni';
                        } elseif ($bulan == '7' or $bulan == '07') {
                            $sebut = 'Juli';
                        } elseif ($bulan == '8' or $bulan == '08') {
                            $sebut = 'Agustus';
                        } elseif ($bulan == '9' or $bulan == '09') {
                            $sebut = 'September';
                        } elseif ($bulan == '10' or $bulan == '10') {
                            $sebut = 'Oktober';
                        } elseif ($bulan == '11' or $bulan == '11') {
                            $sebut = 'November';
                        } elseif ($bulan == '12' or $bulan == '12') {
                            $sebut = 'Desember';
                        };

                        if ($tgl_revisi != 0) {
                            echo 'Tanggal Import ' . substr($tgl_revisi, 8, 2) . ' ' . $sebut . ' ' . substr($tgl_revisi, 0, 4) . '';
                        } else {
                            echo 'Tidak ada data anggaran';
                        }
                        ?>
                    </div>
                </div>

            </div>
        </div>
        <div class="clearfix"></div>

        <?php include('function/anggaran-loader.php') ?>
        <div class="row" hidden>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="r1_maingraph db_box">
                    <span class='pull-left'>
                        <i class='icon-purple fa fa-square icon-xs'></i>&nbsp;<small>PAGE VIEWS</small>&nbsp; &nbsp;<i class='fa fa-square icon-xs icon-primary'></i>&nbsp;<small>UNIQUE VISITORS</small>
                    </span>
                    <div id="db_morris_area_graph" style="height:272px;width:100%;"></div>
                </div>
            </div>
        </div> <!-- End .row -->





        </div>
    </section>
    </div>
</section>
</section>
<!-- END CONTENT -->