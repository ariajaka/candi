<!-- START CONTENT -->
<section id="main-content" class=" ">
    <section class="wrapper main-wrapper" style=''>
        <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
            <div class="page-title">
                <div class="pull-left">
                    <h1 class="title">Laporan Realisasi Sampai Dengan Tanggal <?= date("d-m-Y"); ?> </h1>                            
                </div>
            </div>
        </div>
        <form action="sql/laporan_realisasi.php" method="POST" target="_blank">
        

        <div class="col-md-12">
            <input type="submit" name="cetak" class="btn btn-primary" value="Cetak Laporan"></input>
        </div>
 </form>

        <div class="clearfix"></div>

        <?php include ('function/laporan-realisasi-loader.php') ?>

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
            </section></div>
    </section>
</section>
<!-- END CONTENT -->
