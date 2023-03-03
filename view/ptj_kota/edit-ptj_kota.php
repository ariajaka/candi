<?php 
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $editsql = "SELECT * FROM ptj_dlm_kota WHERE id_pk = '$id'";
        $dataedit = mysql_query($editsql);
        $edit = mysql_fetch_assoc($dataedit);
    }
?>
<script src="assets/js/jquery.min.js" type="text/javascript"></script>
    
<!-- Load File javascript config.js -->
<script src="assets/js/config.js" type="text/javascript"></script>
<div class="col-lg-12">
<section class="box ">
    <header class="panel_header">
         <h2 class="title pull-left">Edit Pertanggungjawaban dalam Kota &nbsp;
            <a href="index.php?mod=ptj_kota&act=view" class="btn btn-primary">Lihat Daftar Pertanggungjawaban dalam Kota</a>
        </h2>
        <div class="actions panel_actions pull-right">
            <i class="box_toggle fa fa-chevron-down"></i>
            <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
            <i class="box_close fa fa-times"></i>
        </div>
    </header>
    <div class="content-body">    
        <div class="row">
            <form action="sql/ptj_kota/edit.php" method="POST">
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
                        <span class="desc">e.g. "SPP001"</span>
                        <div class="controls">
                            <input type="text" class="form-control" id="formfield1" name="id_pk" value="<?php echo $edit['id_pk'] ?>" readonly="readonly">
                        </div>
                    </div>
                    <!-- ID in Hidden-->
                        <input type="text" name="id" value="<?php echo $edit['id_pk'] ?>" hidden>
                    <!-- ID in Hidden -->
                    <div class="form-group">
                       <label class="form-label" for="formfield3">Id SK</label>
                       <div class="controls">
                            <input type="text" class="form-control" id="formfield1" name="provinsi" value="<?php echo $edit['id_sk'] ?>" readonly="readonly">
                        </div>
                       
                       
                       <!--
                       <?php  
                            $penanda="SELECT a.id_sk from ptj_dlm_kota a INNER JOIN surat_tugas b ON a.id_sk=b.id_sk WHERE id_pk = '$id'";
                            $query = mysql_query($penanda);
                            $penandas = mysql_fetch_assoc($query)or die("Query failed with error: ".mysql_error())
                        ?>
                       <select name="provinsi" id="provinsi" class="form-control">
                            <option value="<?php echo $penandas['id_sk'];?>"><?php echo $penandas['id_sk'];?></option>
                            <?php
                            // Load file koneksi.php
                            include "config/koneksi.php";
                            
                            // Buat query untuk menampilkan semua data siswa
                            $user_login = $_SESSION['username'];
                            $sql = $pdo->prepare("SELECT * FROM surat_tugas WHERE jenis_st = 'dalam_kota_tidak_sppd' AND id_sk NOT IN (SELECT id_sk FROM ptj_dlm_kota) ORDER BY id_sk");
                            $sql->execute(); // Eksekusi querynya
                            
                            while($data = $sql->fetch()){ // Ambil semua data dari hasil eksekusi $sql
                              echo "<option value='".$data['id_sk']."'>".$data['id_sk']."</option>";
                            }
                            ?>
                      </select>
                      -->
                    </div>  
                    <div class="form-group">
                        <label class="form-label" for="formfield6">Petugas</label>
                            <span class="desc pull-right">
                                <a class="btn btn-default btn-sm" onClick="addRow('Nama Petugas')"><i class="fa fa-plus"></i></a>
                                <a class="btn btn-default btn-sm" onClick="deleteRow('Nama Petugas')"><i class="fa fa-trash"></i></a>
                            </span>
                                <table width="100%">
                                    <?php 
                                        $nomor =0;
                                        $sql = "SELECT c.nip, b.id_sk, b.id_pk, c.nama, b.lama_perjadin, b.tarif_per_hari, b.id FROM  ptj_kota b  INNER JOIN pegawai c ON b.nip_ptj_kota=c.nip WHERE b.id_pk='$id'";
                                        $query = mysql_query($sql);
                                        while($data = mysql_fetch_array($query)) {     
                                            $dataidPTJ = $data['id_sk'] ;
                                            $datanipPTJ = $data['nip'] ;
                                            $dataPTJ = $data['nama'] ;
                                            $dataPTJLama_Perjadin = $data['lama_perjadin'] ;
                                            $dataPTJTarif_Per_Hari = $data['tarif_per_hari'] ;
                                        $nomor++;
                                    ?>
                                    <tr>
                                        <td width="95%" border="1" scope="col">
                                            <div align="left"><b><?php echo @$dataPTJ ; echo'|'; echo @$dataPTJLama_Perjadin; echo'|'; echo @$dataPTJTarif_Per_Hari; ?> </b></div>
                                        </td>
                                        <td width="5%">
                                            <a  class="btn btn-default" href='sql/ptj_kota/delete-ptj_kota.php?id=<?php echo $id; ?>&id_auto=<?php echo $datanipPTJ;?>' target='_self' alt='Delete Data'>
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
                                    <td width="55%">
                                        <select name="kota[]" id="kota" class="form-control">
                                            <option value="">Pilih Petugas</option>
                                            <?php
                                            // Buat query untuk menampilkan semua data siswa
                                            $sql = $pdo->prepare("SELECT * FROM surat_tugas INNER JOIN detail_st ON detail_st.id_sk = surat_tugas.id_sk INNER JOIN pegawai ON pegawai.nip=detail_st.petugas_nip WHERE detail_st.id_sk='".$edit['id_sk']."' ORDER BY detail_st.petugas_nip");
                                            $sql->execute(); // Eksekusi querynya
                                            
                                            while($data = $sql->fetch()){ // Ambil semua data dari hasil eksekusi $sql
                                              echo "<option value='".$data['petugas_nip']."'>".$data['nama']."</option>";
                                            }
                                            ?>
                                        </select>
                                    <td width="15%">
                                        <input type="text" class="form-control" id="formfield3" name="jumlah_hari[]" placeholder="Jumlah Hari">
                                    </td>
                                    <td width="20%">
                                        <input type="text" class="form-control" id="formfield3" name="tarif_per_hari[]" placeholder="Tarif Per Hari">
                                    </td>
                                </tr>
                                </tbody>
                                </table>
                    </div>  
                    <div class="form-group">
                        <label class="form-label" for="formfield6">PPK Penandatangan</label>
                        <?php  
                            $pustak= "select * FROM ptj_dlm_kota a INNER JOIN pegawai b ON a.nip_ppk=b.nip WHERE id_pk='$id'";
                            $query = mysql_query($pustak)or die("Query failed with error: ".mysql_error());
                            $pustaka = mysql_fetch_assoc($query)
                        ?>
                        <select name="cmbpenandatanganPPK" id="cmbpenandatanganPPK" class="form-control">
                            <option selected="selected"  value="<?php echo $pustaka['nip'];?>"><?php echo $pustaka['nama'];?>
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
                        <?php  
                            $pustak1= "select * FROM ptj_dlm_kota a INNER JOIN pegawai b ON a.nip_pj=b.nip WHERE id_pk='$id'";
                            $query1 = mysql_query($pustak1)or die("Query failed with error: ".mysql_error());
                            $pustaka1 = mysql_fetch_assoc($query1)
                        ?>
                        <select name="cmb_pj_kegiatan" id="cmb_pj_kegiatan" class="form-control">
                            <option selected="selected"  value="<?php echo $pustaka1['nip'];?>"><?php echo $pustaka1['nama'];?>
                            <?php
                                $sql1 = mysql_query("SELECT * FROM pegawai WHERE level=1 OR level=2 OR jabatan LIKE '%PPK' ORDER BY nama");
                                if(mysql_num_rows($sql1) != 0){
                                    while($row1 = mysql_fetch_assoc($sql1)) {
                                        echo "<option value='$row1[nip]'>$row1[nama]</option>";
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
