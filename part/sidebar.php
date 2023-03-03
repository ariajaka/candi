
<!-- SIDEBAR - START -->
            <div class="page-sidebar ">
                <!-- MAIN MENU - START -->
                <div class="page-sidebar-wrapper" id="main-menu-wrapper"> 
                    <!-- USER INFO - START -->
                    <div class="profile-info row">
                        <div class="profile-image col-md-4 col-sm-4 col-xs-4">
                            <a>
                                <img src="assets/images/user.png" class="img-responsive img-circle">
                            </a>
                        </div>
                        <div class="profile-details col-md-8 col-sm-8 col-xs-8">
                            <h3>
                                <a href="ui-profile.html">Hallo</a>
                                <!-- Available statuses: online, idle, busy, away and offline -->
                                <span class="profile-status online"></span>
                            </h3>
                            <p class="profile-title">
                            <?php include('config/config.php');
						   $nama = $_SESSION['username'];
						   $cari = mysql_query("SELECT * FROM pegawai WHERE nip='$nama'");
						   $data = mysql_fetch_assoc($cari); 
						   echo $data['nama'];
						   ?>  </p>
                        </div>
                    </div>
                    <!-- USER INFO - END -->
                    
                    <ul class='wraplist'>	
                        <li
                        <?php if (isset($_GET['mod'])) {
                            $mod = $_GET['mod'];
                            if ($mod == 'dashboard') {
                                echo "class='open'";
                            }
                        } ?>
                        > 
                            <a href="index.php">
                                <i class="fa fa-dashboard"></i>
                                <span class="title">Home</span>
                            </a>
                        </li>
                        <li 
                        <?php if (isset($_GET['mod'])) {
                            $mod = $_GET['mod'];
                            if ($mod == 'surat_tugas') {
                                echo "class='open'";
                            }
                        } ?>
                        > 
                            <a href="index.php?mod=surat_tugas&act=view">
                                <i class="fa fa-inbox"></i>
                                <span class="title">Surat Tugas</span>
                            </a>
                        </li>
                        <li 
                        <?php if (isset($_GET['mod'])) {
                            $mod = $_GET['mod'];
                            if ($mod == 'sppd') {
                                echo "class='open'";
                            }
                        } ?>
                        > 
                            <a href="index.php?mod=sppd&act=view">
                                <i class="fa fa-inbox"></i>
                                <span class="title">SPPD</span>
                            </a>
                        </li>   
                        <li
                            <?php if (isset($_GET['mod'])) {
                                $mod = $_GET['mod'];
                                if ($mod == 'ptj') {
                                    echo "class='open'";
                                }
                            } ?>
                        > 
                            <a href="javascript:;">
                                <i class="fa fa-envelope"></i>
                                <span class="title">Pertanggungjawaban</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="fa fa-envelope" href="index.php?mod=ptj_kota&view=ptj_kota" > Pertanggungjawaban Dalam Kota</a></i>
                                </li>
                                <li>
                                    <a class="fa fa-envelope" href="index.php?mod=ptj_luar_kota&view=ptj_luar_kota" > Pertanggungjawaban Luar Kota</a></i>
                                </li>

                           </ul>
                        </li>  
                        <li
                            <?php if (isset($_GET['mod'])) {
                                $mod = $_GET['mod'];
                                if ($mod == 'laporan') {
                                    echo "class='open'";
                                }
                            } ?>
                        > 
                            <a href="javascript:;">
                                <i class="fa fa-envelope"></i>
                                <span class="title">Laporan</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="fa fa-envelope" href="index.php?mod=laporan_realisasi&view=laporan_realisasi" > Laporan Realisasi</a></i>
                                </li>
                           </ul>
                        </li>                    
                    </ul>

                </div>
                <!-- MAIN MENU - END -->
                <div class="project-info">

                    <div style="color:white;padding:10px 10px 10px 10px;">
                        <center>Aria Jaka | Copyright &copy; <?= date('Y') ?></center>
                    </div>
                    <div class="block1" style="display: none;">
                        <div class="data">
                            <span class='title'>Total Tamu</span>
                            <span class='total'>245</span>
                        </div>
                        <div class="graph">
                            <span class="sidebar_orders">...</span>
                        </div>
                    </div>

                    <div class="block2" style="display: none;">
                        <div class="data">
                            <span class='title'>Total Kritik</span>
                            <span class='total'>990</span>
                        </div>
                        <div class="graph">
                            <span class="sidebar_visitors">...</span>
                        </div>
                    </div>
                </div>
            </div>
            <!--  SIDEBAR - END -->