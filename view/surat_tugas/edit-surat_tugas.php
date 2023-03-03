
<?php 
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $editsql = "SELECT * FROM surat_tugas WHERE id_sk = '$id'";
        $dataedit = mysql_query($editsql);
        $edit = mysql_fetch_assoc($dataedit);
    }
 ?>
 <link rel="stylesheet" href="assets/js/jquery-ui-1.12.1/jquery-ui.css">
 <script src="assets/js/jquery-ui-1.12.1/external/jquery/jquery.js"></script> <!-- untuk link ini bisa download di https://jqueryui.com/ -->
    <script src="assets/js/jquery-ui-1.12.1/jquery-ui.js"></script> <!-- untuk link ini bisa download di https://jqueryui.com/ -->
    <script type="text/javascript">
        $(document).ready(function(){
            $("#id").autocomplete({
                minLength:1,
                source:'get_pro.php',
                select:function(event, ui){
                    $('#id').html(ui.item.name);
                }
            });
        });
    </script>
<div class="col-lg-12">
<section class="box ">
    <header class="panel_header">
         <h2 class="title pull-left">Edit Surat Tugas &nbsp;
            <a href="index.php?mod=surat_tugas&act=view" class="btn btn-primary">Lihat Daftar Surat Tugas</a>
        </h2>
        <div class="actions panel_actions pull-right">
            <i class="box_toggle fa fa-chevron-down"></i>
            <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
            <i class="box_close fa fa-times"></i>
        </div>
    </header>
    <div class="content-body">    
        <div class="row">
            <form action="sql/surat_tugas/edit.php" method="POST">
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
                        <label class="form-label" for="formfield1">Id Surat Keluar</label>
                        <span class="desc">e.g. "0001"</span>
                        <div class="controls">
                            <input type="text" class="form-control" id="formfield1" name="id_sk" value="<?php echo $edit['id_sk'] ?>">
                        </div>
                    </div> 
                     <!-- ID in Hidden-->
                        <input type="text" name="id" value="<?php echo $edit['id_sk'] ?>" hidden>
                    <!-- ID in Hidden -->  
                    <div class="form-group">
                        <label class="form-label" for="formfield4">Nomor Awal Surat</label>
                        <span class="desc">e.g. "KU.01.04.08.88.01.19."</span>
                        <div class="controls">
                            <input type="text" class="form-control" id="formfield4" name="kepala_st" value="<?php echo $edit['kepala_st']?>">
                        </div>
                    </div>
                    <div class="form-group">
                            <label class="form-label" for="formfield4">Menimbang</label>
                            <span class="desc pull-right">
                                <a class="btn btn-default btn-sm" onClick="addRow('Menimbang')"><i class="fa fa-plus"></i></a>
                                <a class="btn btn-default btn-sm" onClick="deleteRow('Menimbang')"><i class="fa fa-trash"></i></a>
                            </span>
                            <table width="100%">
                            <?php 
                              $nomor =0;
                              $sql = "SELECT * from detail_st_menimbang WHERE id_sk='$id'";
                              $query = mysql_query($sql);
                                while($data = mysql_fetch_array($query)) {     
                                    $dataMenimbang = $data['menimbang'] ;
                                $nomor++;
                            ?>
                                   <tr>
                                     <td width="95%" border="1" scope="col">
                                        <div align="left"><b><?php echo $dataMenimbang;?> </b></div>
                                     </td>
                                     <td width="5%">
                                        <a  class="btn btn-default" href='sql/surat_tugas/delete-menimbang.php?id=<?php echo $id; ?>' target='_self' alt='Delete Data'>
                                        <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                    </tr>
                             <?php } ?>
                            </table>
                            <table id="Menimbang" width="100%" border="0">
                                <tbody>
                                    <tr>
                                        <td width="5%"><input type="checkbox" name="chk"></td>
                                        <td width="95%">
                                            <textarea class="form-control" name="menimbang[]"></textarea>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="formfield4">Dasar</label>
                            <span class="desc pull-right">
                                <a class="btn btn-default btn-sm" onClick="addRow('Dasar')"><i class="fa fa-plus"></i></a>
                                <a class="btn btn-default btn-sm" onClick="deleteRow('Dasar')"><i class="fa fa-trash"></i></a>
                            </span>
                            <table width="100%">
                            <?php 
                              $nomor =0;
                              $sql = "SELECT * from detail_st_dasar WHERE id_sk='$id'";
                              $query = mysql_query($sql);
                                while($data = mysql_fetch_array($query)) {     
                                    $dataDasar = $data['dasar'] ;
                                $nomor++;
                            ?>
                                   <tr>
                                     <td width="95%" border="1" scope="col">
                                        <div align="left"><b><?php echo $dataDasar;?> </b></div>
                                     </td>
                                     <td width="5%">
                                        <a  class="btn btn-default" href='sql/surat_tugas/delete-dasar.php?id=<?php echo $id; ?>' target='_self' alt='Delete Data'>
                                        <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                    </tr>
                             <?php } ?>
                            </table>
                            <table id="Dasar" width="100%" border="0">
                                <tbody>
                                    <tr>
                                        <td width="5%"><input type="checkbox" name="chk"></td>
                                        <td width="95%">
                                            <textarea class="form-control" name="dasar[]"></textarea>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    <div class="form-group">
                      <label class="form-label" for="formfield3">Jenis Surat Tugas</label>
                      <select name="cmb_jenis_st" id="cmb_jenis_st" class="form-control" onchange="changeValue(this.value)">
                        <option value="<?php echo $edit['jenis_st'];?>"><?php echo $edit['jenis_st'];?>
                        <?php 
                          $result = mysql_query("select * from jenis_st");   
                          if(mysql_num_rows($result) != 0)
                          {
                            $jsArray = "var dtBrg = new Array();\n"; 

                            while ($row = mysql_fetch_array($result)) {    
                            echo '<option value="' . $row['jenis_st'] . '">' . $row['jenis_st'] . '</option>';    
                            $jsArray .= "dtBrg['" . $row['jenis_st'] . "'] = {status_sppd:'" . addslashes($row['status_st']) . "'};\n";}      
                          }
                        ?>
                          </option>
                      </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="formfield6">MAK</label>
                        <div class="controls">
                            <?php
                                  $user = "SELECT * FROM detail_st_anggaran WHERE id_sk='$id' AND anggaran = 'DIPA Balai POM di Jambi' ";
                                  $user_sql = mysql_query($user);
                                  $data_user = mysql_fetch_array($user_sql);
                                  $data_dipa = $data_user['mak'];
                                ?>
   
                            <input type="text" id="id" name="mak" placeholder="MAK" class="form-control" value="<?= $data_dipa; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="formfield6">DIPA PUSAT ?</label>
                        <table id="Nama Anggaran2" width="100%" border="0">
                          <tbody>      
                            <tr>
                                <td width="5%">
                                <?php
                                  $user = "SELECT count(*) FROM detail_st_anggaran WHERE id_sk='$id' AND anggaran = 'DIPA Pusat' ";
                                  $user_sql = mysql_query($user);
                                  $data_user = mysql_fetch_array($user_sql);
                                  $jml_user = $data_user[0];
                                ?>
   
                                        <input type="radio" name="dipa_pusat" value="Ya"     
                                        <?php                             
                                            if($jml_user >= 1)
                                            {
                                                echo 'checked';
                                            }
                                
                                        ?>> Ya
                                </td>
                            </tr>
                            <tr>
                                <td width="5%">
                                        <input type="radio" name="dipa_pusat" value="Tidak"     
                               <?php
                              
                                            if($jml_user == 0)
                                            {
                                                echo 'checked';
                                            }
                                
                                ?>> Tidak
                                </td>
                               
                            </tr>
                          </tbody>
                        </table> 
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="formfield4">Tujuan Tugas</label>
                        <select name="tujuan_tugas" class="form-control">
                            <option value="<?php echo $edit['tujuan_st']; ?>"><?php echo $edit['tujuan_st']; ?></option>
                            <option value="Kota Jambi">Kota Jambi</option>
                            <option value="Kab. Bungo">Kab. Bungo</option>
                            <option value="Kab. Batanghari">Kab. Batanghari</option>
                            <option value="Kab. Muaro Jambi">Kab. Muaro Jambi</option>
                            <option value="Kab. Tanjung Jabung Barat">Kab. Tanjung Jabung Barat</option>
                            <option value="Kab. Tanjung Jabung Timur">Kab. Tanjung Jabung Timur</option>
                            <option value="Kab. Tebo">Kab. Tebo</option>
                            <option value="Kab. Merangin">Kab. Merangin</option>
                            <option value="Kab. Bangko">Kab. Bangko</option>
                            <option value="Kab. Sarolangun">Kab. Sarolangun</option>
                            <option value="Kab. Kerinci">Kab. Kerinci</option>
                            <option value="Kota Sungai Penuh">Kota Sungai Penuh</option>
                            <option value="DKI. Jakarta">DKI. Jakarta</option>
                            <option value="Jawa Barat">Jawa Barat</option>
                            <option value="Jawa Timur">Jawa Timur</option>
                            <option value="Jawa Tengah">Jawa Tengah</option>
                            <option value="Banten">Banten</option>
                            <option value="DI. Yogyakarta">DI. Yogyakarta</option>
                            <option value="Bali">Bali</option>
                            <option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
                            <option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>
                            <option value="DI. Aceh">DI. Aceh</option>
                            <option value="Sumatera Utara">Sumatera Utara</option>
                            <option value="Sumatera Barat">Sumatera Barat</option>
                            <option value="Riau">Riau</option>
                            <option value="Kep. Riau">Kep. Riau</option>
                            <option value="Bengkulu">Bengkulu</option>
                            <option value="Bangka Belitung">Bangka Belitung</option>
                            <option value="Lampung">Lampung</option>
                            <option value="Kalimantan Utara">Kalimantan Utara</option>
                            <option value="Kalimantan Selatan">Kalimantan Selatan</option>
                            <option value="Kalimantan Timur">Kalimantan Timur</option>
                            <option value="Kalimantan Barat">Kalimantan Barat</option>
                            <option value="Sulawesi Tengah">Kalimantan Tengah</option>
                            <option value="Sulawesi Utara">Sulawesi Utara</option>
                            <option value="Kalimantan Selatan">Sulawesi Selatan</option>
                            <option value="Gorontalo">Gorontalo</option>
                            <option value="Sulawesi Tengah">Sulawesi Tengah</option>
                            <option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
                            <option value="Maluku">Maluku</option>
                            <option value="Maluku Utara">Maluku Utara</option>
                            <option value="Papua">Papua</option>
                            <option value="Papua Barat">Papua Barat</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="formfield3">Tempat Tugas</label>
                        <span class="desc">e.g. "Hotel Dakota"</span>
                        <div class="controls">
                            <input type="text" class="form-control" id="formfield4" name="tempat_tugas" value="<?php echo $edit['tempat_st'] ?>">
                        </div>
                    </div>     
                    <div class="form-group">
                        <label class="form-label" for="formfield3">Kegiatan</label>
                        <span class="desc">e.g. "Pengawasan Sarana"</span>
                        <div class="controls">
                            <input type="text" class="form-control" id="formfield4" name="kegiatan" value="<?php echo $edit['kegiatan'] ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="tanggal_berangkat">Tanggal Berangkat</label>
                        <input type="text" class="form-control" id="tanggalberangkat" name="tanggal_berangkat" value="<?php echo $edit['tgl_berangkat'] ?>">
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="tanggal_kembali">Tanggal Kembali</label>
                        <input type="text" class="form-control" id="tanggalkembali" name="tanggal_kembali" value="<?php echo $edit['tgl_kembali'] ?>">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="jumlah_hari">Jumlah Hari</label>
                        <input type="text" class="form-control" id="jumlah_hari" name="jumlah_hari" value="<?php echo $edit['jumlah_hari'] ?>">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="kendaraan">Kendaraan</label>
                        <input type="text" class="form-control" id="kendaraan" name="kendaraan" value="<?php echo $edit['kendaraan'] ?>">
                    </div>       
                    <div class="form-group">
                        <label class="form-label" for="formfield5">Tanggal Surat Tugas</label>
                        <div class="controls">
                            <input type="text" class="form-control tanggalsurtu" id="tanggal_surat_tugas" name="tanggal_surat_tugas" value="<?php echo $edit['tgl_st'] ?>">
                        </div>
                    </div>     
                   
                    <div class="form-group">
                        <label class="form-label" for="formfield4">Nama Petugas</label>
                        <span class="desc pull-right">
                            <a class="btn btn-default btn-sm" onClick="addRow('Nama Petugas')"><i class="fa fa-plus"></i></a>
                            <a class="btn btn-default btn-sm" onClick="deleteRow('Nama Petugas')"><i class="fa fa-trash"></i></a>
                        </span>
                        <table width="100%">
                            <?php 
                              $nomor =0;
                              $sql = "SELECT a.nama, a.nip from pegawai a INNER JOIN detail_st b ON a.nip = b.petugas_nip WHERE id_sk='$id'";
                              $query = mysql_query($sql);
                                while($data = mysql_fetch_array($query)) {     
                                    $dataDasar = $data['nama'] ;
                                $nomor++;
                            ?>
                                   <tr>
                                     <td width="95%" border="1" scope="col">
                                        <div align="left"><b><?php echo $dataDasar ;?> </b></div>
                                     </td>
                                     <td width="5%">
                                        <a  class="btn btn-default" href='sql/surat_tugas/delete-petugas.php?id=<?php echo $id; ?>&nip=<?php echo $data['nip'];?>' target='_self' alt='Delete Data'>
                                        <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                    </tr>
                             <?php } ?>
                        </table>
                        <table id="Nama Petugas" width="100%" border="0">
                            <tbody>
                                <tr>
                                    <td width="5%"><input type="checkbox" name="chk"></td>
                                    <td width="95%">
                                    <select name="cmbPetugas[]" id="cmbPetugas" class="form-control">
                                        <option disabled="disabled" selected="selected"  value="0">Pilih Petugas
                                        <?php 
                                            $sql = mysql_query("SELECT * FROM pegawai ORDER BY nama");
                                            if(mysql_num_rows($sql) != 0){
                                                while($row = mysql_fetch_assoc($sql)) {
                                            echo "<option value='$row[nip]'>$row[nama]</option>";
                                            }
                                        }
                                        ?>
                                        </option> 
                                    </select>
                                    </td>
                                </tr>
                            </tbody>
                        </table>         
                    </div>
                     <div class="form-group">
                        <label class="form-label" for="formfield6">Penandatangan</label>
                        <?php  
                            $pustak= "select * FROM surat_tugas a INNER JOIN pegawai b ON a.penandatangan=b.nip WHERE id_sk='$id'";
                            $query = mysql_query($pustak)or die("Query failed with error: ".mysql_error());
                            $pustaka = mysql_fetch_assoc($query)
                        ?>
                        <select name="cmbpenandatangan" id="cmbpenandatangan" class="form-control">
                            <option value="<?php echo $pustaka['nip'];?>"><?php echo $pustaka['nama'];?>
                            <?php
                                $sql = mysql_query("SELECT * FROM pegawai WHERE level=1 OR level=2 ORDER BY nama");
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
                        <label class="form-label" for="formfield4">Status Surat Tugas</label>
                        <div class="controls">
                            <input type="text" class="form-control" id="status_sppd" name="status_sppd" value="<?php echo $edit['status'] ?>">
                        </div>   
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
<script type="text/javascript">    
    <?php echo $jsArray; ?>  
    function changeValue(cmb_jenis_st){  
    document.getElementById('status_sppd').value = dtBrg[cmb_jenis_st].status_sppd;
    };  
</script> 