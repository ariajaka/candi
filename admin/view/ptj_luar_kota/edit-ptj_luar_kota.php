<?php 
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $editsql = "SELECT * FROM ptj_luar_kota a INNER JOIN detail_ptj_luar b ON a.id_pl=b.id_pl  INNER JOIN pegawai c ON a.nip_petugas_pl= c.nip WHERE a.id_pl = '$id'";
        $dataedit = mysql_query($editsql);
        $edit = mysql_fetch_assoc($dataedit);
    }
?>
<script src="assets/js/jquery.min.js" type="text/javascript"></script>
    
<!-- Load File javascript config.js -->
<script src="assets/js/config1.js" type="text/javascript"></script>
<div class="col-lg-12">
<section class="box ">
    <header class="panel_header">
         <h2 class="title pull-left">Edit Pertanggungjawaban Luar Kota &nbsp;
            <a href="index.php?mod=ptj_luar_kota&act=view" class="btn btn-primary">Lihat Daftar Pertanggungjawaban Luar Kota</a>
        </h2>
        <div class="actions panel_actions pull-right">
            <i class="box_toggle fa fa-chevron-down"></i>
            <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
            <i class="box_close fa fa-times"></i>
        </div>
    </header>
    <div class="content-body">    
        <div class="row">
            <form action="sql/ptj_luar_kota/edit.php" method="POST">
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
                        <label class="form-label" for="formfield1">Id PL</label>
                        <span class="desc">e.g. "SPP001"</span>
                        <div class="controls">
                            <input type="text" class="form-control" id="formfield1" name="id_pl" value="<?php echo $edit['id_pl'] ?>" readonly="readonly">
                        </div>
                    </div>
                    <!-- ID in Hidden-->
                        <input type="text" name="id" value="<?php echo $edit['id_pl'] ?>" hidden>
                    <!-- ID in Hidden -->
                    <div class="form-group">
                       <label class="form-label" for="formfield3">No SPPD</label>
                       <select name="provinsi" id="provinsi" class="form-control" readonly>
                            <option value="<?php echo $edit['no_sppd'];?>"><?php echo $edit['no_sppd'];?>
                      </select>
                    </div>  
                    <!-- ID in Hidden-->
                        <input type="text" name="id_sk" value="<?php echo $edit['id_sk'] ?>" hidden>
                    <!-- ID in Hidden -->
                    <div class="form-group">
                        <label class="form-label" for="formfield6">Petugas</label>
                            <select name="kota" id="kota" class="form-control" readonly>
                                <option value="<?php echo $edit['nip_petugas_pl'] ?>"><?php echo $edit['nama'] ?></option>
                            </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="formfield6">Uang Muka</label>
                        <input type="text" class="form-control" id="formfield3" name="uang_muka" value="<?php echo $edit['uang_muka'] ?>">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="formfield6">Rincian</label>
                            <span class="desc pull-right">
                                 <a class="btn btn-default btn-sm" onClick="addRow('Rincian')"><i class="fa fa-plus"></i></a>
                                <a class="btn btn-default btn-sm" onClick="deleteRow('Rincian')"><i class="fa fa-trash"></i></a>
                            </span>
                                <table width="100%">
                                    <?php 
                                        $nomor =0;
                                        $sql = "SELECT * FROM ptj_luar_kota a INNER JOIN detail_ptj_luar b ON a.id_pl=b.id_pl WHERE b.id_pl='$id'";
                                        $query = mysql_query($sql);
                                        while($data = mysql_fetch_array($query)) {     
                                            $dataUraian = $data['uraian'] ;
                                            $dataDetailKwitansi = $data['detail_kwitansi'] ;
                                            $dataRiil = $data['riil'] ;
                                        $nomor++;
                                    ?>
                                    <tr>
                                        <td width="95%" border="1" scope="col">
                                            <div align="left"><b><?php echo @$dataUraian ; echo'|'; echo @$dataDetailKwitansi; echo'|'; echo @$dataRiil; ?> </b></div>
                                        </td>
                                        <td width="5%">
                                            <a  class="btn btn-default" href='sql/ptj_luar_kota/delete-ptj_luar_kota.php?id=<?php echo $id; ?>&id_auto=<?php echo $data['id'];?>' target='_self' alt='Delete Data'>
                                            <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </table>
                                <table id="Rincian" width="100%" border="0">
                                <tbody>
                                <tr>
                                    <td width="5%"><input type="checkbox" name="chk"></td>
                                    <td width="60%">
                                        <input type="text" class="form-control" id="formfield3" name="uraian[]" placeholder="Uraian" >
                                    </td>
                                    <td width="15%">
                                        <input type="text" class="form-control" id="formfield3" name="detail_kwitansi[]" placeholder="Detail Kwitansi"  >
                                    </td>
                                    <td width="20%">
                                    <select name="riil[]" id="riil" class="form-control">
                                        <option value="">Pilih Keterangan Riil</option>
                                        <option value="Ya">Ya</option>
                                        <option value="Tidak">Tidak</option>
                                    </select>
                                    </td>
                                </tr>
                                </tbody>
                                </table>
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
