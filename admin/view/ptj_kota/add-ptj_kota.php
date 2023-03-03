<script src="assets/js/jquery.min.js" type="text/javascript"></script>
  
<!-- Load File javascript config.js -->
<script src="assets/js/config.js" type="text/javascript"></script>
 <?php 
  // membuat query max untuk kode barang
  $carikode = mysql_query("select max(id_pk) from ptj_dlm_kota") or die (mysql_error());
  // menjadikannya array
  $datakode = mysql_fetch_array($carikode);
  // jika $datakode
  if ($datakode) {
   // membuat variabel baru untuk mengambil kode barang mulai dari 1
   $nilaikode = substr($datakode[0], 2);
   // menjadikan $nilaikode ( int )
   $kode = (int) $nilaikode;
   // setiap $kode di tambah 1
   $kode = $kode + 1;
   // hasil untuk menambahkan kode 
   // angka 3 untuk menambahkan tiga angka setelah B dan angka 0 angka yang berada di tengah
   // atau angka sebelum $kode
   $hasilkode = "PK".str_pad($kode, 4, "0", STR_PAD_LEFT);
  } else {
   $hasilkode = "PK0001";
  }

 ?>

<div class="col-lg-12">
<section class="box ">
    <header class="panel_header">
         <h2 class="title pull-left">Tambah Pertanggungjawaban dalam Kota &nbsp;
            <a href="index.php?mod=ptj_kota" class="btn btn-primary">Lihat Daftar Pertanggungjawaban dalam Kota</a>
        </h2>
        <div class="actions panel_actions pull-right">
            <i class="box_toggle fa fa-chevron-down"></i>
            <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
            <i class="box_close fa fa-times"></i>
        </div>
    </header>
    <div class="content-body">    
        <div class="row">
            <form action="sql/ptj_kota/add.php" method="POST">
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
                    <div class="form-group">
                        <label class="form-label" for="formfield1">Id PK</label>
                        <span class="desc">e.g. "PK0001"</span>
                        <div class="controls">
                            <input type="text" class="form-control" id="formfield1" name="id_pk" value="<?php echo $hasilkode; ?>" readonly="readonly">
                        </div>
                    </div>       
                    <div class="form-group">
                       <label class="form-label" for="formfield3">Id SK</label>
                       <select name="provinsi" id="provinsi" class="form-control">
                            <option value="">Pilih Surat Keluar</option>
                            <?php
                            // Load file koneksi.php
                            include "../config/koneksi.php";
                            
                            // Buat query untuk menampilkan semua data siswa
                            $sql = $pdo->prepare("SELECT * FROM surat_tugas WHERE jenis_st = 'dalam_kota_tidak_sppd' AND id_sk NOT IN (SELECT id_sk FROM ptj_dlm_kota) ORDER BY id_sk");
                            $sql->execute(); // Eksekusi querynya
                            
                            while($data = $sql->fetch()){ // Ambil semua data dari hasil eksekusi $sql
                              echo "<option value='".$data['id_sk']."'>".$data['id_sk']."</option>";
                            }
                            ?>
                      </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="formfield6">Petugas</label>
                            <span class="desc pull-right">
                                <a class="btn btn-default btn-sm" onClick="addRow('Nama Petugas')"><i class="fa fa-plus"></i></a>
                                <a class="btn btn-default btn-sm" onClick="deleteRow('Nama Petugas')"><i class="fa fa-trash"></i></a>
                            </span>
                            <table id="Nama Petugas" width="100%" border="0">
                                <tbody>
                                <tr>
                                    <td width="5%"><input type="checkbox" name="chk"></td>
                                    <td width="55%">
                                        <select name="kota[]" id="kota" class="form-control" required>
                                            <option value="">Pilih Petugas</option>
                                        </select>
                                            <div id="loading" style="margin-top: 15px;">
                                                <img src="assets/images/loading.gif"> <small>Loading...</small>
                                            </div>   
                                    </td>
                                    <td width="15%">
                                        <input type="text" class="form-control" id="formfield3" name="jumlah_hari[]" placeholder="Jumlah Hari" required>
                                    </td>
                                    <td width="20%">
                                        <input type="text" class="form-control" id="formfield3" name="tarif_per_hari[]" placeholder="Tarif Per Hari" required >
                                    </td>
                                </tr>
                                </tbody>
                        </table>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="formfield6">PPK Penandatangan</label>
                        <select name="cmbpenandatanganPPK" id="cmbpenandatanganPPK" class="form-control">
                            <option disabled="disabled" selected="selected"  value="0">Pilih PPK
                            <?php
                                $sql = mysql_query("SELECT * FROM pegawai WHERE jabatan LIKE '%PPK' ORDER BY nama");
                                if(mysql_num_rows($sql) != 0){
                                    while($row = mysql_fetch_assoc($sql)) {
                                        echo "<option value='$row[nip]'>$row[nama]</option>";
                                    }
                                }
                            ?>
                            </option> 
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="formfield6">Penanggung Jawab Kegiatan</label>
                        <select name="cmb_pj_kegiatan" id="cmb_pj_kegiatan" class="form-control">
                            <option disabled="disabled" selected="selected"  value="0">Pilih Penanggungjawab Kegiatan
                            <?php
                                $sql = mysql_query("SELECT * FROM pegawai WHERE level=1 OR level=2 OR jabatan LIKE '%PPK' ORDER BY nama");
                                if(mysql_num_rows($sql) != 0){
                                    while($row = mysql_fetch_assoc($sql)) {
                                        echo "<option value='$row[nip]'>$row[nama]</option>";
                                    }
                                }
                            ?>
                            </option> 
                        </select>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="pull-right ">
                        <button type="submit" name="save" class="btn btn-success">Save</button>
                        <button type="reset" class="btn">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section></div>